@extends('layouts.app')
@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Penggunaan Fitur Absen Masuk Pada Aplikasi Pehadir</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <b>Absen Masuk</b> adalah proses pencatatan waktu kehadiran karyawan saat memulai jam kerja.
                        Pada sistem digital seperti aplikasi absensi berbasis wajah, Absen Masuk dilakukan dengan cara
                        <b>memindai wajah pengguna</b> sebagai bentuk verifikasi identitas.
                        <br><br>
                        Data waktu kehadiran yang terekam akan masuk secara otomatis ke dalam sistem,
                        sehingga perusahaan dapat memantau kedisiplinan dan jam kerja karyawan secara akurat dan real-time.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row g-4">

        {{-- Step 1 --}}
        <div class="col-12">
            <h4 class="fw-semibold">1. Login ke Aplikasi Pehadir AI</h4>
            <ul>
                <li>Buka aplikasi <b>Pehadir AI</b> di perangkat Anda.</li>
                <li>Setelah berhasil login, tekan tombol <b>“Absen Masuk”</b> ketika Anda mulai bekerja untuk mencatat kehadiran secara otomatis menggunakan teknologi pengenalan wajah.</li>
            </ul>
            <img class="img-custom-dekstop " src="{{ asset('assets/img/ai/fiturAbsenMasuk/1.png') }}" alt="Halaman Absen Masuk">
        </div>

        {{-- Step 2 --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Fitur-fitur yang Tersedia</h4>
            <ul>
                <li><b>Pemetaan Wajah (Mesh Merah):</b> Sistem akan menampilkan garis-garis merah berbentuk jaringan pada wajah untuk menunjukkan bahwa wajah berhasil dikenali dan terdeteksi dengan baik.</li>
                <li><b>Tombol Arah (Kiri Bawah):</b> Digunakan untuk mengatur ulang atau mengganti arah kamera jika diperlukan.</li>
                <li><b>Tombol Pause:</b> Untuk menjeda proses pendeteksian wajah sementara waktu.</li>
            </ul>
            <img class="img-custom-dekstop " src="{{ asset('assets/img/ai/fiturAbsenMasuk/2.png') }}" alt="Fitur Absen Masuk">
        </div>

        {{-- Step 3 --}}
        <div class="col-12">
            <h4 class="fw-semibold">3. Data Pribadi Akan Muncul Otomatis</h4>
            <ul>
                <li>Setelah wajah berhasil dikenali, <b>data pribadi Anda</b> akan muncul secara otomatis di layar.</li>
                <li>Pastikan semua data yang tampil sudah benar dan sesuai.</li>
                <li>Jika sudah benar, klik tombol <b>“Absen Masuk”</b> di bagian bawah untuk mencatat kehadiran.</li>
            </ul>
            <img class="img-custom-dekstop " src="{{ asset('assets/img/ai/fiturAbsenMasuk/3.png') }}" alt="Data Pribadi Absen Masuk">
        </div>

        {{-- Step 4 --}}
        <div class="col-12">
            <h4 class="fw-semibold">4. Konfirmasi Absen Masuk Berhasil</h4>
            <ul>
                <li>Setelah proses berhasil, akan muncul notifikasi bahwa <b>Absen Masuk telah berhasil dilakukan</b>.</li>
                <li>Klik tombol <b>"OK"</b> untuk menutup notifikasi dan kembali ke halaman utama.</li>
                <li>Data kehadiran Anda telah tercatat di sistem secara otomatis.</li>
            </ul>
            <img class="img-custom-dekstop " src="{{ asset('assets/img/ai/fiturAbsenMasuk/4.png') }}" alt="Absen Masuk Berhasil">
        </div>

    </div>
</section>
@endsection
