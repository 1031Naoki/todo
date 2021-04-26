<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
                <!-- CSSの読み込み -->
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <h1 class="title">TodoList</h1>
         @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="btn home" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn login" href="{{ route('login') }}">ログイン</a>

                        @if (Route::has('register'))
                            <a class="btn register" href="{{ route('register') }}">新規登録</a>
                        @endif
                    @endauth
                </div>
            @endif
            
        <h2 class="Howto">利用方法</h2>
            <h3 class="Howto_1">その１</h3>
            <ul>
                <li>ユーザーIDを登録</li>
                <li>パスワードを登録</li>
            </ul>
        
            <h3 class="Howto_2">その２</h3>
            <ul>
                <li>すべきことを追加</li>
                <li>達成したら削除</li>
            </ul>
    </body>
</html>