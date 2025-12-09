@extends('layouts.app')

@section('content')

    <div class = "container text-center">
        <div class = "row row-cols-1 p-5">
            <div class = "col">
                <div class="mb-3">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Город">
                </div>
            </div>
            <div class = "col">
                <p class = "text-center">Тип принтера</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Лазерный</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Струйный</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Термопринтер</label>
                </div>
            </div>
            <div class = "col">
                <p class = "text-center mt-4">Цена</p>
                <div class="row">
                    <div class="col">
                    <input type="text" class="form-control" placeholder="От: ">
                    </div>
                    <div class="col">
                    <input type="text" class="form-control" placeholder="До: ">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(count($products) == 0)
        <p class = "text-center fs-1">Пусто!</p>

    @else
        <div class = "container d-flex justify-content-center">

            <div class="row">

                @foreach($products as $product)
                    <div class="col mt-5">
                        <div class="card" style="width: 32rem;">
                            <img src="{{($product->img)}}" class="card-img-top" alt="Изображение товара">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->title}}</h5>
                                <p class="card-text">{{$product->description}}</p>
                                <a href="/product/{{$product->id}}" class="btn btn-primary">Заказать</a>
                            </div>
                        </div>
                    </div>
                @endforeach






            </div>
        </div>
    @endif


@endsection
