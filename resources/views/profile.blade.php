@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="profil-wrap">
  <div class="profil-left">
    <img src="{{ asset('images/profil.jpg') }}" class="pp">
    <div class="profil-name">{{ $username }}</div>
    <div class="profil-role">Admin AgroMart</div>
    <div class="profil-badge"> ⭐ Admin</div>
  </div>

  <div class="profil-right">
    <div class="profil-right-title">Tentang Akun</div>
    <p class="profil-desc">
      Anda adalah pengelolasistem AgroMart yang bertanggung jawab dalam pengelolaan
      produk dan memastikan seluruh sistem operasional berjalan dengan baik.
    </p>
    <div class="profil-tags">
      <span class="tag">👤 Admin</span>
      <span class="tag">🌿 AgroMart</span>
      <span class="tag">⚡ Full Access</span>
    </div>
    <div class="profil-info-grid">
      <div class="profil-info-box">
        <div class="profil-info-label">Username</div>
        <div class="profil-info-val">{{ $username }}</div>
      </div>
      <div class="profil-info-box">
        <div class="profil-info-label">Role</div>
        <div class="profil-info-val">Admin</div>
      </div>
      <div class="profil-info-box">
        <div class="profil-info-label">Status</div>
        <div class="profil-info-val"><span class="active-pill"> ● Active</span></div>
      </div>
    </div>
    <a href="/dashboard?username={{ $username }}" class="button-back">
      <button>← Back</button>
    </a>
  </div>
</div>
@endsection