@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Penggunaan Fitur Cash Advance (Kasbon) Pada Aplikasi Pehadir.</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Cash Advance</b> adalah <b>Kasbon</b> atau <b>Pinjaman</b> sementara yang diberikan
                            perusahaan kepada
                            karyawan
                            untuk keperluan tertentu, seperti perjalanan dinas atau kebutuhan mendesak lainnya.

                            <br><br>
                            <b>Cash Advance</b> berfungsi sebagai dana talangan sementara untuk kebutuhan mendesak karyawan
                            atau operasional, yang nantinya akan dipertanggungjawabkan atau dipotong dari gaji karyawan
                            sesuai
                            dengan kebijakan perusahaan.

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Buka aplikasi <b>Pehadir</b> dan pastikan berada di menu <b>Home</b>. Selanjutnya
                    klik menu <b>More</b>.</h4>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturCashAdvance/kpi1.png') }}" alt="Fitur KPI">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Selanjutnya, cari dan pilih menu <b>Cash Advance</b> pada tampilan <b>More
                        Menu.</b></h4>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturCashAdvance/kpi2.png') }}" alt="Fitur KPI">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Klik tombol (+) di pojok kanan bawah untuk membuat permintaan baru.</h4>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturCashAdvance/kpi3.png') }}" alt="Fitur KPI">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Cash Advance Type</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Pilih jenis kasbon yang ingin diajukan (contoh: KASBON).</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Amount</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masukkan jumlah kasbon yang diajukan tanpa menggunakan tanda titik
                        (contoh: 50000).</li>
                    <li><i class="bi bi-dot"></i> Nominal akan otomatis ditampilkan dalam satuan Rupiah.</li>
                </ul>
            </div>


            <div class="col-12">
                <h4 class="fw-semibold">6. <b>Klik Submit,</b> setelah semua data diisi dengan benar, klik tombol Submit
                    untuk mengajukan Kasbon. Pengajuan Anda akan diproses dan menunggu persetujuan dari atasan atau HR. Atau
                    anda juga dapat mengklik tombol Draft untuk menyimpan pengajuan sebagai Draf, sehingga dapat diedit atau
                    dikirim di kemudian hari.
                </h4>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturCashAdvance/kpi4.png') }}" alt="Fitur KPI">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">7. Pilih <b>SUBMIT</b> untuk melanjutkan pengajuan atau <b>CANCEL</b> untuk
                    membatalkan.</h4>
                <img class="img-custom mb-2" src="{{ asset('assets/img/mobile/fiturCashAdvance/kpi5.png') }}"
                    alt="Fitur KPI">

            </div>

            <div class="col-12">
                <h4 class="fw-semibold">8. Anda akan diarahkan otomatis ke halaman <b>Cash Advance</b>, Lalu klik <b></b>
                    untuk menampilkan informasi lengkap pengajuan.</h4>
                <img class="img-custom mb-2" src="{{ asset('assets/img/mobile/fiturCashAdvance/kpi6.png') }}"
                    alt="Fitur KPI">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">9.Anda akan diarahkan ke halaman Detail, yang menampilkan informasi lengkap
                    pengajuan, yaitu:
                    - Name: Jenis kasbon yang diajukan.
                    - Status: Pengajuan akan berubah menjadi "Approved" apabila permohonan kasbon telah disetujui oleh
                    atasan. Jika status masih "Pending", artinya permohonan masih menunggu proses persetujuan.
                    - Amount: Jumlah nominal kasbon yang diajukan.
                    - Date: Tanggal pengajuan kasbon.
                </h4>
                <img class="img-custom mb-2" src="{{ asset('assets/img/mobile/fiturCashAdvance/kpi7.png') }}"
                    alt="Fitur KPI">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
