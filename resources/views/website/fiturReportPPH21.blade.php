@extends('layouts.app')
@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Menggunakan Menu PPH21 Month pada Website Pehadir</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <b>PPH21 Month</b> adalah fitur yang digunakan untuk menghitung dan menampilkan data pajak penghasilan (PPH21) karyawan secara bulanan.
                        Fitur ini membantu HR atau Admin dalam mengelola potongan pajak setiap bulan berdasarkan penghasilan karyawan, tunjangan, serta komponen lainnya yang dikenai pajak.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row g-4">

        {{-- Langkah 1: Akses Menu PPH21 Month --}}
        <div class="col-12">
            <h4 class="fw-semibold">Langkah Mengakses Menu PPH21 Month</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Pilih halaman <b>Report</b> di sebelah kiri.</li>
                <li><i class="bi bi-dot"></i> Klik submenu <b>PPH21</b>, lalu pilih <b>PPH21 Month</b>.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportPPH21/1.png') }}" alt="Menu Report PPH21 Month Pehadir">
        </div>

        {{-- Bagian A: Mengakses File PDF --}}
        <div class="col-12">
            <h4 class="fw-semibold">A. Cara Mengakses File PPH21 Month dalam Bentuk PDF</h4>
            <ul>
                <li><b>1.</b> Pilih <b>Cabang:</b> Tentukan cabang yang ingin ditampilkan datanya (contoh: PT. FIRMAN ABADI MOBILE).</li>
                <li><b>2.</b> Tentukan <b>Periode PPH21:</b> Masukkan tanggal awal dan akhir periode perhitungan (contoh: September 2024 – September 2024).</li>
                <li><b>3.</b> Pilih <b>Format File:</b> Klik daftar pilihan di samping kanan dan pilih <b>PDF</b>.</li>
                <li><b>4.</b> Klik <b>Tombol Filter:</b> Tekan tombol berwarna hijau untuk menampilkan data sesuai cabang dan periode.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportPPH21/2.png') }}" alt="Filter dan Pilih PDF">
        </div>

        {{-- Bagian B: Mencetak Laporan PDF --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Tutorial Mencetak Laporan PPH21 Month (PDF)</h4>
            <ul>
                <li><b>1.</b> Tekan tombol <b>Print</b> di bagian kanan atas tampilan laporan PPH21 Summary Month.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportPPH21/3.png') }}" alt="Tombol Print PDF">

            <ul class="mt-3">
                <li><i class="bi bi-dot"></i> Setelah tombol ditekan, halaman cetak akan muncul otomatis.</li>
                  <li><i class="bi bi-dot"></i> Anda dapat memilih untuk <b>Cetak</b> langsung atau <b>Simpan sebagai PDF (Download)</b>.</li>
            </ul>
            <ul class="mt-3">
                <li> <b>2.</b>Tekan tombol <b>Download</b> di pojok kanan atas untuk menyimpan laporan ke perangkat dalam format PDF.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportPPH21/4.png') }}" alt="Tombol Download PDF">

            <ul class="mt-3">
                <li><b>3.</b> Setelah menekan tombol Download, akan muncul notifikasi unduhan di pojok kanan atas.</li>
                <li><i class="bi bi-dot"></i> Notifikasi ini menandakan proses unduhan berhasil.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportPPH21/5.png') }}" alt="Notifikasi Unduhan PDF">
        </div>

        {{-- Bagian C: Mengakses File Excel --}}
        <div class="col-12">
            <h4 class="fw-semibold">C. Cara Mengakses File PPH21 Month dalam Bentuk EXCEL</h4>
            <ul>
                <li><b>1.</b> Pilih <b>Cabang:</b> Tentukan cabang yang ingin ditampilkan datanya (contoh: PT. FIRMAN ABADI MOBILE).</li>
                <li><b>2.</b> Tentukan <b>Periode PPH21:</b> Masukkan tanggal awal dan akhir periode perhitungan (contoh: September 2024 – September 2024).</li>
                <li><b>3.</b> Pilih <b>Format File:</b> Pilih <b>EXCEL</b> dari daftar format file di kanan.</li>
                <li><b>4.</b> Klik <b>Tombol Filter:</b> Tekan tombol hijau untuk menampilkan data sesuai cabang dan periode.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportPPH21/6.png') }}" alt="Filter Laporan Excel">
        </div>

        {{-- Bagian D: Mencetak Laporan Excel --}}
        <div class="col-12">
            <h4 class="fw-semibold">D. Tutorial Mencetak Laporan PPH21 Month (EXCEL)</h4>
            <ul>
                <li><b>1.</b> Tekan tombol <b>Print</b> di bagian kanan atas tampilan laporan.</li>
                <li><b>2.</b> Setelah ditekan, akan muncul notifikasi unduhan otomatis dalam format EXCEL.</li>
                <li><i class="bi bi-dot"></i> Notifikasi ini menandakan proses unduhan berhasil.</li>

            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportPPH21/7.png') }}" alt="Notifikasi Unduhan Excel">
          
                <li><b>3.</b> Buka file Excel untuk melihat data pajak penghasilan karyawan secara detail.</li>
            </ul>
            <img class="img-custom-dekstop w-100 mt-3" src="{{ asset('assets/img/website/fiturReportPPH21/8.png') }}" alt="Tampilan File Excel PPH21">
            <img class="img-custom-dekstop w-100 mt-3" src="{{ asset('assets/img/website/fiturReportPPH21/9.png') }}" alt="Tampilan File Excel PPH21">
        </div>

    </div>
</section>
@endsection
