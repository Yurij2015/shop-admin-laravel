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
                        <td>
                            {{ str_limit($product->detail, $limit = 100) }}
                        </td>
                        <td><img width="150" src="{{ URL::to( $product->logo)}}" alt=""></td>
                        <td class="col-md-3">
                            <a href="{{ URL::to('show/product/' . $product->id) }}"
                               class="btn btn-info btn-sm">Показать</a>
                            <a href="{{ URL::to('edit/product/' . $product->id) }}" class="btn btn-primary btn-sm">Редактировать</a>
                            <a href="{{ URL::to('delete/product/' . $product->id) }}"
                               onclick="return confirm('Вы уверены, что хотите удалить запись?')"
                               class="btn btn-danger btn-sm">Удалить</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    {!! $products->links() !!}
@endsection
