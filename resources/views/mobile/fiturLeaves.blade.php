@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Menggunakan Fitur Leaves Pada Aplikasi Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Fitur Leaves</b> adalah fitur yang digunakan untuk mengajukan izin cuti secara online melalui sistem Pehadir, yang kemudian diverifikasi oleh atasan atau HR.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Buka aplikasi Pehadir dan pastikan berada di menu <b>Home</b>. Selanjutnya klik menu <b>Leaves</b>.</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Masukan <b>Email</b> dan <b>Kata Sandi</b> Anda, lalu klik <b>Login.</b></li>
                    <li><i class="bi bi-dot"></i> Setelah berhasil masuk ke beranda aplikasi, pilih menu <b>Leaves.</b></li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturLeaves/leaves1.png') }}" alt="Fitur Leaves">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Klik tombol <b>(<i class="bi bi-plus"></i>)</b> di pojok kanan bawah untuk membuat permintaan baru.</h4>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturLeaves/leaves2.png') }}" alt="Fitur Leaves">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Pilih jenis permintaan <b>(Leaves Type)</b></h4>
                <ul>
                    <li><b>Leave Type</b></li>
                    <li><i class="bi bi-dot"></i> Pilihan jenis cuti yang diajukan, misalnya Cuti Tahunan, Cuti Sakit, Cuti Menikah, dll.</li>
                    <li><i class="bi bi-dot"></i> Terdapat informasi sisa cuti <b>(Have Leave 12)</b> yang menunjukkan jumlah cuti tahunan yang masih tersedia.</li>

                    <li><b>Delegation</b></li>
                    <li><i class="bi bi-dot"></i> Diisi dengan nama rekan kerja yang akan menggantikan/membantu tugas selama Anda cuti.</li>

                    <li><b>Start Date & End Date</b></li>
                    <li><i class="bi bi-dot"></i> Tanggal mulai dan berakhirnya cuti. Di contoh ini, cuti berlangsung dari 15 hingga 21 September 2025.</li>

                    <li><b>Leave Reason</b></li>
                    <li><i class="bi bi-dot"></i> Alasan pengajuan cuti. Contoh: pengajuan cuti menikah selama 7 hari.</li>

                    <li><b>Attachment (Optional)</b></li>
                    <li><i class="bi bi-dot"></i> Fitur unggah dokumen pendukung, seperti surat undangan pernikahan, surat dokter, dll (jika diperlukan).</li>

                    <li><b>Tombol Draft</b></li>
                    <li><i class="bi bi-dot"></i> Menyimpan pengajuan cuti sebagai draft, belum dikirim ke atasan/HR.</li>

                    <li><b>Tombol Submit</b></li>
                    <li><i class="bi bi-dot"></i> Mengirimkan pengajuan cuti ke sistem untuk diproses lebih lanjut oleh atasan/HR.</li>
                    <br>
                    <h4 class="fw-semibold">Isi Form <b>Leaves</b></h4>
                    <li><i class="bi bi-dot"></i> Contoh gambar di bawah ini. Setelah semua data diisi, tekan tombol Submit untuk mengirim permintaan.</li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturLeaves/leaves3.png') }}" alt="Fitur Leaves">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Popup <b>"Submit".</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Muncul setelah pengguna menekan tombol Submit di halaman pengajuan cuti.</li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturLeaves/leaves4.png') }}" alt="Fitur Leaves">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Gambar di bawah menampilkan status pengajuan cuti tahunan yang telah berhasil diajukan oleh karyawan, namun masih berstatus <b>“Pending”.</b></h4>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturLeaves/leaves5.png') }}" alt="Fitur Leaves">
                <p>Permintaan <b>Leaves dengan status "Approved"</b> berarti pengajuan cuti yang diajukan oleh karyawan telah disetujui oleh atasan atau HR.</p>
                <div class="row g-3">
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturLeaves/leaves6.png') }}" alt="Fitur Leaves">
                    </div>
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturLeaves/leaves7.png') }}" alt="Fitur Leaves">
                    </div>
                </div>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
