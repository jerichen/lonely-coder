@extends('layouts.wrapper')

@section('main')
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="info-col">
                    <div class="title">
                        <h1>線上精選</h1>
                        <ul class="select">
                            <li class="now">精選</li>
                        </ul>
                    </div>

                    <div class="plate">
                        <div class="plate-title">
                            <h3>每天新推薦</h3>
                        </div>
                        <div class="card-list four-col">
                            @foreach ($new_hits_play_lists as $new_hits_play_list)
                                <div class="card">
                                    <a class="card-img" href="{{$new_hits_play_list['url']}}"><img src="{{$new_hits_play_list['images'][0]['url']}}" alt="{{$new_hits_play_list['title']}}"></a>
                                    <div class="card-body">
                                        <a class="card-title" href="{{$new_hits_play_list['url']}}">{{$new_hits_play_list['title']}}</a>
                                        <a class="card-editor" href="{{$new_hits_play_list['owner']['url']}}">{{$new_hits_play_list['owner']['name']}}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="plate">
                        <div class="plate-title">
                            <h3>主題歌單</h3>
                        </div>
                        <div class="card-list five-col">
                            @foreach($featured_playlists['data'] as $key => $val)
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
                        </div>
                    </div>
                    <div class="plate news">
                        <div class="plate-title">
                            <h3>音樂排行榜</h3>
                        </div>
                        <div class="card-list three-col">
                            @for($i=0; $i<5; $i++)
                                <div class="card">
                                    <a class="card-img" href="{{$charts['data'][$i]['url']}}">
                                        <img src="{{$charts['data'][$i]['images'][0]['url']}}" alt="{{$charts['data'][$i]['title']}}">
                                    </a>
                                    <div class="card-body">
                                        <a class="card-title" href="{{$charts['data'][$i]['url']}}">{{$charts['data'][$i]['title']}}</a>
                                        <a class="card-editor" href="{{$charts['data'][$i]['owner']['url']}}">{{$charts['data'][$i]['owner']['name']}}</a>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="fixed-col">
                    <div class="logo">
                        <h1>Hello {{$user['name']}}</h1>
                        <img src="{{secure_asset('assets/img/logo-white.svg')}}" alt="">
                    </div>
                    <div class="search-block">
                        <form action="{{route('search')}}" method="get">
                            {{ csrf_field() }}
                            <input type="text" placeholder="搜尋" name="search">
                            <button>
                                <span class="sr-only">搜尋</span>
                            </button>
                        </form>
                    </div>
                    <div class="list-block">
                        <div>
                            <ul class="online">
                                <li>線上精選</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection

