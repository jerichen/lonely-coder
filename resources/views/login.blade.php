@extends('layouts.wrapper')

@section('main')
    <section class="login-chart landing">
        <div class="container">
            <div class="flex">
                <div class="logo-set">
                    <img src="{{secure_asset('assets/img/slogan.svg')}}" alt="Let's music!" class="slogan">
                    <img src="{{secure_asset('assets/img/logo.svg')}}" alt="KKBOX" class="logo">
                </div>
                <div class="login">
                    <ul>
                        <li>
                            <a href="{{route('oauth')}}" class="kkbox-id">使用KKBOX帳號登入</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endSection


