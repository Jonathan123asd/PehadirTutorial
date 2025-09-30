@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Penalty Rules pada website pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Fitur <b>Penalty Rules</b> adalah fitur yang di gunakan untuk mengatur aturan denda atau
                            pemotongan
                            bagi karyawan yang melakukan pelanggaran terkait kehadiran.<br>
                            Fitur <b>Penalty Rules</b> juga memiliki fungsi lainnya yaitu, untuk menghitung otomatis denda,
                            menetapkan aturan keterlambatan atau ketidakhadiran.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">A. Langkah- Langkah Penalty Rules</h4>
                <h4 class="fw-semibold">1. Buka website Pehadir</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masukkan email dan kata sandi Anda, lalu klik tombol <b>Login</b>.
                    </li>
                    <li><i class="bi bi-dot"></i> Setelah berhasil masuk ke beranda aplikasi, pilih menu <b>Penalty
                            Rules</b> yang terdapat pada bagian <b>Master Data</b>.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturPenaltyRules/1.png') }}"
                    alt="Fitur Payslip">
            </div>
            <div class="col-12">
                <h4 class="fw-semibold">2. Buat Penalty Rules</h4>
                <ul class="mb-3">
                    <li><i class="bi bi-dot"></i> Klik <b>+Penalty</b> untuk membuat Penalty Rules baru.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPenaltyRules/2.png') }}"
                    alt="Fitur Payslip">
                <ul class="mb-3">
                    <li>Isi data yang ada pada <b>+Penalty</b>.</li>
                    <li><i class="bi bi-dot"></i> Branch: Pilih Branch yang telah di tentukkan oleh perusahaan.
                        (Contoh : PT.Firman Abadi Mobile)</li>
                    <li><i class="bi bi-dot"></i> Type Penalty: Jenis Pelanggaran Alpa (Tidak Absen), Late (Terlambat Masuk)</li>
                    <li><i class="bi bi-dot"></i> Rate Penalty: Metode perhitungan penalti Fixed amount (jumlah tetap, contoh: Rp10.000), Percentage (persentase dari gaji harian), Based on Costum Days (potongan berdasarkan jumlah        hari tertentu).</li>
                    <li><i class="bi bi-dot"></i> Number of Days: Jumlah hari yang akan dihitung sebagai dasar penalti.</li>
                    <li><i class="bi bi-dot"></i> Start and End Date: Mulai dan berakhirnya tanggal penalti.</li>
                    <li><i class="bi bi-dot"></i> Status: menunjukkan apakah aturan penalti tersebut aktif atau tidak aktif.</li>
                    <li><i class="bi bi-dot"></i> Description: Keterangan (Opsional).</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPenaltyRules/3.png') }}"
                    alt="Fitur Payslip">
                <ul class="mb-3">
                    <li><i class="bi bi-dot"></i> Klik Submit untuk menyimpan data yang telah di masukkan.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPenaltyRules/4.png') }}"
                    alt="Fitur Payslip">
            </div>
            <div class="col-12">
                <h4 class="fw-semibold">3. Hasil Akhir</h4>
                <ul class="mb-3">
                    <li><i class="bi bi-dot"></i> Setelah melakukan Submit maka data akan tersimpan di <b>menu utama Penalty Rules</b>.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturPenaltyRules/5.png') }}"
                    alt="Fitur Payslip">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
