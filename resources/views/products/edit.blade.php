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

        {!! Form::open(['route'=>'products.store']) !!}

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
                {!! Form::label('featured', 'Featured:') !!}<br/>
                Yes {!! Form::radio('featured', 'true', ['class'=>'form-control']) !!}
                No {!! Form::radio('featured', 'false', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('recommend', 'Recommend:') !!}<br/>
                Yes {!! Form::radio('recommend', 'true', ['class'=>'form-control']) !!}
                No {!! Form::radio('recommend', 'false', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Save Product', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}

    </div>
@endsection