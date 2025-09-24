@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Menggunakan Fitur Business Trip Pada Aplikasi Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Business Trip</b> adalah fitur atau modul yang digunakan untuk mencatat dan mengelola perjalanan dinas karyawan perusahaan. Fitur ini memungkinkan karyawan untuk mengajukan izin perjalanan kerja, melaporkan lokasi dan durasi perjalanan, serta memudahkan manajemen dalam memantau aktivitas perjalanan dinas secara real-time. Dengan adanya business trip di aplikasi Pehadir, proses administrasi perjalanan menjadi lebih efisien, transparan, dan terintegrasi dengan sistem absensi dan pengelolaan waktu kerja.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Login ke Aplikasi <b>Pehadir.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masuk menggunakan akun Anda, <b>lalu pilih menu 'More'</b> yang terdapat di beranda.</li>
                    <li><i class="bi bi-dot"></i> Setelah itu, <b>klik 'Business Trip'</b> pada bagian beranda tersebut.</li>
                </ul>

                <div class="row g-3">
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturBusinessTrip/business1.png') }}" alt="Fitur Business">
                    </div>
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturBusinessTrip/business2.png') }}" alt="Fitur Business">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Langkah Mencatat dan Mengelola Perjalanan Dinas Karyawan Perusahaan (Business Trip) di Aplikasi <b>Pehadir.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah berada di halaman Business Trip, <b>klik</b> tanda <b>plus (<i class="bi bi-plus"></i>)</b> yang terletak di bagian kanan bawah layar.</li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturBusinessTrip/business3.png') }}" alt="Fitur Business">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Cara Mengisi Business Trip di Aplikasi <b>Pehadir.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Pada Bagian <b>Project Stage, klik</b> dropdown (ikon panah ke bawah), lalu pilih dinas luar kota.</li>
                    <li><i class="bi bi-dot"></i> Isi kolom <b>Task / Project</b> sesuai kebutuhan, misalnya Tugas Kerja & Monitoring Operasional Cabang.</li>
                    <li><i class="bi bi-dot"></i> Tentukan jadwal keberangkatan pada kolom <b>Start Date</b> dan <b>Start Time</b>, lalu isi juga <b>End Date</b> dan <b>End Time.</b></li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>(<i class="bi bi-plus"></i>)</b> untuk menambahkan Activity yang akan dilakukan.</li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturBusinessTrip/business4.png') }}" alt="Fitur Business">
                    </div>
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturBusinessTrip/business5.png') }}" alt="Fitur Business">
                    </div>
                </div>
                <ul>
                    <li><i class="bi bi-dot"></i> Pada kolom <b>Client Company</b>, isi nama perusahaan klien, contoh: PT Cipta Teknologi Sejahtera.</li>
                    <li><i class="bi bi-dot"></i> Pada kolom <b>Label Project</b>, isi nama project beserta lokasi. Contoh: PT Cipta Teknologi Sejahtera Lokasi: Bandung</li>
                    <li><i class="bi bi-dot"></i> Isi dengan kebutuhan <b>Support</b> (jika tidak ada, gunakan tanda "-").</li>
                    <li><i class="bi bi-dot"></i> <b>Unggah file pendukung</b> (contoh: surat tugas, laporan, atau dokumen training).</li>
                    <li><i class="bi bi-dot"></i> <b>Remark</b>, tambahkan catatan hasil kegiatan. Contoh: Berhasil, tim HR client telah mengikuti pelatihan dan siap mengoperasikan sistem.</li>
                </ul>
                <div class="row g-3">
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturBusinessTrip/business6.png') }}" alt="Fitur Business">
                    </div>
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturBusinessTrip/business7.png') }}" alt="Fitur Business">
                    </div>
                </div>
                <ul>
                    <li><i class="bi bi-dot"></i> Klik Submit untuk mengirim data.</li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturBusinessTrip/business8.png') }}" alt="Fitur Business">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Setiap Perjalanan Memiliki Status.</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> APPROVED → Dinas sudah (disetujui).</li>
                    <li><i class="bi bi-dot"></i> PENDING → Menunggu persetujuan atasan.</li>
                    <li><i class="bi bi-dot"></i> DRAFT → Masih berupa rancangan, belum diajukan.</li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturBusinessTrip/business9.png') }}" alt="Fitur Business">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
