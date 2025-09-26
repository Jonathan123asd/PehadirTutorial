@extends('layouts.app')
@section('content')
    <section>
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Cara Mengatur Komponen Gaji dan Tunjangan Karyawan Melalui Website Pehadir</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Fitur pada sistem Pehadir yang digunakan untuk mengatur komponen gaji karyawan,
                            termasuk gaji pokok, tunjangan, serta potongan, sehingga proses perhitungan payroll
                            menjadi lebih terstruktur, akurat, dan terdokumentasi.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        {{-- Page Content --}}
        <div class="row g-3">
            {{-- Login Awal --}}
            <div class="col-12">
                <h4 class="fw-semibold">1. Buka Chrome, lalu ketik <b>pehadir.my.id</b> pada kolom pencarian.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturKomponenGaji/1.png') }}" alt="Login Awal">
            </div>

            <div class="col-12">
                <h4 class="fw-semibold">2. Login terlebih dahulu untuk masuk ke halaman utama <b>Pehadir</b>. Masukkan <b>Email</b> dan <b>Password</b> anda.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/2.png') }}" alt="Login Pehadir">
                <ul>
                    <li>Setelah berhasil <b>Login.</b> Anda akan dipandu untuk mengikuti langkah-langkah berikutnya.</li>
                </ul>
            </div>

            {{-- Opsi Tunjangan --}}
            <div class="col-12">
                <h4 class="fw-semibold">A. Tutorial Menambahkan Opsi Tunjangan:</h4>
                <h4 class="fw-semibold">1. Pada menu sebelah kiri pilih <b>Setting</b>, lalu klik submenu <b>Master Data > Allowance Option</b>.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/3.png') }}" alt="Menu Allowance Option">
                <ul class="mb-2">
                    <li>Anda akan diarahkan pada tab <b>Manage Allowance Option</b>.</li>
                </ul>
                <h4 class="fw-semibold">2. Pilih cabang <b>Branch</b>, lalu klik tombol <b>Search</b>.</h4>
                <h4 class="fw-semibold">3. Tekan <b>+ New allowance</b> pada pojok kanan atas. <br>
                    (Untuk menampilkan menu <b>Create New Allowance Option</b>).</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/4.png') }}" alt="New Allowance">
                <h4 class="fw-semibold">4. Pilih cabang pada kolom <b>Branch</b>.</h4>
                <h4 class="fw-semibold">5. Isi nama tunjangan di kolom <b>Name</b> (contoh: Tunjangan Pulsa).</h4>
                <h4 class="fw-semibold">6. Pilih jenis pembayaran pada <b>Pay Type</b>:</h4>
                <ul class="ms-3 mb-2">
                    <li><i class="bi bi-dot"></i> <b>Fixed</b> untuk nominal tetap.</li>
                    <li><i class="bi bi-dot"></i> <b>Unfixed</b> untuk nominal berubah-ubah.</li>
                </ul>
                <h4 class="fw-semibold">7. Lalu klik tombol <b>Submit.</b></h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/5.png') }}" alt="Form Tunjangan">
                <h4 class="fw-semibold">8. Setelah berhasil dibuat, Allowance akan muncul pada tabel daftar <b>Manage Allowance Option.</b></h4>
                <h4 class="fw-semibold">9. Anda dapat menambahkan lebih dari satu jenis tunjangan (misalnya: Tunjangan Makan, Transportasi, Pulsa).</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/6.png') }}" alt="Form Tunjangan">
            </div>

            {{-- Payroll --}}
            <div class="col-12">
                <h4 class="fw-semibold">B. Langkah-langkah Mengelola Gaji Karyawan (Payroll):</h4>
                <h4 class="fw-semibold">1. Pilih menu <b>Finance > Set Payroll</b> pada menu sebelah kiri.</h4>
                <h4 class="fw-semibold">2. Pilih cabang <b>Branch</b>, lalu klik tombol <b>Search</b>.</h4>
                <h4 class="fw-semibold">3. Klik tombol <b>+ Payroll</b> untuk menambahkan pengaturan gaji.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/7.png') }}" alt="Tambah Payroll">

                <h4 class="fw-semibold">4. Pilih karyawan yang akan diatur (dapat difilter berdasarkan <b>Branch, Department, atau Position</b>).</h4>
                <h4 class="fw-semibold">5. Centang nama karyawan yang akan dimasukkan ke dalam <b>Set Payroll.</b></h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/8.png') }}" alt="Pilih Karyawan">
                <ul class="mb-2">
                    <li><em>Scroll ke bawah untuk melihat opsi berikutnya.</em></li>
                </ul>

                <h4 class="fw-semibold">6. Pilih jenis gaji pokok yang akan di berikan kepada karyawan, dapat mengatur gaji <b>(Bulanan, Harian, atau Per jam).</b><br>Jika ingin mengatur gaji bulanan maka isi kolom <b>Monthly Amount</b>.</h4>
                <h4 class="fw-semibold">7. Centang tunjangan yang akan di berikan kepada karyawan. Bisa memilih semua dengan mencentang <b>Select All</b>.</h4>
                <h4 class="fw-semibold">8. Selanjutnya masukkan jumlah nominal tunjangan yang akan di berikan kepada karyawan.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/9.png') }}" alt="Atur Gaji">

                <h4 class="fw-semibold">9. Pilih jenis BPJS:</h4>
                <ul class="ms-3 mb-2">
                    <li><i class="bi bi-dot"></i> <b>Normatif:</b> Sesuai aturan pemerintah.</li>
                    <li><i class="bi bi-dot"></i> <b>Unnormatif:</b> Di luar aturan, berdasarkan kebijakan perusahaan.</li>
                </ul>

                <h4 class="fw-semibold">10. Jika ingin memilih BPJS Unormatif, beri tanda centang pada jenis BPJS tersebut.</h4>
                <h4 class="fw-semibold">11. Tentukan jumlah nominal yang akan di berikan <b><em>(contoh: 10.000).</em></b></h4>
                <h4 class="fw-semibold">12. Untuk menghitung potongan pajak, centang kotak <b>Aktifkan PPH21.</b></h4>
                <h4 class="fw-semibold">13. Setelah itu <b>Pilih skema perhitungan.</b></h4>
                <ul class="ms-3 mb-2">
                    <li><i class="bi bi-dot"></i> <b>Gross:</b> Potongan dari gaji karyawan.</li>
                    <li><i class="bi bi-dot"></i> <b>Gross Up:</b> Pajak di tanggung perusahaan, gaji karyawan tetep utuh. <br><em>Contoh, saya memilih opsi <b>Gross Up</b> karena: Perusahaan akan menanggung pajak karyawan. Karyawan tetap menerima gaji penuh tanpa potongan PPH21.</em></li>
                </ul>

                <h4 class="fw-semibold">14. Klik tombol <b>Detail Perhitungan</b> untuk melihat rincian potongan, dan perhitungan pajak secara otomatis.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/10.png') }}" alt="Atur Gaji">
                <h4 class="fw-semibold">15. Lalu tekan tombol <b>Submit</b> untuk menyimpan data karyawan tersebut.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/11.png') }}" alt="Atur Gaji">
            </div>

            {{-- Data Tunjangan --}}
            <div class="col-12">
                <h4 class="fw-semibold">C. Cara Mengelola dan Melihat Data Tunjangan Karyawan:</h4>
                <h4 class="fw-semibold">1. Pilih menu <b>Finance > Allowance</b> pada menu sebelah kiri.</h4>
                <h4 class="fw-semibold">2. Klik tombol <b>+ Create</b> untuk menambahkan pengaturan tunjangan.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/12.png') }}" alt="Menu Allowance">
                <h4 class="fw-semibold">3. Pastikan Anda memilih <b>Branch</b> yang sesuai, (contoh: PT. FIRMAN ABADI MOBILE). <br> Anda juga dapat memfilter berdasarkan <b>Departement</b> atau <b>Position</b> untuk mempercepat pencarian.</h4>
                <h4 class="fw-semibold">4. Pilih karyawan yang akan diberikan tunjangan dengan mencentang nama pada daftar.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/13.png') }}" alt="Menu Allowance">
                <ul class="mb-2">
                    <li><em>Scroll ke bawah untuk melihat opsi berikutnya.</em></li>
                </ul>
                <h4 class="fw-semibold">5. Pada kolom <b>Date</b> tentukan tanggal pemberian tunjangan.</h4>
                <h4 class="fw-semibold">6. Pada kolom <b>Type Allowance,</b> pilih jenis tunjangan yang akan diberikan, <em>(misalnya Tunjangan Transportasi).</em></h4>
                <h4 class="fw-semibold">7. Pada kolom <b>Amount</b> masukkan nominal tunjangan <em>(contoh: 20.000).</em></h4>
                <h4 class="fw-semibold">8. Klik tombol <b>Submit</b> untuk menyimpan data tunjangan.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/14.png') }}" alt="Menu Allowance">
                <ul class="mb-2">
                    <li>Data akan tersimpan pada tab <b>Allowance Other.</b></li>
                </ul>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/15.png') }}" alt="Menu Allowance">
            </div>

            {{-- Run Payroll --}}
            <div class="col-12">
                <h4 class="fw-semibold">D. Bagaimana Cara untuk Menghitung Payroll Karyawan (Run Payroll):</h4>
                <h4 class="fw-semibold">1. Pilih menu <b>Payroll > Run Payroll</b> pada menu sebelah kiri.</h4>
                <h4 class="fw-semibold">2. Tentukan periode payroll dengan mengisi kolom <b>Start Date</b> dan <b>End Date.</b></h4>
                <h4 class="fw-semibold">3. Pilih cabang yang sesuai pada kolom <b>Branch.</b></h4>
                <h4 class="fw-semibold">4. Setelah semua data diisi, klik tombol <b>RUN PAYROLL</b> berwarna oranye untuk memproses penggajian.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/16.png') }}" alt="Run Payroll">
                <h4 class="fw-semibold">5. Setelah tombol <b>RUN PAYROLL</b> diklik, akan muncul pop-up konfirmasi seperti pada gambar. Klik <b>Yes</b> untuk melanjutkan proses payroll, atau klik <b>Cancel</b> jika ingin membatalkan.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/17.png') }}" alt="Run Payroll">
                <h4 class="fw-semibold">6. Setelah anda mengklik tombol <b>RUN PAYROLL,</b> sistem akan menampilkan daftar karyawan beserta detail data mereka, seperti nama, posisi, nomor rekening, dan rincian penghasilan.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/18.png') }}" alt="Run Payroll">
            </div>

            {{-- Pay Slip --}}
            <div class="col-12">
                <h4 class="fw-semibold">E. Cara Mencetak Slip Gaji pada Menu Pay Slip:</h4>
                <h4 class="fw-semibold">1. Pilih menu <b>Payroll > Pay Slip</b> pada menu sebelah kiri.</h4>
                <h4 class="fw-semibold">2. Tentukan periode payroll dengan mengisi kolom <b>Start Date</b> dan <b>End Date.</b></h4>
                <h4 class="fw-semibold">3. Pilih cabang yang sesuai pada kolom <b>Branch.</b></h4>
                <h4 class="fw-semibold">4. Setelah semua data diisi, klik tombol <b>RUN PAYROLL</b> berwarna oranye untuk memproses penggajian.</h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/19.png') }}" alt="Pay Slip">
                <h4 class="fw-semibold">5. Setelah data karyawan ditampilkan, pilih karyawan yang ingin dicetak slip gajinya dengan mencentang kotak di sebelah kiri nama karyawan. <em> (contoh: centang pada SANUDIN).</em></h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/20.png') }}" alt="Pay Slip">
                <h4 class="fw-semibold">6. Geser tampilan tabel ke sebelah kanan hingga menemukan ikon tiga titik vertikal di kolom <b>Action.</b></h4>
                <h4 class="fw-semibold">7. Klik ikon tiga titik tersebut, lalu pilih opsi <b>Print Payslip.</b></h4>
                <img class="img-custom-desktop mb-2" src="{{ asset('assets/img/website/fiturKomponenGaji/21.png') }}" alt="Pay Slip">
                <h4 class="fw-semibold">8. Data slip gaji akan otomatis dibuat oleh sistem Pehadir, sehingga memudahkan para pengguna dalam mengakses informasi penggajian.</h4>
                <img class="img-custom-desktop" src="{{ asset('assets/img/website/fiturKomponenGaji/22.png') }}" alt="Pay Slip">
            </div>
        </div>
        {{-- /Page Content --}}
    </section>
@endsection
