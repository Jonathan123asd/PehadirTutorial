@extends('layouts.app')

@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Penggunaan Fitur Daily Allowance and Deduction Report pada Aplikasi Pehadir</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <b>Daily Allowance and Deduction Report</b> merupakan fitur penting untuk mengontrol biaya tenaga kerja
                        dan menjaga transparansi perhitungan gaji harian.
                        Fitur ini menampilkan data jam masuk, jam keluar, keterlambatan, pulang cepat, serta informasi tunjangan dan potongan karyawan.
                        Dengan fitur ini, HR dan atasan dapat menilai performa kehadiran serta memastikan sistem penggajian berjalan akurat dan adil.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row g-4">

        {{-- Step 1: Masuk ke Menu Daily Allowance --}}
        <div class="col-12">
            <h4 class="fw-semibold">1. Masuk ke Menu Daily Allowance and Deduction Report</h4>
            <ul>
                <li>Login ke aplikasi <b>Pehadir</b>.</li>
                <li>Masuk ke <b>Dashboard</b> utama aplikasi.</li>
                <li>Pada menu sebelah kiri, klik <b>“Report”</b> → <b>“Salary”</b> → pilih <b>“Daily Allowance and Deduction Report”</b>.</li>
            </ul>
            <div class="text-center mb-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturDailyAllowance/1.png') }}" alt="Menu Daily Allowance and Deduction Report">
            </div>
        </div>

        {{-- Step 2: Pilih Cabang dan Periode --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Pilih Cabang dan Periode</h4>
            <ul>
                <li>Pada kolom <b>Filter Periode</b>, pilih nama cabang, misalnya <b>PT. FIRMAN ABADI MOBILE</b>.</li>
                <li>Tentukan rentang tanggal yang ingin ditampilkan, misalnya dari <b>01/09/2024</b> hingga <b>30/09/2024</b>.</li>
                <li>Pilih jenis file yang diinginkan (<b>PDF</b>, <b>Excel</b>, dll) untuk menyimpan laporan.</li>
                <li>Tekan tombol <b>Filter</b> (berwarna hijau) untuk menampilkan data sesuai filter yang dipilih.</li>
            </ul>
            <div class="text-center mb-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturDailyAllowance/2.png') }}" alt="Filter Cabang dan Periode Daily Allowance">
            </div>

            <p>Setelah itu, data absensi harian akan muncul berdasarkan:</p>
            <ul>
                <li><b>ID Karyawan</b> dan <b>Nama</b></li>
                <li><b>Shift</b> dan <b>Jadwal Kerja</b></li>
                <li><b>Waktu Check-in</b> & <b>Check-out</b></li>
                <li><b>Keterlambatan</b> (Late) dan <b>Pulang Cepat</b> (Early Leaving)</li>
                <li><b>Jam Kerja Aktual</b> dan <b>Jam Kerja Terjadwal</b></li>
                <li><b>Tunjangan</b> dan <b>Potongan</b> berdasarkan kehadiran</li>
            </ul>

            <div class="text-center mb-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturDailyAllowance/3.png') }}" alt="Data Laporan Daily Allowance and Deduction">
            </div>
        </div>

        {{-- Step 3: Cetak atau Simpan Laporan --}}
        <div class="col-12">
            <h4 class="fw-semibold">3. Cetak atau Simpan Laporan</h4>
            <ul>
                <li>Klik tombol <b>Print</b> (berwarna biru) jika ingin mencetak langsung laporan.</li>
                <li>Laporan akan menampilkan informasi harian per karyawan yang mencakup:</li>
                <ul>
                    <li><b>Schedule In/Out:</b> Jadwal kerja harian</li>
                    <li><b>Check In/Out:</b> Waktu absen aktual</li>
                    <li><b>Late:</b> Keterlambatan hadir</li>
                    <li><b>Early Leaving:</b> Waktu pulang lebih cepat</li>
                    <li><b>Work Hours:</b> Total jam kerja aktual</li>
                    <li><b>Allowance:</b> Tunjangan berdasarkan shift/kehadiran</li>
                    <li><b>Deduction:</b> Potongan karena telat, absen, atau pelanggaran</li>
                </ul>
                <li>Laporan juga dapat disimpan dalam format <b>PDF</b> atau <b>Excel</b> untuk dokumentasi dan analisis lebih lanjut.</li>
            </ul>

            <div class="text-center mb-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturDailyAllowance/4.png') }}" alt="Print Laporan Daily Allowance and Deduction">
            </div>
        </div>

    </div>
</section>
@endsection
