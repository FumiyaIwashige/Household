<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>HouseholdAccount</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            [<a href='/spendings/register'>記録</a>]
            <p>過去の家計簿<form action='/spendings/past' method='GET'>
                <input type='date' name='from' placeholder='from date'>
                    <span>~</span>
                <input type='date' name='until' placeholder='until_date'>
                <input type="submit" value="表示"/>
            </form></p>
            <form method="GET" action="">
            <select name="category_id" onchange="submit(this.form)">
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
            </form>
            <h1>今月の出費</h1>
            <h3>食費：{{ $item_array[0] }}</h3>
            <h3>日用品：{{ $item_array[1] }}</h3>
            <h3>交通費：{{ $item_array[2] }}</h3>
            <h3>交際費：{{ $item_array[3] }}</h3>
            <h3>娯楽：{{ $item_array[4] }}</h3>
            <h3>家賃：{{ $item_array[5] }}</h3>
            <h3>光熱費：{{ $item_array[6] }}</h3>
            <h3>通信費：{{ $item_array[7] }}</h3>
            <h3>その他：{{ $item_array[8] }}</h3>
            
            <div>
              <canvas id="myChart"></canvas>
            </div>
            
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            
            <script>
              const labels = [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
              ];
            
              const data = {
                labels: labels,
                datasets: [{
                  label: 'My First dataset',
                  backgroundColor: 'rgb(255, 99, 132)',
                  borderColor: 'rgb(255, 99, 132)',
                  data: [0, 10, 5, 2, 20, 30, 45],
                }]
              };
            
              const config = {
                type: 'line',
                data: data,
                options: {}
              };
            </script>
            
            <script>
              const myChart = new Chart(
                document.getElementById('myChart'),
                config
              );
            </script>
            
        </body>
    @endsection
</html>
