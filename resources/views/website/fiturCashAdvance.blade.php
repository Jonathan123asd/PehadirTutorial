@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Panduan Cara Mengajukan Dana Talangan (Cash Advance) Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Cash Advance</b> adalah uang muka atau kasbon yang diberikan oleh perusahaan kepada karyawan sebelum melakukan suatu kegiatan atau perjalanan dinas, dan akan dipertanggung jawabkan. Biasanya digunakan untuk kebutuhan operasional yang mendesak dan harus dilaporkan penggunaannya dengan bukti transaksi.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Pilih halaman <b>Finance</b> di sebelah kiri, lalu klik <b>Deduction > Cash Advance.</b></h4>
                <h4 class="fw-semibold">2. Klik tombol <b>+ Cash Advance</b> di pojok kanan atas untuk membuat pengajuan baru.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturCashAdvance/1.png') }}" alt="Fitur Cash Advance">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Isi Form <b>Cash Advance</b>:</h4>
                <ul class="list-unstyled mb-2">
                    <li><i class="bi bi-dot"></i> <b>Application Date:</b> Pilih tanggal pengajuan.</li>
                    <li><i class="bi bi-dot"></i> <b>Employee:</b> Sistem akan otomatis menampilkan ID dan nama karyawan.</li>
                    <li><i class="bi bi-dot"></i> <b>Cash Advance Name:</b> Pilih jenis kasbon, <i>(misal: Kasbon)</i>.</li>
                    <li><i class="bi bi-dot"></i> <b>Nominal:</b> Masukkan jumlah uang yang diajukan, <i>(misal: 1.000.000)</i>.</li>
                </ul>

                <h4 class="fw-semibold">4. Setelah semua data terisi dengan benar, klik tombol <b>Submit</b> untuk menyimpan pengajuan.</h4>

                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturCashAdvance/2.png') }}" alt="Fitur Cash Advance">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Pilih <b>Branch</b> (Cabang) sesuai yang diinginkan.</h4>
                <h4 class="fw-semibold">6. Pada kolom Status, pilih opsi <b>Pending</b>.</h4>
                <h4 class="fw-semibold">7. Klik tombol Search untuk menampilkan data pengajuan berdasarkan filter yang dipilih.</h4>
                <h4 class="fw-semibold">8. Setelah data muncul, Anda akan melihat informasi seperti:</h4>
                <ul class="list-unstyled mb-2">
                    <li><i class="bi bi-dot"></i> Tanggal Pengajuan (<b>Application Date</b>)</li>
                    <li><i class="bi bi-dot"></i> ID Karyawan (<b>Employee ID</b>)</li>
                    <li><i class="bi bi-dot"></i> Nama Karyawan (<b>Employee</b>)</li>
                    <li><i class="bi bi-dot"></i> Nominal Uang yang Diajukan (<b>Nominal</b>)</li>
                    <li><i class="bi bi-dot"></i> Status <b>Cash Advance</b> (seperti Ongoing)</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Status Persetujuan (seperti <b>Approved</b>)</li>
                    <li>Status Persetujuan <b>Cash Advance</b> akan ditampilkan sebagai <b>"Approved"</b> apabila permohonan Kasbon telah disetujui oleh atasan atau pihak yang berwenang.
                        Jika permohonan masih dalam proses peninjauan, maka status akan muncul sebagai <b>"Pending"</b> atau <b>"Ongoing"</b>, sesuai dengan tahapan proses yang sedang berlangsung.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturCashAdvance/3.png') }}" alt="Fitur Cash Advance">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
