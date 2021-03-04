<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', '广州珊海电业') }} - 验证界面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="./favicon.ico" rel="shortcut icon">

</head>

<body>
    <!-- 背景图片 -->
    <div id="mview_background" class="phone_not">
        <!-- 请前往 main.css 文件修改 -->
    </div>
    <!-- 登录框 -->
    <div id="mlogin_center">
        <div id="mlogin_left">
            <!-- 内容 -->
            <div id="mlogin_left_context" class="phone_not">
                <h3>欢迎使用</h3>
                <p>广州珊海电业网页后端操作面板</p>
                <p>简单实用</p>

            </div>
            <p class="mlogin_context_footer">
                <span>©2021 广州珊海电业. All rights reserved.</span>
            </p>
            <!-- 登录 -->

            <div id="mlogin_right">
                <div id="mlogin_view">
                    <h4>验证</h4>
                    <p>使用您的 广州珊海电业 账户 </p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                    <div id="mlogin_form">
                        <p>用户名</p>
                        <input id="email" type="email" class="minput" placeholder="账号" name="email" value="{{ old('email') }}" required autofocus>
                        <p>密码</p>
                        <input id="password" type="password" class="minput" placeholder="密码" name="password" required>

                        <button type="submit" id="login-button" class="mbutton">{{ __('验证') }}</button>

                        <a href="#" class="mlogin_forge" onclick="alert('请联系管理员更改密码')">
                            忘记密码?
                        </a>

                    </div>
                    </form>

                    <p class="mlogin_context_footer phone">
                        <span>©2021 广州珊海电业. All rights reserved.</span>
                    </p>
                </div>
            </div>

        </div>

    </div>


</body>
<script type="text/javascript" src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/URL.js')}}"></script>
<script type="text/javascript" src="{{asset('js/md5.js')}}"></script>
<script type="text/javascript" src="{{asset('js/login.js')}}"></script>


</html>
