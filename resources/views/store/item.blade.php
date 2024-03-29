@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">官方商品</div>
                <div class="card-body">
                    <div class="container-fluid p-0">
                        @foreach($items as $item)
                            <li>
                                <a>{{ $item->name }}</a> |
                                <a>{{ $item->content }}</a> |
                                <a>$ {{ $item->price }}</a>
                                <a href="{{ route('addcart', ['id' => $item->id]) }}"><button class="btn btn-sm btn-outline-info ml-2">加入購物車</button></a>
                            </li>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>  
        </div>  
    </div>  
</div>  
@stop
