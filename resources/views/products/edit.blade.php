@extends('app')

@section('content')
    <div class="container">
        <h1>Editing Product: {{ $products->name }}</h1>

        @if ($errors->any())
            <ul class="alert">
                @foreach($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>['products.update',$products->id], 'method'=>'put']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', $products->name, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', $products->description, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('price', 'Price:') !!}
                {!! Form::text('price', $products->price, ['class'=>'form-control']) !!}
            </div>
        <div class="form-group">
            {!! Form::label('featured', 'Featured: ') !!}
            {!! Form::radio('featured', 1, ($products->featured) ? true : false, ['class' => 'field']) !!} YES
            {!! Form::radio('featured', 0, (!$products->featured) ? true : false, ['class' => 'field']) !!} NO
        </div>
        <div class="form-group">
            {!! Form::label('recommend', 'Recommend: ') !!}
            {!! Form::radio('recommend', 1, ($products->recommend) ? true : false, ['class' => 'field']) !!} YES
            {!! Form::radio('recommend', 0, ($products->recommend) ? false : true, ['class' => 'field']) !!} NO
        </div>
            <div class="form-group">
                {!! Form::submit('Save Product', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}

    </div>
@endsection