@extends('layouts.app')
@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Report Cash Advance pada Website Pehadir</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        Fitur <b>Cash Advance</b> memiliki fungsi untuk mencatat pinjaman karyawan secara sistematis,
                        menentukan jumlah pinjaman, tanggal, serta cicilan pengembalian.
                        Selain itu, fitur ini juga membantu memantau status pelunasan (ongoing, paid off, dan lainnya),
                        serta mempermudah penyusunan laporan keuangan terkait pengeluaran kasbon.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row g-4">

        {{-- Langkah 1: Login Website Pehadir --}}
        <div class="col-12">
            <h4 class="fw-semibold">1. Login Website Pehadir.my.id</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Buka website <b>Pehadir.my.id</b> melalui browser Anda.</li>
                <li><i class="bi bi-dot"></i> Masukkan <b>email</b> dan <b>kata sandi</b> Anda.</li>
                <li><i class="bi bi-dot"></i> Klik tombol <b>Login</b> untuk masuk ke akun Anda.</li>
                <li><i class="bi bi-dot"></i> Setelah berhasil login, Anda akan diarahkan ke halaman beranda utama Pehadir.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportCashAdvance/1.png') }}" alt="Login Website Pehadir">
        </div>

        {{-- Langkah 2: Masuk ke Menu Report Cash Advance --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Masuk ke Menu Rekap Cash Advance</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Pada menu sebelah kiri, klik <b>Report</b>.</li>
                <li><i class="bi bi-dot"></i> Pilih submenu <b>Loan / Cash Advance</b>.</li>
                <li><i class="bi bi-dot"></i> Kemudian pilih <b>Rekap Cash Advance</b> untuk membuka laporan kasbon karyawan.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportCashAdvance/1.png') }}" alt="Menu Report Cash Advance Pehadir">
        </div>

        {{-- Langkah 3: Atur Filter Data --}}
        <div class="col-12">
            <h4 class="fw-semibold">3. Atur Filter Data</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Pilih <b>Branch</b> (cabang) sesuai data yang ingin ditampilkan.</li>
                <li><i class="bi bi-dot"></i> Tentukan <b>Start Date</b> dan <b>End Date</b> (tanggal mulai dan berakhirnya laporan).</li>
                <li><i class="bi bi-dot"></i> Klik tombol <b>Search</b> untuk menampilkan data kasbon berdasarkan filter yang dipilih.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportCashAdvance/2.png') }}" alt="Filter Data Cash Advance Pehadir">
        </div>

        {{-- Langkah 4: Cetak Laporan --}}
        <div class="col-12">
            <h4 class="fw-semibold">4. Cetak Laporan</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Klik tombol <b>Export</b> untuk mengunduh data kasbon karyawan dalam format <b>Excel</b>.</li>
                <li><i class="bi bi-dot"></i> File laporan akan otomatis tersimpan di perangkat Anda dan dapat dibuka untuk melihat rekap data pinjaman karyawan.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportCashAdvance/3.png') }}" alt="Export Laporan Cash Advance Pehadir">
        </div>

    </div>
</section>
@endsection
