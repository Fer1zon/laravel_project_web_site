@extends('layouts.app')

@section('content')

    <form>
        <div class="container text-center col-sm-4 border border-primary rounded-3">
            <div class = "row row-cols-1 p-5">
                <div class = "col">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Иван">
                    </div>
                </div>
                <div class = "col">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Фамилия</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Иванов">
                    </div>
                </div>
                <div class = "col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Отчество</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Иванович">
                </div>
                </div>
                <div class = "col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Логин</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Логин">
                </div>
                </div>
                <div class = "col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="example@gmail.com">
                </div>
                </div>

                <div class = "col">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Пароль</label>
                    </div>
                    <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                        Не менее 6 символов
                        </span>
                    </div>
                </div>
                </div>
                <div class = "col">
                <div class="row g-3 align-items-center mt-sm-2">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Повторите пароль</label>
                    </div>
                    <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                        Не менее 6 символов
                        </span>
                    </div>
                </div>
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                <label class="form-check-label" for="checkDefault">
                    Согласие с правилами
                </label>
            </div>
            <button type="submit" class="btn btn-primary mb-3 mt-sm-4">Зарегистрироваться</button>

        </div>
    </form>


@endsection
