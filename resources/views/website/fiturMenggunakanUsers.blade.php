@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Panduan Menggunakan Menu Users pada Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Users</b> adalah menu untuk mengelola data akun pengguna dalam sistem Pehadir.
                            Melalui menu ini, admin atau HR dapat melihat daftar pengguna, menambahkan akun baru, mengatur hak akses, melakukan pencarian, serta mengelola peran pengguna sesuai jabatan masing-masing.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Masuk ke Website Pehadir</h4>
                <ul>
                    <li>Buka browser (misalnya Chrome), lalu ketik <b>pehadir.my.id</b> di kolom pencarian.</li>
                    <li>Masukkan <b>Email</b> dan <b>Kata Sandi</b> Anda, lalu klik tombol <b>Login.</b></li>
                </ul>
                <div class="row g-3">
                    <div class="col-8">
                         <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMenggunakanUsers/1.png') }}" alt="Fitur Users">
                     </div>
                     <div class="col-4">
                         <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMenggunakanUsers/2.png') }}" alt="Fitur Users">
                     </div>
            </div>
                </div>


            <div class="col-12">
                <h4 class="fw-semibold">2. Buka Menu Users</h4>
                <ul>
                    <li>Pada halaman utama, pilih menu <b>Setting</b> lalu klik submenu <b>Users.</b></li>
                    <li>Untuk menambahkan pengguna baru, klik tombol <b>+ Add User</b> di pojok kanan atas.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMenggunakanUsers/3.png') }}" alt="Fitur Users">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Isi Form Add User</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> <b>Name:</b> Masukkan nama lengkap pengguna. <em>(contoh: Muhidin)</em></li>
                    <li><i class="bi bi-dot"></i> <b>Email:</b> Alamat email untuk login akun.</li>
                    <li><i class="bi bi-dot"></i> <b>User Role:</b> Pilih peran pengguna, misalnya Karyawan, Supervisor, Manager, atau Admin.</li>
                    <li><i class="bi bi-dot"></i> <b>Employee Type:</b> Tentukan jenis karyawan (Permanent atau Contract).</li>
                    <li><i class="bi bi-dot"></i> <b>Branch:</b> Pilih cabang perusahaan tempat pengguna bekerja.</li>
                    <li><i class="bi bi-dot"></i> <b>Placement:</b> Lokasi penempatan, seperti Head Office atau Non Head Office.</li>
                    <li><i class="bi bi-dot"></i> <b>Password:</b> Kata sandi untuk login akun.</li>
                </ul>
                <p class="mb-2">Setelah semua data terisi, klik tombol <b>Submit</b> untuk menyimpan akun baru.
                <em>Contoh form Add User ditampilkan pada gambar di bawah:</em></p>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMenggunakanUsers/4.png') }}" alt="Fitur Users">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Popup Konfirmasi</h4>
                <p>Setelah menekan tombol <b>Submit</b>, sistem akan menampilkan notifikasi <b>“Create Data Successfully”</b> yang menandakan data pengguna berhasil dibuat.</p>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMenggunakanUsers/5.png') }}" alt="Fitur Users">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Fitur Edit & Delete</h4>
                <ul>
                    <li><b>Edit:</b> digunakan untuk memperbarui informasi pengguna (nama, email, role, tipe karyawan, cabang, dan penempatan).</li>
                    <li><b>Delete:</b> digunakan untuk menghapus data pengguna dari sistem jika sudah tidak aktif atau tidak bekerja lagi.</li>
                </ul>
                <p>Kedua fitur ini membantu admin menjaga akurasi dan validitas data pengguna secara real-time.</p>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturMenggunakanUsers/6.png') }}" alt="Fitur Users">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
