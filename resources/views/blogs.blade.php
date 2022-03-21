
<!--
    Name:Brett Wolfangel
    Date:12/8/2021
    Project: Laravel Blog
-->


<link rel="stylesheet" href="./resources/css/app.css">
<script src="https://kit.fontawesome.com/5ab40eb841.js" crossorigin="anonymous"></script>

@extends('layout.app')

@section('content')
    <h1>Blogs</h1>
    @foreach ($blogs as $blog)
    
        <a href="/blog/{{$blog->blogID}}">{{$blog->blogTitle}}</a> BY: {{$blog->blogAuthor}}<br>
    
    @endforeach

    <footer>
    <p class=footer-info>Feel free to follow me on social media by clicking the icons below to stay up to date with me!</p>
    <div class="socials">
    <i class="fab fa-facebook-square" height=25px width=25px></i> <i class="fab fa-twitter-square" height=25px width=25px></i> <i class="fab fa-instagram-square" height=25px width=25px></i>
    </div>
    <p>Website Designed by: BRETT WOLFANGEL</p>
    </footer>
@endsection