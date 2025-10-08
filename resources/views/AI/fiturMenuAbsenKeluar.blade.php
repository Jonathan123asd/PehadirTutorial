@extends('layouts.app')
@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Penggunaan Fitur Absen Keluar Pada Aplikasi Pehadir AI</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <b>Absen Keluar</b> digunakan untuk mencatat waktu pulang kerja Anda.
                        Pastikan Anda menggunakan fitur ini setiap kali selesai bekerja agar sistem dapat merekam jam keluar secara akurat.
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
                <li>Buka aplikasi <b>Pehadir AI</b> di perangkat Anda.</li>
                <li>Pilih menu <b>“Absen Keluar”</b> (ikon panah keluar berwarna hitam).</li>
            </ul>
            <img class="img-custom-dekstop" src="{{ asset('assets/img/ai/fiturMenuAbsenKeluar/1.png') }}" alt="Menu Absen Keluar">
        </div>

        {{-- Step 2 --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Arahkan Wajah Anda ke Kamera</h4>
            <ul>
                <li>Arahkan wajah Anda ke kamera depan dengan posisi lurus dan pencahayaan cukup.</li>
                <li>Pastikan seluruh bagian wajah terlihat dengan jelas.</li>
                <li>Sistem akan menampilkan pola garis merah seperti jaringan pada wajah sebagai tanda wajah berhasil terdeteksi.</li>
            </ul>
            <img class="img-custom-dekstop" src="{{ asset('assets/img/ai/fiturMenuAbsenKeluar/2.png') }}" alt="Deteksi Wajah Absen Keluar">
        </div>

        {{-- Step 3 --}}
        <div class="col-12">
            <h4 class="fw-semibold">3. Fungsi Dua Tombol di Pojok Kiri Bawah</h4>
            <ul>
                <li><b>Tombol Kembali (ikon panah melengkung ke kiri):</b> Digunakan untuk membatalkan proses face detection dan kembali ke halaman sebelumnya.</li>
                <li><b>Tombol Jeda (ikon dua garis vertikal):</b> Berfungsi untuk menjeda sementara proses deteksi wajah jika perlu menyesuaikan posisi atau pencahayaan.</li>
            </ul>
            <p>Kedua tombol ini membantu pengguna melakukan proses pendeteksian wajah secara lebih fleksibel.</p>
        </div>

        {{-- Step 4 --}}
        <div class="col-12">
            <h4 class="fw-semibold">4. Data Karyawan Akan Muncul Otomatis</h4>
            <ul>
                <li>Setelah wajah berhasil terdeteksi, sistem akan menampilkan data karyawan seperti:</li>
                <li>ID Karyawan, Nama, Tanggal Lahir, Jenis Kelamin, Agama, Alamat, dan waktu pemindaian (Scan At).</li>
                <li>Pastikan data yang muncul sudah sesuai dengan identitas Anda.</li>
                <li>Klik tombol <b>“Absen Pulang”</b> untuk melanjutkan proses.</li>
            </ul>
             <img class="img-custom-dekstop" src="{{ asset('assets/img/ai/fiturMenuAbsenKeluar/3.png') }}" alt="Tombol Deteksi Wajah Absen Keluar">
        </div>

        {{-- Step 5 --}}
        <div class="col-12">
            <h4 class="fw-semibold">5. Konfirmasi Absen Pulang</h4>
            <ul>
                <li>Setelah menekan tombol <b>“Absen Pulang”</b>, sistem akan menampilkan status <b>“Mengirim...”</b> yang menandakan bahwa data sedang diproses.</li>
                <li>Tunggu hingga muncul teks <b>“Success Clock Out”</b>.</li>
                <li>Klik tombol <b>“OK”</b> untuk menyimpan data Absen Pulang Anda.</li>
            </ul>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-custom-dekstop" src="{{ asset('assets/img/ai/fiturMenuAbsenKeluar/4.png') }}" alt="Data Karyawan Absen Keluar 1">
                </div>
                <div class="col-md-6">
                    <img class="img-custom-dekstop" src="{{ asset('assets/img/ai/fiturMenuAbsenKeluar/5.png') }}" alt="Data Karyawan Absen Keluar 2">
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
