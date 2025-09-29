@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Panduan Pengelolaan Tunjangan Karyawan di Pehadir.my.id</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Manage Allowance Option</b> adalah modul yang memungkinkan pengguna mengelola berbagai jenis
                            tunjangan karyawan,
                            baik yang bersifat tetap (<b>Fixed</b>) maupun tidak tetap (<b>Unfixed</b>), misalnya tunjangan
                            transportasi, makan, kesehatan, atau insentif khusus.
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
                <h4 class="fw-semibold">1. Masuk ke Dashboard</h4>
                <ul>
                    <li>Login ke <b>pehadir.my.id</b> dengan Email dan Password.</li>
                    <li>Setelah berhasil login, Anda akan diarahkan ke dashboard utama tempat mengakses semua fitur
                        aplikasi.</li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-12">
                        <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                            src="{{ asset('assets/img/website/fiturTunjanganKaryawan/1.png') }}" alt="Dashboard">
                    </div>
                </div>
            </div>

            {{-- Step 2 --}}
            <div class="col-12">
                <h4 class="fw-semibold">2. Masuk ke Menu Setting</h4>
                <ul>
                    <li>Pada sidebar kiri, klik menu <b>Setting</b>.</li>
                    <li>Pilih <b>Master Data</b> → klik submenu <b>Manage Allowance Option</b>.</li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                            src="{{ asset('assets/img/website/fiturTunjanganKaryawan/2.png') }}" alt="Menu Setting">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                            src="{{ asset('assets/img/website/fiturTunjanganKaryawan/2.2.png') }}" alt="Menu Setting">
                    </div>

                </div>
            </div>

            {{-- Step 3 --}}
            <div class="col-12">
                <h4 class="fw-semibold">3. Tambahkan Tunjangan Baru</h4>
                <ul>
                    <li>Klik tombol <b>+ New Allowance</b> di beranda menu Manage Allowance Option.</li>
                    <li>Formulir pembuatan opsi tunjangan baru akan muncul.</li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-12">
                        <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                            src="{{ asset('assets/img/website/fiturTunjanganKaryawan/2.3.png') }}" alt="New Allowance">
                    </div>
                </div>

            </div>


            {{-- Step 4 --}}
            <div class="col-12">
                <h4 class="fw-semibold">4. Isi Formulir Opsi Tunjangan</h4>
                <ul>
                    <li><b>Branch:</b> Pilih cabang/perusahaan tempat tunjangan berlaku. Contoh: PT. FIRMAN ABADI MOBILE.
                    </li>
                    <li><b>Name:</b> Nama tunjangan. Contoh: Tunjangan Makan.</li>
                    <li><b>Code (opsional):</b> Kode singkat untuk identifikasi tunjangan. Contoh: TM.</li>
                    <li><b>Pay Type:</b> Pilih <b>Fixed</b> atau <b>Unfixed</b>.</li>
                </ul>
                <p>Setelah semua terisi, klik tombol <b>Submit</b> untuk menyimpan tunjangan baru.</p>
                <div class="col-md-12">
                    <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                        src="{{ asset('assets/img/website/fiturTunjanganKaryawan/3.png') }}" alt="Menu Setting">
                </div>
            </div>

            {{-- Step 5 --}}
            <div class="col-12">
                <h4 class="fw-semibold">5. Lihat Daftar Allowance Option</h4>
                <ul>
                    <li>Di halaman Manage Allowance Option, Anda dapat melihat semua tunjangan yang sudah dibuat sebelumnya.
                    </li>
                </ul>
                <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                    src="{{ asset('assets/img/website/fiturTunjanganKaryawan/4.png') }}" alt="Daftar Tunjangan">
            </div>

            {{-- Step 6 --}}
            <div class="col-12">
                <h4 class="fw-semibold">6. Ubah Opsi Tunjangan</h4>
                <ul>
                    <li>Jika ingin mengubah data tunjangan, klik ikon titik tiga pada kolom <b>Action</b> → pilih
                        <b>Edit</b>.
                    </li>
                    <li>Pada halaman Edit Allowance Option, perbarui data berikut:
                        <ul>
                            <li><b>Name:</b> Nama tunjangan baru</li>
                            <li><b>Code (opsional):</b> Untuk mempermudah identifikasi</li>
                            <li><b>Pay Type:</b> Pilih Fixed atau Unfixed sesuai kebutuhan</li>
                        </ul>
                    </li>
                    <li>Klik <b>Submit</b> untuk menyimpan perubahan.</li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-12">
                        <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                            src="{{ asset('assets/img/website/fiturTunjanganKaryawan/5.png') }}" alt="Edit Allowance">
                    </div>
                    <div class="col-md-12">
                        <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                            src="{{ asset('assets/img/website/fiturTunjanganKaryawan/6.png') }}" alt="Edit Allowance">
                    </div>
                </div>
            </div>

            {{-- Step 7 --}}
            <div class="col-12">
                <h4 class="fw-semibold">7. Hasil Akhir</h4>
                <ul>
                    <li>Setelah semua tunjangan berhasil dibuat dan dikelola, daftar opsi tunjangan akan tampil pada halaman
                        Manage Allowance Option.</li>
                </ul>
                <div class="col-md-12">
                    <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                        src="{{ asset('assets/img/website/fiturTunjanganKaryawan/7.png') }}" alt="Daftar Tunjangan Akhir">
                </div>
            </div>

        </div>
        {{-- /Page Content --}}
    </section>
@endsection
