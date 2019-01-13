@extends('layouts.wrapper')

@section('main')
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="info-col">
                    <div class="title">
                        <h1>搜尋結果</h1>
                        <ul class="select">
                            <li class="now">搜尋結果</li>
                        </ul>
                    </div>

                    <div class="plate">
                        <div class="plate-title">
                            <h3>專輯</h3>
                        </div>
                        <div class="card-list four-col">
                            @if(isset($albums['data']))
                                @foreach($albums['data'] as $key => $val)
                                    <div class="card">
                                        <a class="card-img" href="{{$val['url']}}">
                                            <img src="{{$val['images'][0]['url']}}" alt="{{$val['name']}}">
                                        </a>
                                        <div class="card-body">
                                            <a class="card-title" href="{{$val['url']}}">{{$val['name']}}</a>
                                            <a class="card-editor" href="{{$val['artist']['url']}}">{{$val['artist']['name']}}</a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="plate">
                        <div class="plate-title">
                            <h3>歌手</h3>
                        </div>
                        <div class="card-list five-col">
                            @if(isset($artists['data']))
                                @foreach($artists['data'] as $key => $val)
                                    <div class="card">
                                        <a class="card-img" href="{{$val['url']}}">
                                            <img src="{{$val['images'][0]['url']}}" alt="{{$val['name']}}">
                                        </a>
                                        <div class="card-body">
                                            <a class="card-title" href="{{$val['url']}}">{{$val['name']}}</a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="plate news">
                        <div class="plate-title">
                            <h3>歌單</h3>
                        </div>
                        <div class="card-list three-col">
                            @if(isset($playlists['data']))
                                @foreach($playlists['data'] as $key => $val)
                                    <div class="card">
                                        <a class="card-img" href="{{$val['url']}}">
                                            <img src="{{$val['images'][0]['url']}}" alt="{{$val['title']}}">
                                        </a>
                                        <div class="card-body">
                                            <a class="card-title" href="{{$val['url']}}">{{$val['title']}}</a>
                                            <a class="card-editor" href="{{$val['owner']['url']}}">{{$val['owner']['name']}}</a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="fixed-col">
                    <div class="search-block">
                        <form action="{{route('search')}}" method="get">
                            <input type="text" placeholder="搜尋" name="search">
                            <button>
                                <span class="sr-only">搜尋</span>
                            </button>
                        </form>
                    </div>
                    <div class="list-block">
                        <div>
                            <ul class="online">
                                <li>搜尋結果</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection

