<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>家計簿</title>
        
    </head>
    @extends('layouts.app')
    
    @section('content')
        <body>
            
            <h1>出費一覧</h1>
            @foreach($categories as $category)
                <div class='spending'>
                    <h3 class=date>{{ $category->created_at }}</h3>
                    <ul class='body'>
                    <li class='food'>食費：{{ $category->food }}</li>
                    <li class='necessities'>日用品：{{ $category->necessities }}</li>
                    <li class='transportatio'>交通費：{{ $category->transportation }}</li>
                    <li class='social'>交際費：{{ $category->social }}</li>
                    <li class='hobby'>娯楽：{{ $category->hobby }}</li>
                    <li class='rent'>家賃：{{ $category->rent }}</li>
                    <li class='utility'>光熱費：{{ $category->utility }}</li>
                    <li class='communication'>通信費：{{ $category->communication }}</li>
                    <li class='other'>その他：{{ $category->other }}</li>
                    </ul>
                </div>
            @endforeach
        </body>
    @endsection
</html>
