@extends('product.layout')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-10">
            <h2>Просмотр продукта</h2>
        </div>
        <div class="col-lg-2">
            <a class="btn btn-success float-right" href="{{ route('product.index') }}">
                Назад
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Наименование продукта: </strong>
                {{ $data->product_name }}
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Код продукта: </strong>
                {{ $data->product_code }}
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Детали: </strong>
                {{ $data->detail }}
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Изображение продукта: </strong>
                <img width="200" src="{{ URL::to( $data->logo)}}" alt="">
            </div>
        </div>
    </div>





@endsection
