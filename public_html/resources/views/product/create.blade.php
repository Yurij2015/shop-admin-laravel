@extends('product.layout')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-10">
            <h2>Добавление продукта</h2>
        </div>
        <div class="col-lg-2">
            <a class="btn btn-success float-right" href="{{ route('product.index') }}">
                Назад
            </a>
        </div>
    </div>
    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="product_name" class="font-weight-bold">Название продукта:</label>
                    <input type="text" class="form-control" id="product_name" placeholder="Название продукта"
                           name="product_name">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="product_code" class="font-weight-bold">Код продукта:</label>
                    <input type="text" class="form-control" id="product_code" placeholder="Код продукта"
                           name="product_code">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="detail" class="font-weight-bold">Детали:</label>
                    <textarea type="text" class="form-control" id="detail" placeholder="Детали"
                              name="detail"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="logo" class="font-weight-bold">Изображение:</label>
                    <input type="file" class="form-control" id="logo" name="logo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </div>
        </div>

    </form>
@endsection
