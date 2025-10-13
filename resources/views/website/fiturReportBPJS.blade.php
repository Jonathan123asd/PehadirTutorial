@extends('layouts.app')
@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Menggunakan Menu BPJS Ketenagakerjaan pada Website Pehadir</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <b>BPJS Ketenagakerjaan</b> adalah fitur yang digunakan untuk melihat dan mengelola data iuran BPJS Ketenagakerjaan karyawan dalam suatu periode tertentu.
                        Melalui menu ini, pengguna dapat memfilter laporan berdasarkan cabang dan rentang tanggal, lalu mengunduh data dalam format PDF atau Excel sesuai kebutuhan.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row g-4">

        {{-- Langkah Awal: Akses Menu --}}
        <div class="col-12">
            <h4 class="fw-semibold">Langkah-langkah Mengakses dan Mengunduh Laporan BPJS Ketenagakerjaan</h4>
            <ul>
                <li><b>1.</b> Pilih halaman <b>Report</b> di sebelah kiri.</li>
                <li><b>2.</b> Klik submenu <b>BPJS Ketenagakerjaan</b>.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportBPJS/1.png') }}" alt="Menu BPJS Ketenagakerjaan Pehadir">
        </div>

        {{-- Bagian A: File PDF --}}
        <div class="col-12">
            <h4 class="fw-semibold">A. Cara Mengakses File BPJS Ketenagakerjaan dalam Bentuk PDF</h4>
            <ul>
                <li><b>1.</b> Pilih <b>Cabang:</b> Tentukan cabang yang ingin ditampilkan (contoh: PT. FIRMAN ABADI MOBILE).</li>
                <li><b>2.</b> Tentukan <b>Periode Waktu:</b> Masukkan tanggal awal dan akhir laporan (contoh: 01/09/2024 – 30/09/2024).</li>
                <li><b>3.</b> Pilih <b>Format File:</b> Pilih format <b>PDF</b>.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportBPJS/2.png') }}" alt="Filter BPJS PDF">

            <ul class="mt-3">
                <li><b>4.</b> Klik tombol <b>Filter</b> berwarna hijau untuk menampilkan data sesuai cabang dan periode.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportBPJS/3.png') }}" alt="Tombol Filter BPJS PDF">
        </div>

        {{-- Bagian B: Cetak Laporan PDF --}}
        <div class="col-12">
            <h4 class="fw-semibold">B. Tutorial Mencetak Laporan BPJS Ketenagakerjaan (PDF)</h4>
            <ul>
                <li><b>1.</b> Tekan tombol <b>Print</b> berwarna orange di bagian kanan atas tampilan laporan.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportBPJS/4.png') }}" alt="Tombol Print PDF">

            <ul class="mt-3">
                <li><i class="bi bi-dot"></i> Setelah ditekan, halaman cetak akan muncul otomatis.</li>
                <li><i class="bi bi-dot"></i> Anda dapat memilih untuk <b>Cetak</b> atau <b>Simpan sebagai PDF (Download)</b>.</li>
            </ul>

            <ul class="mt-3">
                <li><b>2.</b> Tekan tombol <b>Download</b> di pojok kanan atas tampilan laporan untuk menyimpan file ke perangkat Anda dalam format PDF.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportBPJS/5.png') }}" alt="Download Laporan PDF">

            <ul class="mt-3">
                <li><b>3.</b> Setelah menekan tombol Download, akan muncul notifikasi unduhan dalam format PDF.</li>
                <li><i class="bi bi-dot"></i> Notifikasi ini menandakan bahwa proses pengunduhan berhasil.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportBPJS/6.png') }}" alt="Notifikasi Unduhan PDF">

            <ul class="mt-3">
                <li><i class="bi bi-dot"></i> Silakan buka file tersebut untuk melihat data BPJS Ketenagakerjaan karyawan (PDF).</li>

            </ul>
             <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportBPJS/7.png') }}" alt="Filter BPJS Excel">
        </div>

        {{-- Bagian C: File Excel --}}
        <div class="col-12">
            <h4 class="fw-semibold">C. Cara Mengakses File BPJS Ketenagakerjaan dalam Bentuk EXCEL</h4>
            <ul>
                <li><b>1.</b> Pilih <b>Cabang:</b> Tentukan cabang yang ingin ditampilkan.</li>
                <li><b>2.</b> Tentukan <b>Periode Waktu:</b> Masukkan tanggal awal dan akhir laporan (contoh: 01/09/2024 – 30/09/2024).</li>
                <li><b>3.</b> Pilih <b>Format File:</b> Klik daftar pilihan dan pilih <b>EXCEL</b>.</li>
            </ul>


            <ul class="mt-3">
                <li><b>4.</b> Klik tombol <b>Filter</b> untuk menampilkan data sesuai cabang dan periode.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportBPJS/8.png') }}" alt="Tombol Filter Excel">
        </div>

        {{-- Bagian D: Cetak Laporan Excel --}}
        <div class="col-12">
            <h4 class="fw-semibold">D. Tutorial Mencetak Laporan BPJS Ketenagakerjaan (EXCEL)</h4>
            <ul>
                <li><b>1.</b> Tekan tombol <b>Print</b> berwarna Biru di kanan atas tampilan laporan.</li>
                <li><b>2.</b> Setelah ditekan, akan muncul notifikasi unduhan dalam format EXCEL.</li>
                <li><i class="bi bi-dot"></i> Notifikasi ini menandakan proses unduhan berhasil.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportBPJS/9.png') }}" alt="Notifikasi Unduhan Excel">

            <ul class="mt-3">
                <li><i class="bi bi-dot"></i> Silakan buka file tersebut untuk melihat data BPJS Ketenagakerjaan karyawan (EXCEL).</li>
            </ul>
             <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportBPJS/10.png') }}" alt="Rincian Iuran F2-A">
        </div>

        {{-- Tambahan Penjelasan File dan Rekap --}}
        <div class="col-12">
            <h4 class="fw-semibold">Jenis File Laporan BPJS Ketenagakerjaan</h4>

            <h5 class="mt-3 fw-bold">1. F2-A (Rincian Iuran)</h5>
            <p>Berisi detail lengkap iuran setiap karyawan seperti nama, gaji, tanggal lahir, dan jumlah iuran BPJS yang dibayarkan.</p>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportBPJS/11.png') }}" alt="Rincian Iuran F2-A">

            <h5 class="mt-3 fw-bold">2. Rincian Iuran (F-2)</h5>
            <p>Menampilkan ringkasan iuran yang sudah dihitung, biasanya digunakan untuk melihat total keseluruhan iuran dalam satu periode.</p>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportBPJS/12.png') }}" alt="Rincian Iuran F2">
             <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportBPJS/13.png') }}" alt="Rekap F1-a">

            <h5 class="mt-3 fw-bold">3. Rekap F1-a</h5>
            <p>Merupakan rekapitulasi data dari beberapa rincian iuran, digunakan sebagai bahan laporan internal atau arsip perusahaan.</p>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportBPJS/14.png') }}" alt="Laporan F1-b">


            <h5 class="mt-3 fw-bold">4. F1-b</h5>
            <p>Berisi data tambahan atau detail pendukung dari laporan F1-a, mencakup informasi relevan seperti status tenaga kerja.</p>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportBPJS/15.png') }}" alt="Laporan F1-b">

            <h5 class="mt-3 fw-bold">5. Perubahan Upah</h5>
            <p>Menampilkan data karyawan yang mengalami perubahan gaji, sehingga iurannya disesuaikan berdasarkan perubahan tersebut.</p>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportBPJS/16.png') }}" alt="Laporan F1-b">
        </div>

    </div>
</section>
@endsection
