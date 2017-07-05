@extends('layouts.admin')




@section('content')

    <h1><i class="fa fa-list fa-fw"></i> Categories</h1>


    <div class="col-sm-4">
        <h2>Edit Category</h2>

        {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}<br>
            {!! Form::text('name', null, ['class'=>'form->control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update Category', ['class'=>"btn btn-primary col-sm-4"]) !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete Category', ['class'=>"btn btn-danger col-sm-4"]) !!}
        </div>
        {!! Form::close() !!}

    </div>

    <div class="col-sm-8">


    </div>





@stop