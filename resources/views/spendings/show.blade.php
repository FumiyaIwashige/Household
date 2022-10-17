<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>HouseholdAccount</title>
        
    </head>
    @extends('layouts.app')
    
    @section('content')
        <body>
            <h1>家計簿編集画面</h1>
            <form action='/spendings/edit/{{ $spending_inf->id }}', method='POST'>
                @csrf
                @method('PUT')
                <input name="_method" type="hidden" value="PUT">
                <h2>購入品</h2>
                <div class='name'>
                    <p>商品名：<input type="text" name="spending[name]" value="{{ old('spending.name') }}"/></p>
                </div>
                <div class='cost'>
                    <p>値段：<input type="number" name="spending[cost]" value="{{ old('spending.cost') }}"></p>
                    <p class="title__error" style="color:red">{{ $errors->first('spending.cost') }}</p>
                </div>
                <div class='category'>
                    <p>項目：<select name="spending[category_id]" value="{{ old('spending.category_id') }}">
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
                    </select></p>
                </div>
                <p class="title__error" style="color:red">{{ $errors->first('spending.category_id') }}</p>
                <input type="submit" value="登録"/>
                
            </form>
            <div class="back"><a href="/spendings/top">トップに戻る</a></div>
        </body>
    @endsection
</html>
