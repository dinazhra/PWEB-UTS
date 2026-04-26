@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="welcome-banner">
    <h2>Selamat Datang, {{ $username }} 👋</h2>
    <p>Kelola produk dan pantau stok AgroMart dari sini!</p>
</div>
<div class="card">
    <div class="card-header">
        <h1 class="title">About AgroMart Pupuqu!</h1>
        <p class="deskripsi">
            AgroMart Pupuqu hadir sebagai platform pengelolaan toko pupuk yang modern untuk <br>
            membantu petani untuk mendapatkan produk pertanian berkualitas dengan mudah.
        </p>
    </div>
    <p class="subtitle">Apa yang kami tawarkan untuk pertanian Indonesia? </p>
        
    <div class="fitur-container">
        <div class="fitur">
            <img class="fitur-img" src="{{ asset('images/gb1.jpg') }}" alt="Produk Berkualitas">
            <div class="fitur-body">
                <h3>Produk Berkualitas</h3>
                <p>Menyediakan pupuk pilihan yang telah teruji dan terpercaya untuk mendukung hasil panen optimal.</p>
            </div>
        </div>

        <div class="fitur">
            <img class="fitur-img" src="{{ asset('images/bg2.jpg') }}" alt="Mendukung Petani">
            <div class="fitur-body">
                <h3>Mendukung Petani</h3>
                <p>Membantu para petani Indonesia agar mendapatkan akses produk pertanian dengan harga terjangkau.</p>
            </div>
        </div>

        <div class="fitur">
            <img class="fitur-img" src="{{ asset('images/gb3.jpg') }}" alt="Pengelolaan Mudah">
            <div class="fitur-body">
                <h3>Pengelolaan Mudah</h3>
                <p>Sistem dirancang agar mudah diakses bagi seluruh petani di Indonesia.</p>
            </div>
        </div>
    </div>
</div>
@endsection