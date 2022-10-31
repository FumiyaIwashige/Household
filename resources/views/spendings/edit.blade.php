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
            
            <table border='1'>
                <tr>
                    <th>商品名</th>
                    <th>費用</th>
                    <th>項目</th>
                    <th>購入日時</th>
                </tr>
                @foreach($spendings as $spending)
                <tr>
                    <th>{{ $spending->name }}</th>
                    <th>{{ $spending->cost }}</th>
                    <th>{{ $spending->category_id }}</th>
                    <th>{{ $spending->created_at }}</th>
                    
                    <!--
                    <th><div class="edit"><a href="/spendings/edit/">編集</a></div></th>
                    -->
                    <th>
                        <form action='/spendings/edit/{{ $spending->id }}' method='GET'>
                        <input type="hidden" name='from' value={{ $date['from'] }}>
                        <input type="hidden" name='until' value={{ $date['until'] }}>
                        <!--
                        <input type='hidden' name='name' value={{ $spending->name }}>
                        <input type='hidden' name='cost' value={{ $spending->cost }}>
                        <input type='hidden' name='category_id' value={{ $spending->category_id }}>
                        -->
                        <button type="submit">編集</button>
                    </form>
                    </th>
                </tr>
                @endforeach
            </table>
            
            <div class="back"><a href="/spendings/top">トップに戻る</a></div>
        </body>
    @endsection
</html>
