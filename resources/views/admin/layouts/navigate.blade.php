<!--- Sidemenu -->
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li>
            <a href="{{url('admin/dashboard')}}">
                <i class="uil-home-alt">

                </i>
                <span>Dashboard</span>
            </a>
         </li>
         <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="uil-store"></i>
                <span>Categories</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{url('admin/categories/plantCategory')}}">Plants</a></li>
                <li><a href="{{url('admin/categories/AccessoryCategory')}}">Accesories</a></li>
                
            </ul>
        </li>
         <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="uil-store"></i>
                <span>Product</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{url('admin/product/addProducts')}}">Add Product</a></li>
                <li><a href="{{url('admin/product/allproducts')}}">Products</a></li>

            </ul>
        </li>
        </li>
        <li>
            <a href="{{ url('admin/product/productReviews') }}" class=" waves-effect">
                <i class="fas fa-star-half-alt"></i>
                <span>Product Reviews</span>
            </a>
        </li>
        <li>
            <a href="{{ url('admin/usersList') }}" class=" waves-effect">
                <i class="fa fa-user"></i>
                <span>Users</span>
            </a>
        </li>

        <li>
            <a href="{{url('admin/orders/allOrders')}}" class=" waves-effect">
            <i class="fa-solid fa-cart-shopping"></i>
                <span>Orders</span>
            </a>
        </li>
        <li>
            <a href="{{url('admin/products-availability')}}" class=" waves-effect">
            <i class="fa-solid fa-cart-shopping"></i>
                <span>Availability</span>
            </a>
        </li>
        <li>
            <a href="{{url('admin/products-sold')}}" class=" waves-effect">
            <i class="fa-solid fa-cart-shopping"></i>
                <span>Sold Quantity</span>
            </a>
        </li>

        {{-- <li>
            <a href="{{url('admin/contact')}}" class=" waves-effect">
            <i class="fa fa-envelope"></i>
                <span>Contact Messages</span>
            </a>
        </li> --}}

        <li>
            <a href="{{url('admin/feedback')}}" class=" waves-effect">
                <i class="fa fa-star"></i>
                <span>FeedBack</span>
            </a>
        </li> 

    </ul>
</div>
<!-- Sidebar -->