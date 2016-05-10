@extends("store.store")

@section('categories')
    @include('store._categories')
@stop

@section('content')
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Em destaque</h2>
            <!-- FEATURE ITEMS -->
            @include('store._products', ['products'=> $pFeatured])
            <!--features_items-->
        </div>
        <div class="features_items"><!--recommended-->
            <h2 class="title text-center">Recomendados</h2>
            @include('store._products', ['products'=> $pRecommend])
        </div><!--recommended-->
    </div>
@stop