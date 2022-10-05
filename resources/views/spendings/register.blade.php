<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>HouseholdAccount</title>
        
    </head>
    @extends('layouts.app')
    
    @section('content')
        <body>
            <h1>家計簿登録画面</h1>
            <form action='/spendings/top', method='POST'>
                
                @csrf
                <h2>購入品</h2>
                <div class='name'>
                    <input type="text" name="spending[name]" placeholder="カルピス"/>
                </div>
                <div class='cost'>
                    <input type="number" name="spending[cost]" placeholder=1000>
                </div>
                <div class='category'>
                     <select name="spending[category_id]">
                        <option value="">項目を選択して下さい</option>
                        <option value=1>食費</option>
                        <option value=2>日用品</option>
                        <option value=3>交通費</option>
                        <option value=4>交際費</option>
                        <option value=5>娯楽</option>
                        <option value=6>家賃</option>
                        <option value=7>光熱費</option>
                        <option value=8>通信費</option>
                        <option value=9>その他</option>
                    </select>
                </div>
                <input type="submit" value="登録"/>
                
            </form>
            <div class="back"><a href="/spendings/top">戻る</a></div>
        </body>
    @endsection
</html>
