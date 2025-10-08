@extends('layouts.app')
@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Cara Menggunakan Fitur Check My Face di Aplikasi Pehadir AI</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        Fitur <b>Check My Face</b> berguna untuk memastikan absen dilakukan oleh karyawan yang bersangkutan sebagai bentuk verifikasi kehadiran berbasis AI.
                        Fitur ini membantu:
                        <ul class="mt-2">
                            <li>Mencegah titip absen atau kecurangan absensi.</li>
                            <li>Memastikan wajah yang melakukan absen sesuai dengan data karyawan yang terdaftar.</li>
                            <li>Meningkatkan akurasi dan keamanan dalam proses kehadiran.</li>
                        </ul>
                        Teknologi ini bekerja menggunakan sistem <b>face recognition</b> secara otomatis saat pengguna melakukan <b>clock-in</b> atau <b>clock-out</b>.
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
                <li>Pada halaman utama, pilih menu <b>"Check My Face"</b>.</li>
            </ul>
            <img class="img-custom-dekstop " src="{{ asset('assets/img/ai/fiturCheckMyFace/1.png') }}" alt="Halaman Utama Pehadir AI">
        </div>

        {{-- Step 2 --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Arahkan Wajah ke Kamera</h4>
            <ul>
                <li>Setelah memilih menu <b>"Check My Face"</b>, arahkan wajah Anda ke kamera sesuai petunjuk di layar.</li>
                <li>Pastikan pencahayaan cukup dan wajah terlihat jelas agar sistem dapat mendeteksi dengan baik.</li>
            </ul>
        </div>

        {{-- Step 3 --}}
        <div class="col-12">
            <h4 class="fw-semibold">3. Sistem Melakukan Proses Verifikasi</h4>
            <ul>
                <li>Sistem akan melakukan proses <b>pengenalan wajah (face recognition)</b> secara otomatis.</li>
                <li>Tunggu beberapa detik hingga sistem memverifikasi kesesuaian wajah Anda dengan data yang tersimpan.</li>
            </ul>
            <img class="img-custom-dekstop " src="{{ asset('assets/img/ai/fiturCheckMyFace/2.png') }}" alt="Proses Face Recognition">
        </div>

        {{-- Step 4 --}}
        <div class="col-12">
            <h4 class="fw-semibold">4. Verifikasi Berhasil</h4>
            <ul>
                <li>Jika berhasil, akan muncul notifikasi bahwa wajah Anda <b>terdeteksi</b> dan <b>sesuai dengan data karyawan</b>.</li>
                <li>Anda dapat melanjutkan proses absen seperti biasa.</li>
            </ul>
            <img class="img-custom-dekstop " src="{{ asset('assets/img/ai/fiturCheckMyFace/3.png') }}" alt="Verifikasi Wajah Berhasil">
        </div>

        {{-- Step 5 --}}
        <div class="col-12">
            <h4 class="fw-semibold">5. Jika Verifikasi Gagal</h4>
            <ul>
                <li>Jika sistem gagal mengenali wajah Anda, akan muncul pesan kesalahan.</li>
                <li>Coba ulangi dengan posisi wajah yang lebih jelas, stabil, dan pastikan pencahayaan cukup.</li>
                <li>Hindari bayangan berlebih atau posisi kamera terlalu jauh dari wajah.</li>
            </ul>

        </div>

    </div>
</section>
@endsection
