@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Panduan Cara Menggunakan Location Exclusions di Pehadir.my.id</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Location Exclusions</b> berfungsi untuk mengecualikan lokasi tertentu agar tidak bisa
                            digunakan
                            untuk presensi (absen) oleh pegawai. Fitur ini membantu mengatur absensi berbasis lokasi secara
                            lebih fleksibel.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-4">

            {{-- Step 1 --}}
            <div class="col-12">
                <h4 class="fw-semibold">1. Login ke Aplikasi</h4>
                <ul>
                    <li>1.Buka website <b>pehadir.my.id</b> melalui browser.</li>
                    <li>2.Masukkan <b>Email</b> dan <b>Password</b>.</li>
                    <li>3.Klik tombol <b>Login</b> untuk masuk ke dashboard.</li>
                </ul>
                <div class="row g-3">
                    <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                        src="{{ asset('assets/img/website/FiturLocationExclusions/1.1.png') }}" alt="Login">
                    <div class="col-md-12">
                        <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                            src="{{ asset('assets/img/website/FiturLocationExclusions/1.png') }}" alt="Login">
                    </div>
                </div>
            </div>

            {{-- Step 2 --}}
            <div class="col-12">
                <h4 class="fw-semibold">2. Masuk ke Menu Location Exclusions</h4>
                <ul>
                    <li>Pada sidebar, klik menu <b>Setting</b> → pilih <b>Location Exclusions</b>.</li>
                    <li>Halaman utama Location Exclusions akan menampilkan daftar lokasi yang sudah dikecualikan.</li>
                </ul>
                <div class="row g-3">
                    <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                        src="{{ asset('assets/img/website/FiturLocationExclusions/2.png') }}" alt="Menu Setting">
                </div>
            </div>

            {{-- Step 3 --}}
            <div class="col-12">
                <h4 class="fw-semibold">3. Menambahkan Location Exclusions Baru</h4>
                <ul>
                    <li>Klik tombol <b>+ Add Exclusions</b> untuk menambahkan lokasi yang ingin dikecualikan.</li>
                    <li>Formulir akan muncul untuk memasukkan data.</li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-12">
                        <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                            src="{{ asset('assets/img/website/FiturLocationExclusions/3.png') }}" alt="Add Exclusions">
                    </div>
                </div>
            </div>

            {{-- Step 4 --}}
            <div class="col-12">
                <h4 class="fw-semibold">4. Isi Formulir +Add Exclusions</h4>
                <p>Lengkapi informasi berikut:</p>
                <ul>
                    <li><b>Branch:</b> Pilih lokasi perusahaan sesuai karyawan (contoh: PT. Firman Abadi Mobile).</li>
                    <li><b>Employee:</b> Pilih pegawai yang akan dikenai pengecualian (hanya satu karyawan per form).</li>
                    <li><b>Reason:</b> Alasan pengecualian.</li>
                    <li><b>Start and End Date:</b> Tanggal mulai dan berakhirnya pengecualian.</li>
                    <li><b>Pilih Exclusion Type :</b> </li>
                    <li>

                        Clock In → di gunakan untuk karyawan yang bekerja di luar kantor atau lokasi tertentu.
                    </li>
                    <li>

                        Clock Out → di gunakan untuk jika jam pulang di lakukan dari lokasi yang berbeda.
                    </li>
                    <li><b>Active:</b> Pilih status aktif atau tidak.</li>
                </ul>
                <p>Klik tombol <b>Add Exclusion</b> untuk menyimpan data.</p>
                <div class="col row g-3">
                    <div class="col-md-12">
                        <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                            src="{{ asset('assets/img/website/FiturLocationExclusions/4.png') }}" alt="Form Exclusions">
                    </div>
                </div>
            </div>

            {{-- Step 5 --}}
            <div class="col-12">
                <h4 class="fw-semibold">5. Hasil Akhir</h4>
                <ul>
                    <li>Setelah Submit, data akan tersimpan di halaman utama <b>Location Exclusions</b>.</li>
                    <li>Anda dapat memeriksa kembali status dan detail lokasi yang sudah dikecualikan.</li>
                </ul>
                <div class="col row g-3">
                    <div class="col-md-12">
                        <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                            src="{{ asset('assets/img/website/FiturLocationExclusions/6.png') }}" alt="Form Exclusions">
                    </div>
                </div>
            </div>

            {{-- Step 6.1 --}}
            <div class="col-12">
                <h5 class="fw-semibold">6.1 Buka Website Pehadir</h5>
                <ul>
                    <li>Klik <b>Setting</b> di menu sebelah kanan.</li>
                    <li>Pilih <b>Location Exclusions</b> → <b>+Add Multiple</b>.</li>
                </ul>
                <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                    src="{{ asset('assets/img/website/FiturLocationExclusions/2.png') }}" alt="Menu +Add Multiple">
            </div>

            {{-- Step 6.2 --}}
            <div class="col-12">
                <h5 class="fw-semibold">6.2 Klik +Add Multiple</h5>
                <ul>
                    <li>Klik tombol <b>+Add Multiple</b> untuk membuat Location Exclusions baru.</li>
                </ul>
                <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                    src="{{ asset('assets/img/website/FiturLocationExclusions/7.png') }}" alt="Form +Add Multiple">
            </div>

            {{-- Step 6.3 --}}
            <div class="col-12">
                <h5 class="fw-semibold">6.3 Isi Form +Add Multiple</h5>
                <ul>
                    <li><b>Branch:</b> Lokasi perusahaan sesuai karyawan (contoh: Sanudin lokasi kerja PT. Firman Abadi
                        Mobile)</li>
                    <li><b>Reason:</b> Alasan pengecualian</li>
                    <li><b>Start and End Date:</b> Tanggal mulai dan berakhirnya absensi</li>
                    <li><b>Select Employees:</b> Pilih karyawan yang akan dikenai pengaturan</li>
                </ul>
                <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                    src="{{ asset('assets/img/website/FiturLocationExclusions/7.1.png') }}" alt="Isi Form">
            </div>

            {{-- Step 6.4 --}}
            <div class="col-12">
                <h5 class="fw-semibold">6.4 Klik Create Exclusions</h5>
                <ul>
                    <li>Klik tombol <b>Create Exclusions</b> untuk menyimpan data.</li>
                </ul>
                <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                    src="{{ asset('assets/img/website/FiturLocationExclusions/7.2.png') }}" alt="Create Exclusions">
            </div>

            {{-- Step 6.5 --}}
            <div class="col-12">
                <h5 class="fw-semibold">6.5 Hasil Akhir</h5>
                <ul>
                    <li>Data tersimpan di menu utama <b>Location Exclusions</b>.</li>
                    <li>Setelah klik <b>Create Exclusions</b> (cukup 1x klik), klik tanda silang untuk keluar, lalu refresh
                        halaman.</li>
                </ul>
                <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                    src="{{ asset('assets/img/website/FiturLocationExclusions/7.3.png') }}" alt="Hasil Exclusions">
            </div>


        </div>
        {{-- /Page Content --}}
    </section>
@endsection
