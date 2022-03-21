
<!--
    Name:Brett Wolfangel
    Date:12/8/2021
    Project: Laravel Blog
-->




<link rel="stylesheet" href="./resources/css/app.css">
<style>
    h2{
        text-align: center;
    }
    .blogs{
        text-align: center;
    }
    .title{
        font-size: 25px;
        margin-top: 15px;
    }
    .border{
        border: 2px solid black;
    }
</style>
@extends('layout.app')

@section("content")
<h2>Hello reader!</h2>
<div class="blogs">
<div class="title">{{$blogs->blogTitle}}</div> <br>
<div class="border">{{$blogs->blogAuthor}}<br>
{{$blogs->blogEntry}} </div>
</div>

@endsection