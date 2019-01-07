@extends('layouts.wrapper')

@section('main')
    <section class="login-chart landing">
        <div class="container">
            <div class="search-block">
                <form action="{{route('search')}}">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <input type="text" placeholder="搜尋" name="search">
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


