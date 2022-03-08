@extends('layout.main')

@section('linkhead')
    <title>CV | {{ $title }}</title>
    <link rel="stylesheet" href="assets/css/StyleAbout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap" rel="stylesheet">
@endsection


@section('container')
            <div class="navbar">
                <div class="logo"><a href="../index.html">PORT<span>FOLIO</span></a></div>
                <ul>
                    <li><a class="btn" href="/">Home</a></li>
                    <li><a class="btn active" href="/about">About</a></li>
                    <li><a class="btn" href="/biodata">Biodata</a></li>
                    <li><a class="btn" href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="card">
                <div class="satu">

                    <h1>About</h1>
                    <p><span>H</span>alo semuanya, perkenalkan nama saya {{ $name }} biasa dipanggil {{ $panggilan }}.
                        Saya lahir di
                        {{ $kota }} tanggal {{ $ttl }} dan rumah saya berada di {{ $alamat }}. Hobby saya bermain game. Saya adalah seorang mahasiswa, saat ini saya
                        semester {{ $semester }} di {{ $kuliah }} yang berada di jurusan {{ $jurusan }}.
                    </p>
                    <p><span>S</span>aya mulai menyukai tentang dunia IT mulai dari troubleshooting pc</p>
                    <p><span>S</span>aya mulai belajar web programming pada 18/12/2020 setelah Magang. Saat
                        pertama kali belajar, tidak tau kenapa saya sepertinya suka dengan Web Programming. Begitulah
                        tentang saya yang cukup singkat ini, sekian dari saya dan TERIMA KASIH.</p>
                    <div class="image"></div>
                </div>
            </div>
            <div class="footer">
                <p>
                    ©Copyright 2022 | <a href="https://github.com/renaldi-oss" target="_blank">{{ $name }}</a>
                </p>
            </div>
@endsection