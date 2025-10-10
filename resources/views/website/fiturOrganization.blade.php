@extends('layouts.app')

@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Membuat Struktur Organisasi (Organization) pada Website Pehadir</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <b>Menu Organization</b> pada website <b>Pehadir</b> digunakan untuk menampilkan susunan struktur organisasi berdasarkan cabang perusahaan.
                        Fitur ini mempermudah HR atau Admin dalam memantau posisi dan jabatan setiap karyawan, serta memastikan bahwa struktur kepemimpinan terdata dengan baik dan rapi.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row g-4">

        {{-- Step 1: Masuk ke Menu Organization --}}
        <div class="col-12">
            <h4 class="fw-semibold">1. Masuk ke Menu Organization</h4>
            <ul>
                <li>Pilih halaman <b>Employee</b> di menu sebelah kiri.</li>
                <li>Kemudian klik <b>Organization</b>.</li>
                <li>Klik tombol <b>Set Manager</b> yang berada di bagian kanan atas halaman.</li>
            </ul>
            <div class="text-center mb-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturOrganization/1.png') }}" alt="Menu Organization Pehadir">
            </div>
        </div>

        {{-- Step 2: Mengatur Manajer --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Mengatur Manajer pada Struktur Organisasi</h4>
            <ul>
                <li>Setelah klik tombol <b>Set Manager</b>, akan muncul jendela <b>“Set Manager”</b> yang menampilkan <b>Employee Info</b> dan kolom <b>Manager</b>.</li>
                <li>Cari nama karyawan yang ingin diatur manajernya pada kolom <b>Employee Info</b>.</li>
                <li>Klik kolom <b>“Manager”</b> di baris karyawan yang bersangkutan.</li>
                <li>Pilih nama manajer dari daftar yang muncul dalam bentuk <b>dropdown</b>.</li>
                <li>Tentukan manajer sesuai dengan struktur organisasi yang berlaku di perusahaan.</li>
            </ul>

            <div class="text-center mb-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturOrganization/2.png') }}" alt="Set Manager Organization Pehadir">
            </div>
        </div>

        {{-- Step 3: Menyimpan Pengaturan --}}
        <div class="col-12">
            <h4 class="fw-semibold">3. Menyimpan Pengaturan Struktur Organisasi</h4>
            <ul>
                <li>Gulir halaman ke bawah hingga menemukan tombol <b>Submit</b>.</li>
                <li>Klik tombol <b>Submit</b> untuk menyimpan pengaturan manajer yang telah dibuat.</li>
                <li>Jika data berhasil disimpan, struktur organisasi akan otomatis muncul di halaman <b>Manage Organization</b>.</li>
                <li>Gunakan tombol <b>+</b> atau <b>–</b> di kanan atas diagram untuk memperbesar atau memperkecil tampilan struktur organisasi.</li>
            </ul>

            <div class="text-center mb-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturOrganization/3.png') }}" alt="Submit Struktur Organisasi Pehadir">
            </div>

            <p><b>Contoh:</b> Pada gambar di atas, <b>Sanudin</b> menjabat sebagai <b>Foreman</b> di bawah manajer <b>Safno</b>.</p>

            <div class="text-center mb-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturOrganization/4.png') }}" alt="Contoh Struktur Organisasi Pehadir">
            </div>
        </div>

        {{-- Step 4: Mengunduh Struktur Organisasi --}}
        <div class="col-12">
            <h4 class="fw-semibold">4. Mengunduh Struktur Organisasi</h4>
            <ul>
                <li>Klik tombol <b>Unduh</b> berwarna <b>oranye</b> di pojok kanan bawah layar.</li>
                <li>Setelah tombol diklik, file struktur organisasi akan otomatis terunduh dalam format gambar <b>(.png)</b>.</li>
                <li>File hasil unduhan dapat diakses melalui bagian atas browser atau folder unduhan perangkat Anda.</li>
            </ul>

            <div class="text-center mb-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturOrganization/5.png') }}" alt="Unduh Struktur Organisasi Pehadir">
            </div>

            <p>File hasil unduhan kini tersedia dalam bentuk gambar dan siap digunakan untuk dokumentasi atau laporan perusahaan.</p>
        </div>

    </div>
</section>
@endsection
