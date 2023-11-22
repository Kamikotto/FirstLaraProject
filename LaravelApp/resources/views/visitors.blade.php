@extends('layout')
@section('title') Пользователи@endsection

@section('main_content')
<h1>Все отзывы пользователей</h1>
@if($errors->any())
<div class="alert alert-danger">
    <ui>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ui>
</div>
@endif
@foreach($visitorsy as $el)
    <div class="alert alert-warning">
        <h3>{{$el->email}}</h3>
        <b>{{$el->subject}}</b>
        <p>{{$el->message}}</p>
        <p>{{$el->id_review}}</p><br>
    </div>
@endforeach
@endsection