@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Mereset Password / Lupa Kata Sandi Pada Aplikasi Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Fitur <b>Reset Password</b> digunakan ketika pengguna lupa kata
                            sandi agar bisa mengakses kembali akun pada aplikasi Pehadir.</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        {{-- Page Content --}}
        <div class="row g-4">
            <div class="col-12">
                <h4 class="fw-semibold mb-3">1. Cara Mereset <b>Password</b></h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Pada halaman utama Pehadir Anda, akan melihat kolom untuk mengisi email dan password.</li>
                    <li>Bila Anda lupa password, pilih menu <b>Reset Password</b> di bagian bawah layar.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturResetPassword/1.png') }}"
                        alt="Fitur Leave">
                    <li>Masukkan email yang terdaftar, lalu Klik <b>Reset password</b>.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturResetPassword/2.png') }}"
                        alt="Fitur Leave">
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturResetPassword/3.png') }}"
                        alt="Fitur Leave">
                    <li>Sistem akan megirimkan Link atau Instruksi reset password ke email Anda.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturResetPassword/4.png') }}"
                        alt="Fitur Leave">
                    <li>Klik tombol <b>Reset Password</b> untuk melanjutkan proses.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturResetPassword/5.png') }}"
                        alt="Fitur Leave">
                    <li>Setelah itu, Anda akan diarahkan ke <b>halaman Setel Ulang Kata Sandi</b>. Masukkan kata sandi baru
                        dan konfirmasi. Lalu klik tombol setel <b>ulang kata sandi</b>.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturResetPassword/6.png') }}"
                        alt="Fitur Leave">
                    <li>Sekarang Anda dapat login kembali ke aplikasi menggunakan kata sandi baru.</li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
