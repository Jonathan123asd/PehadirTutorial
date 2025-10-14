@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Panduan Menggunakan Fitur My Profile pada Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>My Profile</b> merupakan fitur yang digunakan untuk menampilkan dan mengelola data pribadi karyawan atau data perusahaan.
                            Melalui fitur ini, pengguna dapat melihat, mengisi, dan memperbarui informasi penting seperti nama, email, nomor KTP, tanggal lahir,
                            jenis kelamin, alamat, hingga data rekening bank. Tujuannya adalah untuk memastikan bahwa data karyawan selalu akurat dan up-to-date
                            sebagai dasar administrasi HR dan keperluan lainnya dalam sistem.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Masuk ke Menu <b>"My Profile"</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Buka aplikasi atau website <b>Pehadir</b>.</li>
                    <li><i class="bi bi-dot"></i> Pilih menu <b>Dashboard > My Profile</b> untuk membuka halaman profil Anda.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMyProfile/1.png') }}" alt="Fitur My Profile">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Klik Tombol <b>"Edit"</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Di pojok kanan atas halaman profil, klik tombol <b>Edit</b> untuk mulai mengisi atau memperbarui data Anda.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMyProfile/2.png') }}" alt="Fitur My Profile - Edit">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Unggah Foto (Avatar)</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Choose File</b> untuk memilih foto dari perangkat Anda.</li>
                    <li><i class="bi bi-dot"></i> Setelah dipilih, foto akan otomatis diunggah dan digunakan sebagai avatar Anda.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMyProfile/3.png') }}" alt="Unggah Foto Profil">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Isi Data Pribadi dan Simpan Perubahan</h4>
                <p>Lengkapi seluruh kolom data pribadi berikut dengan benar, kemudian simpan perubahan:</p>
                <ul>
                    <li><i class="bi bi-dot"></i> <b>Username</b> dan <b>Nama</b> (otomatis terisi, dapat disesuaikan jika diperlukan)</li>
                    <li><i class="bi bi-dot"></i> <b>Email Aktif</b></li>
                    <li><i class="bi bi-dot"></i> <b>Tanggal Lahir</b> (Date of Day)</li>
                    <li><i class="bi bi-dot"></i> <b>Jenis Kelamin</b> (Gender)</li>
                    <li><i class="bi bi-dot"></i> <b>Nomor Identitas</b> (KTP) dan <b>Kartu Keluarga</b></li>
                    <li><i class="bi bi-dot"></i> <b>NPWP</b> (jika ada)</li>
                    <li><i class="bi bi-dot"></i> <b>Agama</b></li>
                    <li><i class="bi bi-dot"></i> <b>Nomor Telepon</b> (Phone)</li>
                    <li><i class="bi bi-dot"></i> <b>Alamat Lengkap</b></li>
                    <li><i class="bi bi-dot"></i> <b>Nama Bank</b></li>
                    <li><i class="bi bi-dot"></i> <b>Nomor Rekening</b></li>
                    <li><i class="bi bi-dot"></i> <b>Nama Pemilik Rekening</b></li>
                    <li><i class="bi bi-dot"></i> Setelah semua data diisi dengan benar, klik tombol <b>Save</b> atau <b>Update</b> untuk menyimpan perubahan.</li>
                    <li><i class="bi bi-dot"></i> Data yang telah diperbarui akan langsung tersimpan dan muncul di dashboard Anda.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMyProfile/4.png') }}" alt="Isi dan Simpan Data Profil">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
