@extends('layouts.app')

@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Penggunaan Fitur KPI Description dan Evaluation pada Aplikasi Pehadir</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <b>KPI Description</b> adalah fitur yang digunakan untuk membuat indikator penilaian kerja yang digunakan dalam evaluasi karyawan.
                        Fitur ini mempermudah manajemen dan tim HR dalam melakukan evaluasi objektif, meningkatkan transparansi, serta akuntabilitas target kerja.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row g-4">

        {{-- Step 1: Masuk ke Menu KPI Description --}}
        <div class="col-12">
            <h4 class="fw-semibold">1. Masuk ke Menu KPI Description</h4>
            <ul>
                <li>Login ke aplikasi <b>Pehadir</b>.</li>
                <li>Masuk ke <b>Dashboard</b> utama aplikasi.</li>
                <li>Pada menu sebelah kiri, klik <b>“Setting”</b>, lalu pilih <b>“Master Data”</b>.</li>
                <li>Buka menu <b>“KPI Management”</b> dan klik <b>“KPI Description”</b>.</li>
            </ul>
            <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturKpiDescription/1.png') }}" alt="Menu KPI Description">
        </div>

        {{-- Step 2: Tambah KPI Description --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Tambahkan Description Baru</h4>
            <ul>
                <li>Klik tombol <b>+ KPI Description</b> untuk menambahkan deskripsi KPI baru.</li>
                <li>Lengkapi kolom berikut:</li>
                <ul>
                    <li><b>Description:</b> Isi dengan nama atau penjelasan KPI.
                        <i>Contoh: “Kedisiplinan Kehadiran”.</i>
                    </li>
                    <li><b>Type:</b> Masukkan tipe atau kategori KPI.
                        <i>Contoh: “Disiplin”, “Produktivitas”, dll.</i>
                    </li>
                    <li><b>Active:</b> Biarkan aktif jika deskripsi akan digunakan, ubah ke Inactive jika tidak.</li>
                    <li><b>Include Attendance:</b> Pilih <b>Yes</b> jika KPI berkaitan dengan kehadiran, atau <b>No</b> jika tidak.</li>
                </ul>
            </ul>

            <div class="text-center my-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturKpiDescription/2.png') }}" alt="Form Tambah KPI Description">
            </div>
        </div>

        {{-- Step 3: Simpan Data KPI Description --}}
        <div class="col-12">
            <h4 class="fw-semibold">3. Simpan Data KPI Description</h4>
            <ul>
                <li>Setelah semua kolom diisi dengan benar, klik tombol <b>Submit</b> untuk menyimpan data.</li>
                <li>Sistem akan menampilkan notifikasi bahwa data berhasil disimpan.</li>
                <li>Deskripsi KPI yang baru akan otomatis muncul pada <b>Dashboard KPI</b>.</li>
            </ul>
            <div class="text-center my-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturKpiDescription/3.png') }}" alt="Dashboard KPI Description">
            </div>
        </div>

        {{-- Step 4: Masuk ke Menu Evaluation --}}
        <div class="col-12">
            <h4 class="fw-semibold">4. Masuk ke Menu Evaluation</h4>
            <ul>
                <li>Pada menu sebelah kiri, klik <b>“Setting”</b> → <b>“Master Data”</b> → <b>“KPI Management”</b> → <b>“Evaluation”</b>.</li>
                <li>Fitur ini digunakan untuk menilai performa kerja karyawan berdasarkan indikator KPI yang telah dibuat.</li>
                <li>Hasil evaluasi dapat digunakan untuk dasar pemberian <b>bonus, promosi, pelatihan,</b> atau <b>pembinaan</b>.</li>
            </ul>
            <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturKpiDescription/4.png') }}" alt="Menu Evaluation">
        </div>

        {{-- Step 5: Tambah Evaluation --}}
        <div class="col-12">
            <h4 class="fw-semibold">5. Tambahkan Evaluation</h4>
            <ul>
                <li>Buka menu <b>Evaluation</b>, kemudian klik tombol <b>+ Evaluation</b>.</li>
                <li>Pada bagian <b>Add Question Type</b>, pilih indikator yang ingin dimasukkan seperti:
                    <ul>
                        <li>Accuracy</li>
                        <li>Working Method</li>
                        <li>Creative & Innovation</li>
                        <li>Leadership</li>
                        <li>Discipline</li>
                        <li>Team Work & Attitude</li>
                        <li>dll.</li>
                    </ul>
                </li>
                <li>Gunakan tombol berikut untuk memilih indikator:
                    <ul>
                        <li><b>( > )</b> : Pilih satu indikator.</li>
                        <li><b>( >> )</b> : Pilih semua indikator.</li>
                        <li><b>( < )</b> : Hapus satu indikator.</li>
                        <li><b>( << )</b> : Hapus semua indikator.</li>
                    </ul>
                </li>
                <li>Isi kolom <b>Weight</b> untuk menentukan bobot penilaian dari setiap indikator.</li>
            </ul>

            <div class="text-center my-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturKpiDescription/5.png') }}" alt="Form Tambah Evaluation">
            </div>
        </div>

        {{-- Step 6: Simpan Data Evaluation --}}
        <div class="col-12">
            <h4 class="fw-semibold">6. Simpan Data Evaluation</h4>
            <ul>
                <li>Setelah semua indikator dan bobot penilaian diatur, klik tombol <b>Submit</b>.</li>
                <li>Sistem akan menyimpan data dan menampilkan notifikasi berhasil.</li>
                <li>Data akan otomatis muncul di <b>Dashboard Evaluation</b>.</li>
            </ul>
            <div class="text-center my-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturKpiDescription/6.png') }}" alt="Dashboard Evaluation">
            </div>
        </div>

    </div>
</section>
@endsection
