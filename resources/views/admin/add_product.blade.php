@extends('layouts.admin')

@section('content')
    <p class = "text-center">Создание товара</p>
    <form>
        <div class="container text-center col-sm-4 border border-primary rounded-3">
            <div class = "row row-cols-1 p-5">
            <div class = "col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Название</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Принтер">
                </div>
            </div>
            <div class = "col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Описание</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Принтер">
                </div>
            </div>
            <div class = "col">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Категория</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Принтеры">
            </div>
            </div>
            <div class = "col">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Фото</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Фото">
            </div>
            </div>

            </div>
            <button type="submit" class="btn btn-primary mb-3 mt-sm-4">Создать</button>
        </div>

    </form>
@endsection
