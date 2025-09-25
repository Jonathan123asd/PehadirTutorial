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
        <div class="row g-5">
            <div class="col-12">
                <h4 class="fw-semibold mb-4">1. Membuka Menu <b>Cash Advance</b></h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Buka aplikasi <b>Pehadir</b></li>
                    <li>klik menu <b>More</b>.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturCashAdvance/1.png') }}"
                        alt="Fitur Cash Advance">
                    <li>Selanjutnya, cari dan pilih menu <b>Cash Advance</b> pada tampilan <b>More
                            Menu.</b></li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturCashAdvance/2.png') }}"
                        alt="Fitur Cash Advance">
                </ul>
            </div>
            <div class="col-12">
                <h4 class="fw-semibold mb-4">2. Membuat <b>Cash Advance</b></h4>
                <ul class="d-flex flex-column gap-2 ms-4" style="list-style: disc;">
                    <li>Klik tombol (+) di pojok kanan bawah untuk membuat permintaan baru.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturCashAdvance/3.png') }}"
                        alt="Fitur Cash Advance">
                    <li>Pilih jenis kasbon yang ingin diajukan (contoh: KASBON).</li>
                    <li>Masukkan jumlah kasbon yang diajukan tanpa menggunakan tanda titik
                        (contoh: 50000). Nominal akan otomatis ditampilkan dalam satuan Rupiah.</li>
                    <li><b>Klik Submit,</b> setelah semua data diisi dengan benar, klik tombol Submit
                        untuk mengajukan Kasbon. Pengajuan Anda akan diproses dan menunggu persetujuan dari atasan atau HR.
                        Atau
                        anda juga dapat mengklik tombol Draft untuk menyimpan pengajuan sebagai Draf, sehingga dapat diedit
                        atau
                        dikirim di kemudian hari.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturCashAdvance/4.png') }}"
                        alt="Fitur Cash Advance">
                    <li>Pilih <b>SUBMIT</b> untuk melanjutkan pengajuan atau <b>CANCEL</b> untuk
                        membatalkan.</li>
                        <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturCashAdvance/5.png') }}"
                        alt="Fitur Cash Advance">
                    <li>Anda akan diarahkan otomatis ke halaman <b>Cash Advance</b></li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturCashAdvance/6.png') }}"
                        alt="Fitur Cash Advance">
                    </ul>
                </div>
                <div class="col-12">
                <h4 class="fw-semibold mb-4">3. Melihat Detail <b>Cash Advance</b></h4>
                <ul class="d-flex flex-column gap-2 ms-4 mb-4" style="list-style: disc;">
                    <li>Klik tombol <b>Kasbon</b> untuk melihat detail pengajuan kasbon.</li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturCashAdvance/6.png') }}"
                        alt="Fitur Cash Advance">
                    <li>
                        Contoh data:
                        <ul class="d-flex flex-column gap-2 ms-4 mt-2">
                            <li><b>Name</b>: Jenis kasbon yang diajukan.</li>
                            <li><b>Status</b>: Pengajuan akan berubah menjadi "Approved" apabila permohonan kasbon telah disetujui
                                oleh atasan. Jika status masih "Pending", artinya permohonan masih menunggu proses persetujuan.</li>
                            <li><b>Amount</b>: Jumlah nominal kasbon yang diajukan.</li>
                            <li><b>Date</b>: Tanggal pengajuan kasbon.</li>
                        </ul>
                    </li>
                    <li><i>Sebelum disetujui</i></li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturCashAdvance/7-1.png') }}"
                        alt="Fitur Cash Advance">
                    <li><i>Sesudah disetujui</i></li>
                    <img class="img-custom my-1" src="{{ asset('assets/img/mobile/fiturCashAdvance/7-2.png') }}"
                        alt="Fitur Cash Advance">
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
