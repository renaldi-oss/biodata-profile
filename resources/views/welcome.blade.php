@extends('layout.main')

@section('linkhead')
    <title>CV | {{ $title }}</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap" rel="stylesheet">
@endsection
@section('container')
<div class="hero">
    <img src="assets/img/{{ $gambarku }}" alt="aldiiiiiii">
</div>
<div class="navbar">
    <div class="logo"><a href="index.html">PORT<span>FOLIO</span></a></div>
    <ul>
        <li><a class="btn active" href="/">Home</a></li>
        <li><a class="btn" href="/about">About</a></li>
        <li><a class="btn" href="/biodata">Biodata</a></li>
        <li><a class="btn" href="/contact">Contact</a></li>
    </ul>
</div>
<div class="heading">
    <h5>Hallo, Perkenalkan Nama Saya</h6>
        <br>
        <h1>{{ $name }}</h1>
        <br>
        <p>Saya adalah seorang pelajar {{ $kuliah }}. ini web pemrogaman berbasis framework laravel pertama yang saya buat
        </p>
</div>
<div class="footer">
    <p>
        ©Copyright 2022 | <a href="https://github.com/renaldi-oss" target="_blank">{{ $name }}</a>
    </p>
</div>
@endsection