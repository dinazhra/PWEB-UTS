@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="login-wrap">
    <div class="left-panel">
        <div>
            <div class="brand-logo">
                <div>
                    <div class="logo-text">AgroMart</div>
                    <div class="logo-sub">Pupuqu</div>
                </div>
            </div>
            <div class="brand-desc">
                Kelola toko pupuk<br>dengan <em>lebih mudah</em>
            </div>
            <p class="brand-desc">
                Platform pengelolaan toko pertanian modern untuk petani Indonesia.
            </p>
        </div>

        <div class="feature-pills">
            <div class="pill">
                <div class="pill-icon">🌾</div>
                <div>
                    <div class="pill-text">Produk Berkualitas</div>
                    <div class="pill-sub">Pupuk pilihan teruji & terpercaya</div>
                </div>
            </div>
            <div class="pill">
                <div class="pill-icon">📦</div>
                <div>
                    <div class="pill-text">Pengelolaan Stok</div>
                    <div class="pill-sub">Monitor real-time</div>
                </div>
            </div>
            <div class="pill">
                <div class="pill-icon">⚡</div>
                <div>
                    <div class="pill-text">Akses Mudah</div>
                    <div class="pill-sub">Sistem mudah & responsif</div>
                </div>
            </div>
        </div>
    </div>

    <div class="right-panel">
        <div class="form-eyebrow">Selamat Datang</div>
        <div class="form-title">Masuk ke Akun</div>
        <p class="form-subtitle">Masukkan username dan password untuk mengakses website.</p>

        @if ($errors->any())
            <div class="alert-error">
                ⚠️ {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="/dashboard">
            @csrf 
            <div class="field-group">
                <label class="field-label">Username</label>
                <div class="field-wrap">
                    <span class="field-icon">👤</span>
                    <input
                        type="text"
                        name="username"
                        class="field-input"
                        placeholder="Masukkan username"
                        value="{{ old('username') }}"
                        autocomplete="username">
                </div>
            </div>
            <div class="field-group">
                <label class="field-label">Password</label>
                <div class="field-wrap">
                    <span class="field-icon">🔒</span>
                    <input 
                        type="password"
                        name="password"
                        class="field-input"
                        placeholder="Masukkan password"
                        autocomplete="current-password">
                </div>
            </div>
            <button type="submit" class="btn-login">
                Login →
            </button>
        </form>
    </div>
</div>