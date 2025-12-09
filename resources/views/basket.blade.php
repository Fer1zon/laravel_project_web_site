@extends('layouts.app')

@section('content')

    <div class = "container border d-flex p-3 flex-column" style="max-width: 70%;">
        <p class = "text-center fs-2">Корзина</p>

        <div class="card flex-row border-0" style="max-width: 80%;">

            <img src="https://cs1.htmlacademy.ru/blog/html-tags/img/previewOg.png" class="card-img-left" style="object-fit: cover; max-width: 50%;">
            <div class="card-body border-start mt-3 mb-3">
                <h5 class="card-title">Название товара</h5>
                <p class="card-text">Краткое описание товара</p>
                <div class = "container d-flex flex-row">

                    <button class="btn btn-success">+</button>
                    <input value="0" style="width: 20px;">
                    <button class="btn btn-danger">-</button>

                </div>
            </div>
        </div>


        <div class="card flex-row border-0" style="max-width: 80%;">

            <img src="https://cs1.htmlacademy.ru/blog/html-tags/img/previewOg.png" class="card-img-left" style="object-fit: cover; max-width: 50%;">
            <div class="card-body border-start mt-3 mb-3">
                <h5 class="card-title">Название товара</h5>
                <p class="card-text">Краткое описание товара</p>
                <div class = "container d-flex flex-row">

                    <button class="btn btn-success">+</button>
                    <input value="0" style="width: 20px;">
                    <button class="btn btn-danger">-</button>

                </div>
            </div>
        </div>


        <div class="card flex-row border-0" style="max-width: 80%;">

            <img src="https://cs1.htmlacademy.ru/blog/html-tags/img/previewOg.png" class="card-img-left" style="object-fit: cover; max-width: 50%;">
            <div class="card-body border-start mt-3 mb-3">
                <h5 class="card-title">Название товара</h5>
                <p class="card-text">Краткое описание товара</p>
                <div class = "container d-flex flex-row">

                    <button class="btn btn-success">+</button>
                    <input value="0" style="width: 20px;">
                    <button class="btn btn-danger">-</button>

                </div>
            </div>
        </div>

    <button type="submit" class="btn btn-primary mb-3 mt-sm-4">Заказать</button>
    </div>
@endsection
