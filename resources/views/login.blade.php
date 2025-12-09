@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3 class="text-center">Вход</h3>
                <form class="mt-4">
                    <div class="mb-3">
                        <label class="form-label">Логин</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Пароль</label>
                        <input type="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Войти</button>
                </form>
                <p class="text-center mt-3">
                    Нет аккаунта? <a href="register.html">Регистрация</a>
                </p>
            </div>
        </div>
    </div>
@endsection
