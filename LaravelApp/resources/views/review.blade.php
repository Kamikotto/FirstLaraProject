@extends('layout')
@section('title') Отзывы@endsection

@section('main_content')
<h1>Форма добавления отзыва</h1>

@if($errors->any())
<div class="alert alert-danger">
    <ui>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ui>
</div>
@endif

<form method="POST" action="/review/check">
    @csrf
<input type="email" name="email" id="email" placeholder="Введите свой Email" class="form-control"><br>
<input type="text" name="subject" id="subject" placeholder="Введите тему отзыва" class="form-control"><br>
<textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
<button type="submit" style="background: purple" class="btn btn-success">Отправить</button>
</form>
<br>
@endsection
