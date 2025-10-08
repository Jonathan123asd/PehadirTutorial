@extends('layouts.app')
@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Menggunakan Fitur Face Registration Pada Aplikasi Pehadir AI</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <b>Face Registration</b> adalah fitur yang digunakan untuk mendaftarkan wajah karyawan ke dalam sistem
                        sebagai <b>data biometrik</b>, yang nantinya digunakan untuk proses absensi masuk dan keluar secara otomatis
                        dan akurat melalui teknologi pengenalan wajah (Face Recognition).
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
                <li>Pada halaman utama, pilih menu <b>“Face Registration”</b>.</li>
            </ul>
            <img class="img-custom-dekstop" src="{{ asset('assets/img/ai/fiturFaceRegistration/1.png') }}" alt="Menu Face Registration Pehadir AI">
        </div>

        {{-- Step 2 --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Masukkan ID Karyawan</h4>
            <ul>
                <li>Masukkan <b>ID Karyawan</b> pada kolom yang tersedia.</li>
                <li>ID Karyawan dapat dilihat di aplikasi Pehadir pada bagian <b>Employee ID</b> di profil karyawan.</li>
                <li><b>Tombol “Cari”:</b> Digunakan untuk mencari data karyawan berdasarkan ID yang dimasukkan. Setelah diklik, sistem akan menampilkan data karyawan untuk proses registrasi wajah.</li>
                <li><b>Tombol “Reset”:</b> Digunakan untuk menghapus inputan ID Karyawan sehingga kolom kembali kosong dan bisa diisi ulang.</li>
            </ul>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-custom-dekstop" src="{{ asset('assets/img/ai/fiturFaceRegistration/2.png') }}" alt="Input ID Karyawan Face Registration">
                </div>
                <div class="col-md-6">
                   <img class="img-custom-dekstop" src="{{ asset('assets/img/ai/fiturFaceRegistration/3.png') }}" alt="Input ID Karyawan Face Registration">
                </div>
            </div>

        </div>

        {{-- Step 3 --}}
        <div class="col-12">
            <h4 class="fw-semibold">3. Proses Registrasi Wajah</h4>
            <ul>
                <li>Gambar di bawah menunjukkan tampilan aplikasi untuk proses <b>registrasi wajah karyawan</b> pada sistem absensi.</li>
                <li>Fungsi dari fitur ini adalah mendaftarkan wajah karyawan sebagai model untuk sistem pengenalan wajah (<b>Face Recognition</b>).</li>
                <li>Dilengkapi dengan informasi seperti <b>ID Karyawan, Nama, Departemen,</b> dan <b>Posisi</b>.</li>
                <li><b>Maksimal 3 model wajah</b> dapat ditambahkan untuk meningkatkan akurasi sistem.</li>
                <li>Setelah foto wajah diunggah, tekan tombol <b>“DAFTAR”</b> untuk menyimpan data.</li>
                <li>Fitur ini sangat penting untuk mendukung absensi otomatis berbasis wajah.</li>
            </ul>
            <img class="img-custom-dekstop" src="{{ asset('assets/img/ai/fiturFaceRegistration/4.png') }}" alt="Contoh Registrasi Wajah Pehadir AI">
        </div>

        {{-- Step 4 --}}
        <div class="col-12">
            <h4 class="fw-semibold">4. Layar Pop-up Konfirmasi</h4>
            <ul>
                <li>Setelah menekan tombol <b>DAFTAR</b>, akan muncul pop-up konfirmasi.</li>
                <li><b>Tombol Batal:</b> Membatalkan proses pendaftaran atau penyimpanan data. Jika diklik, sistem tidak akan melanjutkan ke tahap berikutnya.</li>
                <li><b>Tombol Ya:</b> Mengonfirmasi bahwa data yang dimasukkan sudah benar dan sesuai. Sistem akan melanjutkan proses pendaftaran dan menyimpan data wajah ke sistem.</li>
                <li>Pop-up ini berfungsi sebagai langkah konfirmasi sebelum data disimpan secara permanen.</li>
            </ul>
            <img class="img-custom-dekstop" src="{{ asset('assets/img/ai/fiturFaceRegistration/5.png') }}" alt="Popup Konfirmasi Face Registration">
        </div>

    </div>
</section>
@endsection
