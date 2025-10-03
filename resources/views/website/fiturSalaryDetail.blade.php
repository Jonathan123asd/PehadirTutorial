@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Panduan Menggunakan Fitur Salary Detail pada Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Salary Detail</b> adalah fitur yang menampilkan rincian perhitungan gaji karyawan secara detail dan otomatis berdasarkan data kehadiran, lembur, tunjangan, serta potongan.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Login ke <b>website Pehadir.my.id</b> menggunakan email dan kata sandi Anda, lalu klik tombol <b>Login.</b></h4>
                <h4 class="fw-semibold">2. Setelah berhasil masuk ke beranda website, pilih menu <b>Report > Salary Detail.</b></h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturSalaryDetail/1.png') }}" alt="Fitur Salary Detail">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Pilih Periode Gaji</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Ubah <b>Tanggal</b> pada menu utama Salary Detail untuk melihat riwayat perhitungan.</li>
                    <li><i class="bi bi-dot"></i> Detail yang ditampilkan mencakup <b>Tunjangan, Lembur, Bonus, Potongan</b> (absen, pinjaman, dll), serta <b>Gaji Bersih.</b></li>
                    <li><i class="bi bi-dot"></i> Setelah memilih tanggal, jangan lupa klik tombol <b>Filter.</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturSalaryDetail/2.png') }}" alt="Fitur Salary Detail">
                  <h4 class="fw-semibold">4. Hasil Rincian Gaji</h4>
                <ul>
                    <li>Setelah klik <b>Filter</b>, sistem akan menampilkan rincian gaji sesuai periode yang dipilih.</li>
                    <li>Tampilan akan memuat perhitungan lengkap beserta potongan dan gaji bersih. seperti gambar diatas</li>
                </ul>

            </div>




            <div class="col-12">
                <h4 class="fw-semibold">5. Menggunakan Menu Print</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Dengan fitur ini, Anda bisa mencetak slip gaji resmi untuk keperluan administrasi perusahaan maupun pribadi.</li>
                    <li><i class="bi bi-dot"></i> Ubah tanggal yang ingin dicetak.</li>
                    <li><i class="bi bi-dot"></i> Pilih format file, misalnya <b>Excel</b> atau <b>PDF.</b></li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Print</b> untuk memproses.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturSalaryDetail/3.png') }}" alt="Fitur Salary Detail">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">6. Menyimpan Data File Print</h4>
                <ul>
                    <li>Setelah klik <b>Print</b>, akan muncul tombol <b>Download/Print</b> untuk menyimpan slip gaji ke perangkat Anda.</li>
                    <li>File dapat disimpan dalam bentuk Excel atau PDF sesuai kebutuhan.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturSalaryDetail/4.png') }}" alt="Fitur Salary Detail">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
