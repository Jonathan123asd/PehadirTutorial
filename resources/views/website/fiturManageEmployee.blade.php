@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Menggunakan Fitur Manage Employee Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <ul class="list-unstyled">
                                <li class="mb-3">Fitur <b>Manage Employee</b> adalah menu yang digunakan untuk <b>mengelola seluruh data karyawan</b> dalam sistem Pehadir.</li>
                                <li class="mb-3">Melalui fitur ini, Admin atau HR dapat <b>menambahkan, melihat, mengedit, dan menghapus data karyawan</b> sesuai kebutuhan.</li>
                                <li class="mb-3">Fitur ini menjadi pusat informasi personal dan pekerjaan karyawan, seperti <b>nama, NIK, jabatan, departemen, status kepegawaian, dan lokasi kerja (branch).</b></li>
                                <li class="mb-3">Data yang diatur dalam fitur ini juga akan otomatis terhubung dengan fitur lain, seperti absensi, shift, dan laporan bulanan.</li>
                                <li>Dengan adanya Manage Employee, perusahaan dapat memastikan bahwa data kepegawaian selalu <b>terstruktur, lengkap, dan up to date.</b></li>
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
                <h4 class="fw-semibold">1. Login ke aplikasi Pehadir.</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masuk ke dashboard aplikasi Pehadir.</li>
                    <li><i class="bi bi-dot"></i> Pada menu sebelah kiri, klik <b>“Employee”,</b> lalu pilih <b>“Employees”.</b></li>
                    <li><i class="bi bi-dot"></i> Di halaman ini, Anda akan melihat daftar karyawan yang sudah terdaftar.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManageEmployee/1.png') }}" alt="Fitur Manage Employee">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Menambahkan Data Karyawan Baru.</h4>
                <ul class="mb-3">
                    <li>Fungsi yang digunakan untuk menambahkan data karyawan baru secara manual satu per satu ke dalam sistem.</li>
                    <li>Fitur ini berguna saat ingin menambahkan karyawan secara individual, tanpa menggunakan file Excel.</li>
                    <li>Data yang dimasukkan melalui fitur Create akan langsung tersimpan dan terhubung dengan fitur lain seperti absensi, shift, dan laporan kehadiran.</li>
                </ul>
                <ul>
                    <li><b>Cara Menggunakan Fitur Create:</b></li>
                    <li><i class="bi bi-dot"></i> Klik tombol “Add” atau “+ Tambah”.</li>
                    <li><i class="bi bi-dot"></i> Isi data karyawan dengan lengkap, seperti:</li>
                </ul>
                <ul class="ms-3 mb-2">
                    <li><i class="bi bi-dot"></i> Nama lengkap: Safno</li>
                    <li><i class="bi bi-dot"></i> Tanggal Lahir: 28/04/1988</li>
                    <li><i class="bi bi-dot"></i> Nomor Kartu Identitas: 15678340</li>
                    <li><i class="bi bi-dot"></i> Agama: Islam</li>
                    <li><i class="bi bi-dot"></i> Status Perkawinan: Lajang</li>
                    <li><i class="bi bi-dot"></i> Email: safnoydr@gmail.com</li>
                    <li><i class="bi bi-dot"></i> Alamat: Pondok Indah</li>
                    <li><i class="bi bi-dot"></i> Nama Bank: BANK BRI</li>
                    <li><i class="bi bi-dot"></i> Nomor NPWP: -</li>
                    <li><i class="bi bi-dot"></i> Nomor Telepon: -</li>
                    <li><i class="bi bi-dot"></i> Jenis Kelamin: -</li>
                    <li><i class="bi bi-dot"></i> Nomor Kartu Keluarga: -</li>
                    <li><i class="bi bi-dot"></i> Kontak Darurat: -</li>
                    <li><i class="bi bi-dot"></i> Jumlah Tanggungan: -</li>
                    <li><i class="bi bi-dot"></i> Rekening Bank: -</li>
                    <li><i class="bi bi-dot"></i> Status: Aktif</li>
                    <li><i class="bi bi-dot"></i> ID Karyawan: 3214675900</li>
                    <li><i class="bi bi-dot"></i> Jenis Pekerjaan: 5-2(5 Hari Kerja)</li>
                    <li><i class="bi bi-dot"></i> No kjp: -</li>
                    <li><i class="bi bi-dot"></i> Tanggal Berakhir:</li>
                    <li><i class="bi bi-dot"></i> Posisi: Manager</li>
                    <li><i class="bi bi-dot"></i> Jenis Karyawan: Permanen</li>
                    <li><i class="bi bi-dot"></i> Jenis Cuti: -</li>
                    <li><i class="bi bi-dot"></i> No BPJS: -</li>
                    <li><i class="bi bi-dot"></i> Departemen: Produksi</li>
                    <li><i class="bi bi-dot"></i> Branch (cabang): PT FIRMAN ABADI MOBILE</li>
                    <li><i class="bi bi-dot"></i> Tanggal Bergabung: 10/03/2020</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageEmployee/2.png') }}" alt="Fitur Manage Employee">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Setelah itu Klik <b>Simpan</b> untuk menyimpan data.</li>
                    <li><i class="bi bi-dot"></i> Lalu akan muncul notifikasi <b>Created employee successfully!</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageEmployee/3.png') }}" alt="Fitur Manage Employee">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Data akan otomatis tersimpan pada menu <b>Manage Employee.</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturManageEmployee/4.png') }}" alt="Fitur Manage Employee">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Langkah-langkah Menggunakan Fitur Import Pada Menu Manage Employee.</h4>
                <ul class="mb-3">
                    <li>Fitur <b>Import</b> adalah fasilitas yang memungkinkan pengguna (Admin/HR) untuk <b>menambahkan data karyawan secara massal</b> ke dalam sistem Pehadir menggunakan file Excel (.xlsx).</li>
                    <li>Dengan fitur ini, pengguna tidak perlu menginput data karyawan satu per satu secara manual, melainkan cukup mengisi data dalam format Excel yang disediakan, lalu mengupload melalui tombol <b>Import.</b></li>
                </ul>
                <ul class="mb-2">
                    <li><b>Cara Menggunakan Fitur Import:</b></li>
                    <li><i class="bi bi-dot"></i> Di halaman Manage Employee, klik tombol <b><i class="fas fa-download"></i> Import</b> (biasanya berada di bagian atas kanan tabel).</li>
                    <li><i class="bi bi-dot"></i> Unduh terlebih dahulu template Excel yang telah disediakan sistem, agar format data sesuai.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageEmployee/5.png') }}" alt="Fitur Manage Employee">
                <ul class="mb-2">
                    <li>Buka file Excel tersebut, lalu isi data karyawan dengan lengkap, seperti:</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageEmployee/6.png') }}" alt="Fitur Manage Employee">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Simpan file Excel yang sudah diisi.</li>
                    <li><i class="bi bi-dot"></i> Untuk Mendapatkan Branch Code, Klik <b>Master Data -> Barch</b> <br>Salin kode yang ada pada Branch Code: 14FAM.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageEmployee/7.png') }}" alt="Fitur Manage Employee">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Untuk Mendapatkan Departement, Klik <b>Master Data -> Department</b> <br>Department Name: Produksi</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageEmployee/8.png') }}" alt="Fitur Manage Employee">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Lalu Unggah file Excel yang sudah diisi.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageEmployee/9.png') }}" alt="Fitur Manage Employee">
                <ul>
                    <li><i class="bi bi-dot"></i> Klik <b>Import Data</b> untuk mulai proses import.</li>
                    <li><i class="bi bi-dot"></i> Maka File Berhasil Di Upload.</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Langkah-langkah Menggunakan Fitur Export Pada Menu Manage Employee</h4>
                <ul class="mb-3">
                    <li>Fitur <b>Export</b> adalah fungsi yang digunakan untuk <b>mengunduh seluruh data karyawan</b> yang ada di sistem Pehadir ke dalam <b>format file Excel (.xlsx).</b></li>
                    <li>Fitur Export memiliki fungsi lain yaitu, Menyimpan arsip data karyawan secara offline, Mempermudah analisis atau pelaporan di luar sistem, Backup manual data yang telah diinput ke dalam sistem.</li>
                </ul>
                <ul class="mb-2">
                    <li><b>Cara Menggunakan Fitur Export:</b></li>
                    <li><i class="bi bi-dot"></i> Login ke aplikasi Pehadir menggunakan akun Admin atau HR.</li>
                    <li><i class="bi bi-dot"></i> Klik menu <b>“Employee”,</b> lalu pilih <b>“Employees”.</b></li>
                    <li><i class="bi bi-dot"></i> Di halaman <b>Manage Employee,</b> akan muncul daftar seluruh karyawan yang terdaftar.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageEmployee/10.png') }}" alt="Fitur Manage Employee">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Klik tombol <b><i class="fas fa-upload"></i> Export</b> yang biasanya berada di bagian kanan atas tabel.</li>
                    <li><i class="bi bi-dot"></i> Pilih Branch, Status.</li>
                    <li><i class="bi bi-dot"></i> Setelah itu Klik <b>Export.</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageEmployee/11.png') }}" alt="Fitur Manage Employee">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Sistem akan secara otomatis mengunduh file Excel (.xlsx) yang berisi seluruh data karyawan.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturManageEmployee/12.png') }}" alt="Fitur Manage Employee">
                <ul>
                    <li><i class="bi bi-dot"></i> Data Akhir Akan Muncul Seperti Gambar Di Atas.</li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
