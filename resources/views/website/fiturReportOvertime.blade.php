@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Panduan Menggunakan Fitur Report Overtime pada Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Report Overtime</b> membantu perusahaan dan karyawan memantau lembur dengan akurat dan otomatis, serta mendukung penggajian yang adil.
                            Fitur ini juga berfungsi untuk mempermudah pelacakan dan validasi jam kerja di luar jam normal, menghindari manipulasi data lembur, serta mendukung transparansi dalam pemberian insentif lembur.
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
                <h4 class="fw-semibold">2. Setelah berhasil masuk ke beranda website, pilih menu <b>Report > Overtime.</b></h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturReportOvertime/1.png') }}" alt="Fitur Report Overtime">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Laporan Lembur Karyawan</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> <b>Branch:</b> Pilih nama perusahaan atau cabang yang ingin dilihat datanya. <em>(Contoh: PT. Firman Abadi Mobile)</em></li>
                    <li><i class="bi bi-dot"></i> <b>Date:</b> Tentukan rentang waktu laporan lembur yang ingin ditampilkan.</li>
                    <li><i class="bi bi-dot"></i> Setelah itu klik tombol <b>Filter</b> untuk menampilkan laporan lembur.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturReportOvertime/2.png') }}" alt="Fitur Report Overtime">
                                <h4 class="fw-semibold">4. Hasil Laporan Overtime</h4>
                <ul>
                    <li>Setelah klik <b>Filter</b>, sistem akan menampilkan daftar lembur karyawan sesuai periode dan cabang yang dipilih.</li>
                    <li>Tampilan berisi detail jam lembur, karyawan yang bersangkutan, serta total lembur yang dihitung sistem. seperti pada gambar diatas</li>
                </ul>
            </div>






            <div class="col-12">
                <h4 class="fw-semibold">5. Menggunakan Menu Print</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Fitur ini memudahkan Anda mencetak laporan lembur untuk keperluan administrasi.</li>
                    <li><i class="bi bi-dot"></i> Ubah tanggal yang ingin dicetak.</li>
                    <li><i class="bi bi-dot"></i> Pilih format file, misalnya <b>Excel</b> atau <b>PDF.</b></li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Print</b> untuk memproses laporan.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturReportOvertime/3.png') }}" alt="Fitur Report Overtime">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">6. Menyimpan Data File Print</h4>
                <ul>
                    <li>Setelah klik <b>Print</b>, akan muncul tombol <b>Download/Print</b> untuk menyimpan laporan lembur ke perangkat Anda.</li>
                    <li>File dapat disimpan sesuai format yang dipilih sebelumnya.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturReportOvertime/4.png') }}" alt="Fitur Report Overtime">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
