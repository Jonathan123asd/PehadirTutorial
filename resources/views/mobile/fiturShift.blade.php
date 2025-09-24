@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Menggunakan Fitur Shift Pada Aplikasi Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Fitur Shift</b> pada aplikasi Pehadir digunakan untuk mengatur dan memproses pertukaran jadwal kerja antar karyawan yang bekerja dalam sistem shift (shift 1, shift 2, shift 3, dll). Fitur ini memungkinkan karyawan untuk mengajukan permintaan tukar shift dengan rekan kerja lain apabila ada keperluan tertentu. Permintaan tersebut kemudian akan melalui proses persetujuan <b>(Approved)</b> oleh atasan atau pihak yang berwenang, sehingga jadwal kerja dapat tetap berjalan dengan tertib dan terpantau secara sistematis dalam aplikasi.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Masuk ke Aplikasi <b>Pehadir.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Buka aplikasi <b>Pehadir</b>, lalu login menggunakan akun karyawan atau admin Anda.</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Pilih Menu <b>Shift.</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Tap tombol <b>Shift.</b></li>
                    <li><i class="bi bi-dot"></i> Akan muncul tampilan daftar shift. Jika tampilannya seperti gambar (kosong), berarti shift belum diatur atau belum ditambahkan.</li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturShift/shift1.png') }}" alt="Fitur Shift">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Klik Tombol Tambah <b>(<i class="bi bi-plus"></i>)</b></h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Terletak di pojok kanan bawah. Ini untuk menambahkan shift baru.</li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturShift/shift2.png') }}" alt="Fitur Shift">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">4. Isi Data Shift.</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> <b>Request Date →</b> Pilih tanggal shift yang ingin kamu tukar.</li>
                    <li><i class="bi bi-dot"></i> <b>Your Shift →</b> Pilih shift milikmu saat ini.</li>
                    <li><i class="bi bi-dot"></i> <b>Select Shift →</b> Pilih shift yang ingin kamu ambil (milik rekan yang ditukar).</li>
                    <li><i class="bi bi-dot"></i> <b>Select Employee →</b> Pilih nama karyawan yang akan kamu ajak tukar shift (misal: wasno).</li>
                    <li><i class="bi bi-dot"></i> <b>Remark →</b> Tulis alasan pertukaran shift. Contoh: “Tuker shift.”</li>
                    <li><i class="bi bi-dot"></i> Klik <b>Submit →</b> Setelah semua data diisi dengan benar, tekan tombol Submit.</li>
                </ul>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturShift/shift3.png') }}" alt="Fitur Shift">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Permohonan akan masuk ke sistem Approval (misalnya atasan/HR).</h4>
                <h4 class="fw-semibold">6. Jika disetujui, status akan berubah menjadi Approved dan kamu bisa melihat detailnya di menu Inbox lalu pilih Action Needed.</h4>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturShift/shift4.png') }}" alt="Fitur Shift">
                <h4 class="fw-semibold">Permintaan tukar shift yang diajukan oleh karyawan akan diproses setelah mendapat persetujuan dari pihak yang berwenang, yaitu:</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> Rekan kerja yang ditukar shift-nya (jika sistem membutuhkan persetujuan dua pihak).</li>
                    <li><i class="bi bi-dot"></i> Atasan langsung / Supervisor.</li>
                    <li><i class="bi bi-dot"></i> Bagian HRD atau Admin Shift (jika diperlukan sesuai kebijakan perusahaan).</li>
                </ul>
                <p>Hanya setelah semua pihak terkait menyetujui, status akan berubah menjadi Approved seperti yang terlihat pada gambar.</p>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
