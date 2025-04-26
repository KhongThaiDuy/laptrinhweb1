<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
// OrderController
public function show($userId)
{
    // Lấy thông tin người dùng và các đơn hàng của người đó
    $user = User::with('orders')->findOrFail($userId);

    // Trả về view với thông tin người dùng và đơn hàng
    return view('crud_user.orders', compact('user'));
}

}
