@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Menggunakan Fitur Reimbursement Pada Aplikasi Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Menu <b>Reimbursement</b> digunakan untuk mengajukan berbagai jenis permintaanpenggantian biaya, seperti <b>Dinas Luar, Operasional, Pengobatan,</b> maupun <b>Project</b>. Fitur ini memudahkan karyawan dalam proses pengajuan secara tertata, transparan, dan efisien sesuai kebutuhan operasional perusahaan.
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
                    <li><i class="bi bi-dot"></i> Masukkan email dan kata sandi Anda, lalu klik Login.</li>
                    <li><i class="bi bi-dot"></i> Setelah berhasil masuk ke beranda aplikasi. Pilih menu <b>More.</b></li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturReimbursement/reimbursement1.png') }}" alt="Fitur Reimbursement">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Pada <b>Menu More</b> klik bagian <b>Reimbursement.</b></h4>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturReimbursement/reimbursement2.png') }}" alt="Fitur Reimbursement">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Klik tombol <b>(<i class="bi bi-plus"></i>)</b> di pojok kanan bawah untuk membuat permintaan baru.</h4>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturReimbursement/reimbursement3.png') }}" alt="Fitur Reimbursement">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Pilih jenis permintaan <b>(Reimbursement Type).</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> <b>Dinas Luar</b></li>
                </ul>
                <p>Digunakan untuk pengajuan biaya perjalanan dinas ke luar kantor, seperti transportasi, penginapan, konsumsi, atau kebutuhan lainnya yang berkaitan dengan tugas luar.</p>

                <ul>
                    <li><i class="bi bi-dot"></i> <b>Operation</b></li>
                </ul>
                <p>Digunakan untuk permintaan penggantian biaya operasional kantor atau pekerjaan, seperti pembelian ATK, bahan produksi, atau keperluan operasional harian lainnya.</p>

                <ul>
                    <li><i class="bi bi-dot"></i> <b>Berobat</b></li>
                </ul>
                <p>Digunakan untuk pengajuan penggantian biaya pengobatan pribadi sesuai dengan ketentuan perusahaan, seperti konsultasi dokter, pembelian obat, atau tindakan medis ringan.</p>

                <ul>
                    <li><i class="bi bi-dot"></i> <b>Project</b></li>
                </ul>
                <p>Digunakan untuk biaya-biaya yang berkaitan langsung dengan pengerjaan suatu proyek, seperti pembelian material, alat kerja, atau pengeluaran lapangan lainnya yang bersifat proyek tertentu.</p>

                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturReimbursement/reimbursement4.png') }}" alt="Fitur Reimbursement">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Isi Form Reimbursement.</h4>
                <ul>
                    <li>Contoh gambar di bawah ini. Setelah semua data diisi, tekan tombol <b>Submit</b> untuk mengirim permintaan.</li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturReimbursement/reimbursement5.png') }}" alt="Fitur Reimbursement">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">6. Permintaan Reimbursement.</h4>
                <ul>
                    <li>Permintaan reimbursement dengan status <b>Pending</b> menandakan bahwa pengajuan tersebut masih dalam proses peninjauan dan menunggu persetujuan dari atasan atau pihak HR terkait.</li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturReimbursement/reimbursement6.png') }}" alt="Fitur Reimbursement">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
