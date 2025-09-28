@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Menggunakan Overtime Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Menu <b>Overtime</b> ini digunakan oleh <b>atasan</b> untuk memberikan pengumuman lembur kepada karyawan. Melalui menu ini, atasan dapat:
                            <ul class="ms-3">
                                <li><i class="bi bi-dot"></i> Mengisi tanggal dan jam lembur yang ditetapkan.</li>
                                <li><i class="bi bi-dot"></i> Menambahkan alasan atau keterangan lembur (misalnya kebutuhan operasional atau target proyek).</li>
                            </ul>
                            Karyawan hanya menerima informasi lembur yang diumumkan atasan, tanpa perlu melakukan pengajuan sendiri. Fitur ini memastikan bahwa data lembur tercatat dengan benar sehingga karyawan memperoleh kompensasi sesuai ketentuan perusahaan.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">Penjelasan Fitur Overtime dan Hak Akses Pengguna:</h4>
                <ul class="mb-3">
                    <li><b>Fitur Menu Overtime:</b></li>
                    <li><i class="bi bi-dot"></i> Memberikan pengumuman lembur dari atasan kepada karyawan.</li>
                    <li><i class="bi bi-dot"></i> Digunakan oleh <b>Atasan/HR/Admin</b> untuk menentukan jadwal lembur.</li>
                </ul>
                <ul class="mb-3">
                    <li><b>Import Overtime:</b></li>
                    <li><i class="bi bi-dot"></i> Mengimpor data lembur melalui template Excel.</li>
                    <li><i class="bi bi-dot"></i> Digunakan oleh <b>Atasan</b> yang berwenang mengatur lembur.</li>
                </ul>
                <ul class="mb-3">
                    <li><b>Download Template Overtime:</b></li>
                    <li><i class="bi bi-dot"></i> Menyediakan format standar pengisian data lembur.</li>
                    <li><i class="bi bi-dot"></i> Digunakan oleh <b>Atasan</b> agar data sesuai sistem.</li>
                </ul>
                <ul class="mb-3">
                    <li><b>Input Data Template:</b></li>
                    <li><i class="bi bi-dot"></i> Mengisi detail lembur (tanggal, jam, ID karyawan, nama karyawan).</li>
                    <li><i class="bi bi-dot"></i> Digunakan oleh <b>Atasan.</b></li>
                </ul>
                <ul class="mb-3">
                    <li><b>Import Data Overtime (Final):</b></li>
                    <li><i class="bi bi-dot"></i> Mengunggah data lembur yang sudah diisi pada template Excel.</li>
                    <li><i class="bi bi-dot"></i> Digunakan oleh <b>Atasan/HR.</b></li>
                </ul>
                <ul class="mb-3">
                    <li><b>Hasil Akhir:</b></li>
                    <li><i class="bi bi-dot"></i> Menampilkan data lembur yang berhasil diimpor.</li>
                    <li><i class="bi bi-dot"></i> Dapat dilihat oleh <b>HR/Admin</b> dan karyawan (sebagai pengumuman).</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">1. Anda bisa cek di <b>chrome</b>, lalu masuk ke website <b>pehadir.my.id</b> pada kolom pencarian.</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masukkan <b>Email</b> dan <b>Kata Sandi</b> Anda. Lalu klik <b>Login.</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturOvertime/1.png') }}" alt="Fitur Overtime">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Di halaman utama <b>Pehadir.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah berhasil masuk ke beranda website, pilih menu <b>“Time Management” ></b> pilih submenu <b>“Overtime”.</b></b></li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b><i class="fas fa-upload"></i> Import</b> di pojok kanan atas.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturOvertime/2.png') }}" alt="Fitur Overtime">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Muncul pop-up <b>Import Overtime.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Klik link <b>“Download template import overtime”</b> untuk mengunduh file   template Excel yang harus diisi.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturOvertime/3.png') }}" alt="Fitur Overtime">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Setelah selesai Download file Excel.</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Buka file Excel yang baru saja diunduh (terlihat di riwayat unduhan).</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturOvertime/4.png') }}" alt="Fitur Overtime">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Buka file <b>template-import-overtime.xlsx.</b></h4>
                <ul class="mb-2">
                    <li>Isi data lembur seperti:</li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Untuk Format: (Start Date, End Date)</b><br>
                        <i class="fas fa-hand-point-right"></i> Isi tanggal mulai dan selesai lembur sesuai ketentuan.
                    </li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Untuk Format: (Start Time, End Time)</b><br>
                        <i class="fas fa-hand-point-right"></i> Format penulisan waktu adalah jam:menit,<em> (contoh: 16:00, 18:30).</em>
                    </li>
                    <li>
                        <i class="bi bi-dot"></i> <b>Untuk Format: (Employee ID, Name Employee)</b><br>
                        <i class="fas fa-hand-point-right"></i> Data ini <b>didapat dari menu</b> Employee > Employee.
                    </li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturOvertime/5.png') }}" alt="Fitur Overtime">
                <ul>
                    <li class="bi bi-dot"> Untuk mempermudah proses pengisian, anda dapat melihat contoh di atas, sebagai referensi pengisian data pada format.</li>
                    <li class="bi bi-dot"> Setelah data lembur terisi, silahkan klik file lalu <b>‘Save’</b> untuk menyimpan data, kemudian <b>lanjutkan dengan mengimpor data tersebut.</b></li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">Langkah-langkah berikut untuk melihat di bagian mana format <b>(Start Date, End Date) (Start Time, End Time) (Employee ID, Name Employee)</b> dan <b>(Branch Code)</b></h4>
                <h4 class="fw-semibold"><i class="bi bi-dot"></i> Masuk ke halaman <b>Time Management > Overtime.</b></h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturOvertime/6.png') }}" alt="Fitur Overtime">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold"><i class="bi bi-dot"></i> Masuk ke halaman <b>Setting.</b> Lalu pilih menu <b>Master Data > Branch.</b></h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturOvertime/7.png') }}" alt="Fitur Overtime">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">6. Masuk Kembali ke halaman <b>Time Management > Overtime.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Lalu klik <b><i class="fas fa-upload"></i> Import</b> (Untuk mengimport data)</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturOvertime/8.png') }}" alt="Fitur Overtime">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Silahkan pilih data yang akan diimpor, kemudian klik tombol <b>‘Import’</b> untuk melanjutkan proses.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturOvertime/9.png') }}" alt="Fitur Overtime">
                <ul class="mb-2">
                    <li><b>Hasil Akhir:</b></li>
                    <li>Data berhasil di <b>Import.</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturOvertime/10.png') }}" alt="Fitur Overtime">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
