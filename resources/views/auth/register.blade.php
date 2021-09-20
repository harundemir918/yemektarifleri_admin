@extends('layouts.auth')

@section('content')
<div class="login-box">
    @include('layouts.alert')
    <p>Kayıt için uygulamayı kullanmalısınız.</p>
  </div>
@endsection

@section('css')
<style>
    .login-content .login-box {
        position: relative;
        min-width: 350px;
        min-height: 552px;
        background-color: #fff;
    }
    p {
        text-align: center;
    }
</style>
@endsection