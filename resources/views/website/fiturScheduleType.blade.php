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

        {{-- Step 11
        <div class="col-12">
            <h4 class="fw-semibold">6. Tinjauan Data Shift Mappings</h4>
            <ul>
                <li><i class="bi bi-dot"></i> Data yang diinput tampil di <b>Shift Decision Mappings</b>:
                    <ul class="ms-4">
                        <li>Clock-in Start & End</li>
                        <li>Target Shift</li>
                        <li>Employees(Any)</li>
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
        </div> --}}

        {{--step 12--}}
        <div class="col-12">
            <h4 class="fw-semibold">6. Cara Melihat Hasil dan Tinjauan Data Shift Mappings</h4>
            <p>Data yang diinput akan langsung ditampilkan di bagian <b>Shift Decision Mappings</b>:</p>
            <ul class="ms-4">
                <li>Clock-in Start: Jam mulai masuk yang ditentukan</li>
                <li>Clock-in End: Batas waktu akhir masuk</li>
                <li>Target Shift: Nama shift tujuan yang diterapkan otomatis</li>
                <li>Employees (Any): Berlaku untuk semua karyawan</li>
                <li>Day (Any): Berlaku untuk semua hari dalam seminggu</li>
                <li>Priority: Urutan prioritas jika lebih dari satu mapping</li>
                <li>Description: Keterangan tambahan (jika diisi)</li>
                <li>Status: Menunjukkan apakah mapping aktif (Active) atau tidak</li>
                <li>Actions:
                    <ul>
                        <li>Edit (ikon pena oranye)</li>
                        <li>Delete (ikon tempat sampah merah)</li>
                        <li>Add Multiple Employees (ikon kepala hijau +)</li>
                        <li>Remove Employees (ikon kepala merah -)</li>
                    </ul>
                </li>
            </ul>
            <p>Pastikan semua data sesuai sebelum menekan tombol <b>Submit</b> untuk menyimpan seluruh pengaturan shift.</p>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturScheduleType/11.png') }}" alt="Shift Mappings Overview">
        </div>

        {{--step 13--}}
        <div class="col-12">
            <h4 class="fw-semibold">7. Mengisi Shift Lain</h4>
            <p>Untuk mengisi shift lain, caranya sama seperti mengisi Shift Pagi. Bedanya hanya pada pengaturan waktu mulai (Clock-in Start), waktu selesai (Clock-in End), dan hari (Day) sesuai jam kerja masing-masing shift.</p>

        </div>

        {{--step 14--}}
        <div class="col-12">
            <h4 class="fw-semibold">8. Penjelasan dan Cara Menggunakan Menu Actions</h4>
            <p><b>A. Edit Mapping (ikon pena oranye)</b> digunakan untuk mengedit rentang waktu clock-in agar sistem menentukan shift karyawan secara otomatis.</p>
            <ul class="ms-4">
                <li>Klik Edit Mapping pada kolom Actions di baris shift yang ingin diubah</li>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturScheduleType/12.png') }}" alt="Edit Mapping">
                <li>Pada jendela Edit Mapping, masukkan informasi berikut:
                    <ul class="ms-4">
                        <li>Clock-in Start (contoh: 08.30)</li>
                        <li>Clock-in End (contoh: 13.00)</li>
                        <li>Target Shift (contoh: Shift Pagi)</li>
                        <li>Day (pilih hari tertentu atau "Any")</li>
                        <li>Priority (semakin kecil nilai, semakin tinggi prioritas)</li>
                        <li>Description (Opsional)</li>
                        <li>Active: aktifkan jika ingin langsung diterapkan</li>
                    </ul>
                </li>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturScheduleType/13.png') }}" alt="Edit Mapping">
                <li>Klik tombol <b>Save</b> untuk menyimpan pengaturan shift</li>
            </ul>
        </div>

        {{--step 15--}}
        <div class="col-12">
            <h4 class="fw-semibold">9. Delete/Hapus Mapping (ikon tempat sampah merah)</h4>
            <ul class="ms-4">
                <li>Klik Delete pada kolom Actions di baris data yang ingin dihapus</li>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturScheduleType/14.png') }}" alt="Delete Mapping">
                <li>Muncul kotak konfirmasi "Are you sure? You won't be able to revert this!"</li>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturScheduleType/15.png') }}" alt="Delete Mapping">
                <li>Klik tombol biru <b>Yes, delete it!</b> untuk melanjutkan atau merah <b>Cancel</b> untuk membatalkan</li>
            </ul>
        </div>

        {{--step 16--}}
        <div class="col-12">
            <h4 class="fw-semibold">10. Notifikasi Setelah Delete</h4>
            <p>Jika shift berhasil dihapus, sistem akan menampilkan pop-up notifikasi:</p>
            <p><b>"Deleted! Mapping deleted successfully"</b></p>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturScheduleType/16.png') }}" alt="Deleted Notification">
            <p>Data shift tidak akan muncul lagi pada daftar di halaman menu.</p>
            <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturScheduleType/17.png') }}" alt="Deleted Notification">
        </div>

        {{--step 17--}}
        <div class="col-12">
            <h4 class="fw-semibold">11. Add Multiple Employees (ikon kepala hijau +)</h4>
            <ul class="ms-4">
                <li>Klik Add Multiple Employees pada kolom Actions di baris shift yang ingin ditambahkan karyawan</li>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturScheduleType/18.png') }}" alt="Add Multiple Employees">
                <li>Jendela Add Multiple Employees muncul menampilkan daftar karyawan yang belum terhubung dengan shift</li>
                <li>Gunakan kolom Search untuk mencari karyawan cepat berdasarkan nama</li>
                <li>Centang karyawan yang ingin ditambahkan (contoh: SANUDIN)</li>
                <img class="img-custom-dekstop w-100 mt-2" src="{{ asset('assets/img/website/fiturScheduleType/19.png') }}" alt="Select Employees">
                <li>Klik tombol <b>Add Selected Employees</b> di bagian bawah untuk menyimpan data</li>
                <li>Jika berhasil, muncul notifikasi pop-up: <b>"Employees attached successfully"</b></li>
                <img class="img-custom-dekstop w-100 mt-2" src="{{ asset('assets/img/website/fiturScheduleType/20.png') }}" alt="Select Employees">
                <li>Data karyawan berhasil ditambahkan dan muncul di kolom Employees</li>
                <img class="img-custom-dekstop w-100 mt-2" src="{{ asset('assets/img/website/fiturScheduleType/21.png') }}" alt="Select Employees">
            </ul>
        </div>

                {{--step 18--}}
        <div class="col-12">
            <h4 class="fw-semibold">12. Remove Employees (ikon kepala merah -)</h4>
            <p>Fitur ini digunakan untuk menghapus nama karyawan dari shift tertentu, bukan menghapus data karyawannya dari sistem. Artinya, karyawan tersebut tidak lagi terjadwal dalam shift tersebut, tapi data tetap ada.</p>
            <ul class="ms-4">
                <li>Klik <b>Remove Employees</b> pada kolom Actions di baris data shift yang ingin dihapus karyawannya</li>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturScheduleType/22.png') }}" alt="Remove Employees">
                <li>Jendela Remove Employees akan muncul menampilkan daftar karyawan yang saat ini terhubung dengan shift</li>
                <li>Gunakan kolom <b>Search</b> untuk mencari karyawan dengan cepat berdasarkan nama</li>
                <li>Centang kotak di sebelah nama karyawan yang ingin dihapus (contoh: SANUDIN)</li>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturScheduleType/23.png') }}" alt="Remove Employees">
                <li>Klik tombol <b>Remove Selected</b> di bagian bawah untuk menghapus karyawan dari shift mapping</li>
                <li>Jika berhasil, akan muncul notifikasi pop-up: <b>"Employees removed successfully"</b>. Klik OK untuk menutup notifikasi</li>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturScheduleType/24.png') }}" alt="Remove Employees">
                <li>Data karyawan berhasil dihapus dan tidak akan muncul lagi pada kolom Employees pada shift tersebut</li>
                <img class="img-custom-dekstop w-100" src="{{ asset('assets/img/website/fiturScheduleType/25.png') }}" alt="Remove Employees">
            </ul>
        </div>




    </div>
</section>
@endsection
