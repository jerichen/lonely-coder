@extends('layouts.wrapper')

@section('main')
    <section class="login-chart landing">
        <div class="container">
            <div class="search-block">
                <form action="{{route('search')}}">
                    <input type="text" placeholder="搜尋" name="search">
                    <input type="hidden" name="access_token" value="{{$data['access_token']}}">
                    <button>
                        <span class="sr-only">搜尋</span>
                    </button>
                </form>
            </div>
            <div class="flex">
                <h1>Hello {{$data['name']}}</h1>
            </div>
        </div>
    </section>
@endSection


