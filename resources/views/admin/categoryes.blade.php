@extends('layouts.admin')

@section('content')

    <div class = "container" style="max-width: 90%;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" style="width: 20px;">#</th>
                    <th scope="col">Название</th>
                    <th scope="col" style = "width: 15rem;">Действия</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <th>Принтер</th>
                    <th>
                        <button class = "btn btn-danger">Удалить</button>
                    </th>

                </tr>
            </tbody>

            <tbody>
                <tr>
                    <th>2</th>
                    <th>Принтер</th>
                    <th>
                        <button class = "btn btn-danger">Удалить</button>
                    </th>

                </tr>
            </tbody>
        </table>
    </div>

@endsection
