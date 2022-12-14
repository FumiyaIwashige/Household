<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>HouseholdAccount</title>
    </head>
    <?php
        $number = 9;
        $item_array = array();
        
        for ($i = 0; $i < $number; $i++) {
            $item_array[] = $spendings->where('category_id',$i+1)->sum('cost');
        }
    ?>
    @extends('layouts.app')
    
    @section('content')
        <body>
            <h1>{{ $date['from'] }}から{{ $date['until'] }}の出費</h1>
            <h3>食費：{{ $item_array[0] }}</h3>
            <h3>日用品：{{ $item_array[1] }}</h3>
            <h3>交通費：{{ $item_array[2] }}</h3>
            <h3>交際費：{{ $item_array[3] }}</h3>
            <h3>娯楽：{{ $item_array[4] }}</h3>
            <h3>家賃：{{ $item_array[5] }}</h3>
            <h3>光熱費：{{ $item_array[6] }}</h3>
            <h3>通信費：{{ $item_array[7] }}</h3>
            <h3>その他：{{ $item_array[8] }}</h3>
            <form action='/spendings/edit' method="GET">
                <input type="hidden" name='from' value={{ $date['from'] }}>
                <input type="hidden" name='until' value={{ $date['until'] }}>
                <button type="submit">編集</button>
            </form>
            <div class="back"><a href="/spendings/top">トップに戻る</a></div>
            <div class="edit"><a href="/spendings/edit">編集</a></div>
        </body>
    @endsection
</html>
