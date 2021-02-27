<?php


namespace App\Http\Controllers;


use App\Http\Resources\OrderResource;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        return OrderResource::collection(Order::all());
    }

    public function show(int $id)
    {
        return new OrderResource(Order::findOrFail($id));
    }
}
