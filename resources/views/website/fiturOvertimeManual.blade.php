@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Menggunakan Fitur Overtime Manual Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <ul>
                                <li class="mb-3">Fitur Overtime Manual ini digunakan oleh atasan untuk menginformasikan atau menetapkan jadwal lembur kepada karyawan. Berbeda dari pengajuan cuti atau izin, lembur tidak diajukan oleh karyawan, melainkan ditentukan langsung oleh atasan. Karyawan hanya menerima dan melihat pengumuman lembur yang telah ditetapkan.</li>
                                <li>Fitur <b>Overtime Manual</b> digunakan oleh <b>atasan</b> untuk menginformasikan atau menetapkan jadwal lembur kepada karyawan.</li>
                            </ul>
                            <ul class="ms-3">
                                <li><i class="bi bi-dot"></i> <b>Atasan</b> → dapat membuat, mengisi, dan menetapkan pengumuman lembur.</li>
                                <li><i class="bi bi-dot"></i> <b>Karyawan</b> → hanya bisa menerima dan melihat pengumuman lembur yang sudah dibuat oleh atasan.</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Buka chrome, lalu ketik <b>pehadir.my.id</b> pada kolom pencarian.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturOvertimeManual/1.png') }}" alt="Fitur Overtime Manual">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Login terlebih dahulu untuk masuk ke halaman utama <b>Pehadir</b>. Masukkan <b>Email</b> dan <b>Password</b> anda.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturOvertimeManual/2.png') }}" alt="Fitur Overtime Manual">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Pilih halaman <b>Time Management</b> di sebelah kiri, lalu klik <b>Overtime.</b></h4>
                <h4 class="fw-semibold">4. Untuk mulai membuat pengumuman lembur. Tekan tombol <b>+ Overtime</b> yang berada di sebelah kanan atas.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturOvertimeManual/3.png') }}" alt="Fitur Overtime Manual">
                <ul>
                    <li>Selanjutnya, Anda akan diarahkan ke halaman formulir pengisian pengumuman lembur yang hanya bisa diisi oleh atasan.</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">5. Tutorial Mengisi Data Lembur:</h4>
                <ul>
                    <li><b>A. Pilih Cabang, Departemen, dan Posisi:</b></li>
                    <li><i class="bi bi-dot"></i> <b>Branch:</b> Pilih cabang tempat karyawan bekerja, (contoh: <em>PT. Firman Abadi Mobile</em>)</li>
                    <li><i class="bi bi-dot"></i> <b>Departement:</b> Pilih departemen terkait, (contoh: <em>Produksi</em>).</li>
                    <li><i class="bi bi-dot"></i> <b>Position:</b> Pilih posisi jabatan sesuai karyawan yang akan lembur.</li>
                </ul>
                <ul class="mb-2">
                    <li><b>B. Pilih Karyawan yang Akan Lembur:</b></li>
                    <li><i class="bi bi-dot"></i> Daftar karyawan akan muncul di tabel bawah.</li>
                    <li><i class="bi bi-dot"></i> Centang kotak pada nama karyawan yang akan ditugaskan lembur.</li>
                    <li><i class="bi bi-dot"></i> Informasi yang tampil mencakup <b>Branch: (PT. FIRMAN ABADI MOBILE), Employee Name: (Sanudin), Departemen (Produksi), dan Position: (<em>menyesuaikan</em>).</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturOvertimeManual/4.png') }}" alt="Fitur Overtime Manual">
                <ul>
                    <li><b>C. Isi Detail Lembur:</b></li>
                    <li><i class="bi bi-dot"></i> <b>Start Date & End Date:</b> Tentukan tanggal lembur.</li>
                    <li><i class="bi bi-dot"></i> <b>Notes:</b> Masukkan keterangan, misalnya <em>“Lembur untuk membahas rencana kerja”.</em></li>
                    <li><i class="bi bi-dot"></i> <b>Break Time Start & Break Time End:</b> Isi jika ada waktu istirahat.</li>
                    <li><i class="bi bi-dot"></i> <b>Start Time & End Time:</b> Masukkan jam mulai dan selesai lembur dengan format <b>jam:menit</b>, (contoh: 16.00 – 18.00).</li>
                </ul>
                <ul class="mb-2">
                    <li>D. Setelah semua data diisi, klik tombol <b>Submit.</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturOvertimeManual/5.png') }}" alt="Fitur Overtime Manual">
                <ul class="mb-2">
                    <li>Data lembur berhasil dibuat dan. Anda akan mendapatkan notifikasi setelah selesai.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturOvertimeManual/6.png') }}" alt="Fitur Overtime Manual">
                <ul>
                    <li><i class="bi bi-dot"></i> Gunakan fitur Overtime Manual dengan bijak untuk mendukung kelancaran operasional dan kinerja tim.</li>
                    <li><i class="bi bi-dot"></i> Dengan memanfaatkan fitur ini, diharapkan koordinasi lembur antara atasan dan karyawan menjadi lebih efektif.</li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
