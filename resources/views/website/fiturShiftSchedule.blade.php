@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Shift schedule pada Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Fitur <b>Shift Schedule</b> adalah fitur yang digunakan untuk mengatur dan menetapkan jadwal
                            kerja karyawan berdasarkan jenis shift yang telah ditentukan. <br>
                            Fitur <b>Shift Schedule</b> juga memiliki fungsi untuk menyusun jadwal kerja harian, mingguan,
                            atau
                            bulanan. Dan menentukan siapa bekerja di shift pagi, siang, malam, atau libur.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">A. Langkah-langkah membuat Shift Schedule </h4>
                <h4 class="fw-semibold">1. Buka website Pehadir</h4>
                <ul>
                    <li class="mb-2"><i class="bi bi-dot"></i> Klik <b>Time Management</b> yang ada di menu sebelah kanan
                    </li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Setelah itu klik menu <b>Shift > Shift Schedule</b>.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturShiftSchedule/1.png') }}"
                    alt="Fitur Payslip">
            </div>
            <div class="col-12">
                <h4 class="fw-semibold">2. Buat Shift Schedule</h4>
                <ul class="mb-3">
                    <li class="mb-2"><i class="bi bi-dot"></i> Klik +<b>Shift Schedule</b> untuk membuat shift Schedule baru.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturShiftSchedule/2.png') }}"
                    alt="Fitur Payslip">
                <ul class="mb-3">
                    <li class="mb-2">Isi data yang ada pada Set Schedule.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Branch: Pilih Branch Anda yang telah di tentukkan oleh perusahaan. (Contoh
                        : Sanudin lokasi kerja PT.Firman Abadi Mobile)</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Departement: Pilih Departement Anda yang telah di tentukkan oleh
                        perusahaan. (Contoh: Sanudin bagian Produksi).</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Position: Posisi Anda berkerja (opsional).</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Start and End Date: Mulai dan Berakhir Waktu.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Shift Type: Pilih jam kerja yang telah di tentukan.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturShiftSchedule/3.png') }}"
                    alt="Fitur Payslip">
                <ul class="mb-3">
                    <li class="mb-2"><i class="bi bi-dot"></i> Klik Submit untuk menyimpan data yang telah di masukkan </li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturShiftSchedule/4.png') }}"
                    alt="Fitur Payslip">
            </div>
            <div class="col-12">
                <h4 class="fw-semibold">3. Hasil Akhir</h4>
                <ul class="mb-3">
                    <li class="mb-2"><i class="bi bi-dot"></i> Setelah melakukan Submit maka data akan tersimpan di menu utama Shift
                        Schedule.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturShiftSchedule/5.png') }}"
                    alt="Fitur Payslip">
                <ul class="mb-3">
                    <li class="mb-2">Note</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Jangan lupa lakukan Branch, Start Date, End Date yang sesuai dengan yang
                        di isi sebelumnya, untuk melihat hasilnya.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Klik search untuk mencari.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Sebelum membuat Shift Schedule lakukan terlebih dahulu Schedule Type untuk
                        mengatur shift yang di inginkan.</li>
                </ul>
            </div>
            <div class="col-12">
                <h4 class="fw-semibold">B. Tutorial Import pada menu Shift Schedule:</h4>
                <p>Fitur <b>Import</b> adalah fitur untuk memasukkan data jadwal shift karyawan menggunakan File Excel ke
                    dalam sistem pehadir.</p>
                <p>Fitur <b>Import</b> juga memudahkan untuk mempercepat proses Input (karena bisa di unggah sekaligus
                    banyak), Data lebih terstruktur, dan memudahkan update data(jika ada perubahan shift).</p>
                <h4 class="fw-semibold">1. Buka website pehadir</h4>
                <ul class="mb-2">
                    <li class="mb-2"><i class="bi bi-dot"></i> Klik <b>Time Management</b> yang ada di menu sebelah kanan.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Setelah itu klik menu <b>Shift > Shift Schedule</b>.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturShiftSchedule/6.png') }}"
                    alt="Fitur Payslip">
            </div>
            <div class="col-12">
                <h4 class="fw-semibold">2. Buat Shift Schedule</h4>
                <ul class="mb-2">
                    <li class="mb-2"><i class="bi bi-dot"></i> Klik <b>Import</b> untuk membuat shift Schedule baru.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Selanjutnya Klik tombol <b>Download</b>.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturShiftSchedule/7.png') }}"
                    alt="Fitur Payslip">
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturShiftSchedule/8.png') }}"
                    alt="Fitur Payslip">
                <ul class="mb-3">
                    <li class="mb-2">Isi data yang ada pada Import</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> No: Nomor/Angka sesuai kebutuhan.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Employee ID: Nomor identitas unik karyawan (contoh : SAFNO > 3214675900).
                    </li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Name: Nama karyawan.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Date: Tanggal Shift.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Schedule : Pilih jam kerja yang telah di tentukan.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Branch Code: Kode identitas unik untuk setiap cabang perusahaan.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturShiftSchedule/9.png') }}"
                    alt="Fitur Payslip">
            </div>
            <div class="col-12">
                <h4 class="fw-semibold">3. Menyimpan Data</h4>
                <ul class="mb-2">
                    <li class="mb-2"><i class="bi bi-dot"></i> Setelah semunya selesai terisi.</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Langkah selanjunya klik <b>Save/Save As</b> yang berada di pojok atas apk
                        Excel untuk menyimpan data.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturShiftSchedule/10.png') }}"
                    alt="Fitur Payslip">
            </div>
            <div class="col-12">
                <h4 class="fw-semibold">4. Mengupload File</h4>
                <ul class="mb-2">
                    <li class="mb-2"><i class="bi bi-dot"></i> Setelah membuat data karyawan di file excel, langkah selanjutnya <b>upload
                            file</b> yang telah di buat</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturShiftSchedule/11.png') }}"
                    alt="Fitur Payslip">
            </div>
            <div class="col-12">
                <h4 class="fw-semibold">5. Import</h4>
                <ul class="mb-2">
                    <li class="mb-2"><i class="bi bi-dot"></i> Setelah memasukkan data karyawan, langkah selanjutnya klik tombol
                        <b>Import</b>.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturShiftSchedule/12.png') }}"
                    alt="Fitur Payslip">
            </div>
            <div class="col-12">
                <h4 class="fw-semibold">6 Hasil Akhir</h4>
                <ul class="mb-2">
                    <li class="mb-2"><i class="bi bi-dot"></i> Setelah melakukan Submit maka data akan tersimpan di menu utama yang ada
                        pada <b>Schedule Type</b>.</li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturShiftSchedule/13.png') }}"
                    alt="Fitur Payslip">
                <ul class="mb-3">
                    <li class="mb-2">Note</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Employee id = bisa di dapat di menu karyawan</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> name =  nama karyawan</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> date = tanggal shift</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> schedule = nama shift bisa di dapat di menu schedule type</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> branch code = bisa di dapat di menu settings > master data > branch</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> Jika di bagian employee id tidak bisa menambahkan angka 0</li>
                    <li class="mb-2"><i class="bi bi-dot"></i> 1. Klik sel tempat angka itu berada, 2. Klik kanan → pilih Format Cells, 3. Pilih Text → klik OK</li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
