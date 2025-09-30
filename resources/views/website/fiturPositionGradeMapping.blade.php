@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Menggunakan Menu Position Grade Mapping pada Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Position Grade Mapping</b> adalah fitur untuk mengelompokkan posisi kerja berdasarkan
                            tingkatannya di perusahaan.<br>
                            Tujuannya supaya:<br>
                            <ul class="ms-4" style="list-style: disc;">
                                <li class="mb-2">Mengetahui posisi mana yang lebih tinggi atau lebih rendah.</li>
                                <li class="mb-2">Memudahkan pengaturan data karyawan, seperti gaji, tugas, dan penilaian kerja.</li>
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
                <h4 class="fw-semibold">1. Langkah-langkah membuat Position Grade Mapping pada Website Pehadir:</h4>
                <ul>
                    <li class="mb-2"><i class="bi bi-dot"></i> Pilih menu Setting di sebelah kiri, lalu klik Master Data > KPI > Position
                        Grade Mapping.
                    </li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPositionGradeMapping/1.png') }}"
                    alt="Fitur Payslip">
                <ul>
                    <li class="mb-2"><i class="bi bi-dot"></i> Klik tombol + Position Grade (berwarna oranye) di pojok kanan atas.
                    </li>
                </ul>
                <ul>
                    <li class="mb-2">Akan muncul pop-up Create Position Grade Mapping.
                    </li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPositionGradeMapping/2.png') }}"
                    alt="Fitur Payslip">
                <ul>
                    <li class="mb-2"><i class="bi bi-dot"></i> Pada kolom Level, pilih angka level (contoh: 6A_6B).
                    </li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPositionGradeMapping/3.png') }}"
                    alt="Fitur Payslip">
                <ul>
                    <li class="mb-2"><i class="bi bi-dot"></i> Pada kolom Position Name, pilih nama posisi yang sesuai.
                    </li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPositionGradeMapping/4.png') }}"
                    alt="Fitur Payslip">
                <ul>
                    <li class="mb-2"><i class="bi bi-dot"></i> Klik tombol Submit untuk menyimpan data.
                    </li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPositionGradeMapping/5.png') }}"
                    alt="Fitur Payslip">
                <ul>
                    <li class="mb-2"><i class="bi bi-dot"></i> Jika data Position Grade Mapping berhasil disimpan, sistem akan
                        menampilkan notifikasi pop-up dengan pesan "Data saved successfully". Klik tombol OK untuk menutup
                        notifikasi dan menyelesaikan proses.
                    </li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPositionGradeMapping/6.png') }}"
                    alt="Fitur Payslip">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">2. Penjelasan Jabatan Setiap Posisi Karyawan:</h4>
                <ul>
                    <li class="mb-2"><i class="bi bi-dot"></i> Sales: Posisi yang bertugas menawarkan dan menjual produk atau jasa
                        perusahaan kepada pelanggan. Berperan langsung dalam pencapaian target penjualan.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Brand Executive: Bertanggung jawab mengelola citra merek perusahaan. Fokus
                        pada strategi pemasaran, kampanye promosi, dan branding.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Foreman: Pengertian: Pengawas lapangan yang mengatur pekerjaan teknis di
                        area produksi atau proyek. Mengatur teknisi/operator dan memastikan pekerjaan sesuai prosedur.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Human Resource: Bagian yang mengelola SDM perusahaan, mulai dari
                        rekrutmen, pelatihan, penggajian, hingga hubungan karyawan.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Supervisor: Mengawasi pekerjaan tim, memastikan target tercapai, dan
                        melapor kepada manajer. Merupakan perantara antara tim pelaksana dan manajemen.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Manager: Pimpinan departemen yang mengatur strategi, perencanaan, dan
                        evaluasi tim di bawahnya. Bertanggung jawab penuh atas kinerja tim/divisi.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> CEO (Chief Executive Officer): Pimpinan tertinggi perusahaan yang
                        menentukan arah, kebijakan, dan keputusan strategis. Bertanggung jawab atas seluruh operasional dan
                        hasil perusahaan.</li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
