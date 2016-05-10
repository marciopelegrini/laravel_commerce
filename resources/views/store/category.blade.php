@extends('store.store')

@section('categories')
    @include('store._categories')
@stop

@section('content')
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">{{ $category->name }}</h2>

            @include('store._products', ['products'=> $products])
            <!--features_items-->
        </div>
    </div>
@stop