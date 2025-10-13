@extends('layouts.app')
@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Melihat dan Mengekspor Laporan KPI Karyawan</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        KPI adalah indikator kunci kinerja yang digunakan untuk mengukur sejauh mana seseorang, tim, atau organisasi mencapai tujuan yang telah ditetapkan.
                        KPI membantu memantau kinerja secara kuantitatif dan objektif, sehingga memudahkan dalam evaluasi dan pengambilan keputusan.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row g-4">

        {{-- Penjelasan Fitur --}}
        <div class="col-12">
            <h4 class="fw-semibold">Panduan Penjelasan Fitur pada Menu Report / KPI</h4>
            <ul>
                <li><b>1. Company:</b> Digunakan untuk memilih cabang atau entitas perusahaan yang ingin ditampilkan data KPI-nya.</li>
                <li><b>2. Year:</b> Tahun penilaian KPI yang ingin difilter atau ditampilkan.</li>
                <li><b>3. Month:</b> Bulan penilaian KPI yang akan ditampilkan pada laporan.</li>
                <li><b>4. Export Type:</b> Format file untuk mengunduh data KPI (PDF / Excel).</li>
                <li><b>5. Filter Button:</b> Untuk menerapkan filter berdasarkan perusahaan, tahun, dan bulan yang dipilih.</li>
                <li><b>6. Print Button:</b> Untuk mencetak atau mengunduh laporan KPI dalam format yang dipilih.</li>
                <li><b>7. Data yang Ditampilkan:</b>
                    <ul>
                        <li>No Employee: Nomor induk karyawan</li>
                        <li>Employee Name: Nama lengkap karyawan</li>
                        <li>Branch: Lokasi cabang karyawan</li>
                        <li>Position: Jabatan / posisi karyawan</li>
                        <li>Department: Divisi / departemen</li>
                        <li>KPI Total Score: Nilai total KPI karyawan</li>
                        <li>General Conclusion: Hasil akhir evaluasi (contoh: Satisfactory)</li>
                        <li>From Date: Tanggal mulai periode penilaian KPI</li>
                    </ul>
                </li>
            </ul>
        </div>

        {{-- Langkah 1: Masuk ke Dashboard --}}
        <div class="col-12">
            <h4 class="fw-semibold">1. Masuk ke Dashboard</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Setelah login, Anda akan diarahkan ke dashboard utama untuk mengakses semua fitur aplikasi.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportKpi/1.png') }}" alt="Dashboard KPI Pehadir">
        </div>

        {{-- Langkah 2: Masuk ke Menu Report KPI --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Masuk ke Menu Report KPI</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Klik menu <b>Report</b> di sisi kiri layar.</li>
                <li><i class="bi bi-dot"></i> Pilih submenu <b>KPI</b>.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportKpi/2.png') }}" alt="Menu Report KPI Pehadir">
        </div>

        {{-- Langkah 3: Filter dan Ekspor Laporan --}}
        <div class="col-12">
            <h4 class="fw-semibold">3. Filter dan Mengekspor Laporan KPI</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Pilih <b>Nama Perusahaan / Cabang</b>.</li>
                <li><i class="bi bi-dot"></i> Pilih <b>Tahun</b> dan <b>Bulan</b> periode penilaian KPI.</li>
                <li><i class="bi bi-dot"></i> Klik tombol <b>Filter</b> (hijau) untuk menampilkan data sesuai pilihan.</li>
                <li><i class="bi bi-dot"></i> Setelah data muncul, pilih <b>Export Type</b> (PDF / Excel) dan klik tombol <b>Print</b> (biru) untuk mengunduh laporan.</li>
                <li><i class="bi bi-dot"></i> Data KPI menampilkan nomor & nama karyawan, cabang, departemen, posisi, total skor KPI, kesimpulan, dan tanggal mulai penilaian.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportKpi/3.png') }}" alt="Filter dan Export KPI">
        </div>

    </div>
</section>
@endsection
