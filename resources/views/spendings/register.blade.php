<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>家計簿</title>
        
    </head>
    @extends('layouts.app')
    
    @section('content')
        <body>
            <h1>家計簿登録画面</h1>
            <form action='\spendings', method='POST'>
                @csrf
                <h2>購入品</h2>
                <div class='name'>
                    <p>商品名：<input type="text" name="spending[name]" placeholder="カルピス"/></p>
                </div>
                <div class='price'>
                    <p>値段：<input type="number" name="spending[price]" placeholder=1000></p>
                </div>
                <div class='category'>
                    <P>項目：
                    <select name="spending[category_id]">
                        <option value="">項目を選択して下さい</option>
                        <option value="food">食費</option>
                        <option value="necessities">日用品</option>
                        <option value="transportation">交通費</option>
                        <option value="social">交際費</option>
                        <option value="hobby">娯楽</option>
                        <option value="rent">家賃</option>
                        <option value="utility">光熱費</option>
                        <option value="communication">通信費</option>
                        <option value="other">その他</option>
                    </select>
                    </P>
                </div>
                <input type="submit" value="登録"/>
            </form>
            <div class="back"><a href="/top">戻る</a></div>
        </body>
    @endsection
</html>
