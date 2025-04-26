@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <h3>Orders for {{ $user->name }} ({{ $user->email }})</h3>

                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Order Code</th>
                            <th>Products</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user->orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->order_code }}</td>
                                <td>
                                    <ul>
                                        @foreach($order->items as $item)
                                            <li>{{ $item->product_name }} ({{ $item->quantity }})</li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
