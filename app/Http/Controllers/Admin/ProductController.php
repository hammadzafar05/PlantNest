<?php

namespace App\Http\Controllers\Admin;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Productimages;
use App\Models\Discount;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\PlantInfo;
use App\Models\Review;

class ProductController extends Controller
{
    public function index(Request $req)
    {
        // dd($req->mainCat,$req->subCat)
        if($req->mainCat!==null && $req->subCat!==null)
        {
            // dd('not null');
            $mainCat=$req->mainCat;
            $subCat=$req->subCat;
            $allproducts = Product::with(['images'])->where('category_id',$req->subCat)->select('id','name','price','description','image_url')->latest()->paginate(15);
            
        }else
        {
            $mainCat='all';
            $subCat='all';
            $allproducts = Product::with(['images'])->latest()->paginate(15);            
        }
        $main_categories = Category::where('parent_id','=',0)->select('id','name','parent_id')->get();
        $sub_categories = Category::where('parent_id',$req->mainCat ?? '')->where('parent_id','!=',0)->select('id','name','parent_id')->get();
        
        return view('admin.pages.product.index',['allproducts'=>$allproducts,'_mainCategory'=>$main_categories,'_subCategory'=>$sub_categories,'catId'=>$mainCat,'subCat'=>$subCat]);
    }

    public function create()
    {
        $_categories = Category::where('parent_id',0)->select('id','name','parent_id')->get();
        return view('admin.pages.product.create', ['_allCategories'=>$_categories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:products',
            'species' => 'required|max:255',
            'purpose' => 'max:255',
            'price' => 'required|integer',
            'discount' => 'required',
            'description' => 'required',
            // 'category_id' => 'required|integer',
            'subcategory_id' => 'required|integer',
            'habit'  => 'max:255',
            'light'  => 'max:255',
            'water'  => 'max:255',
            'plantOther'  => 'max:255',
            'stock' => 'required|integer',
            'image' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif'

        ]);
        $imagePaths = [];
        $product = new Product();
        $product->name = $request->name;
        $product->species = $request->species ?? 'None';
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->description = $request->description;
        $product->purpose = $request->purpose;
        $product->stock = $request->stock;
        $product->status = 1;
        // $product->image_url =$imagePaths[0];
        $product->category_id = $request->subcategory_id;
        if(!$product->save())
        {
            return redirect()->back()->with('error','something weng wrong!');
        }
            $plantsInfo=new PlantInfo();
            $plantsInfo->product_id = $product->id; 
            $plantsInfo->habits = $request->habit ?? 'Not Provided';
            $plantsInfo->lights = $request->light ?? 'Not Provided';
            $plantsInfo->water_requirements = $request->water ?? 'Not Provided';
            $plantsInfo->other = $request->plantOther ?? 'Not Provided';
            if(!$plantsInfo->save())
            {
                return redirect()->back()->with('error','something weng wrong!');
            }
        
        if ($request->hasfile('image')) {
            $images = $request->file('image');
            foreach ($images as $_image) {
                $extenstion = $_image->getClientOriginalName();
                $filename = 'Product_Image' . rand(1, 9999999999).$product->id.time().$extenstion;
                $_image->move('assets/backend/images/product', $filename);
                $imagePaths[] = $filename;
                $productimg = new ProductImage();
                $productimg->image_url = $filename;
                $productimg->product_id = $product->id;
                $productimg->save();
            }
             // Update the first image_url in the products table
        if (count($imagePaths) > 0) {
            $product->image_url = $imagePaths[0];
            $product->save();
        }
        }
        return redirect()->back()->with('success','Product added successfully!');
    }

    public function edit($id)
    {

        $_product = Product::with(['images' => function ($query) {
            $query->select('id','image_url', 'product_id'); // Select the columns you need
        },
        'category'=>function($query){
            $query->select('id','name','parent_id');
        }])
        ->where('id',$id)
        ->get()->first();
        
        $_categories = Category::where('parent_id','=',0)->select('id','name','parent_id')->get();
        $_subCategories = Category::where('parent_id','!=',0)->select('id','name','parent_id')->get();

        return view('admin.pages.product.edit',['_product'=>$_product,'_categories'=>$_categories,'_subCategory'=>$_subCategories]);
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'max:255|unique:products,name,'.$request->pId,
            'species' => 'max:255',
            'purpose' => 'max:255',
            'price' => 'required',
            'discount' => 'max:255',
            'description' => 'max:255',
            'subcategory_id' => 'integer',
            'stock' => 'integer',
        ]);
        $product = Product::find($request->pId);
        // dd($product);
        $product->name = $request->name;
        $product->species = $request->species;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->description = $request->description;
        $product->purpose = $request->purpose;
        $product->stock = $request->stock;
        $product->status = 1;
        // $product->image_url =$imagePaths[0];
        $product->category_id = $request->subcategory_id;
        if(!$product->save())
        {
            return redirect()->back()->with('error','something weng wrong!');
        }
        $imagePaths = [];
        
        if ($request->hasfile('image')) {
            $images = $request->file('image');
            foreach ($images as $_image) {
                $extenstion = $_image->getClientOriginalName();
                $filename = 'Product_Image' . rand(1, 9999999999).$product->id.time().$extenstion;
                $_image->move('assets/backend/images/product', $filename);
                $imagePaths[] = $filename;
                $productimg = new ProductImage();
                $productimg->image_url = $filename;
                $productimg->product_id = $product->id;
                $productimg->save();
            }
             // Update the first image_url in the products table
        if (count($imagePaths) > 0) {
            $product->image_url = $imagePaths[0];
            $product->save();
        }
        }
        return redirect()->route('admin.showProducts')->with('success','product updated successfully!');
    }

    public function destroy($id)
    {
        $images = ProductImage::select('image_url')->where('product_id', $id)->get();
        foreach ($images as $img) {
            $filePathName = 'assets/backend/images/product/' . $img->image_url;
            if (file_exists($filePathName)) {
            }
            unlink($filePathName);
        }
        ProductImage::where('product_id', $id)->delete();

        $product = Product::find($id);
        if($product){
            $product->reviews()->delete();
        }
        $product->delete();
        return redirect()->back()->with('success','Product deleted successfully!');
    }

    public function deleteImage($id){
        $image = ProductImage::find($id);
        $filePathName = 'assets/backend/images/product/' . $image->image_url;
        if (file_exists($filePathName)) {
        }
        unlink($filePathName);

        ProductImage::destroy($id);
        return redirect()->back();
    }

    public function changeProductStatus($id)
    {
        $product = Product::find($id);
        if ($product->status == 1) {
            $product->status = 0;
            $product->save();
        } else if ($product->status == 0) {
            $product->status = 1;
            $product->save();
        }
        // $products = Product::all();
        // $pimage=Productimages::all();
        return redirect()->back()->with('success','Status changed successfully!');
    }

    public function productReviews()
    {
      $productReviews=Review::with(['user','product.images'])->latest()->get();
        return view('admin.pages.product.product-review',['_productReviews'=>$productReviews]);
    }

    public function productDetail($id)
    {
      $productArray=Product::with(['category','images','reviews','reviews.user'])->where('id',$id)->get()->first();

      return view('admin.pages.product.detail',['productArray'=>$productArray]);
    }

    // public function search(Request $request)
    // {
    //     $search = $request->get('search');
    //     $products = Product::where('name', 'like', '%' . $search . '%')->paginate(10);
    //     return view('admin.product.search', compact('products'));
    // }

    //available products
    public function productsAvailability(){

        $products=Product::with(['category'])->orderBy('id','desc')->get();
        
        return view('admin.pages.availability',['products'=>$products]);

    }

    //Sold products
    public function productsSold(){

        $soldProducts = OrderItem::join('products', 'order_items.product_id', '=', 'products.id')
        ->join('orders', 'order_items.order_id', '=', 'orders.id')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->where('orders.status', '=', 'confirmed')
        ->select('products.name as product_name', 'order_items.quantity as quantity_sold', 'categories.name as category_name')
        ->distinct('products.id')
        ->get();

        return view('admin.pages.sold',['products'=>$soldProducts]);

    }
}
