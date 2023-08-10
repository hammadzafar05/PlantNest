<?php

namespace App\Http\Controllers;

use App\Models\ClickedItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClikedItemController extends Controller
{
    public function addClickedItem($id)
    {
        $userId = Auth::user() ? Auth::user()->id : null;

        $clickedItem = new ClickedItem();
        $clickedItem->user_id = $userId;
        $clickedItem->product_id = $id;
        $clickedItem->save();

        return response()->json(['message' => 'Clicked item added', 'clickedItem' => $clickedItem]);
    }
}
