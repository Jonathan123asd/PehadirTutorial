@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Penggunaan Menu Devices Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <ul>
                                <li class="mb-3"><b>Menu halaman Fingerprint pada website Pehadir</b> adalah fitur yang digunakan untuk mengelola perangkat mesin absensi fingerprint yang terhubung dengan sistem. Melalui menu ini, admin atau HR dapat menambahkan perangkat baru, mengatur lokasi pemasangan, serta melakukan sinkronisasi data absensi secara otomatis.</li>
                                <li>Fitur ini secara khusus dikembangkan untuk mendukung perangkat fingerprint dengan brand <b>Fingerspot (fingerspot.io),</b> yang telah terhubung secara langsung dan terintegrasi penuh dengan sistem Pehadir.</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Pilih menu <b>Setting</b> di sebelah kiri, lalu klik <b>Devices.</b> Anda akan di arahkan pada halaman <b>Fingerprint Devices Management.</b></h4>
                <h4 class="fw-semibold">2. Klik tombol <b>+ Add Device</b> di pojok kanan atas untuk menambahkan perangkat fingerprint baru.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturDevices/1.png') }}" alt="Fitur Devices">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Akan muncul form <b>Add New Fingerprint Device</b> seperti pada gambar di bawah.</h4>
                <ul class="mb-2">
                    <li>Isi data perangkat fingerprint pada form:</li>
                    <li><i class="bi bi-dot"></i> <b>Device Name:</b> Masukkan nama perangkat fingerprint.</li>
                    <li><i class="bi bi-dot"></i> <b>Branch:</b> Pilih cabang tempat perangkat akan digunakan.</li>
                    <li><i class="bi bi-dot"></i> <b>Location:</b> Masukkan lokasi pemasangan alat (contoh: Lobi Utama).</li>
                    <li><i class="bi bi-dot"></i> <b>Cloud ID/Serial Number:</b> Masukkan ID perangkat dari mesin.</li>
                    <li><i class="bi bi-dot"></i> <b>API Token:</b> Masukkan token API dari perangkat.</li>
                    <li><i class="bi bi-dot"></i> <b>Description:</b> Isi deskripsi tambahan jika diperlukan.</li>
                </ul>
                <h4 class="fw-semibold">4. Setelah semua data terisi dengan benar, klik tombol <b>Add Device</b> untuk menyimpan.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDevices/2.png') }}" alt="Fitur Devices">
                <h4 class="fw-semibold">5. Jika penambahan perangkat fingerprint berhasil, akan muncul notifikasi pop-up dengan pesan <b>"Device added successfully".</b> Klik tombol <b>OK</b> untuk menutup notifikasi dan menyelesaikan proses.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDevices/3.png') }}" alt="Fitur Devices">
                <h4 class="fw-semibold">6. Setelah perangkat fingerprint berhasil ditambahkan, Anda dapat melihat seluruh perangkat yang terdaftar di halaman <b>Fingerprint Devices Management.</b></h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDevices/4.png') }}" alt="Fitur Devices">
                <h4 class="fw-semibold">Penjelasan Tentang Fitur:</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturDevices/5.png') }}" alt="Fitur Devices">
                <ul>
                    <li><b>Berdasarkan gambar di atas, berikut fungsi dari masing-masing menu, dimulai dari sisi kiri:</b></li>
                    <li>
                        <i class="bi bi-person-dash text-secondary"></i>
                        <b>Delete User:</b> Digunakan untuk menghapus data pengguna (user fingerprint) yang tersimpan di dalam perangkat fingerprint.
                    </li>
                    <li>
                        <i class="bi bi-heart-pulse text-info"></i>
                        <b>Check Status:</b> Berfungsi untuk memeriksa status koneksi perangkat, apakah dalam kondisi Online atau Offline.
                    </li>
                    <li>
                        <i class="bi bi-power text-dark"></i>
                        <b>Restart Device:</b> Digunakan untuk memulai ulang perangkat fingerprint dari jarak jauh melalui sistem.
                    </li>
                    <li>
                        <i class="bi bi-pencil-square text-info"></i>
                        <b>Edit Device:</b> Digunakan untuk mengubah atau memperbarui informasi perangkat, seperti nama, lokasi, atau deskripsi perangkat fingerprint.
                    </li>
                    <li>
                        <i class="bi bi-trash text-danger"></i>
                        <b>Delete:</b> Berfungsi untuk menghapus perangkat fingerprint dari sistem Pehadir secara permanen.
                    </li>
                </ul>

            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
