@extends('layouts.app')

@section('content')
<section class="container mx-auto py-20 px-10 bg-gray-100 max-w-4xl">
    <div class="flex flex-col flex-wrap -mx-2 ">
        <h3 class="text-3xl font-medium">購物車</h3>
        <hr>
        @if(session()->has('cart'))
        <table class="border-collaspe border-collapse table-auto ">
            <thead>
                <th class="px-4 py-2">物品</th>
                <th class="px-4 py-2">價格</th>
                <th class="px-4 py-2">數量</th>
                <th class="px-4 py-2">操作</th>
            </thead>
            <tbody class="text-center">
                @foreach ($items as $item)
                <tr>
                    <td class="border px-4 py-2">{{$item['item']['name']}}</td>
                    <td class="border px-4 py-2">{{$item['item']['price']}}</td>
                    <!-- Remove Items / Increase +1 / Decrease By 1 -->
                    <td class="border px-4 py-2">{{$item['qty']}}</td>
                    <td class="border px-4 py-2">
                        <a class="py-1 px-2 bg-teal-400"
                            href="/increase-one-item/{{$item['item']['id']}}">+</a>|
                        <a class="py-1 px-2 bg-red-300"
                            href="/decrease-one-item/{{$item['item']['id']}}">-</a>|
                        <a class="py-1 px-2 bg-red-700 uppercase"
                            href="/remove-item/{{$item['item']['id']}}">刪除</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <p class="mt-4 text-xl font-medium">總數量: {{ $totalQty }}</p>
        <p class="mt-4 text-xl font-medium">總價格: {{ $totalPrice }}$</p>
        <hr>
        <div class="flex justify-end mt-4 text-center">
            <a href="/clear-cart" class="px-6 py-3 bg-orange-600">清空</a> |
            <a href="/order/new" class="px-6 py-3 bg-orange-600">結帳</a>
        </div>
        @else
        <p>購物車是空的!</p>
        @endif
    </div>
</section>
@endsection