@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Mengatur Posisi atau Jabatan Karyawan Di Menu Manage Position Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Manage Position</b> adalah istilah yang merujuk pada proses pengelolaan atau penanganan suatu "posisi" dalam berbagai konteks. Maknanya tergantung pada bidang yang dimaksud, tetapi secara umum, ini melibatkan strategi untuk mengoptimalkan, memantau, dan mengendalikan posisi agar mencapai tujuan tertentu sambil meminimalkan risiko.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Masuk ke Dashboard</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah berhasil login, Anda akan diarahkan ke dashboard utama dimana Anda dapat mengakses fitur-fitur yang tersedia di aplikasi.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManagePosition/1.png') }}" alt="Fitur Manage Position">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Masuk ke Menu Setting</h4>
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Pada sebelah kiri layar klik menu <b>“Setting”.</b> Masuk ke menu <b>Master Data,</b> pilih submenu yang sesuai, lalu klik <b>Position.</b></li>
                </ul>
                <div class="row g-3 mb-2">
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/website/fiturManagePosition/2.png') }}" alt="Fitur Manage Position">
                    </div>
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/website/fiturManagePosition/3.png') }}" alt="Fitur Manage Position">
                    </div>
                </div>
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Klik Tanda <b>+ Position</b> Di Beranda Menu Manage <b>Manage Position.</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManagePosition/4.png') }}" alt="Fitur Manage Position">
                <ul>
                    <li><i class="bi bi-caret-right-fill"></i> Panduan Pengisian Form Create Position</li>
                </ul>

                <ol class="ms-3">
                    <li class="mb-3">
                        a. Pada bagian <b>Branch</b>, pilih cabang perusahaan yang sesuai <br>
                        <b>Contoh :</b> PT. FIRMAN ABADI MOBILE.
                    </li>
                    <li class="mb-3">
                        b. Pilih <b>Departement</b> tempat posisi akan ditempatkan, <br>
                        <b>Contoh :</b> PRODUKSI
                    </li>
                    <li class="mb-3">
                        c. Isi <b>Position Code</b> dengan kode posisi <br>
                        <b>Contoh :</b> PRD-SPV.
                    </li>
                    <li class="mb-3">
                        d. Isi <b>Position Name</b> sesuai dengan jabatan <br>
                        <b>Contoh :</b> SUPERVISOR PRODUKSI.
                    </li>
                    <li class="mb-2">
                        e.Masukkan <b>Description</b> dengan deskripsi tugas posisi tersebut, <br>
                        <b>Contoh :</b> Bertanggung jawab dalam mengawasi proses produksi,
                        memastikan target tercapai, dan menjaga kualitas produk.
                    </li>
                </ol>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManagePosition/5.png') }}" alt="Fitur Manage Position">

                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Setelah seluruh data di isi dengan benar klik tombol <b>Submit,</b> Lalu klik <b>OK</b> untuk menyimpan Posisi baru.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManagePosition/6.png') }}" alt="Fitur Manage Position">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Lihat Daftar <b>Manage Position.</b></h4>
                <ul>
                    <li>Setelah Anda masuk ke menu Manage Position, sistem akan menampilkan daftar posisi jabatan yang telah terdaftar.</li>
                    <li>Pada kolom yang ditandai.</li>
                </ul>
                <ul>
                    <li><i class="bi bi-caret-right-fill"></i> Anda dapat melihat informasi detail posisi, seperti:</li>
                </ul>

                <ol class="ms-3">
                    <li>
                        <b>a. Branch:</b> Cabang perusahaan tempat posisi tersebut berada.
                    </li>
                    <li>
                        <b>b. Department:</b> Departemen yang terkait dengan posisi.
                    </li>
                    <li>
                        <b>c. Position Code:</b> Kode unik yang digunakan untuk mengidentifikasi posisi.
                    </li>
                    <li>
                        <b>d. Position Name:</b> Nama jabatan atau posisi.
                    </li>
                    <li>
                        <b>e. Description:</b> Deskripsi tugas atau tanggung jawab dari posisi tersebut.
                    </li>
                </ol>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManagePosition/7.png') }}" alt="Fitur Manage Position">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Mengedit dan Menghapus Data Posisi Jabatan</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Pada halaman <b>Manage Position</b>, Anda dapat mengelola data posisi jabatan yang telah dibuat.</li>
                    <li><i class="bi bi-dot"></i> Cari posisi jabatan yang ingin diedit atau dihapus dari daftar.</li>
                    <li><i class="bi bi-dot"></i> Klik ikon titik <b>tiga</b> pada kolom <b>Action</b>, lalu pilih edit.</li>
                    <li><i class="bi bi-dot"></i> Pilih <b>Edit</b> untuk memperbarui informasi posisi seperti kode, nama, atau deskripsi.</li>
                    <li><i class="bi bi-dot"></i> Pastikan Anda mengecek kembali data sebelum menghapus agar tidak terjadi kesalahan.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManagePosition/8.png') }}" alt="Fitur Manage Position">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Ubah Opsi Data Posisi Jabatan</h4>
                <ol class="ms-3">
                    <li class="mb-3">
                        a. Pilih <b>Branch</b> sesuai dengan cabang perusahaan yang diinginkan.<br>
                        Contoh : PT. FIRMAN ABADI MOBILE.
                    </li>
                    <li class="mb-3">
                        b. Pada menu <b>Departement</b>, pilih divisi yang sesuai.<br>
                        Contoh : MARKETING.
                    </li>
                    <li class="mb-3">
                        c. Isi <b>Position Code</b> dengan kode jabatan.<br>
                        Contoh : PRD-SPV.
                    </li>
                    <li class="mb-3">
                        d. Masukkan <b>Position Name</b> sesuai jabatan.<br>
                        Contoh : Brand Executive.
                    </li>
                    <li class="mb-2">
                        e. Lengkapi bagian <b>Description</b> dengan deskripsi tugas.<br>
                        Contoh : mengelola dan memperkuat identitas merek.
                    </li>
                </ol>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManagePosition/9.png') }}" alt="Fitur Manage Position">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Setelah semua terisi dengan benar klik tombol <b>Submit,</b> Lalu klik <b>OK</b> untuk menyimpan perubahan.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManagePosition/10.png') }}" alt="Fitur Manage Position">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">6. Daftar Opsi Data  Posisi Jabatan</h4>
                <ul>
                    <li>Setelah Data Posisi Jabatan berhasil ditambahkan dan dikelola, daftar opsi Posisi akan tampil pada halaman <b>Manage Position.</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManagePosition/11.png') }}" alt="Fitur Manage Position">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
