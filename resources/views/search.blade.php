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
                            <li>排行榜</li>
                            <li>新發行</li>
                            <li>曲風情境</li>
                        </ul>
                    </div>
                    <div class="plate">
                        <div class="plate-title">
                            <h3>每天新推薦</h3>
                            <div class="prev-next"><span class="prev"><i class="icon-chevron-thin-left"></i></span><span class="next"><i class="icon-chevron-thin-right"></i></span></div>
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
                            <h3>連假結束前，微微感傷</h3>
                            <div class="prev-next"><span class="prev"><i class="icon-chevron-thin-left"></i></span><span class="next"><i class="icon-chevron-thin-right"></i></span></div>
                        </div>
                        <div class="card-list five-col">
                            <div class="card">
                                <a class="card-img" href="#!"><img src="{{secure_asset('assets/img/h01.jpg')}}" alt="冬季微釀特調：放鬆解壓R&B靈魂樂"></a>
                                <div class="card-body">
                                    <a class="card-title" href="#!">冬季微釀特調：放鬆解壓R&B靈魂樂</a>
                                    <a class="card-editor" href="#!">Tower da Funkmasta</a>
                                </div>
                            </div>
                            <div class="card">
                                <a class="card-img" href="#!"><img src="{{secure_asset('assets/img/h02.jpg')}}" alt="夜裏，偶爾還是會想念。"></a>
                                <div class="card-body">
                                    <a class="card-title" href="#!">夜裏，偶爾還是會想念。</a>
                                    <a class="card-editor" href="#!">KKBOX 西洋小編</a>
                                </div>
                            </div>
                            <div class="card">
                                <a class="card-img" href="#!"><img src="{{secure_asset('assets/img/h03.jpg')}}" alt="只是想好好被抱一抱  夜深人靜時來點療傷暖心歌曲"></a>
                                <div class="card-body">
                                    <a class="card-title" href="#!">只是想好好被抱一抱  夜深人靜時來點療傷暖心歌曲</a>
                                    <a class="card-editor" href="#!">政大之聲 VNCCU</a>
                                </div>
                            </div>
                            <div class="card">
                                <a class="card-img" href="#!"><img src="{{secure_asset('assets/img/h04.jpg')}}" alt="失眠的夜還有音樂陪伴"></a>
                                <div class="card-body">
                                    <a class="card-title" href="#!">失眠的夜還有音樂陪伴</a>
                                    <a class="card-editor" href="#!">azo</a>
                                </div>
                            </div>
                            <div class="card">
                                <a class="card-img" href="#!"><img src="{{secure_asset('assets/img/h05.jpg')}}" alt="冬季微釀特調：放鬆解壓R&B靈魂樂"></a>
                                <div class="card-body">
                                    <a class="card-title" href="#!">冬季微釀特調：放鬆解壓R&B靈魂樂</a>
                                    <a class="card-editor" href="#!">Tower da Funkmasta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plate news">
                        <div class="plate-title">
                            <h3>音樂頭條</h3>
                            <div class="prev-next"><span class="prev"><i class="icon-chevron-thin-left"></i></span><span class="next"><i class="icon-chevron-thin-right"></i></span></div>
                        </div>
                        <div class="card-list three-col">
                            <div class="card">
                                <a class="card-img" href="#!"><img src="{{secure_asset('assets/img/n01.jpg')}}" alt="【懶人包】魔力紅與傑森瑪耶茲接力開唱，2019年西洋演唱會總整理！"></a>
                                <div class="card-body">
                                    <a class="card-title" href="#!">【懶人包】魔力紅與傑森瑪耶茲接力開唱，2019年西洋演唱會總整理！</a>
                                    <p>
                                        2018年有席琳狄翁、槍與玫瑰、瑪麗亞凱莉與Dua Lipa等西洋巨星降臨台灣，讓台灣的西洋粉絲幸福不已，而時序已來到2019年，依然有許多西洋歌手來台開唱，例如：首度在世運…
                                    </p>
                                    <a class="card-editor" href="#!">影楊 (yin) · 16 小時</a>
                                </div>
                            </div>
                            <div class="card">
                                <a class="card-img" href="#!"><img src="{{secure_asset('assets/img/n02.jpg')}}" alt="等了20年！皇后合唱團吉他手Brian May 與NASA元旦推新歌"></a>
                                <div class="card-body">
                                    <a class="card-title" href="#!">等了20年！皇后合唱團吉他手Brian May 與NASA元旦推新歌</a>
                                    <p>
                                        二十年磨一劍！皇后合唱團（Queen）吉他手布萊恩梅（Brian May）即將於2019年的元旦當天，推出睽違20年的個人全新單曲〈New Horizon〉，消息一出令樂迷們興奮不已。特…
                                    </p>
                                    <a class="card-editor" href="#!">Daniel C. · 2019/01/01</a>
                                </div>
                            </div>
                            <div class="card">
                                <a class="card-img" href="#!"><img src="{{secure_asset('assets/img/n03.jpg')}}" alt="蔡依林〈怪美的〉空降奪冠！頑童MJ116鑲金後自嘲〈騙吃騙吃〉"></a>
                                <div class="card-body">
                                    <a class="card-title" href="#!">蔡依林〈怪美的〉空降奪冠！頑童MJ116鑲金後自嘲〈騙吃騙吃〉</a>
                                    <p>
                                        Jolin蔡依林睽違四年推出新專輯《Ugly Beauty》，首波主打〈怪美的〉不僅MV上線YouTube後，迅速破百萬點擊，本週更空降KKBOX華語新歌週榜冠軍！其實早在《Ugly…
                                    </p>
                                    <a class="card-editor" href="#!">KKBOX編輯室 · 2018/12/31</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fixed-col">
                    <div class="logo">
                        <img src="{{secure_asset('assets/img/logo-white.svg" alt="">
                    </div>
                    <div class="search-block">
                        <form action="result.html">
                            <input type="text" placeholder="搜尋"><button><span class="sr-only">搜尋</span></button>
                        </form>
                    </div>
                    <div class="list-block">
                        <div>
                            <ul class="online">
                                <li>線上精選</li>
                                <li>一起聽</li>
                                <li>頻道</li>
                                <li>電台</li>
                            </ul>
                            <ul class="library">
                                <li>我的音樂庫
                                <li>全部歌曲
                                <li>可離線播放歌曲</li>
                            </ul>
                            <ul class="collect">
                                <li>我的收藏
                                <li>收藏歌曲</li>
                            </ul>
                            <ul class="playlist">
                                <li>我的歌單<span>＋</span></li>
                                <li>我的歌單I</li>
                                <li>我的歌單II</li>
                                <li>我的歌單III</li>
                                <li>我的歌單IV</li>
                                <li>我的歌單V</li>
                                <li>我的歌單VI</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection

