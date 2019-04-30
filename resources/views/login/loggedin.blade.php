@php
    $title = env('APP_NAME');
@endphp
@extends('layouts.master')
@section('title', 'demo-laravel')
@section('content')
<div class="container">
    <h1>ログイン成功({{ $provider }})</h1>
    <ul>
        <li>name：{{$user->getName()}}</li>
        <li>email：{{$user->getEmail()}}</li>
        <li>avatar：<br>
            <img src="{{$user->getAvatar()}}" >
        </li>
    </ul>
    <a class="btn btn-link" href="{{ route('top') }}">
        トップへ
    </a>
</div>
@endsection