
@extends('layouts.app')

@section('content')

    <div class="container my-5">
        <div class="text-center p-4 bg-light rounded shadow">
            <img class = "w-2" src="https://img.freepik.com/free-vector/bird-colorful-gradient-design-vector_343694-2506.jpg?semt=ais_hybrid&w=740&q=80" style="width: 300px;" class="img-thumbnail" alt="...">
            <h2 class="display-4 mb-3">Слоган - вашей компании</h2>
            <p class="lead">Слоган - вашей компании</p>
        </div>
    </div>
    <div class="container my-5">
        <div class="text-center p-4">
            <h2 class="display-4 mb-3">Новинки</h2>
        </div>
    </div>
    <div class = "container my-5">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active d-flex justify-content-center">
                <div class="card" style="width: 60rem;">
                    <img src="https://cs1.htmlacademy.ru/blog/html-tags/img/previewOg.png" class="card-img-top" alt="Изображение товара">
                    <div class="card-body">
                        <h5 class="card-title text-center">Название товара</h5>
                    </div>
                </div>
            </div>
            <div class="carousel-item d-flex justify-content-center">
                <div class="card" style="width: 60rem;">
                    <img src="https://cs1.htmlacademy.ru/blog/html-tags/img/previewOg.png" class="card-img-top" alt="Изображение товара">
                    <div class="card-body">
                        <h5 class="card-title text-center">Название товара</h5>
                    </div>
                </div>
            </div>
            <div class="carousel-item d-flex justify-content-center">
                <div class="card" style="width: 60rem;">
                    <img src="https://cs1.htmlacademy.ru/blog/html-tags/img/previewOg.png" class="card-img-top" alt="Изображение товара">
                    <div class="card-body">
                        <h5 class="card-title text-center">Название товара</h5>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
@endsection
