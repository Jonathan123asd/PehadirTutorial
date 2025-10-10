@extends('layouts.app')

@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Penggunaan Fitur Export Payroll Bank Pada Website Pehadir.my.id</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <b>Export Payroll Bank</b> berfungsi untuk mengekspor data gaji karyawan ke format file sesuai ketentuan bank (CSV/Excel),
                        memudahkan proses pengiriman gaji otomatis ke rekening karyawan, serta menjaga akurasi dan efisiensi sistem payroll.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row g-4">

        {{-- Step 1: Penjelasan Filter --}}
        <div class="col-12">
            <h4 class="fw-semibold">1. Penjelasan Fitur Filter Export Payroll Bank</h4>
            <ul>
                <li><b>Company (Nama Perusahaan):</b> Pilih cabang atau entitas perusahaan untuk menampilkan data karyawan yang sesuai.</li>
                <li><b>Start Date & End Date:</b> Tentukan periode transaksi penggajian untuk difilter, misal bulanan atau mingguan.</li>
                <li><b>Bank:</b> Pilih bank tujuan transfer agar data hanya menampilkan karyawan dengan rekening bank tersebut.</li>
                <li><b>Tombol Filter:</b> Menampilkan data karyawan sesuai opsi filter yang diisi.</li>
                <li><b>Tombol Export:</b> Mengunduh data payroll dalam format CSV untuk laporan, arsip, atau unggah ke bank.</li>
            </ul>
        </div>

        {{-- Step 2: Masuk ke Dashboard --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Masuk ke Dashboard</h4>
            <ul>
                <li>Login ke akun Pehadir Anda.</li>
                <li>Setelah berhasil login, akan diarahkan ke <b>Dashboard</b> utama aplikasi.</li>
            </ul>
            <div class="text-center mb-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturExportPayroll/1.png') }}" alt="Dashboard Pehadir">
            </div>
        </div>

        {{-- Step 3: Masuk ke Menu Report --}}
        <div class="col-12">
            <h4 class="fw-semibold">3. Masuk ke Menu Report</h4>
            <ul>
                <li>Pada menu sebelah kiri, klik <b>Report</b>.</li>
                <li>Masuk ke submenu <b>Payroll</b> → pilih <b>Export Payroll Bank</b>.</li>
            </ul>
            <div class="text-center mb-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturExportPayroll/2.png') }}" alt="Menu Export Payroll Bank">
            </div>
        </div>

        {{-- Step 4: Gunakan Filter Periode --}}
        <div class="col-12">
            <h4 class="fw-semibold">4. Gunakan Bagian Filter Periode untuk Menyaring Data</h4>
            <ul>
                <li>Pilih <b>Perusahaan</b>, misal: <b>PT. FIRMAN ABADI MOBILE</b>.</li>
                <li>Tentukan <b>Start Date</b> dan <b>End Date</b> periode payroll.</li>
                <li>Pilih <b>Bank</b> tujuan transfer, misal: <b>BCA</b>.</li>
                <li>Setelah semua filter diisi, klik tombol <b>Filter</b> untuk menampilkan data karyawan sesuai kriteria.</li>
                <li>Klik tombol <b>Export</b> untuk mengunduh data payroll dalam format CSV.</li>
            </ul>
            <div class="text-center mb-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturExportPayroll/3.png') }}" alt="Filter dan Export Payroll">
            </div>
        </div>

    </div>
</section>
@endsection
