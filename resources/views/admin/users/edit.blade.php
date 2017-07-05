@extends('layouts.admin')

@section('content')
    <h1>Edit User:<br><span class="bg-info">{{$user->name}}</span></h1>
    <hr>
    <div class="row">
        <div class="col-sm-2">
            <img src="{{$user->photo ? $user->photo->file : '/images/seahorse.png'}}" alt="" class="img-responsive">

        </div>

        <div class="col-sm-10">

            {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}<br>
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}<br>
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'Role:') !!}<br>
                {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active', 'Status:') !!}<br>
                {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}<br>
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}<br>
                {!! Form::password('password',  ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Update User', ['class'=>"btn btn-primary col-sm-4"]) !!}
            </div>
            {!! Form::close() !!}


            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
                <div class="form-group">
                    {!! Form::submit('Delete User', ['class'=>"btn btn-danger col-sm-4"]) !!}
                </div>
             {!! Form::close() !!}

        </div>
    </div>
    <div class="">&nbsp;</div>
    <div class="row">
        @include('includes.form_error')
    </div>


@stop