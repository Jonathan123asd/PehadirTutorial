@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Tutorial Menggunakan Access Branch Melalui Website Pehadir</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item active">
                    Fitur <b>Access Branch</b> berfungsi untuk memberikan hak akses karyawan terhadap
                    satu atau beberapa cabang (branch) perusahaan di dalam sistem.
                    <br>
                    <b>Kegunaan Utamanya:</b>
                    <ul class="list-unstyled mb-2">
                        <li><i class="bi bi-dot"></i> Mengatur cabang mana saja yang dapat diakses oleh karyawan</li>
                        <li><i class="bi bi-dot"></i> Menyesuaikan data dan informasi yang ditampilkan berdasarkan cabang yang dipilih</li>
                        <li><i class="bi bi-dot"></i> Memungkinkan user mengelola data karyawan, kehadiran, dan aktivitas sesuai cabang yang diotorisasi</li>
                    </ul>
                    <b>Pengguna Yang dapat menggunakan fitur ini:</b>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-dot"></i> <b>Admin</b> sistem atau <b>HR</b> yang memiliki hak akses penuh terhadap pengaturan user</li>
                        <li><i class="bi bi-dot"></i> Hanya pengguna dengan peran tertentu (misalnya super admin atau HR manager)
                            yang bisa menambahkan, mengubah, atau menghapus akses branch karyawan lain.</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Anda bisa cek di <b>chrome</b>, lalu masuk ke website <b>pehadir.my.id</b> pada kolom pencarian.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturAccessBranch/1.png') }}" alt="Fitur Access Branch">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Di halaman utama <b>Pehadir.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masukkan email dan kata sandi Anda. Lalu klik <b>Login.</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturAccessBranch/2.png') }}" alt="Fitur Access Branch">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Buka menu <b>Setting.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Di sisi kiri layer klik menu <b>Setting.</b> Pilih submenu Klik tombol <b>“Access Branch”.</b></li>
                    <li><i class="bi bi-dot"></i> Klik <b>(+ Branch)</b> (Jika Ingin Menambahkan Akses Baru). Untuk memberikan akses cabang ke karyawan lain, klik tombol <b>(+ Create)</b> di pojok kanan atas.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturAccessBranch/3.png') }}" alt="Fitur Access Branch">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Setelah berhasil masuk pada bagian <b>(+ Branch).</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Isi data yang diperlukan, Pilih nama karyawan dan cabang yang ingin diberi akses, lalu save. Di halaman ini akan terlihat daftar <b>karyawan</b> beserta <b>cabang</b> yang mereka bisa akses.</li>
                    <li>Contoh: Nama MOH. YUSUP bisa akses ke cabang PT. FIRMAN ABADI SENTOSA sebanyak 3 Branch.</li>
                </ul>
                <img class="img-custom-desktop mb-4" src="{{ asset('assets/img/website/fiturAccessBranch/4.png') }}" alt="Fitur Access Branch">
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAccessBranch/5.png') }}" alt="Fitur Access Branch">
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah kamu mengisi data dan klik simpan pada halaman <b>Access Branch,</b> akan muncul notifikasi seperti gambar di atas: <b>“Created Access branch Successfully”.</b></li>
                    <li>Artinya, akses cabang untuk karyawan telah berhasil ditambahkan. Klik tombol <b>OK</b> untuk menutup pesan dan kembali ke halaman sebelumnya.</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Setelah berhasil menambahkan akses cabang <b>(Access Branch).</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Langkah selanjutnya adalah membuka menu <b>Employee</b>, lalu pilih submenu <b>Employees</b>. Pada halaman <b>Manage Employee,</b> Anda dapat melihat daftar karyawan yang terdaftar di cabang yang telah Anda pilih sebelumnya. Gunakan fitur pencarian atau filter <b>Branch</b> dan <b>Status</b> untuk menampilkan data karyawan sesuai kebutuhan.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturAccessBranch/6.png') }}" alt="Fitur Access Branch">
                <ul>
                    <li><i class="bi bi-dot"></i> <b>(Create):</b> Untuk menambah karyawan baru.</li>
                    <li><i class="bi bi-dot"></i> <b>(Import):</b> Untuk mengimpor data karyawan.</li>
                    <li><i class="bi bi-dot"></i> <b>(Export):</b> Untuk mengekspor data yang ada.</li>
                </ul>
                <br>
                <ul>
                    <li><b>Hasil Akhir:</b></li>
                    <li><i class="bi bi-dot"></i> Kegunaan Kolom Branch  Pada halaman Manage Employee, kolom Branch berfungsi untuk menyaring dan menampilkan data karyawan berdasarkan cabang perusahaan yang dipilih Dengan memilih salah satu Branch dari dropdown, seperti <b>PT. FIRMAN ABADI MOBILE,</b> maka sistem hanya akan menampilkan daftar karyawan yang terdaftar di cabang tersebut saja.</li>
                    <li>Fitur ini sangat berguna untuk mempermudah pengelolaan data karyawan pada perusahaan dengan banyak cabang.</li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
