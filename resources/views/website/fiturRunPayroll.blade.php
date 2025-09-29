@extends('layouts.app')
@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Panduan Penggunaan Fitur Run Payroll di Pehadir.my.id</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        Fitur <b>Run Payroll</b> digunakan untuk memproses perhitungan gaji karyawan bulanan, termasuk gaji pokok, tunjangan, lembur, potongan, dan komponen lainnya sebelum dilakukan finalisasi.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    {{-- Page Content --}}
    <div class="row g-4">

        {{-- Step 1 --}}
        <div class="col-12">
            <h4 class="fw-semibold">1. Masuk ke Dashboard</h4>
            <ul>
                <li>Login ke <b>pehadir.my.id</b> menggunakan Email dan Password.</li>
                <li>Setelah berhasil login, Anda akan diarahkan ke dashboard utama tempat mengakses semua fitur aplikasi.</li>
            </ul>
            <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                src="{{ asset('assets/img/website/FiturRunPayroll/3.png') }}" alt="Dashboard">
        </div>

        {{-- Step 2 --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Masuk ke Menu Run Payroll</h4>
            <ul>
                <li>Pada sidebar kiri, klik menu <b>Payroll</b>.</li>
                <li>Pilih submenu <b>Run Payroll</b> untuk masuk ke fitur penggajian bulanan.</li>
            </ul>
            <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                src="{{ asset('assets/img/website/FiturRunPayroll/1.png') }}" alt="Menu Run Payroll">
        </div>

        {{-- Step 3 --}}
        <div class="col-12">
            <h4 class="fw-semibold">3. Tentukan Periode Penggajian</h4>
            <ul>
                <li><b>a. Start Date:</b> Masukkan tanggal awal periode payroll. Contoh: 1 Agustus 2024. Ini adalah tanggal mulai gaji dihitung.</li>
                <li><b>b. End Date:</b> Masukkan tanggal akhir periode payroll. Contoh: 30 September 2024. Ini adalah tanggal terakhir periode gaji.</li>
                <li><b>c. Branch:</b> Pilih cabang perusahaan tempat karyawan bekerja.</li>
            </ul>
            <img class="img-fluid rounded shadow mb-3 d-block mx-auto"
                src="{{ asset('assets/img/website/FiturRunPayroll/2.png') }}" alt="Periode Payroll">
        </div>

        {{-- Step 4 --}}
        <div class="col-12">
            <h4 class="fw-semibold">4. Jalankan Proses Payroll</h4>
            <ul>
                <li>Setelah semua data terisi, klik tombol <b>RUN PAYROLL</b> berwarna biru.</li>
                <li>Proses akan menghitung semua komponen: gaji pokok, tunjangan (Fixed & Unfixed), lembur, potongan BPJS, pinjaman, kasbon, PPh21, dan Take Home Pay.</li>
            </ul>

        </div>

        {{-- Step 5 --}}
        <div class="col-12">
            <h4 class="fw-semibold">5. Lihat Hasil Payroll</h4>
            <ul>
                <li>Hasil payroll muncul di bagian bawah halaman setelah proses selesai.</li>
                <li>Kolom penting yang muncul antara lain:</li>
                <ul>
                    <li><b>Date:</b> Tanggal transaksi payroll</li>
                    <li><b>Employee ID & Name:</b> Identitas dan nama karyawan</li>
                    <li><b>Position:</b> Jabatan karyawan</li>
                    <li><b>Bank Name & Account Number:</b> Rekening gaji</li>
                    <li><b>Basic Salary:</b> Gaji pokok</li>
                    <li><b>Allowance Fixed & Unfixed:</b> Tunjangan tetap dan tidak tetap</li>
                    <li><b>Allowance Other:</b> Tunjangan tambahan</li>
                    <li><b>Overtime:</b> Lembur</li>
                    <li><b>Rapel/Koreksi:</b> Penyesuaian positif gaji sebelumnya</li>
                    <li><b>Total Salary:</b> Jumlah keseluruhan gaji</li>
                    <li><b>BPJS, Loans, Cash Advance:</b> Potongan terkait BPJS, pinjaman, kasbon</li>
                    <li><b>Total Deduction & Take Home Pay:</b> Total potongan & gaji bersih</li>
                </ul>
            </ul>

        </div>

        {{-- Step 6 --}}
        <div class="col-12">
            <h4 class="fw-semibold">6. Catatan & Tips</h4>
            <ul>
                <li>Pastikan data Start Date, End Date, dan Branch sudah benar sebelum klik RUN PAYROLL.</li>
                <li>RUN PAYROLL hanya perlu diklik sekali per periode untuk semua karyawan.</li>
                <li>Periksa hasil payroll untuk memastikan tunjangan, potongan, dan Take Home Pay sudah sesuai.</li>
            </ul>
        </div>

    </div>
    {{-- /Page Content --}}
</section>
@endsection
