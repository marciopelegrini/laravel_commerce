@extends('app')

@section('content')
    <div class="container">
        <h1>Create Products</h1>

        @if ($errors->any())
            <ul class="alert">
                @foreach($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>'products.store']) !!}

            <div class="form-group">
                {!! Form::label('Category', 'Category:') !!}
                {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('price', 'Price:') !!}
                {!! Form::text('price', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('featured', 'Featured: ') !!}
                {!! Form::radio('featured', 1,  ['class' => 'field']) !!} YES
                {!! Form::radio('featured', 0,  ['class' => 'field']) !!} NO
            </div>
            <div class="form-group">
                {!! Form::label('recommend', 'Recommend: ') !!}
                {!! Form::radio('recommend', 1,  ['class' => 'field']) !!} YES
                {!! Form::radio('recommend', 0,  ['class' => 'field']) !!} NO
            </div>
            <div class="form-group">
                {!! Form::label('tags', 'Tags:') !!}
                {!! Form::textarea('tags', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Product', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}

    </div>
@endsection