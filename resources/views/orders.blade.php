@extends('layouts.app')

@section('content')

    <div class = "container" style="max-width: 90%;">
        <table class = "table table-hover text-center table-bordered border-primary">
            <thead>
                <tr>
                    <th scope="col" style="width: 20px;">#</th>
                    <th scope="col">Позиции</th>
                    <th scope="col" style="width: 8rem;">Дата</th>
                    <th scope="col" style="width: 10px;">Статус</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th>1</th>
                    <th style="padding: 0px;">
                        <table class = "table table-bordered table-hover" style="margin: 0px;">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 92%;">Товар</th>
                                    <th scope="col" style="width: 8%;">Кол-во</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Товарчик</th>
                                    <th>4</th>
                                </tr>
                            </tbody>
                        </table>
                    </th>
                    <th>2025-15-07</th>
                    <th>Исполнен</th>
                </tr>

                <tr>
                    <th>2</th>
                    <th style="padding: 0px;">
                        <table class = "table table-bordered table-hover" style="margin: 0px;">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 92%;">Товар</th>
                                    <th scope="col" style="width: 8%;">Кол-во</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Принтер</th>
                                    <th>1</th>
                                </tr>
                                <tr>
                                    <th>Не Принтер</th>
                                    <th>5</th>
                                </tr>
                            </tbody>
                        </table>
                    </th>
                    <th>2025-15-07</th>
                    <th>Не исполнен</th>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
