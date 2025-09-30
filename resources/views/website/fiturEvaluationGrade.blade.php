@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tutorial Menggunakan Menu Evalution Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>Evaluation Grade</b> adalah pengelompokan jabatan berdasarkan tingkat atau level tanggung jawab dalam perusahaan. Fitur ini digunakan untuk mempermudah proses evaluasi karyawan, pengaturan struktur organisasi, dan penyesuaian kebijakan seperti gaji, penilaian kinerja, serta jenjang karier.Ini juga berguna untuk membuat sistem penilaian yang lebih adil dan terstruktur.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Pilih menu <b>Setting</b> di sebelah kiri, lalu klik <b>Master Data > KPI > Evaluation Grade.</b></h4>
                <div class="row g-3">
                    <div class="col-md-4 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/website/fiturEvaluationGrade/1.png') }}" alt="Fitur Evaluation Grade">
                    </div>
                    <div class="col-md-4 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/website/fiturEvaluationGrade/2.png') }}" alt="Fitur Evaluation Grade">
                    </div>
                    <div class="col-md-4 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/website/fiturEvaluationGrade/3.png') }}" alt="Fitur Evaluation Grade">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Klik tombol <b>+ Evaluation Grade</b> (berwarna oranye) di pojok kanan atas.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturEvaluationGrade/4.png') }}" alt="Fitur Evaluation Grade">
                <h4 class="fw-semibold">3. Akan muncul form <b>Create Evaluation Grade.</b> <br>Masukkan nama kategori penilaian yang ingin Anda buat pada kolom <b>Evaluation Grade Name,</b> sesuai kebutuhan struktur jabatan di perusahaan Anda.</h4>
                <h4 class="fw-semibold">4. Centang <b>grade</b> yang sesuai dengan struktur perusahaan Anda dari daftar yang tersedia.</h4>
                <h4 class="fw-semibold">5. Klik tombol <b>Submit</b> untuk menyimpan.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturEvaluationGrade/5.png') }}" alt="Fitur Evaluation Grade">
                <h4 class="fw-semibold">6. Jika data <b>Evaluation Grade berhasil disimpan,</b> sistem akan menampilkan notifikasi pop-up dengan pesan <b>“Data saved successfully”.</b> Klik tombol <b>OK</b> untuk menutup notifikasi dan menyelesaikan proses.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturEvaluationGrade/6.png') }}" alt="Fitur Evaluation Grade">

                <ul>
                    <li><b>Isi dan Penjelasan Evaluation Grade:</b></li>
                </ul>
                <ul>
                    <li><i class="bi bi-dot"></i> <b>Grade 0 - Out Task:</b> Untuk pekerjaan lepas atau harian yang tidak memiliki struktur jabatan tetap.</li>
                    <li><i class="bi bi-dot"></i> <b>Grade 1 - Entry Level:</b> Posisi pemula, biasanya untuk staf baru atau karyawan dengan pengalaman kerja minim.</li>
                    <li><i class="bi bi-dot"></i> <b>Grade 2 - Officer:</b> Jabatan staf biasa dengan tanggung jawab operasional harian.</li>
                    <li><i class="bi bi-dot"></i> <b>Grade 3 - Individual Contributor:</b> Karyawan yang bekerja secara mandiri dengan keahlian khusus tanpa memimpin tim.</li>
                    <li><i class="bi bi-dot"></i> <b>Grade 4 - Senior Contributor:</b> Karyawan dengan tanggung jawab lebih besar dan pengalaman lebih tinggi dari officer.</li>
                    <li><i class="bi bi-dot"></i> <b>Grade 5A_5B - Assistant Manager:</b> Jabatan tingkat pengawas yang membantu manajer dalam mengatur tim.</li>
                    <li><i class="bi bi-dot"></i> <b>Grade 6A_6B - Manager:</b> Bertanggung jawab atas pengelolaan tim dan pencapaian target departemen.</li>
                    <li><i class="bi bi-dot"></i> <b>Grade 7A_7B - General Manager:</b> Memimpin beberapa departemen atau divisi dalam perusahaan.</li>
                    <li><i class="bi bi-dot"></i> <b>Grade 8 - Senior General Manager:</b> Jabatan senior yang berada di atas general manager, memiliki tanggung jawab strategis.</li>
                    <li><i class="bi bi-dot"></i> <b>Chief:</b> Jabatan paling tinggi seperti CEO, CFO, COO, dan lainnya yang berada di puncak struktur organisasi.</li>
                </ul>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
