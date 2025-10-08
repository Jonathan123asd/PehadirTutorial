@extends('layouts.app')
@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Penggunaan Fitur Logout Pada Aplikasi Pehadir AI</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <b>Logout</b> merupakan fitur yang digunakan untuk keluar dari akun pengguna guna mengakhiri sesi penggunaan serta menjaga keamanan data pengguna.
                        Pastikan Anda melakukan logout setiap kali selesai menggunakan aplikasi untuk menjaga kerahasiaan akun.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row g-4">

        {{-- Step 1 --}}
        <div class="col-12">
            <h4 class="fw-semibold">1. Buka Aplikasi Pehadir AI</h4>
            <ul>
                <li>Buka aplikasi <b>Pehadir AI</b> pada perangkat Anda.</li>
                <li>Pastikan Anda sudah login ke akun karyawan yang aktif.</li>
            </ul>
        </div>

        {{-- Step 2 --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Pilih Menu Logout</h4>
            <ul>
                <li>Pada halaman utama aplikasi, pilih menu <b>“Logout”</b> yang ditandai dengan ikon <b>panah keluar berwarna merah</b>.</li>
                <li>Fitur ini biasanya berada di bagian bawah daftar menu aplikasi.</li>
            </ul>
            <img class="img-custom-dekstop" src="{{ asset('assets/img/ai/fiturMenuLogout/1.png') }}" alt="Menu Logout Pehadir AI">
        </div>

        {{-- Step 3 --}}
        <div class="col-12">
            <h4 class="fw-semibold">3. Konfirmasi Logout Berhasil</h4>
            <ul>
                <li>Setelah menekan menu <b>Logout</b>, Anda akan otomatis keluar dari akun aplikasi.</li>
                <li>Akan muncul notifikasi <b>“Berhasil Keluar”</b> yang menandakan proses logout telah sukses.</li>
                <li>Anda akan diarahkan kembali ke halaman login aplikasi.</li>
            </ul>
            <img class="img-custom-dekstop" src="{{ asset('assets/img/ai/fiturMenuLogout/2.png') }}" alt="Logout Berhasil Pehadir AI">
        </div>

    </div>
</section>
@endsection
