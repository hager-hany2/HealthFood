@extends('layout')
@section('title','cart')
@section('content')
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:30%">Product</th>
            <th style="width:10%">Price</th>

            <th style="width:10%">Quantity</th>
            <th style="width:10%">Total</th>

            <th style="width:10%" class="text-center">control</th>

        </tr>
        </thead>
        <tbody>
        @foreach($cart as $productId => $item)
            <tr>

                <td>{{ $item['name'] }}</td>
                <td>${{ number_format($item['price'], 2) }}</td>
                <td>{{ $item['quantity'] }}</td>
                <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                <td>
                    <form class="text-center" action="{{ route('cart.remove', $productId) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger text-center">Remove</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
@endsection



