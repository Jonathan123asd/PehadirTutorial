@extends('layouts.app')
@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Menggunakan Report Asset pada Website Pehadir</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <b>Report / Asset</b> adalah fitur pada sistem Pehadir yang digunakan untuk menampilkan data dan informasi terkait aset perusahaan.
                        Aset dapat berupa barang inventaris seperti komputer, kendaraan, mesin, maupun peralatan kantor yang tercatat sebagai milik perusahaan.
                        Melalui fitur ini, HR atau Admin dapat memantau, menyaring, dan mengunduh laporan aset berdasarkan cabang, periode pembelian, serta status penggunaannya.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <!-- Penjelasan Fitur -->
    <div class="col-12 mb-4">
        <h4 class="fw-semibold">Panduan Penjelasan Fitur pada Menu Report / Asset</h4>
        <ul>
            <li><b>Branch:</b> Digunakan untuk memilih cabang perusahaan yang ingin ditampilkan data asetnya.</li>
            <li><b>Start Date & End Date:</b> Menentukan rentang waktu pembelian aset yang ingin difilter.</li>
            <li><b>Asset Status:</b> Memfilter aset berdasarkan status, seperti <i>Active</i> atau <i>Retired</i>.</li>
            <li><b>Search Button:</b> Menampilkan data aset sesuai filter yang dipilih.</li>
            <li><b>Excel & PDF Button:</b> Mengunduh laporan aset dalam format Excel (.xlsx) atau PDF.</li>
            <li><b>Brand/Model:</b> Menampilkan nama dan tipe aset perusahaan.</li>
            <li><b>Serial Number:</b> Nomor seri unik untuk setiap aset.</li>
            <li><b>Status:</b> Status penggunaan aset (misal: Active, Retired).</li>
            <li><b>Employee:</b> Nama karyawan yang sedang atau pernah menggunakan aset.</li>
            <li><b>Purchase Date & Price:</b> Tanggal pembelian dan harga aset.</li>
            <li><b>Assigned Date & Return Date:</b> Tanggal aset diberikan dan dikembalikan oleh karyawan.</li>
        </ul>
    </div>

    <div class="row g-4">

        {{-- Step 1: Masuk ke Dashboard --}}
        <div class="col-12">
            <h4 class="fw-semibold">1. Masuk ke Dashboard</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Login ke akun <b>Pehadir</b> menggunakan email dan kata sandi Anda.</li>
                <li><i class="bi bi-dot"></i> Setelah berhasil login, Anda akan diarahkan ke <b>Dashboard Utama</b>.</li>
                <li><i class="bi bi-dot"></i> Dari halaman ini Anda dapat mengakses berbagai fitur yang tersedia dalam sistem.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportAsset/1.png') }}" alt="Dashboard Website Pehadir">
        </div>

        {{-- Step 2: Masuk ke Menu Report --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Masuk ke Menu Report</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Pada sisi kiri layar, klik menu <b>Report</b>.</li>
                <li><i class="bi bi-dot"></i> Setelah itu pilih submenu <b>Asset</b> untuk menampilkan halaman laporan aset perusahaan.</li>
                <li><i class="bi bi-dot"></i> Sistem akan menampilkan daftar aset yang tercatat beserta informasi detailnya sesuai filter yang digunakan.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportAsset/2.png') }}" alt="Menu Report Asset Pehadir">
        </div>

        {{-- Step 3: Tombol Export Laporan Aset --}}
        <div class="col-12">
            <h4 class="fw-semibold">3. Tombol Export Laporan Aset</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Klik tombol <b>Excel</b> untuk mengunduh data aset dalam format <b>.xlsx</b>, cocok untuk pengolahan data lebih lanjut.</li>
                <li><i class="bi bi-dot"></i> Klik tombol <b>PDF</b> untuk mengunduh laporan aset dalam format <b>.pdf</b>, ideal untuk dokumentasi atau pencetakan laporan.</li>
                <li><i class="bi bi-dot"></i> Fitur ini memudahkan pengguna untuk menyimpan dan membagikan data aset perusahaan secara praktis dan efisien.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportAsset/3.png') }}" alt="Export Laporan Asset Pehadir">
        </div>

    </div>
</section>
@endsection
