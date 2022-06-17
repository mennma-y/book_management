@extends('layouts.app')

@section('title','書籍一覧画面')


@section('content')
    <div class="main-title">
        <h2 style="margin-bottom: 30px;">書籍一覧</h2>
    </div>
    <form>
        <div class="form-group search-box">
            <input  type="text" class="form-control keyword" id="keyword" name="keyword" placeholder="キーワード">
            <button type="submit" class="btn btn-primary keyword-button">検索ボタン</button>
        </div>
    </form>
        
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">走れメロス</h4>
            <a style="font-size:15px;" href="#">https://www.aozora.gr.jp/cards/000035/files/1567_14913.html</a>
            <a href="#" class="btn btn-primary" style="padding: 10px;">編集ボタン</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">ハリーポッターと賢者の石</h4>
            <a style="font-size:15px;" href="#">https://www.aozora.gr.jp/cards/000035/files/1567_14913.html</a>
            <a href="#" class="btn btn-primary" style="padding: 10px;">編集ボタン</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">走れメロス</h4>
            <a style="font-size:15px;" href="#">https://www.aozora.gr.jp/cards/000035/files/1567_14913.html</a>
            <a href="#" class="btn btn-primary" style="padding: 10px;">編集ボタン</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">走れメロス</h4>
            <a style="font-size:15px;" href="#">https://www.aozora.gr.jp/cards/000035/files/1567_14913.html</a>
            <a href="#" class="btn btn-primary" style="padding: 10px;">編集ボタン</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">走れメロス</h4>
            <a style="font-size:15px;" href="#">https://www.aozora.gr.jp/cards/000035/files/1567_14913.html</a>
            <a href="#" class="btn btn-primary" style="padding: 10px;">編集ボタン</a>
        </div>
    </div>
    
@endsection
