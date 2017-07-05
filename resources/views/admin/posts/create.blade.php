@extends('layouts.admin')

@section('content')

@include('includes.tinyeditor')


    <h1>Create Post</h1>

    <div class="row">
        {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}<br>
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Category:') !!}<br>
            {!! Form::select('category_id', [''=>'Select a Category'] + $categories, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}<br>
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Description:') !!}<br>
            {!! Form::textarea('body', null, ['class'=>'form->control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>"btn btn-primary"]) !!}
        </div>

        {!! Form::close() !!}

    </div>

    <div class="row">
        @include('includes.form_error')
    </div>



@stop