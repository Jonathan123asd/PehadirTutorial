@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Melihat Kinerja Menggunakan Fitur KPI Pada Aplikasi Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <b>KPI</b> (Key Performance Indicator) adalah Indikator Kinerja Utama atau alat ukur yang digunakan
                            untuk menilai kinerja atau pencapaian seorang karyawan terhadap target atau standar kerja
                            yang telah ditetapkan oleh perusahaan.
                            <br><br>
                            <b>KPI</b> digunakan untuk memberikan gambaran kuantitatif terhadap performa karyawan dalam
                            periode tertentu, yang ditunjukkan melalui skor, penilaian bintang, dan kesimpulan umum.
                            <br><br>
                            <b>KPI</b> membantu dalam proses evaluasi, pengambilan keputusan, serta peningkatan produktivitas karyawan.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            <div class="col-12">
                <h4 class="fw-semibold">1. Buka aplikasi <b>Pehadir</b> dan pastikan berada di menu <b>Home</b>. Selanjutnya klik menu <b>More</b>.</h4>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturKPI/kpi1.png') }}" alt="Fitur KPI">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Selanjutnya, cari dan pilih menu <b>KPI</b> pada tampilan <b>More Menu.</b></h4>
                <img class="img-custom" src="{{ asset('assets/img/mobile/fiturKPI/kpi2.png') }}" alt="Fitur KPI">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">3. Pada bagian Name (SANUDIN), nama pengguna akan langsung terisi otomatis sesuai dengan akun yang digunakan untuk login.</h4>
                <h4 class="fw-semibold">4. Pilih Tahun (contoh: 2025), penilaian KPI yang ingin Anda isi atau lihat.</h4>
                <h4 class="fw-semibold">5. Pilih Bulan (contoh: August), sesuai periode yang diinginkan.</h4>

                <div class="row g-3">
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturKPI/kpi3.png') }}" alt="Fitur KPI">
                    </div>
                    <div class="col-md-6 col-12">
                        <img class="img-custom" src="{{ asset('assets/img/mobile/fiturKPI/kpi4.png') }}" alt="Fitur KPI">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">6. Gambar di atas menampilkan grafik KPI (Key Performance Indicator) karyawan bernama Sanudin untuk Bulan August, Tahun 2025.</h4>
                <h4 class="fw-semibold">Penjelasan Tampilan:</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> <b>Grafik Batang:</b> Menunjukkan skor KPI per bulan (contoh: Januari = 200, Februari = 270, dst.).</li>
                    <li><i class="bi bi-dot"></i> <b>Garis Biru:</b> Menunjukkan tren perkembangan KPI dari bulan ke bulan.</li>
                    <li><i class="bi bi-dot"></i> <b>Titik Kuning (Cumulative):</b> Menandakan akumulasi skor KPI.</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">7. Langkah-langkah Cara Membaca Hasil KPI:</h4>
                <img class="img-custom mb-2" src="{{ asset('assets/img/mobile/fiturKPI/kpi5.png') }}" alt="Fitur KPI">
                <h4 class="fw-semibold">A. Lihat Total Score dan Kesimpulan Umum</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> <b>Total Score:</b> 310.00</li>
                    <li><i class="bi bi-dot"></i> <b>General Conclusion:</b> SATISFACTORY (Memuaskan)</li>
                    <li><i class="bi bi-dot"></i> Berdasarkan Score Scale di atas, nilai 310 berada pada kategori Satisfactory (230–324).</li>
                </ul>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">B. Penilaian Berdasarkan 5 Aspek:</h4>
                <ol>
                    <li>
                        <b>CREATIVE & INNOVATION (Kreative & Inovasi):</b><br>
                        <i class="bi bi-dot"></i> Anda dinilai aktif dalam memberikan ide atau saran baru.<br>
                        <i class="bi bi-dot"></i> Nilai: 4/4
                    </li>
                    <li>
                        <b>QUALITY (Kualitas):</b><br>
                        <i class="bi bi-dot"></i> Hasil pekerjaan Anda sudah sesuai dengan standar.<br>
                        <i class="bi bi-dot"></i> Nilai: 4/4
                    </li>
                    <li>
                        <b>INITIATIVE (Inisiatif):</b><br>
                        <i class="bi bi-dot"></i> Anda cukup mandiri dan bisa mengambil tindakan sendiri saat dibutuhkan, tapi masih bisa ditingkatkan.<br>
                        <i class="bi bi-dot"></i> Nilai: 3/4
                    </li>
                    <li>
                        <b>TEAM WORK & ATTITUDE (Kerja Tim & Sikap):</b><br>
                        <i class="bi bi-dot"></i> Anda mampu bekerja sama dengan baik dalam tim.<br>
                        <i class="bi bi-dot"></i> Nilai: 4/4
                    </li>
                    <li>
                        <b>DISCIPLINE (Disiplin):</b><br>
                        <i class="bi bi-dot"></i> Anda bisa mengatur waktu dan menyelesaikan tugas tepat waktu.<br>
                        <i class="bi bi-dot"></i> Nilai: 4/4
                    </li>
                </ol>
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">C. Skala Penilaian:</h4>
                <ul>
                    <li><i class="bi bi-dot"></i> <b>Poor</b> (Kurang): 80 – 134</li>
                    <li><i class="bi bi-dot"></i> <b>Average</b> (Rata-rata): 135 – 229</li>
                    <li><i class="bi bi-dot"></i> <b>Satisfactory</b> (Memuaskan): 230 – 324</li>
                    <li><i class="bi bi-dot"></i> <b>Excellent</b> (Sangat Memuaskan): 325 – 380</li>
                </ul>
                <br>
                <p>
                    Anda mendapatkan nilai <b>310</b>, berada dalam kategori <b>Satisfactory</b>.
                    Ini berarti kinerja Anda <b>Memuaskan</b>, namun masih ada ruang untuk meningkatkan terutama dalam aspek <b>Initiative</b> yang mendapat nilai lebih rendah dibanding yang lain.
                </p>
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
