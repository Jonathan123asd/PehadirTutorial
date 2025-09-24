@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Mengubah Kata Sandi (Password) Pada Aplikasi Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Fitur Change Password</b> berfungsi untuk mengganti kata sandi (password) akun pengguna. Fitur ini penting untuk menjaga keamanan akun agar tidak disalahgunakan oleh pihak lain.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Buka aplikasi <b>Pehadir</b> dan pastikan berada di menu <b>Home</b>. Selanjutnya klik menu <b>Account.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masukan <b>Email</b> dan <b>Kata Sandi</b> Anda, lalu klik <b>Login.</b></li>
                    <li><i class="bi bi-dot"></i> Setelah berhasil masuk ke beranda aplikasi, pilih menu <b>Account.</b></li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturUbahKataSandi/sandi1.png') }}" alt="Fitur Ubah Kata Sandi">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Pilih menu <b>Change Password</b> untuk mengganti kata sandi Anda.</h4>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturUbahKataSandi/sandi2.png') }}" alt="Fitur Ubah Kata Sandi">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Pada menu <b>Change Password.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Password Lama (Current Password).</li>
                    <li><i class="bi bi-dot"></i> Password Baru (New Password).</li>
                    <li><i class="bi bi-dot"></i> Konfirmasi Password Baru (Confirm Password).</li>
                    <li><b>Ikon mata (<i class="bi bi-eye-fill"></i>)</b> digunakan untuk menampilkan atau menyembunyikan karakter password.</li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturUbahKataSandi/sandi3.png') }}" alt="Fitur Ubah Kata Sandi">
                    </div>
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturUbahKataSandi/sandi4.png') }}" alt="Fitur Ubah Kata Sandi">
                    </div>
                </div>
                <ul>
                    <li>Hasil Akhir:</li>
                    <li>Tombol <b>Save</b> Klik tombol ini untuk menyimpan perubahan password setelah semua kolom terisi dengan benar.</li>
                    <li><i class="bi bi-dot"></i> Jika berhasil, akan muncul notifikasi bahwa password telah diperbarui.</li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
