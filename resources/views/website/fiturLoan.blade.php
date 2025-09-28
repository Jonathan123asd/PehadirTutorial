@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Panduan Cara Mengajukan Cicilan (Loan) Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Loan</b> adalah pinjaman yang diberikan kepada karyawan oleh perusahaan, yang pembayarannya dilakukan secara bertahap (dicicil) dan dipotong langsung dari gaji karyawan setiap periode tertentu.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Pilih halaman <b>Finance</b> di sebelah kiri, lalu klik <b>Deduction > Loan.</b></h4>
                <h4 class="fw-semibold">2. Untuk mengajukan cicilan baru, klik tombol <b>+ Loan</b> di pojok kanan atas.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturLoan/1.png') }}" alt="Fitur Loan">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Setelah mengklik tombol <b>+ Loan,</b> Anda akan diarahkan ke halaman <b>Create New Loan.</b></h4>
                <ul class="mb-2">
                    <li><i class="bi bi-dot"></i> <b>Effective Date:</b> Masukkan tanggal mulai cicilan diberlakukan.</li>
                    <li><i class="bi bi-dot"></i> <b>Employee:</b> Pilih karyawan yang mengajukan pinjaman.</li>
                    <li><i class="bi bi-dot"></i> <b>Loan Name:</b> Pilih tipe pinjaman, misalnya <b>Cicilan</b> atau <b>Kasbon.</b></li>
                    <li><i class="bi bi-dot"></i> <b>Description:</b> Tambahkan keterangan atau alasan pengajuan pinjaman, misalnya untuk kebutuhan pribadi, biaya darurat, atau lainnya.</li>
                    <li><i class="bi bi-dot"></i> <b>Amount:</b> Masukkan jumlah pinjaman yang ingin diajukan.</li>
                    <li><i class="bi bi-dot"></i> <b>Installment:</b> Tentukan jumlah cicilan (berapa kali potong).</li>
                    <li><i class="bi bi-dot"></i> <b>Interest (%):</b> Masukkan persentase bunga (jika ada).</li>
                    <li><b><em>Contoh seperti gambar dibawah:</em></b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturLoan/2.png') }}" alt="Fitur Loan">
                <ul>
                    <li><b><em>Scroll ke bawah untuk melihat opsi berikutnya.</em></b></li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Periksa Rincian Cicilan: Sistem akan otomatis menghitung jumlah pembayaran per cicilan, total, dan sisa pinjaman pada tabel di bawahnya:</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> <b>Basic Payment:</b> Jumlah yang harus dibayar tiap bulan.</li>
                    <li><i class="bi bi-dot"></i> <b>Remaining Loan:</b> Sisa pinjaman setelah cicilan dibayarkan.</li>
                </ul>
                <h4 class="fw-semibold">5. Setelah semua data lengkap dan benar, klik tombol <b>Submit</b> untuk mengajukan pinjaman.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturLoan/3.png') }}" alt="Fitur Loan">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">6. Setelah mengklik tombol <b>Submit,</b> akan muncul notifikasi di pojok kanan atas bertuliskan <b>Loan successfully created.</b> Artinya, pengajuan pinjaman telah berhasil disimpan ke sistem.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturLoan/4.png') }}" alt="Fitur Loan">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">7. Data pinjaman akan langsung ditampilkan pada daftar di halaman <b>Loan,</b> sesuai dengan nominal pinjaman dan informasi yang telah dimasukkan sebelumnya.</h4>
                <ul>
                    <li>Status pengajuan akan ditandai sebagai <b>Approved</b> apabila telah disetujui oleh pihak yang berwenang.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturLoan/5.png') }}" alt="Fitur Loan">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
