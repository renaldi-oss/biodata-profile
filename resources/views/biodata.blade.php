@extends('layout.main')

@section('linkhead')
    <title>CV | {{ $title }}</title>
    <link rel="stylesheet" href="assets\css\StyleBiodata.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap" rel="stylesheet">
@endsection

@section('container')
@include('partial.navi')
            <div class="card">
                <div class="satu">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>{{ $name }}</td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td>{{ $umur }}</td>
                        </tr>
                        <tr>
                            <td>tempat dan tanggal lahir</td>
                            <td>{{ $kota }},{{ $ttl }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $alamat }}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>{{ $agama }}</td>
                        </tr>
                        <tr>
                            <td>Kuliah</td>
                            <td>{{ $kuliah }}</td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td>{{ $email }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="footer">
                <p>
                    ©Copyright 2022 | <a href="https://github.com/renaldi-oss" target="_blank">{{ $name }}</a>
                </p>
            </div>
@endsection
