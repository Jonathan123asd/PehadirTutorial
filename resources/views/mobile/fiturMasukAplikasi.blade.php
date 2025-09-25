@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Masuk Aplikasi Pehadir dan Mendaftarkan Wajah.</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Pehadir adalah sebuah aplikasi atau platform digital yang digunakan untuk mencatat attendance /
                            kehadiran dengan menggunakan pengenalan wajah (face recognition).
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        {{-- Page Content --}}
        <div class="row g-4">
            <div class="col-12">
                <h4 class="fw-semibold mb-3">1. Installasi Pehadir</h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Buka Play Store</li>
                    <li>Ketik Pehadir pada laman pencarian.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturMasukAplikasi/1-1.png') }}"
                        alt="Fitur Masuk Aplikasi">
                    <li>Lalu klik install.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturMasukAplikasi/1-2.png') }}"
                        alt="Fitur Masuk Aplikasi">
                </ul>
            </div>
            <div class="col-12">
                <h4 class="fw-semibold mb-3">2. Login Pada Aplikasi Pehadir</h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Masukkan email dan kata sandi Anda</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturMasukAplikasi/2.png') }}"
                        alt="Fitur Masuk Aplikasi">
                    <li>Klik Login</li>
                </ul>
            </div>
            <div class="col-12">
                <h4 class="fw-semibold mb-3">3. Mendaftarkan Wajah</h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Masuk ke Menu <b>Account</b> dan pencet <b>Attendance Registration</b></li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturMasukAplikasi/3-1.jpg') }}"
                        alt="Fitur Masuk Aplikasi">
                    <li>Lalu klik pada <b>icon Camera</b> di atas untuk mengScan gambar wajah kalian dan samakan pada kerangka yang
                        ada di layar SmartPhone, klik tanda Save agar user kalian terbaca.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturMasukAplikasi/3-2.png') }}"
                        alt="Fitur Masuk Aplikasi">
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturMasukAplikasi/3-3.png') }}"
                        alt="Fitur Masuk Aplikasi">
                </ul>
            </div>
            <div class="col-12">
                <h4 class="fw-semibold mb-3">4. Gagal Mengirim Rekaman Kehadiran ke Server</h4>
                <p>Aplikasi Pehadir dirancang untuk mencatat kehadiran secara <b>real-time</b> melalui koneksi internet. Oleh
                    karena itu, pencatatan kehadiran hanya dapat dilakukan saat perangkat terhubung dengan jaringan yang
                    stabil.</p>
                <p>Jika saat melakukan absensi muncul noifikasi gagal terkirim, kemungkinan disebabkan oleh:</p>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li><b>Tidak ada koneksi internet</b> saat proses absensi.</li>
                    <li><b>Jaringan tidak stabil</b> atau lambat.</li>
                    <li>Server sedang mengalami gangguan teknis.</li>
                </ul>
            </div>
            <div class="col-12">
                <h4 class="fw-semibold mb-3">5. Mengatasi masalah rekaman kehadiran</h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Pastikan perangkat Anda <b>terhubung ke Internet</b>.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturMasukAplikasi/4.png') }}"
                        alt="Fitur Masuk Aplikasi">
                    <li>Cek kestabilan jaringan (gunakan Wi-Fi atau data seluler yang stabil)</li>
                    <li>Hubungi <b>admin atau tim teknis Pehadir</b> jika masalah masih terus berlanjut.</li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
