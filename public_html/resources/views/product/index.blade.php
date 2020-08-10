@extends('product.layout')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-10">
            <h2>Список товаров</h2>
        </div>
        <div class="col-lg-2">
            <a class="btn btn-success float-right" href="{{ route('product.create') }}">
                Добавить продукт
            </a>
        </div>
        <div class="col-lg-12">
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>Название продукта</th>
                    <th>Код продукта</th>
                    <th>Детали</th>
                    <th>Изображение</th>
                    <th>Действие</th>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_code }}</td>
                        <td>{{ $product->detail }}</td>
                        <td><img width="200" src="{{ URL::to( $product->logo)}}" alt=""></td>
                        <td>
                            <a href="" class="btn btn-info btn-sm">Показать</a>
                            <a href="{{ URL::to('edit/product/' . $product->id) }}" class="btn btn-primary btn-sm">Редактировать</a>
                            <a href="" class="btn btn-danger btn-sm">Удалить</a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

@endsection
