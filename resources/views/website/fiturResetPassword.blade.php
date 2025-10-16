@extends('layouts.app')

@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Mereset Password Pada Website Pehadir</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <b>Mereset password</b> adalah proses mengubah atau mengatur ulang kata sandi (password) yang digunakan untuk masuk ke suatu akun atau sistem,
                        biasanya dilakukan ketika pengguna lupa password lama atau ingin menggantinya demi alasan keamanan.
                        <br>
                        Setelah proses reset, pengguna akan membuat password baru untuk menggantikan yang lama.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    {{-- Page Content --}}
    <div class="row g-3">
        {{-- Step 1 --}}
        <div class="col-12">
            <h4 class="fw-semibold">1. Buka Website Pehadir</h4>
            <p>Pada halaman utama Pehadir, Anda akan melihat kolom untuk mengisi email dan password.</p>
            <ul class="mb-3">
                <li class="mb-2"><i class="bi bi-dot"></i> Masukkan alamat email yang sudah terdaftar pada kolom pertama.</li>
                <li class="mb-2"><i class="bi bi-dot"></i> Ketik password pada kolom kedua.</li>
                <li class="mb-2"><i class="bi bi-dot"></i> Klik tombol <b>Login</b> untuk masuk ke aplikasi.</li>
            </ul>
            <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturResetPassword/1.png') }}" alt="Halaman Login Pehadir">
        </div>

        {{-- Step 2 --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Panduan Reset Password</h4>
            <p>Klik nama pengguna Anda di pojok kanan atas halaman dashboard. Akan muncul menu dropdown dengan beberapa pilihan.</p>
            <p>Pilih opsi <b>Change Password</b> untuk masuk ke halaman penggantian kata sandi.</p>
            <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturResetPassword/2.png') }}" alt="Menu Dropdown Change Password">
        </div>

        {{-- Step 3 --}}
        <div class="col-12">
            <h4 class="fw-semibold">3. Mengisi Formulir Change Password</h4>
            <p>Setelah itu, Anda akan diarahkan ke halaman <b>Change Password</b>.</p>
            <ul class="mb-3">
                <li class="mb-2"><i class="bi bi-dot"></i> Masukkan <b>password lama</b> Anda.</li>
                <li class="mb-2"><i class="bi bi-dot"></i> Masukkan <b>password baru</b>.</li>
                <li class="mb-2"><i class="bi bi-dot"></i> Konfirmasi <b>password baru</b> Anda.</li>
                <li class="mb-2"><i class="bi bi-dot"></i> Klik tombol <b>Change Password</b> untuk menyimpan perubahan password.</li>
            </ul>
            <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturResetPassword/3.png') }}" alt="Formulir Change Password">
        </div>

        {{-- Step 4 --}}
        <div class="col-12">
            <h4 class="fw-semibold">4. Konfirmasi Penyimpanan Perubahan Password</h4>
            <p>Setelah klik <b>Change Password</b>, akan muncul jendela konfirmasi untuk memastikan Anda ingin menyimpan perubahan.</p>
            <ul class="mb-3">
                <li class="mb-2"><i class="bi bi-dot"></i> Klik tombol <b>Yes</b> (berwarna biru) jika Anda yakin ingin menyimpan perubahan.</li>
                <li class="mb-2"><i class="bi bi-dot"></i> Klik tombol <b>Cancel</b> (berwarna merah) jika ingin membatalkan perubahan.</li>
            </ul>
            <p>
                Fitur ini bertujuan untuk mencegah perubahan data yang tidak disengaja.
                Pastikan data yang Anda ubah sudah benar sebelum menekan tombol <b>Yes</b>.
            </p>
            <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturResetPassword/4.png') }}" alt="Konfirmasi Simpan Password">
        </div>

        {{-- Step 5 --}}
        <div class="col-12">
            <h4 class="fw-semibold">5. Notifikasi Berhasil</h4>
            <p>Setelah proses konfirmasi selesai, sistem akan menampilkan notifikasi pop-up sebagai tanda bahwa perubahan password telah berhasil.</p>
            <p>Klik tombol <b>OK</b> (warna biru) untuk menutup notifikasi.</p>
            <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturResetPassword/5.png') }}" alt="Notifikasi Password Berhasil Diubah">
        </div>

        {{-- Step 6 --}}
        <div class="col-12">
            <h4 class="fw-semibold">6. Gunakan Password Baru</h4>
            <p>Setelah notifikasi ditutup, Anda dapat langsung melanjutkan penggunaan aplikasi dengan <b>password baru</b> yang telah disimpan sebelumnya.</p>
            <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturResetPassword/6.png') }}" alt="Login dengan Password Baru">
        </div>
    </div>
    {{-- /Page Content --}}
</section>
@endsection
