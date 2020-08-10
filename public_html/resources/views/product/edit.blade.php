@extends('product.layout')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-10">
            <h2>Изменение продукта</h2>
        </div>
        <div class="col-lg-2">
            <a class="btn btn-success float-right" href="{{ route('product.index') }}">
                Назад
            </a>
        </div>
    </div>
    <form action="{{ URL('update/product/' . $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="product_name" class="font-weight-bold">Название продукта:</label>
                    <input type="text" class="form-control" id="product_name" value="{{ $product->product_name  }}"
                           name="product_name">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="product_code" class="font-weight-bold">Код продукта:</label>
                    <input type="text" class="form-control" id="product_code" value="{{ $product->product_code  }}"
                           name="product_code">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="detail" class="font-weight-bold">Детали:</label>
                    <textarea type="text" class="form-control" id="detail"
                              name="detail">{{ $product->detail  }}</textarea>
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
                    <label for="currentlogo" class="font-weight-bold">Текущее изображение:</label>
                    <img width="200" src="{{ URL::to( $product->logo)}}" alt="">
                    <input type="hidden" name="old_logo" value="{{ $product->logo }}">
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
