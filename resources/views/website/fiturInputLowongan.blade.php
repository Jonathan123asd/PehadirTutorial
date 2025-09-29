@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Input Lowongan Kerja Di Sistem Recruitment Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Manage Recruitment</b> adalah proses mengelola seluruh kegiatan rekrutmen karyawan dalam sebuah perusahaan, mulai dari membuat lowongan kerja, menyaring pelamar, hingga memantau status rekrutmen.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <ul>
                    <li><b>Panduan Penggunaan Fitur Manage Recruitment dalam Sistem Perusahaan.</b></li>

                    <li class="mb-3">
                        <b>1. Full Time</b>
                        <ul>
                            <li><i class="bi bi-dot"></i> Pekerjaan penuh waktu, biasanya 8 jam per hari dan 5–6 hari kerja per minggu.</li>
                            <li><i class="bi bi-dot"></i> Cocok untuk karyawan tetap dengan gaji bulanan dan benefit lengkap (BPJS, tunjangan, dll).</li>
                        </ul>
                    </li>

                    <li class="mb-3">
                        <b>2. Part Time</b>
                        <ul>
                            <li><i class="bi bi-dot"></i> Pekerjaan paruh waktu, dengan jam kerja lebih fleksibel dan lebih sedikit dari full time.</li>
                            <li><i class="bi bi-dot"></i> Cocok untuk mahasiswa, freelance, atau yang ingin kerja sampingan.</li>
                        </ul>
                    </li>

                    <li class="mb-3">
                        <b>3. Internship</b>
                        <ul>
                            <li><i class="bi bi-dot"></i> Program magang bagi pelajar atau mahasiswa untuk mendapatkan pengalaman kerja.</li>
                            <li><i class="bi bi-dot"></i> Biasanya bersifat sementara (1–6 bulan) dan bisa dibayar atau tidak.</li>
                        </ul>
                    </li>

                    <li class="mb-3">
                        <b>4. Remote</b>
                        <ul>
                            <li><i class="bi bi-dot"></i> Pekerjaan yang bisa dilakukan dari mana saja tanpa harus datang ke kantor.</li>
                            <li><i class="bi bi-dot"></i> Cocok untuk bidang IT, desain, content writer, dll.</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">1. Masuk ke Dashboard.</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah berhasil login, Anda akan diarahkan ke dashboard utama dimana Anda dapat mengakses fitur-fitur yang tersedia di aplikasi.</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Masuk ke Menu Employees.</h4>
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Pada sebelah kiri layar klik menu <b>“Employee”.</b> Pilih Submenu klik tombol <b>Recruitment.</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturInputLowongan/1.png') }}" alt="Fitur Input Lowongan">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Klik tombol <b>+ Recruitment</b> Di Beranda Menu Manage Recruitment.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturInputLowongan/2.png') }}" alt="Fitur Input Lowongan">
                <ul class="mb-2">
                    <li>Lengkapi formulir <b>Add Recruitment.</b></li>
                    <li><i class="bi bi-dot"></i> <b>Job Title:</b> Masukkan nama posisi, <em>contoh: Admin Operasional.</em></li>
                    <li><i class="bi bi-dot"></i> <b>Job Type:</b> Pilih jenis pekerjaan, <em>contoh: Full Time.</em></li>
                    <li><i class="bi bi-dot"></i> <b>Department:</b> Tentukan departemen yang membutuhkan, <em>contoh: FINANCE.</em></li>
                    <li><i class="bi bi-dot"></i> <b>Description:</b> Tulis deskripsi pekerjaan.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturInputLowongan/3.png') }}" alt="Fitur Input Lowongan">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Setelah itu, klik tombol <b>“OK”</b> untuk menyimpan data rekrutmen.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturInputLowongan/4.png') }}" alt="Fitur Input Lowongan">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Lihat Daftar Recruitment.</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Pada bagian Manage recruitment, Anda dapat melihat data lowongan pekerjaan yang tersedia.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturInputLowongan/5.png') }}" alt="Fitur Input Lowongan">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Untuk Melihat Recruitment Di Dashboard Yang Telah Di Buat.</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Silakan scroll ke bawah, Anda akan menemukan kolom dan ikon titik tiga.</li>
                    <li class="mb-3"><i class="bi bi-dot"></i> Klik ikon titik tiga di bagian kanan atas layar.</li>
                    <li><i class="bi bi-caret-right-fill"></i> Akan muncul beberapa pilihan menu, yaitu:</li>
                    <li><i class="bi bi-dot"></i> <b>Business Trip</b> → untuk melihat dan mengelola data perjalanan dinas karyawan.</li>
                    <li><i class="bi bi-dot"></i> <b>Birthday</b> → untuk menampilkan daftar ulang tahun karyawan.</li>
                    <li><i class="bi bi-dot"></i> <b>Recruitment</b> → untuk mengelola proses rekrutmen karyawan baru.</li>
                    <li class="mb-3"><i class="bi bi-dot"></i> <b>Attendance</b> → untuk memantau data kehadiran karyawan.</li>
                    <li><i class="bi bi-caret-right-fill"></i> Pilih menu <b>“Recruitment”</b> untuk melihat informasi lowongan pekerjaan yang telah Anda masukkan.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturInputLowongan/6.png') }}" alt="Fitur Input Lowongan">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Hasil Dari Penginputan Data Rekrutmen.</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Setelah proses selesai, data tersebut akan secara otomatis muncul di bagian <b>Recruitment,</b> sehingga Anda dapat dengan mudah mengakses dan mengelola informasi lowongan pekerjaan yang telah Anda input.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturInputLowongan/7.png') }}" alt="Fitur Input Lowongan">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
