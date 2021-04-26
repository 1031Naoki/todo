<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Todo</title>
        <!-- CSSの読み込み -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <h1 class="title">TodoList</h1>
         @if (Route::has('login'))
                <div class="login_links">
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
    
        <h3>すること</h3>
        <div class='todolist'>
            @foreach ($goals as $goal)
                <form action="/goals/{{ $goal->id }}" method="POST">
                @csrf
                @method('DELETE')
                    <div class='goals'>
                        <ul>
                            <li class='goal'>{{ $goal->goal }}<button class="deletebtn" type="submit">削除</button></li>
                        </ul>
                    </div>
                </form>
            @endforeach
            </div>
        <form action="/goals" method="POST">
            @csrf
            <div>
                <input type="text" name="goal[goal]" placeholder="することを記入"/>
                <p class="goal_error">{{ $errors->first('goal.goal') }}</p>
            </div>
            <input type="submit" value="追加"/>
        </form>
        
        <div class="logout_link">
            <a class="btn logout" href="{{ url('/home') }}">ログアウト</a>
        </div>
    </body>
</html>