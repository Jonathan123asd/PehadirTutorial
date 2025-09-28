@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Melihat Lokasi Karyawan (Tracking Maps) Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Flexible Shift</b> adalah pengaturan jam kerja yang memberikan keleluasaan bagi karyawan untuk memulai dan mengakhiri jam kerja dalam rentang waktu tertentu. Dalam sistem ini, karyawan tidak terikat pada jam masuk dan pulang yang kaku, melainkan diwajibkan memenuhi total jam kerja yang sudah ditentukan per hari.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Pilih halaman <b>Time Management</b> di sebelah kiri, lalu klik <b>Shift > Flexible Shifts.</b></h4>
                <h4 class="fw-semibold">2. Klik tombol <b>+ Add Flexible Shift (berwarna orange)</b> di pojok kanan atas, atau bisa juga dengan cara <b>+ Add Flexible Shift (berwarna biru)</b> yang berada pada tengah halaman.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturFlexibleShift/1.png') }}" alt="Fitur Flexible Shift">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">Cara Mengisi Form <em>Create Flexible Shift:</em></h4>
                <ul class="mb-3">
                    <li><b>1. Branch</b> (Cabang):</li>
                    <li><i class="bi bi-dot"></i> <b>Penjelasan:</b> Pilih cabang/perusahaan tempat shift fleksibel ini berlaku.</li>
                </ul>

                <ul class="mb-3">
                    <li><b>2. Shift Name</b> (Nama Shift):</li>
                    <li><i class="bi bi-dot"></i> <b>Penjelasan:</b> Berikan nama yang mudah dipahami untuk shift ini agar HR/admin dan karyawan bisa membedakannya dengan shift lain.</li>
                </ul>

                <ul class="mb-3">
                    <li><b>3. Required Working Hours</b> (Jam Kerja Wajib):</li>
                    <li><i class="bi bi-dot"></i> <b>Penjelasan:</b> Jumlah jam kerja yang wajib dipenuhi karyawan dalam sehari.</li>
                    <li><i class="bi bi-dot"></i> <b>Contoh isi:</b> 8 (artinya karyawan wajib bekerja total 8 jam per hari, tanpa peduli jam berapa mereka mulai).</li>
                </ul>

                <ul class="mb-3">
                    <li><b>4. Grace Period (Minutes)</b> – Masa Tenggang:</li>
                    <li><i class="bi bi-dot"></i> <b>Penjelasan:</b> Toleransi keterlambatan masuk atau kelebihan saat keluar, dalam satuan menit.</li>
                    <li><i class="bi bi-dot"></i> <b>Contoh isi:</b> 15 (artinya ada toleransi 15 menit untuk clock in/out).</li>
                </ul>

                <ul class="mb-3">
                    <li><b>5. Earliest Clock In Time</b> (Waktu Masuk Paling Awal):</li>
                    <li><i class="bi bi-dot"></i> <b>Penjelasan:</b> Waktu paling awal karyawan boleh memulai kerja.</li>
                    <li><i class="bi bi-dot"></i> <b>Contoh isi:</b> 06:00 (artinya karyawan bisa mulai kerja dari jam 6 pagi).</li>
                </ul>

                <ul class="mb-3">
                    <li><b>6. Latest Clock Out Time</b> (Waktu Pulang Paling Akhir):</li>
                    <li><i class="bi bi-dot"></i> <b>Penjelasan:</b> Waktu paling akhir karyawan boleh menyelesaikan kerja.</li>
                    <li><i class="bi bi-dot"></i> <b>Contoh isi:</b> 22:00 (artinya karyawan harus selesai maksimal jam 10 malam).</li>
                </ul>

                <ul class="mb-3">
                    <li><b>7. Simpan Shift:</b></li>
                    <li><i class="bi bi-dot"></i> Setelah semua terisi, klik tombol <b>Create Flexible Shift.</b></li>
                    <li><i class="bi bi-dot"></i> Jika batal, klik <b>Cancel.</b></li>
                </ul>

                <ul class="mb-2">
                    <li><b><em>Contohnya seperti gambar di bawah</em></b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturFlexibleShift/2.png') }}" alt="Fitur Flexible Shift">
                <ul>
                    <li>Setelah selesai membuat shift fleksibel, data shift akan muncul pada halaman <b>Flexible Shifts.</b></li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">Cara Mengedit dan Menghapus Flexible Shift pada Time Management:</h4>
                <ul>
                    <li>Proses ini digunakan untuk mengatur kembali shift fleksibel yang telah dibuat, baik dengan memperbarui pengaturan <b>(Edit)</b> jika ada perubahan kebutuhan jam kerja, atau menghapus shift. <b>(Delete)</b> jika sudah tidak digunakan lagi. Fitur ini membantu HR/Admin menjaga data shift tetap akurat dan sesuai dengan kebijakan perusahaan.</li>
                    <li>Untuk mengelola <b>Flexible Shift,</b> klik ikon <b>titik tiga (⋮)</b> di sebelah kanan.</li>
                </ul>
                <ul class="ms-3">
                    <li><i class="bi bi-dot"></i> Pilih <b>Edit</b> untuk mengubah data Flexible Shift, seperti jam kerja wajib, masa tenggang, atau jam masuk/keluar.</li>
                    <li><i class="bi bi-dot"></i> Pilih <b>Delete</b> untuk menghapus Flexible Shift yang tidak lagi diperlukan.</li>
                </ul>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturFlexibleShift/3.png') }}" alt="Fitur Flexible Shift">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
