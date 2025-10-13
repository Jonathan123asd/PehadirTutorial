@extends('layouts.app')
@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Menggunakan Menu Turnover pada Website Pehadir</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <b>Menu Turnover</b> berfungsi untuk merekap dan memantau data karyawan yang telah mengundurkan diri dalam suatu periode tertentu.
                        Fitur ini membantu HR untuk menganalisis tingkat perputaran karyawan, mengetahui detail riwayat resign, dan menyusun laporan resmi.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row g-4">

        {{-- Langkah 1: Akses Website --}}
        <div class="col-12">
            <h4 class="fw-semibold">1. Masuk ke Website Pehadir</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Buka browser (disarankan Google Chrome) dan ketik <b>pehadir.my.id</b>.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportTurnover/1.png') }}" alt="Login Website Pehadir">
            <ul>
                <li><i class="bi bi-dot"></i> Masukkan Email dan Kata Sandi, lalu klik <b>Login</b>.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportTurnover/2.png') }}" alt="Login Website Pehadir">
        </div>

        {{-- Langkah 2: Masuk ke Menu Turnover --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Buka Menu Turnover</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Pilih menu <b>Report</b> di sisi kiri layar.</li>
                <li><i class="bi bi-dot"></i> Klik submenu <b>Turnover</b>.</li>
                <li><i class="bi bi-dot"></i> Pilih <b>Cabang Perusahaan</b>, tentukan <b>Rentang Tanggal</b>, dan pilih <b>Format Laporan</b> (PDF/Excel).</li>
                <li><i class="bi bi-dot"></i> Klik <b>Filter</b> untuk menampilkan data turnover, kemudian klik <b>Print</b> untuk mencetak atau menyimpan laporan.</li>
                <li><i class="bi bi-dot"></i> Data menampilkan Employee ID, Nama, Cabang, Departemen, Jabatan, Tanggal Masuk, Tanggal Resign, dan Lama Masa Kerja.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportTurnover/3.png') }}" alt="Filter Menu Turnover">
        </div>

        {{-- Langkah 3: Tampilan PDF Turnover --}}
        <div class="col-12">
            <h4 class="fw-semibold">3. Tampilan Laporan Turnover (PDF)</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Laporan menampilkan data karyawan yang resign, contohnya:</li>
                <ul class="ms-4">
                    <li>Nama: SAFNO</li>
                    <li>Posisi: MANAGER</li>
                    <li>Departemen: produksi</li>
                    <li>Tanggal Masuk: 10 Maret 2020</li>
                    <li>Tanggal Resign: 29 September 2025</li>
                    <li>Lama Bekerja: 5 tahun 6 bulan 19 hari</li>
                </ul>
                <li><i class="bi bi-dot"></i> Berguna untuk memantau dan mendokumentasikan riwayat resign karyawan.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportTurnover/4.png') }}" alt="Laporan PDF Turnover">
        </div>

        {{-- Langkah 4: Download PDF --}}
        <div class="col-12">
            <h4 class="fw-semibold">4. Mencetak / Mengunduh Laporan PDF</h4>
            <ul>
                <li><b>1.</b> Klik tombol <b>Print</b> di pojok kanan atas.</li>
                <li><b>2.</b> Pilih <b>Cetak</b> atau <b>Simpan sebagai PDF (Download)</b>.</li>
                <li><b>3.</b> Notifikasi unduhan menandakan proses berhasil.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportTurnover/5.png') }}" alt="Download PDF Turnover">
        </div>

        {{-- Langkah 5: Download Excel --}}
        <div class="col-12">
            <h4 class="fw-semibold">5. Mengunduh Laporan Turnover (Excel)</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Klik tombol <b>Print</b> di menu Turnover untuk format Excel.</li>
                <li><i class="bi bi-dot"></i> Setelah selesai, buka file Excel yang baru saja diunduh.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportTurnover/6.png') }}" alt="Download Excel Turnover">
        </div>

        {{-- Langkah 6: Tampilan File Excel
        <div class="col-12">
            <h4 class="fw-semibold">6. Tampilan File Excel Turnover</h4>
            <ul>
                <li><i class="bi bi-dot"></i> File menampilkan laporan turnover periode 01–30 September 2025.</li>
                <li><i class="bi bi-dot"></i> Data termasuk Employee ID, Nama, Cabang, Departemen, Posisi, Tanggal Masuk, Tanggal Resign, dan Lama Masa Kerja.</li>
                <li><i class="bi bi-dot"></i> Contoh: SAFNO, MANAGER, Produksi, PT. FIRMAN ABADI MOBILE, 10 Maret 2020 – 29 September 2025, 5 tahun 6 bulan 19 hari.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportTurnover/6.png') }}" alt="File Excel Turnover">
        </div> --}}

    </div>
</section>
@endsection
