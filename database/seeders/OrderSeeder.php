<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    public function run()
{
    $users = User::all(); // Lấy tất cả người dùng

    foreach ($users as $user) {
        // Tạo từ 1 đến 5 đơn hàng ngẫu nhiên cho mỗi người dùng
        $numOrders = rand(1, 5);

        for ($i = 1; $i <= $numOrders; $i++) {
            $order = Order::create([
                'user_id' => $user->id,
                'order_code' => 'DH' . strtoupper(Str::random(8)),
            ]);

            // Danh sách các sản phẩm có thể có
            $products = ['Áo thun', 'Quần jean', 'Giày', 'Balo'];

            // Lấy từ 2 đến 3 sản phẩm ngẫu nhiên cho mỗi đơn hàng
            $numProducts = rand(2, 3);
            $randomProducts = array_rand($products, $numProducts);

            // Kiểm tra và tạo các sản phẩm trong đơn hàng
            foreach ((array) $randomProducts as $index) {
                $order->items()->create([
                    'product_name' => $products[$index],
                    'quantity' => rand(1, 5),
                ]);
            }
        }
    }
}

}
