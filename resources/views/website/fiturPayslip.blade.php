@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Menggunakan PaySlip Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Fungsi <b>Pay Slip</b> pada website Pehadir adalah untuk menampilkan dan mengelola data slip gaji karyawan berdasarkan periode tertentu. Fitur ini memungkinkan <b>Admin/HR</b> untuk melihat rincian gaji seperti gaji pokok, tunjangan tetap, tidak tetap, dan lainnya. Selain itu, admin dapat mencetak slip gaji dan mengekspornya ke dalam <b>file Excel</b> untuk keperluan dokumentasi atau pelaporan internal
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">A. Langkah-Langkah Mengakses Pay Slip di Website Pehadir:</h4>
                <h4 class="fw-semibold">1. Anda bisa cek di <b>chrome</b>, lalu masuk ke website <b>pehadir.my.id</b> pada kolom pencarian.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturPayslip/1.png') }}" alt="Fitur Payslip">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Di halaman utama <b>Pehadir.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masukkan <b>Email</b> dan <b>Kata Sandi</b> Anda. Lalu klik <b>Login.</b></li>
                    <li><i class="bi bi-dot"></i> Setelah berhasil masuk ke beranda website, pilih menu <b>“Payroll” ></b> pilih submenu <b>“Pay Slip”.</b></b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturPayslip/2.png') }}" alt="Fitur Payslip">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Buka menu <b>Payroll.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Buka menu <b>Payroll</b> di sisi kiri layar, Pilih submenu <b>Pay Slip.</b></li>
                    <li><i class="bi bi-dot"></i> Isi kolom <b>Start Date</b> dan <b>End Date</b> sesuai dengan periode slip gaji yang ingin ditampilkan.</li>
                    <li><i class="bi bi-dot"></i> Pilih cabang perusahaan yang ingin ditampilkan (jika tersedia).</li>
                    <li><i class="bi bi-dot"></i> Klik tombol <b>Search</b> untuk menampilkan data slip gaji karyawan.</li>
                    <li><i class="bi bi-dot"></i> Contohnya, data karyawan bernama <b>SANUDIN</b> akan muncul dalam daftar.</li>
                    <li>Untuk mencetak slip gaji:</li>
                    <li><i class="bi bi-dot"></i> Scroll ke kanan hingga ke pojok kanan table, Klik ikon <b>titik tiga (⋮)</b> lalu pilih <b>‘Print Pay Slip’.</b></li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturPayslip/3.png') }}" alt="Fitur Payslip">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Buka file untuk melihat Pay Slip yang telah berhasil diunduh.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPayslip/4.png') }}" alt="Fitur Payslip">
                <ul class="mb-3">
                    <li><b>September 2024</b> atas nama <b>Sanudin,</b> dengan detail sebagai berikut:</li>
                    <li><i class="bi bi-dot"></i> <b>ID Karyawan:</b> 32310011.</li>
                    <li><i class="bi bi-dot"></i> <b>Cabang:</b> PT. FIRMAN ABADI MOBILE.</li>
                    <li><i class="bi bi-dot"></i> <b>Jabatan:</b> Foreman.</li>
                </ul>
                <ul class="mb-3">
                    <li><b>Rincian Gaji:</b></li>
                    <li><i class="bi bi-dot"></i> Gaji Pokok: Rp 7.000.000</li>
                    <li><i class="bi bi-dot"></i> Tunjangan Makan: Rp 20.000</li>
                    <li><i class="bi bi-dot"></i> Tunjangan: Rp 30.000</li>
                    <li><i class="bi bi-dot"></i> Tunjangan Pulsa: Rp 150.000</li>
                    <li><i class="bi bi-dot"></i> (Lembur tidak terisi)</li>
                </ul>
                <ul class="mb-3">
                    <li><b>Potongan:</b></li>
                    <li><i class="bi bi-dot"></i> BPJS JHT: Rp 140.000</li>
                    <li><i class="bi bi-dot"></i> BPJS Kesehatan: Rp 70.000</li>
                    <li><i class="bi bi-dot"></i> BPJS JP: Rp 70.000</li>
                    <li><i class="bi bi-dot"></i> PPh21: Rp 0</li>
                </ul>
                <ul class="mb-3">
                    <li><b>Total Gaji Bersih:</b> Tertera Rp 0, karena kemungkinan sistem belum melakukan perhitungan akhir (masih placeholder atau error sistem saat itu).</li>
                </ul>
                <ul class="mb-3">
                    <li><b>Keterangan Tambahan:</b></li>
                    <li><i class="bi bi-dot"></i> Terdapat kolom <b>Attendance Summary</b> dan tempat tanda tangan penerima slip.</li>
                    <li><i class="bi bi-dot"></i> File slip gaji telah berhasil diunduh dengan nama: <b>payslip-SANUDIN-2024-09.pdf.</b></li>
                </ul>
                <ul class="mb-2">
                    <li class="mb-3">Slip ini berguna sebagai <b>bukti resmi penerimaan gaji</b> dan dapat dicetak langsung oleh admin atau HR melalui menu <b>Print Payslip</b> di sistem Pehadir.</li>
                    <li>Tombol <b>Download</b> di pojok kanan atas (ikon panah ke bawah) digunakan untuk <b>mengunduh slip gaji dalam format PDF</b> ke perangkat pengguna. Setelah diklik,file slip gaji (misalnya payslip-SANUDIN-2024-09.pdf) akan tersimpan di folder <b>Downloads,</b> dan dapat dicetak atau disimpan sebagai arsip.</li>
                </ul>
                <img class="img-custom-desktop mb-4" src="{{ asset('assets/img/website/fiturPayslip/5.png') }}" alt="Fitur Payslip">
                <ul>
                    <li>Fungsi <b>Export</b> pada menu <b>Pay Slip</b> di sistem Pehadir adalah untuk mengunduh data slip gaji karyawan dalam format <b>Pdf</b> berdasarkan periode yang sudah ditentukan <b>(Start Date dan End Date).</b></li>
                    <li>Manfaat dari fitur ini antara lain:</li>
                    <li><i class="bi bi-dot"></i> Mempermudah dokumentasi dan arsip data gaji karyawan.</li>
                    <li><i class="bi bi-dot"></i> Memudahkan proses analisis atau rekap data secara manual di luar sistem.</li>
                    <li><i class="bi bi-dot"></i> Dapat digunakan sebagai bukti pelaporan internal untuk <b>HR/Manager.</b></li>
                    <li>Dengan fitur ini, admin tidak perlu mencatat ulang data gaji secara manual. Cukup klik <b>Export,</b> dan seluruh data yang tampil akan langsung terunduh dalam bentuk file <b>Pdf.</b></li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">B. Langkah-langkah Menggunakan Fitur Export pada Menu Pay Slip:</h4>
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Isi kolom <b>Start Date</b> dan <b>End Date</b> sesuai periode gaji yang ingin ditampilkan.</li>
                    <li><i class="bi bi-dot"></i> Pilih cabang perusahaan yang ingin ditampilkan (jika tersedia).</li>
                    <li><i class="bi bi-dot"></i> Tekan tombol <b>Export</b> (warna biru) untuk mengunduh data slip gaji dalam format <b>Pdf.</b></li>
                    <li><i class="bi bi-dot"></i> File akan otomatis tersimpan di perangkat, biasanya di folder <b>Downloads.</b></li>
                    <li><i class="bi bi-dot"></i> File tersebut dapat digunakan untuk dokumentasi, laporan, atau analisis data gaji secara manual.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPayslip/6.png') }}" alt="Fitur Payslip">
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> Buka file untuk melihat Pay Slip yang telah berhasil diunduh.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturPayslip/7.png') }}" alt="Fitur Payslip">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
