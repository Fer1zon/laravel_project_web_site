@extends('layouts.admin')

@section('content')
    <div class = "container" style="max-width: 90%;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" style="width: 20px;">#</th>
                    <th scope="col">Позиций</th>
                    <th scope="col">ФИО</th>
                    <th scope="col" style="width: 8rem;">Дата</th>
                    <th scope="col" style="width: 10px;">Статус</th>
                    <th scope="col" style = "width: 15rem;">Действия</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <th>3</th>
                    <th>Иванов Иван Иванович</th>
                    <th>2024-11-08</th>
                    <th>Новый</th>
                    <th>
                        <button class = "btn btn-warning">Изменить</button>
                        <button class = "btn btn-danger">Отменить</button>
                        <button class = "btn btn-success">Подтвердить</button>

                    </th>

                </tr>
            </tbody>

            <tbody>
                <tr>
                    <th>2</th>
                    <th>2</th>
                    <th>Иванов Иван Иванович</th>
                    <th>2024-10-30</th>
                    <th>Исполнен</th>
                    <th>
                        <button class = "btn btn-warning">Изменить</button>
                        <button class = "btn btn-danger">Отменить</button>
                        <button class = "btn btn-success">Подтвердить</button>
                    </th>

                </tr>
            </tbody>
        </table>
    </div>
@endsection
