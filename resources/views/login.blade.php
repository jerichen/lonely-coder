<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=0">
    <title>歡迎回來</title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500,700|Roboto+Slab:100,300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{secure_asset('assets/css/main.css')}}">
</head>
<body>
<section class="login-chart login">
    <div class="container">
        <div class="flex">
            <div class="prev-btn" onclick="history.back();">
                <span></span><span></span><span></span>
            </div>
            <h2 class="page-title">
                歡迎回來
            </h2>
            <form action="features.html">
                <label for="id">
                    <span class="label-title">帳號</span>
                    <input type="text" placeholder="">
                </label>
                <label for="pw">
                    <span class="label-title">密碼</span>
                    <input type="password" placeholder="">
                </label>
                <div class="pw-keep">
                    <label for="remember">
                        <input type="radio" id="remember">記住我
                    </label>
                    <a href="find.html" class="forget">忘記密碼？</a>
                </div>
                <button>登入</button>
            </form>
        </div>
    </div>
</section>
<script src="{{secure_asset('assets/js/jquery-1.11.3.min.js')}}"></script>
<script src="{{secure_asset('assets/js/main.js')}}"></script>
</body>
</html>
