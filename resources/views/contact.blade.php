@extends('layout.main')

@section('linkhead')
    <title>CV | {{ $title }}</title>
    <link rel="stylesheet" href="assets\css\StyleBiodata.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap" rel="stylesheet">
@endsection

@section('container')
            <div class="navbar">
                <div class="logo"><a href="../index.html">PORT<span>FOLIO</span></a></div>
                <ul>
                    <li><a class="btn" href="/">Home</a></li>
                    <li><a class="btn" href="/about">About</a></li>
                    <li><a class="btn" href="/biodata">Biodata</a></li>
                    <li><a class="btn active" href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="card">
                <div class="satu">
                    <h1>Contact</h1>
                    <ul>
                        <li>Github : <a href="{{ $github }}" target="_blank">
                            {{ $github }}</a></li>
                        <li>Email : <a href="{{ $email }}">{{ $email }}</a></li>
                        <P>
                            : Resume dan Logonya update Soon ;
                        </p>
                        <h2>:v</h2>
                    </ul>
                </div>
            </div>
            <div class="footer">
                <p>
                    ©Copyright 2022 | <a href="https://github.com/renaldi-oss" target="_blank">{{ $name }}</a>
                </p>
            </div>
@endsection
