@extends('layouts.app')
@section('content')
<section>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Tutorial Menggunakan Schedule Type (Menambahkan Flexible Shift) pada Website Pehadir</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">
                        Shift Schedule adalah menu pada Website Pehadir untuk mengatur jadwal kerja karyawan, baik shift tetap maupun fleksibel.
                        Admin/HR dapat menentukan jam mulai & selesai, jenis shift (pagi, siang, malam), hari kerja & libur, serta mengatur flexible shift jika diberlakukan.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row g-4">
        {{-- Step 1 --}}
        <div class="col-12">
            <h4 class="fw-semibold">1. Masuk ke Menu Schedule Type</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Pilih halaman <b>Setting</b> di sidebar kiri.</li>
                <li><i class="bi bi-dot"></i> Klik <b>Master Data</b> > <b>Schedule Type</b>.</li>
            </ul>
            <img class="img-custom-dekstop w-100 mb-2" src="{{ asset('assets/img/website/fiturScheduleType/1.png') }}" alt="Menu Setting">
        </div>

        {{-- Step 2-4 --}}
        <div class="col-12">
            <h4 class="fw-semibold">2. Mengisi Data Shift Baru</h4>
            <ul>
                <li><i class="bi bi-dot"></i> <b>Name:</b> Nama shift (contoh: FLEXIBLE SHIFT)</li>
                <li><i class="bi bi-dot"></i> <b>Branch:</b> Cabang perusahaan (contoh: PT. FIRMAN ABADI MOBILE)</li>
                <li><i class="bi bi-dot"></i> <b>Day Type:</b> Jenis hari kerja (contoh: Week Day)</li>
                <li><i class="bi bi-dot"></i> <b>Week Day:</b> Hari kerja biasa (Senin–Jumat)</li>
                <li><i class="bi bi-dot"></i> <b>Saturday:</b> Khusus hari Sabtu</li>
                <li><i class="bi bi-dot"></i> <b>Holiday:</b> Hari libur nasional atau khusus</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturScheduleType/3.png') }}" alt="Form Schedule Type">
        </div>

        {{-- Step 5-8 --}}
        <div class="col-12">
            <h4 class="fw-semibold">3. Mengatur Jam Kerja & Flexible Shift</h4>
            <ul>
                <li><i class="bi bi-dot"></i> <b>Start Time & End Time:</b> Tentukan jam mulai dan selesai kerja</li>
                <li><i class="bi bi-dot"></i> <b>Work From Home (Opsional):</b> Centang jika berlaku untuk karyawan WFH</li>
                <li><i class="bi bi-dot"></i> <b>Flexible Shift:</b> Geser tombol ke posisi aktif (biru)</li>
            </ul>
            <img class="img-custom-dekstop w-100 mb-2" src="{{ asset('assets/img/website/fiturScheduleType/4.png') }}" alt="Jam Kerja & Flexible Shift">
            <ul class="mt-2">
                <li><i class="bi bi-dot"></i> <b>Required Working Hours:</b> Jumlah jam wajib per hari (contoh: 8 jam)</li>
                <li><i class="bi bi-dot"></i> <b>Grace Period:</b> Toleransi menit untuk clock in/out (contoh: 15 menit)</li>
                <li><i class="bi bi-dot"></i> <b>Earliest Clock In:</b> Waktu paling awal (contoh: 07:00)</li>
                <li><i class="bi bi-dot"></i> <b>Latest Clock Out:</b> Waktu paling akhir (contoh: 23:00)</li>
                <li><i class="bi bi-dot"></i> Klik <b>Submit</b> untuk menyimpan jadwal fleksibel</li>
            </ul>
        </div>

        {{-- Step 9 --}}
        <div class="col-12">
            <h4 class="fw-semibold">4. Manage Shift Type</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Data shift yang ditambahkan langsung muncul di halaman <b>Manage Shift Type</b></li>
                <li><i class="bi bi-dot"></i> Menampilkan jam masuk/keluar, jenis hari, Work From Home, dan Flexible Shift</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturScheduleType/5.png') }}" alt="Manage Shift Type">
        </div>

        {{-- Step 10 --}}
        <div class="col-12">
            <h4 class="fw-semibold">5. Menambahkan Shift Decision Mapping</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Klik ikon <b>:</b> di kolom Action lalu pilih <b>Edit</b></li>
                <img class="img-custom-dekstop w-100 mb-2" src="{{ asset('assets/img/website/fiturScheduleType/6.png') }}" alt="Add Shift Mapping">
                <li><i class="bi bi-dot"></i> Halaman Edit Shift Type terbuka.</li>
                <img class="img-custom-dekstop w-100 mb-2" src="{{ asset('assets/img/website/fiturScheduleType/7.png') }}" alt="Add Shift Mapping">
                <li><i class="bi bi-dot"></i> Gulir ke <b>Shift Decision Mapping</b> dan klik <b>+ Add Mapping</b></li>
                <img class="img-custom-dekstop w-100 mb-2" src="{{ asset('assets/img/website/fiturScheduleType/8.png') }}" alt="Add Shift Mapping">
                <li><i class="bi bi-dot"></i> Isi form:
                    <ul class="ms-4">
                        <li>Clock-in Start & Clock-in End</li>
                        <li>Target Shift (contoh: Shift Pagi 08.00-13.00, Shift Malam 17.00-06.00)</li>
                        <li>Priority (angka kecil = prioritas tinggi)</li>
                        <li>Description (Opsional)</li>
                        <li>Active (aktifkan biru)</li>
                    </ul>
                    <img class="img-custom-dekstop w-100 mb-2" src="{{ asset('assets/img/website/fiturScheduleType/9.png') }}" alt="Add Shift Mapping">
                </li>
                <li><i class="bi bi-dot"></i> Klik <b>Save</b> untuk menyimpan mapping</li>
                <img class="img-custom-dekstop w-100 mb-2" src="{{ asset('assets/img/website/fiturScheduleType/10.png') }}" alt="Add Shift Mapping">
            </ul>
        </div>

        {{-- Step 11 --}}
        <div class="col-12">
            <h4 class="fw-semibold">6. Tinjauan Data Shift Mappings</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Data yang diinput tampil di <b>Shift Decision Mappings</b>:
                    <ul class="ms-4">
                        <li>Clock-in Start & End</li>
                        <li>Target Shift</li>
                        <li>Priority</li>
                        <li>Description</li>
                        <li>Status Active</li>
                        <li>Actions: Edit (pensil) / Delete (tempat sampah)</li>
                    </ul>
                </li>
                <li><i class="bi bi-dot"></i> Pastikan semua mapping sesuai sebelum klik <b>Submit</b></li>
                <li><i class="bi bi-dot"></i> Untuk shift lain, ulangi langkah sama, sesuaikan Clock-in Start & End</li>
            </ul>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturScheduleType/11.png') }}" alt="Review Shift Mapping">
        </div>

    </div>
</section>
@endsection
