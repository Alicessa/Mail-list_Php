<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <title>登陆页面</title>
    <link rel="stylesheet" href="/dist/css/style.css">
</head>

<body>
    <form action="/Users/add" method="POST">
        @csrf
    <div class="dowebok">
        <div class="container">
            <div class="left">
                <div class="login">注册</div>
                <div class="eula">欢迎光临，请输入您的用户名和密码以注册！</div>
            </div>
            <div class="right">
                <svg viewBox="0 0 320 350">
                    <defs>
                        <linearGradient inkscape:collect="always" id="linearGradient" x1="13" y1="193.49992" x2="307"
                            y2="193.49992" gradientUnits="userSpaceOnUse">
                            <stop style="stop-color:#ff00ff;" offset="0" id="stop876" />
                            <stop style="stop-color:#ff0000;" offset="1" id="stop878" />
                        </linearGradient>
                    </defs>
                    <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
                </svg>
                <div class="form">
                    <label for="username">用户名</label>
                    <input type="username" id="username" name="username">
                    <label for="password">密码</label>
                    <input type="password" id="password" name="password">
                    <label for="password">用户类型</label>
                    <input type="text" id="role" name="role">
                    <input type="submit" id="submit" value="注册">
                </div>
            </div>
        </div>
    </div>
</form>
    <ul>
        @if ($errors->any())
      @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>  
    @endif
        <script src="/dist/js/anime.min.js">
        <script src="/dist/js/index.js">

    <div style="display: none"><a href="http://www.dowebok.com/">dowebok</a></div>
</body>

</html>