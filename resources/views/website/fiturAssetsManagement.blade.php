@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Panduan Cara Menggunakan Fitur Asset Management di Pehadir.my.id</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Asset Management</b> adalah sistem untuk mempermudah pencatatan, pelacakan, dan pengelolaan aset perusahaan agar lebih efisien, transparan, dan terkontrol.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-4">

            {{-- Keterangan Tombol --}}
            <div class="col-12">
                <h4 class="fw-semibold">Keterangan Tombol</h4>
                <ul>
                    <li><b>Add Asset:</b> Tambah aset baru secara manual.</li>
                    <li><b>Impor:</b> Unggah banyak data aset sekaligus melalui file Excel/CSV.</li>
                    <li><b>Ekspor:</b> Unduh data aset untuk backup atau pengeditan offline.</li>
                </ul>
            </div>

            {{-- Step 1 --}}
            <div class="col-12">
                <h4 class="fw-semibold">1. Login ke Aplikasi</h4>
                <ul>
                    <li>Buka browser lalu ketik <b>pehadir.my.id</b>.</li>
                    <li>Masukkan <b>Email</b> dan <b>Password</b> untuk masuk ke sistem.</li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturAssetManajemen/1.png') }}" alt="Login">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturAssetManajemen/2.png') }}" alt="Dashboard">
                    </div>
                </div>
            </div>

            {{-- Step 2 --}}
            <div class="col-12">
                <h4 class="fw-semibold">2. Pada Halaman Dasbor</h4>
                <p>Pilih menu <b>Employee</b> di sidebar kiri, lalu klik <b>Asset</b>.</p>
                <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturAssetManajemen/3.png') }}" alt="Menu Asset">
            </div>

            {{-- Step 3 --}}
            <div class="col-12">
                <h4 class="fw-semibold">3. Tambah Aset Baru</h4>
                <p>Isi form dengan data berikut lalu klik <b>Tambah Aset</b> → <b>OK</b>:</p>
                <ul class="mb-3">
                    <li>Nama Aset, Type, Brand, Model</li>
                    <li>Serial Number, Asset Code, Cabang</li>
                    <li>Status, Harga & Tanggal Pembelian</li>
                    <li>Description, Notes</li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-12">
                        <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturAssetManajemen/4.png') }}" alt="Form Asset">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturAssetManajemen/4.1.png') }}" alt="Form Asset 2">
                         <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturAssetManajemen/4.2.png') }}" alt="Form Asset 3">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturAssetManajemen/4.3.png') }}" alt="Form Asset 4">
                    </div>
                </div>
            </div>

            {{-- Step 4 --}}
            <div class="col-12">
                <h4 class="fw-semibold">4. Impor Aset</h4>
                <p>Gunakan fitur <b>Impor</b> untuk unggah data massal:</p>
                <ul>
                    <li>Lebih cepat daripada input manual satu per satu.</li>
                    <li>Pastikan format file sesuai template. bisa di unduh di tombol <b>download template</b></li>
                    <li>Bisa gunakan file hasil <b>Ekspor</b> sebagai template impor.</li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturAssetManajemen/5.png') }}" alt="Impor Asset">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturAssetManajemen/5.1.png') }}" alt="Impor Asset 2">
                    </div>
                </div>
            </div>

            {{-- Step 5 --}}
            <div class="col-12">
                <h4 class="fw-semibold">5. Membuat Tabel Inventaris Aset di Excel</h4>
                <p>Buat tabel dengan header berikut lalu upload di <b>Import Assets</b> → <b>OK</b>:</p>
                <ul class="mb-3">
                    <li>Nama Aset, Tipe, Brand, Model</li>
                    <li>Serial Number, Asset Code, Cabang</li>
                    <li>Status, Harga Pembelian, Tanggal Pembelian</li>
                    <li>Description, Notes</li>
                </ul>
                <div class="row g-3">
                        <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturAssetManajemen/6.png') }}" alt="Template Excel">
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturAssetManajemen/7.png') }}" alt="Template Excel 2">
                    </div>
                    <div class="col-md-6">
                        <img class="img-luid rounded shadow" src="{{ asset('assets/img/website/FiturAssetManajemen/7.2.png') }}" alt="Template Excel 3">
                    </div>
                </div>
            </div>

            {{-- Step 6 --}}
            <div class="col-12">
                <h4 class="fw-semibold">6. Ekspor Aset</h4>
                <p>Langkah ekspor data aset:</p>
                <ul>
                    <li>Pilih <b>Cabang</b> perusahaan.</li>
                    <li>Filter berdasarkan <b>Status Aset</b>.</li>
                    <li>Klik tombol <b>Export Assets</b> hijau, lalu <b>OK</b> untuk menutup pesan.</li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturAssetManajemen/8.png') }}" alt="Ekspor Asset">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturAssetManajemen/8.1.png') }}" alt="Ekspor Asset 2">
                    </div>
                </div>
            </div>

        </div>
        {{-- /Page Content --}}
    </section>
@endsection
