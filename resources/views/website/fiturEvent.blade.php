@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Panduan Cara Menggunakan Menu Event di Pehadir.my.id</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Menu Event</b> berfungsi sebagai sarana untuk memberitahukan kepada seluruh karyawan mengenai
                            berbagai acara yang akan diselenggarakan, baik di dalam maupun di luar kantor.
                            Karyawan dapat menerima informasi penting terkait kegiatan perusahaan, seperti acara buka puasa
                            bersama, rapat besar, pelatihan, atau kegiatan sosial lainnya.
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
                    <li>Buka website <b>pehadir.my.id</b> melalui browser.</li>
                    <li>Pada halaman login, masukkan <b>Email</b> dan <b>Password</b>.</li>
                    <li>Klik tombol <b>Login</b> untuk masuk ke dashboard aplikasi.</li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                            src="{{ asset('assets/img/website/FiturEvent/1.png') }}" alt="Login">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                            src="{{ asset('assets/img/website/FiturEvent/2.png') }}" alt="Login">
                    </div>
                </div>

            </div>

            {{-- Step 2 --}}
            <div class="col-12">
                <h4 class="fw-semibold">2. Pada Halaman Dasbor</h4>
                <p>Setelah berhasil login, Anda akan diarahkan ke dashboard utama di mana Anda dapat mengakses fitur-fitur
                    aplikasi.</p>
                <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                    src="{{ asset('assets/img/website/FiturEvent/3.png') }}" alt="Dashboard">
            </div>

            {{-- Step 3 --}}
            <div class="col-12">
                <h4 class="fw-semibold">3. Masuk ke Menu Event</h4>
                <ul>
                    <li>Pada sidebar kiri, klik menu <b>HR Management</b> → <b>Event</b> untuk membuka submenu.</li>
                    <li>Klik tombol <b>+ Event</b> di halaman Manage Event untuk menambahkan event baru.</li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturEvent/4.png') }}"
                            alt="Menu Event">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturEvent/4.1.png') }}"
                            alt="Tambah Event">
                    </div>
                </div>
            </div>

            {{-- Step 4 --}}
            <div class="col-12">
                <h4 class="fw-semibold">4. Isi Opsi Informasi Event</h4>
                <p>Lengkapi data berikut sesuai aktivitas Anda:</p>
                <ul>
                    <li><b>Branch:</b> cabang atau bagian perusahaan</li>
                    <li><b>Title:</b> nama atau keterangan singkat acara</li>
                    <li><b>Image:</b> gambar terkait acara</li>
                    <li><b>Content:</b> isi atau materi acara</li>
                </ul>
                <p>Klik tombol <b>Simpan</b> untuk menyimpan data event.</p>
                <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                    src="{{ asset('assets/img/website/FiturEvent/5.png') }}" alt="Form Event">
            </div>

            {{-- Step 5 --}}
            <div class="col-12">
                <h4 class="fw-semibold">5. Simpan Data & Publikasikan</h4>
                <ul>
                    <li>Setelah menyimpan, kembali ke <b>Manage Event</b> dan cek apakah data sudah tersimpan.</li>
                    <li>Klik menu <b>Action</b> → pilih ikon titik tiga.</li>
                    <li>Pilih opsi <b>Publish</b> untuk mempublikasikan event.</li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturEvent/6.1.png') }}"
                            alt="Manage Event">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturEvent/6.png') }}"
                            alt="Publish Event">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow" src="{{ asset('assets/img/website/FiturEvent/6.2.png') }}"
                            alt="Publish Event">
                    </div>
                </div>
            </div>

            {{-- Step 6 --}}
            <div class="col-12">
                <h4 class="fw-semibold">6. Langkah Terakhir</h4>
                <p>Klik tombol <b>Simpan</b> untuk memastikan semua perubahan sudah tersimpan. Pastikan data sudah benar
                    sebelum disimpan.</p>
                <div class="row g-3">
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                            src="{{ asset('assets/img/website/FiturEvent/7.png') }}" alt="Simpan Event">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                            src="{{ asset('assets/img/website/FiturEvent/7.1.png') }}" alt="Simpan Event">
                    </div>
                </div>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
