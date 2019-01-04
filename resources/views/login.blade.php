<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=0">
    <title>編猿人</title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500,700|Roboto+Slab:100,300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{secure_asset('assets/css/main.css')}}">
</head>
<body>
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
<script src="{{secure_asset('assets/js/jquery-1.11.3.min.js')}}"></script>
<script src="{{secure_asset('assets/js/main.js')}}"></script>
</body>
</html>

