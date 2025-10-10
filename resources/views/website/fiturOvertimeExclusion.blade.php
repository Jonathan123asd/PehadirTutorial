@extends('layouts.app')

@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Penggunaan Fitur Overtime Exclusions pada Aplikasi Pehadir</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <b>Overtime Exclusions</b> adalah fitur yang digunakan untuk mengecualikan karyawan tertentu dari perhitungan lembur.
                        Fitur ini berguna bagi HR dan perusahaan agar sistem payroll tetap akurat dan sesuai dengan kebijakan internal.
                        Dengan Overtime Exclusions, perusahaan dapat mengelola kebijakan lembur secara lebih fleksibel dan adil.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row g-4">

        {{-- Step 1: Masuk ke Menu --}}
        <div class="col-12">
            <h4 class="fw-semibold">1. Login ke Aplikasi Pehadir</h4>
            <ul>
                <li>Buka aplikasi <b>Pehadir</b> di perangkat Anda.</li>
                <li>Masuk ke <b>Dashboard</b> utama aplikasi.</li>
                <li>Pada menu sebelah kiri, klik <b>“Setting”</b> lalu pilih <b>“Overtime Exclusion”</b>.</li>
            </ul>
            <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturOvertimeExclusion/1.png') }}" alt="Menu Overtime Exclusion">
        </div>

{{-- Step 2-3: Add & Simpan Multiple Exclusions --}}
<div class="col-12">
    <h4 class="fw-semibold">2. Add Multiple Overtime Exclusions</h4>
    <ul>
        <li>Fitur ini digunakan untuk <b>mengecualikan beberapa karyawan sekaligus</b> dari perhitungan lembur.</li>
    </ul>

    <h5 class="mt-3 fw-bold">Langkah-langkah Penggunaan:</h5>
    <ul>
        <li><b>Pilih Cabang:</b> Klik dropdown pada kolom <b>Branch</b>, lalu pilih cabang tempat karyawan berada.</li>
        <li><b>Isi Alasan Pengecualian:</b> Pada kolom <b>Reason</b>, ketik alasan pengecualian (maksimal 500 karakter).
            <i>Contoh: “Karyawan non-shift” atau “Posisi tidak termasuk lembur”.</i>
        </li>
        <li><b>Atur Tanggal Mulai & Selesai (Opsional):</b>
            <b>Start Date:</b> tanggal mulai pengecualian.
            <b>End Date:</b> tanggal akhir pengecualian (kosongkan jika permanen).</li>
        <li><b>Status Aktif:</b> Centang checkbox <b>Active</b> agar pengecualian langsung diterapkan.</li>
        <li><b>Pilih Karyawan:</b> Centang karyawan yang akan dikecualikan dari tabel berdasarkan cabang, departemen, atau posisi.</li>
    </ul>

    <div class="d-flex flex-wrap gap-3 justify-content-center">
        <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturOvertimeExclusion/2.png') }}" alt="Form Add Multiple Overtime Exclusions">
        <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturOvertimeExclusion/3.png') }}" alt="Tabel Karyawan Multiple Exclusions">
    </div>

    <h5 class="mt-4 fw-bold">Menyimpan Data Multiple Exclusions:</h5>
    <ul>
        <li>Setelah semua data diisi, klik tombol <b>Create Exclusions</b> untuk menyimpan pengecualian.</li>
        <li>Sistem akan menampilkan notifikasi:
            <b>“Successfully created 1 overtime exclusions.”</b>
        </li>
        <li>Data akan otomatis tersimpan dan tampil di dashboard <b>Overtime Exclusion</b>.</li>
    </ul>

    <div class="text-center">
        <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturOvertimeExclusion/4.png') }}" alt="Simpan Multiple Exclusions">
    </div>
</div>


{{-- Step 4-5: Add & Simpan Single Overtime Exclusion --}}
<div class="col-12">
    <h4 class="fw-semibold">4. Add Overtime Exclusion (Single)</h4>
    <ul>
        <li>Fitur ini digunakan untuk kebijakan <b>khusus satu karyawan</b> yang tidak berhak lembur (misalnya manajemen atau karyawan kontrak tertentu).</li>
        <li>Fitur ini membantu memastikan perhitungan lembur lebih akurat dan sesuai dengan kebijakan perusahaan.</li>
    </ul>



    <h5 class="mt-3 fw-bold">Langkah-langkah Penggunaan:</h5>
    <ul>
        <li><b>Pilih Cabang:</b> Klik pada kolom <b>Branch</b> dan pilih cabang tempat karyawan bekerja.</li>
        <li><b>Pilih Karyawan:</b> Klik pada kolom <b>Employee</b> dan pilih nama karyawan yang akan dikecualikan dari lembur.</li>
        <li><b>Isi Alasan:</b> Masukkan alasan pengecualian di kolom <b>Reason</b>.
            <i>Contoh: “Karyawan manajerial tidak termasuk perhitungan lembur”.</i>
        </li>
        <li><b>Atur Tanggal Berlaku (Opsional):</b>
            <b>Start Date:</b> Tanggal mulai pengecualian.
            <b>End Date:</b> Tanggal berakhir (kosongkan jika permanen).</li>
        <li><b>Aktifkan Status:</b> Centang <b>Active</b> agar pengecualian diterapkan, atau hilangkan centang jika tidak aktif.</li>
    </ul>

    <div class="text-center mb-3">
        <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturOvertimeExclusion/5.png') }}" alt="Form Add Single Overtime Exclusion">
    </div>

    <h5 class="mt-4 fw-bold">Menyimpan Data Single Exclusion:</h5>
    <ul>
        <li>Setelah semua data diisi dengan benar, klik tombol <b>Add Exclusion</b> untuk menyimpan.</li>
        <li>Sistem akan menampilkan notifikasi:
            <b>“Overtime exclusions created successfully.”</b>
        </li>
        <li>Data akan otomatis tersimpan dan muncul di dashboard <b>Overtime Exclusion</b>.</li>
    </ul>

    <div class="d-flex flex-wrap justify-content-center gap-3">
        <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturOvertimeExclusion/6.png') }}" alt="Notifikasi Berhasil Simpan Single Exclusion">
        <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturOvertimeExclusion/7.png') }}" alt="Dashboard Overtime Exclusion Final">
    </div>
</div>

    </div>
</section>
@endsection
