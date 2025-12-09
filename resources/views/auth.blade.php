@extends('layouts.app')

@section('content')

    <form>
        <div class="container text-center col-sm-4 border border-primary rounded-3">
            <div class = "row row-cols-1 p-5">
                <div class = "col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Логин</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Логин">
                </div>
                </div>

                <div class = "col">

                    <div class = "mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Пароль">
                    </div>
                </div>


            </div>
            <button type="submit" class="btn btn-primary mb-3 mt-sm-4">Войти</button>

        </div>
    </form>

@endsection
