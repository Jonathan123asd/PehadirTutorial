@extends('layouts.app')
@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Menggunakan Reminder Contract Pada Website Pehadir</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <b>Reminder Contract</b> berfungsi untuk memberikan notifikasi atau pengingat otomatis terkait masa berakhirnya kontrak kerja karyawan.
                        Fitur ini membantu HR atau manajemen agar tidak melewatkan tanggal habis kontrak, melakukan evaluasi atau perpanjangan kontrak tepat waktu,
                        serta meningkatkan kepatuhan terhadap regulasi ketenagakerjaan.
                        Reminder ini dapat diatur berdasarkan waktu tertentu sebelum kontrak berakhir, seperti H-30, H-14, atau H-7.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row g-4">

        {{-- Langkah 1: Login dan Akses Website --}}
        <div class="col-12">
            <h4 class="fw-semibold">Langkah 1: Masuk ke Website Pehadir</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Buka browser Chrome, lalu masuk ke <b>website Pehadir.my.id</b> pada kolom pencarian.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportReminderContract/1.png') }}" alt="Halaman Login Pehadir">
        </div>

        {{-- Langkah 2: Login ke Akun dan Akses Menu --}}
        <div class="col-12">
            <h4 class="fw-semibold">Langkah 2: Login ke Akun dan Akses Menu Reminder Contract</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Di halaman utama Pehadir, masukkan <b>Email</b> dan <b>Kata Sandi</b> Anda, lalu klik <b>Login</b>.</li>
                <li><i class="bi bi-dot"></i> Setelah berhasil masuk ke beranda, pilih menu <b>Report</b> &gt; pilih submenu <b>Reminder Contract</b>.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportReminderContract/2.png') }}" alt="Menu Reminder Contract Pehadir">
        </div>

        {{-- Langkah 3: Melihat dan Mengunduh Data --}}
        <div class="col-12">
            <h4 class="fw-semibold">Langkah 3: Melihat dan Mengunduh Data Reminder Contract</h4>
            <ul>
                <li><b>1.</b> Pilih lokasi unit kerja yang diinginkan (contoh: PT. FIRMAN ABADI MOBILE).</li>
                <li><b>2.</b> Klik tombol <b>Search</b> untuk menampilkan data kontrak karyawan yang mendekati masa berakhir atau sudah berakhir.</li>
                <li><b>3.</b> Klik <b>Export</b> untuk mengunduh laporan dalam format Excel.</li>
                <li><i class="bi bi-dot"></i> Data yang ditampilkan meliputi <b>Employee ID, Nama Karyawan, Posisi, Departemen, Status Kontrak,
                    Tanggal Mulai, Tanggal Berakhir,</b> dan kolom <b>Reminder</b> yang menandakan apakah kontrak sudah expired.</li>
                <li><i class="bi bi-dot"></i> Fitur ini membantu HR untuk segera menindaklanjuti perpanjangan atau evaluasi kontrak kerja karyawan.</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportReminderContract/3.png') }}" alt="Tampilan Data Reminder Contract">
        </div>

        {{-- Langkah 4: Tampilan File Excel --}}
        <div class="col-12">
            <h4 class="fw-semibold">Langkah 4: Tampilan File Reminder Contract dalam Format Excel</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Gambar di bawah menampilkan hasil ekspor data Reminder Contract dalam format Excel.</li>
                <li><i class="bi bi-dot"></i> Laporan berisi informasi kontrak kerja karyawan berdasarkan cabang yang dipilih.</li>
                <li><i class="bi bi-dot"></i> Contoh data karyawan:
                    <ul>
                        <li>Employee ID: 0988844666</li>
                        <li>Posisi: MANAGER</li>
                        <li>Departemen: Produksi</li>
                        <li>Status Kontrak: Active</li>
                        <li>Tanggal Mulai: 01 April 2024</li>
                        <li>Tanggal Berakhir: 30 April 2024</li>
                        <li>Status Reminder: EXPIRED</li>
                    </ul>
                </li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturReportReminderContract/4.png') }}" alt="Tampilan File Excel Reminder Contract">
        </div>

    </div>
</section>
@endsection
