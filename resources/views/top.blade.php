@php
    $title = env('APP_NAME');
@endphp
@extends('layouts.master')
@section('title', 'demo-laravel')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <p>
        Laravel5.7でソーシャルログインを実装する演習です
    </p>
    <ul>
        <li>
            GitHub：
            <a href="https://github.com/bm0521/demo-laravel-Slogin" target="_blank">
                https://github.com/bm0521/demo-laravel-Slogin
            </a>
        </li>
        <li>ログインすると、ログインしたユーザー情報が参照できます</li>
        <li>ユーザー情報のDBへの登録は行っておりません<br>
            ただし、各サービスの連携アプリに、このアプリが登録されてしますので、個別に解除をお願いいたします</li>
        <li>Twitterに関してはAPI利用制限により、ログインが正常処理されない場合があります<br>
            その場合はしばらくお待ちの上、再度試していただければと思います<br>
            参考：
            <a href="https://qiita.com/mpyw/items/32d44a063389236c0a65" target="_blank">
                https://qiita.com/mpyw/items/32d44a063389236c0a65
            </a>
        </li>
    </ul>
    <h2>機能</h2>
    <ul>
        <li>
            <a class="btn btn-link" href="{{ route('login.provider', ['provider' => 'twitter']) }}">
                twitterログイン
            </a>
        </li>
        <li>
            <a class="btn btn-link" href="{{ route('login.provider', ['provider' => 'facebook']) }}">
                Facebookログイン
            </a>
        </li>
    </ul>
</div>
@endsection