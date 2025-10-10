@extends('layouts.app')

@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Menggunakan Salary Compare Pada Website Pehadir</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <b>Salary Compare</b> berfungsi untuk <b>membandingkan data gaji karyawan antar periode tertentu</b>.
                        Fitur ini memudahkan perusahaan dalam memantau perubahan gaji, tunjangan, potongan, serta total penerimaan secara rinci dan transparan.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row g-4">

        {{-- Step 1 --}}
        <div class="col-12">
            <h4 class="fw-semibold">1. Masuk ke Website Pehadir</h4>
            <ul>
                <li>Buka browser <b>Google Chrome</b>.</li>
                <li>Ketik alamat website <b>pehadir.my.id</b> pada kolom pencarian, lalu tekan Enter.</li>
            </ul>
            <div class="text-center mb-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturSalaryCompare/1.png') }}" alt="Halaman Login Pehadir">
            </div>
        </div>

        {{-- Step 2 --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Login ke Akun Pehadir</h4>
            <ul>
                <li>Masukkan <b>Email</b> dan <b>Kata Sandi</b> Anda.</li>
                <li>Klik tombol <b>Login</b> untuk masuk ke dashboard.</li>

            </ul>
            <div class="text-center mb-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturSalaryCompare/2.png') }}" alt="Menu Salary Compare Pehadir">
            </div>
        </div>

        {{-- Step 3 --}}
        <div class="col-12">
            <h4 class="fw-semibold">3. Menggunakan Menu Salary Compare</h4>
            <ul> <li>Pilih menu <b>Report</b> → <b>Salary</b> → <b>Salary Compare</b>.</li>
                <li>Pilih parameter berikut:</li>
                <ul>

                    <li><b>Cabang Perusahaan:</b> contoh: PT. FIRMAN ABADI MOBILE</li>
                    <li><b>Rentang Tanggal:</b> 01/09/2024 – 30/09/2024</li>
                    <li><b>Format Laporan:</b> PDF atau Excel</li>
                </ul>
                <li>Klik <b>Filter</b> untuk menampilkan data, lalu klik <b>Print</b> untuk menyimpan laporan.</li>
            </ul>
            <div class="text-center mb-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturSalaryCompare/3.png') }}" alt="Filter Salary Compare">
            </div>
        </div>

        {{-- Step 4 --}}
        <div class="col-12">
            <h4 class="fw-semibold">4. Tampilan Salary Compare dalam Format PDF</h4>
            <p>Laporan akan tampil sesuai cabang dan periode yang dipilih. Contoh laporan untuk <b>PT. FIRMAN ABADI MOBILE</b> periode <b>1–30 September 2024</b> menampilkan karyawan <b>Sanudin</b> dengan rincian:</p>
            <ul>
                <li>PPh21 Sebelumnya: 90,696</li>
                <li>PPh21 Saat Ini: 117,738</li>
                <li>Total Potongan Sebelumnya: 575,830</li>
                <li>Total Potongan Saat Ini: 286,600</li>
                <li>Take Home Pay Sebelumnya: 6,498,473</li>
                <li>Take Home Pay Saat Ini: 7,327,136</li>
            </ul>
            <div class="text-center mb-3">
                <div class="d-flex justify-content-center flex-wrap gap-3">
                    <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturSalaryCompare/4.png') }}" alt="Laporan Salary Compare PDF">
                    <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturSalaryCompare/5.png') }}" alt="Laporan Salary Compare PDF 2">
                </div>
            </div>
        </div>

        {{-- Step 5 --}}
        <div class="col-12">
            <h4 class="fw-semibold">5. Mencetak atau Mengunduh Laporan</h4>
            <ul>
                <li>Buka kembali menu <b>Report</b> → <b>Salary Compare</b>.</li>
                <li>Klik tombol <b>Print</b> di pojok kanan atas untuk mencetak laporan.</li>
            </ul>
            <div class="text-center mb-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturSalaryCompare/6.png') }}" alt="Print Salary Compare Report">
            </div>
        </div>

        {{-- Step 6 --}}
        <div class="col-12">
            <h4 class="fw-semibold">6. Download File Excel Salary Compare</h4>
            <ul>
                <li>Tekan tombol <b>Download Excel</b> untuk mengunduh laporan.</li>
                <li>Buka file di daftar riwayat unduhan browser Anda.</li>
            </ul>
            <div class="text-center mb-3">
                <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturSalaryCompare/7.png') }}" alt="Download File Excel Salary Compare">
            </div>
        </div>

        {{-- Step 7 --}}
        <div class="col-12">
            <h4 class="fw-semibold">7. Membuka dan Membaca File Excel Salary Compare</h4>
            <p>Buka file <b>Report_Salary_Detail_Compare_2024-09-01_s.d_2024-09-30.xlsx</b> untuk melihat detail laporan gaji per karyawan.</p>
            <ul>
                <li>Menampilkan komponen seperti BPJS, Pinjaman, Potongan Alpha, dan PPh 21.</li>
                <li>Contoh data:</li>
                <ul>
                    <li>Cash Advance: Rp20.000</li>
                    <li>Total Potongan: Rp575.831</li>
                    <li>Take Home Pay: Rp7.327.136</li>
                </ul>
                <li>Detail tambahan mencakup NIK, Nama, Jabatan, Bank, dan Gaji Pokok.</li>
            </ul>
            <div class="text-center mb-3">
                <div class="d-flex justify-content-center flex-wrap gap-3">
                    <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturSalaryCompare/8.png') }}" alt="File Excel Salary Compare Pehadir">
                    <img class="img-custom-dekstop" src="{{ asset('assets/img/website/fiturSalaryCompare/9.png') }}" alt="File Excel Salary Compare Detail">
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
