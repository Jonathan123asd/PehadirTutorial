@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Menggunakan Reprimand Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Fungsi Menu Reprimand</b> di sistem Pehadir adalah untuk mencatat, memantau, dan mengelola <b>Surat Peringatan (SP)</b> yang diberikan kepada karyawan. Menu ini biasanya digunakan oleh <b>HR/Atasan</b> untuk <b>Mendokumentasikan pelanggaran</b> atau tindakan indisipliner karyawan, seperti keterlambatan, absensi tanpa izin, atau pelanggaran aturan kerja. <br>
                            <b>Memberikan SP</b> (SP1, SP2, dst) secara sistematis dengan mencantumkan tanggal berlaku, berakhir, dan catatan alasan pemberian SP. <b>Melacak status SP</b> apakah masih aktif atau sudah tidak berlaku. <br>
                            <b>Mendukung proses evaluasi</b> karyawan secara objektif berdasarkan riwayat tindakan disiplin. Menu ini membantu perusahaan menjaga kedisiplinan kerja dan menyimpan riwayat peringatan secara digital dan terstruktur.
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
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturReprimand/1.png') }}" alt="Fitur Reprimand">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Di halaman utama <b>Pehadir.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masukkan <b>Email</b> dan <b>Kata Sandi</b> Anda. Lalu klik <b>Login.</b></li>
                    <li><i class="bi bi-dot"></i> Setelah berhasil masuk ke beranda website, pilih menu <b>Setting ></b> pilih <b>Master Data  ></b> submenu <b>“Department”.</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturReprimand/2.png') }}" alt="Fitur Reprimand">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Buka menu <b>Reprimand.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Buka menu <b>Setting</b> di sisi kiri layar, > pilih <b>Master Data,</b> lalu pilih submenu <b>Reprimand.</b></li>
                    <li><i class="bi bi-dot"></i> <b>(Search)</b> untuk menampilkan daftar department pada branch tersebut.</li>
                    <li><i class="bi bi-dot"></i> <b>+ Reprimand</b> → tambah manual departemen baru.</li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>(+ Reprimand)</b> di pojok kanan atas untuk membuat permintaan baru.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturReprimand/3.png') }}" alt="Fitur Reprimand">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Isi form <b>Reprimand.</b></h4>
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Isi kolom yang tersedia, seperti nama karyawan, tipe surat peringatan (SP1/SP2/SP3), tanggal berlaku, tanggal berakhir, dan catatan.</li>
                    <li><i class="bi bi-dot"></i> Untuk mempermudah proses pengisian, Anda dapat melihat contoh penulisan.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturReprimand/4.png') }}" alt="Fitur Reprimand">
                <ul class="mb-2">
                    <li><b>Form Create Reprimand pada sistem Pehadir.</b></li>
                    <li>Pengguna dapat mengisi detail surat peringatan kepada karyawan dengan data sebagai berikut:</li>
                    <li><i class="bi bi-dot"></i> <b>Employee:</b> Pilih nama karyawan yang akan diberikan surat peringatan, <em>(contoh: SANUDIN).</em></li>
                    <li><i class="bi bi-dot"></i> <b>Reprimand Type:</b> Pilih jenis surat peringatan, <em>(contoh: SP1, SP2, atau SP3).</em></li>
                    <li><i class="bi bi-dot"></i> <b>Effective Date:</b> Tanggal mulai berlakunya surat peringatan (contoh: 2025-08-27).</li>
                    <li><i class="bi bi-dot"></i> <b>End Date:</b> Tanggal berakhirnya surat peringatan, <em>(contoh: 2025-09-07).</em></li>
                    <li><i class="bi bi-dot"></i> <b>Notes:</b> Alasan atau catatan terkait pemberian surat peringatan, <em>(contoh: “Sering terlambat datang ke kantor”)</em></li>
                    <li><i class="bi bi-dot"></i> <b>Reprimand By:</b> Nama pihak yang memberikan surat peringatan, biasanya atasan langsung atau HR, <em>(contoh: HRD).</em></li>
                    <li><i class="bi bi-dot"></i> <b>Attachment:</b> (Opsional) Unggah file pendukung jika ada, seperti bukti keterlambatan atau surat resmi.</li>
                    <li>Setelah semua data diisi dengan lengkap, klik tombol <b>Create</b> untuk menyimpan dan menerbitkan surat peringatan ke sistem.</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Gambar menampilkan daftar surat peringatan <b>(Reprimand)</b> karyawan dengan jenis <b>SP1</b> dan <b>SP2, beserta catatan terkait pelanggaran dan tanggal berlaku yang sedang aktif.</b></h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturReprimand/5.png') }}" alt="Fitur Reprimand">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">6. Open Link in New Tab.</h4>
                <ul>
                    <li>Pengguna membuka halaman baru dengan mengklik kanan pada menu atau tombol tertentu, lalu memilih <b>"Open link in new tab".</b> Langkah ini bertujuan agar pengguna bisa membuka <b>halaman "Reprimand Type"</b> tanpa menutup halaman utama, sehingga memudahkan pengelolaan data tanpa kehilangan posisi sebelumnya.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturReprimand/6.png') }}" alt="Fitur Reprimand">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">7. Klik <b>Reprimand Type.</b></h4>
                <ul>
                    <li>Setelah halaman terbuka, pengguna memilih menu <b>“Reprimand Type”</b> untuk melihat atau mengatur jenis-jenis surat peringatan (seperti SP1, SP2, SP3). Menu ini berguna untuk mendefinisikan tipe peringatan yang bisa digunakan dalam sistem sesuai kebijakan perusahaan.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturReprimand/7.png') }}" alt="Fitur Reprimand">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">8. Contoh Pengisian Data.</h4>
                <ul>
                    <li>Pada halaman <b>Create Reprimand Type,</b> pengguna mengisi form seperti:</li>
                    <li><i class="bi bi-dot"></i> <b>Name:</b>  Misal "SP2".</li>
                    <li><i class="bi bi-dot"></i> <b>Description:</b> Penjelasan singkat, misalnya "Surat Peringatan Kedua untuk pelanggaran berulang".</li>
                    <li>Langkah ini penting agar sistem memiliki data kategori peringatan yang lengkap dan terstruktur.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturReprimand/8.png') }}" alt="Fitur Reprimand">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">9. Popup <b>‘Submit’.</b></h4>
                <ul>
                    <li>Setelah klik tombol <b>Submit,</b> akan muncul popup notifikasi bertuliskan <b>“Data Created Successfully”</b> disertai tombol <b>“OK”.</b> Ini menandakan bahwa data berhasil disimpan dan siap digunakan dalam proses pemberian peringatan ke karyawan.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturReprimand/9.png') }}" alt="Fitur Reprimand">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
