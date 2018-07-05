@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Създаване на нов проект</h3>
        {!! Form::open(['url' => 'projects']) !!}

        {!! Form::label('Наименование') !!}
        {!! Form::text('title','',['class' => 'form-control']) !!}


        {!! Form::label('location') !!}
        {!! Form::text('location','',['class' => 'form-control']) !!}
        <br>

        {!! Form::label('status') !!}
        {!! Form::select('status',[1 => 'open',0=> 'close' ],['class' => 'form-control']) !!}

        <br>
        {!! Form::label('personInCharge') !!}
        {!! Form::text('personInCharge','',['class' => 'form-control']) !!}


        {!! Form::label('startFrom') !!}
        {!! Form::date('startFrom','',['class' => 'form-control']) !!}


        {!! Form::label('ending') !!}
        {!! Form::date('ending','',['class' => 'form-control']) !!}


        {!! Form::submit() !!}
        {!! Form::close() !!}
    </div>
@endsection