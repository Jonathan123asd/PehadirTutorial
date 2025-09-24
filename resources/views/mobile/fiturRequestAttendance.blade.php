@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Menggunakan Fitur Request tipe Attendance Pada Aplikasi Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Menu <b>Attendance</b> pada fitur <b>Create New Request</b> digunakan untuk mengajukan permohonan terkait kehadiran, seperti koreksi absensi, keterlambatan, atau lupa check-in/check-out. Fitur ini memudahkan karyawan untuk melaporkan dan memperbaiki data kehadiran secara resmi melalui sistem.
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
                    <li><i class="bi bi-dot"></i> Setelah berhasil masuk ke beranda aplikasi. Pilih menu <b>Request.</b></li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturRequestAttendance/attendance1.png') }}" alt="Fitur Request Attendance">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Pada <b>Menu Request</b> klik bagian ikon <b>(<i class="bi bi-plus"></i>)</b> untuk membuat permintaan baru.</h4>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturRequestAttendance/attendance2.png') }}" alt="Fitur Request Attendance">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Pilih jenis permintaan <b>(Create New Request).</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> <b>General</b></li>
                </ul>
                <p>Digunakan untuk membuat permintaan umum yang tidak termasuk dalam kategori khusus seperti cuti, absensi, atau pinjaman. Misalnya: permintaan fasilitas kantor atau kebutuhan administratif lainnya.</p>

                <ul>
                    <li><i class="bi bi-dot"></i> <b>Leave</b></li>
                </ul>
                <p>Digunakan untuk pengajuan cuti, seperti cuti tahunan, cuti menikah, atau cuti keperluan pribadi. Karyawan dapat memilih jenis cuti dan durasi yang diinginkan.</p>

                <ul>
                    <li><i class="bi bi-dot"></i> <b>Attendance</b></li>
                </ul>
                <p>Digunakan untuk koreksi kehadiran, seperti lupa check-in/check-out, keterlambatan, atau kehadiran di luar lokasi. Permintaan ini akan ditinjau oleh atasan/HR.</p>

                <ul>
                    <li><i class="bi bi-dot"></i> <b>Loan</b></li>
                </ul>
                <p>Digunakan untuk mengajukan pinjaman karyawan yang bersifat internal perusahaan, sesuai kebijakan yang berlaku.</p>

                <ul>
                    <li><i class="bi bi-dot"></i> <b>Sick</b></li>
                </ul>
                <p>Digunakan untuk melaporkan ketidakhadiran karena sakit. Biasanya dilengkapi dengan lampiran surat keterangan dokter jika diperlukan.</p>

                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturRequestAttendance/attendance3.png') }}" alt="Fitur Request Attendance">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Isi Form Request.</h4>
                <ul>
                    <li>Contoh gambar di bawah ini. Setelah semua data diisi, tekan tombol <b>Submit</b> untuk mengirim permintaan.</li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturRequestAttendance/attendance4.png') }}" alt="Fitur Request Attendance">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Permintaan Request (Attandance).</h4>
                <ul>
                    <li>Permintaan request dengan status <b>Pending</b> menandakan bahwa pengajuan tersebut masih dalam proses peninjauan dan menunggu persetujuan dari atasan atau pihak HR terkait.</li><br>
                    <li>Note: Setelah pengajuan disetujui oleh atasan atau HR, status yang sebelumnya <b>Pending</b> akan otomatis menjadi <b>Approved.</b></li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturRequestAttendance/attendance5.png') }}" alt="Fitur Request Attendance">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
