@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>ようこそ、{{ Auth::user()->userid }}さん！</h2>
                    <h2>todoリストへ進みましょう！</h2>
                </div>
                
                <div class="btn">
                    [<a href="/goals/create">todoリストへ</a>]
                </div>
                <h5>ログアウトは右上から</h5>
            </div>
        </div>
    </div>
</div>
@endsection
