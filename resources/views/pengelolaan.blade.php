@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
<h2>Daftar Produk</h2>
<div class="grid-produk">
      @foreach ($produk as $index => $p)
      <div class="card-produk">
          <img src="{{ asset('images/' . $p['gambar']) }}">

          <h3>{{ $p['nama'] }}</h3>
          <p>Rp {{ number_format($p['harga'], 0, ',', '.') }}</p>
          <p>Stok: {{ $p['jumlah'] }}</p>
      </div>  
      @endforeach
<a href="/dashboard?username={{ $username }}" class="button-back">
    <button>← Back </button>
</a>
</div>
@endsection