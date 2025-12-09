@extends('layouts.app')

@section('content')
    @if($product == null)
        <p class = "text-center fs-1">Продукт не найден!</p>

    @else
        <div class = "container" style="max-width: 80%;">
            <div class="card flex-row" style="max-width: 100%;">

                <img src="{{asset($product->img)}}" alt="Фото товара" class="card-img-left" style="object-fit: cover;">
                <div class="card-body border-start mt-3 mb-3">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <a href="#" class="btn btn-primary sticky-bottom">Заказать</a>
                </div>
            </div>
        </div>
    @endif
@endsection
