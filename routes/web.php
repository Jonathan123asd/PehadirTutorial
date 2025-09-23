<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::group(['prefix' => 'mobile'], function () {
    // Cara Lihat fitur KPI
    Route::get('/penggunaan/fitur/kpi', function () {
        return view('mobile.fiturKPI');
    })->name('mobile.penggunaan.fitur.kpi');

    // Cara Menggunakan fitur Request General
    Route::get('/penggunaan/fitur/request-general', function () {
        return view('mobile.fiturRequestGeneral');
    })->name('mobile.penggunaan.fitur.request.general');

    // Cara Menggunakan fitur BusinessTrip
    Route::get('/penggunaan/fitur/business-trip', function () {
        return view('mobile.fiturBusinessTrip');
    })->name('mobile.penggunaan.fitur.business');

    // Cara Menggunakan fitur Shift
    Route::get('/penggunaan/fitur/shift', function () {
        return view('mobile.fiturShift');
    })->name('mobile.penggunaan.fitur.shift');

    // Cara Menggunakan fitur Leaves
    Route::get('/penggunaan/fitur/leaves', function () {
        return view('mobile.fiturLeaves');
    })->name('mobile.penggunaan.fitur.leaves');

    // Cara Menggunakan fitur Loan
    Route::get('/penggunaan/fitur/loan', function () {
        return view('mobile.fiturLoan');
    })->name('mobile.penggunaan.fitur.loan');

    // Cara Menggunakan fitur Request Attendance
    Route::get('/penggunaan/fitur/request-attendance', function () {
        return view('mobile.fiturRequestAttendance');
    })->name('mobile.penggunaan.fitur.request.attendance');

    // Cara Menggunakan fitur Reimbursement
    Route::get('/penggunaan/fitur/reimbursement', function () {
        return view('mobile.fiturReimbursement');
    })->name('mobile.penggunaan.fitur.reimbursement');

    // Cara Mengubah Kata Sandi
    Route::get('/penggunaan/fitur/kata-sandi', function () {
        return view('mobile.fiturUbahKataSandi');
    })->name('mobile.penggunaan.fitur.kata.sandi');

    // Cara Menggunakan fitur Attendance List
    Route::get('/penggunaan/fitur/attendance-list', function () {
        return view('mobile.fiturAttendanceList');
    })->name('mobile.penggunaan.fitur.attendance.list');

    // Cara Menggunakan fitur Cash Advance
    Route::get('/penggunaan/fitur/cash-advance', function () {
        return view('mobile.fiturCashAdvance');
    })->name('mobile.penggunaan.fitur.cash.advance');

    // Pengertian fitur Employees
    Route::get('/penggunaan/fitur/employees', function () {
        return view('mobile.fiturEmployees');
    })->name('mobile.penggunaan.fitur.employees');

    // Tutorial Masuk Aplikasi Pehadir
    Route::get('/penggunaan/fitur/masuk-aplikasi', function () {
        return view('mobile.fiturMasukAplikasi');
    })->name('mobile.penggunaan.fitur.masuk.aplikasi');

    // Penjelasan menu Inbox
    Route::get('/penggunaan/fitur/inbox', function () {
        return view('mobile.fiturInbox');
    })->name('mobile.penggunaan.fitur.inbox');

    // Tutorial Request Izin Leave(Cuti)
    Route::get('/penggunaan/fitur/request-leave', function () {
        return view('mobile.fiturRequestLeave');
    })->name('mobile.penggunaan.fitur.request.leave');

    // Tutorial Menggunakan fitur Tracking
    Route::get('/penggunaan/fitur/tracking', function () {
        return view('mobile.fiturTracking');
    })->name('mobile.penggunaan.fitur.tracking');

    // Tutorial Mereset Password Lupa Kata Sandi
    Route::get('/penggunaan/fitur/reset/kata-sandi', function () {
        return view('mobile.fiturResetKataSandi');
    })->name('mobile.penggunaan.fitur.reset.kata.sandi');

    // Tutorial Membuat format Company Location
    Route::get('/penggunaan/fitur/company-location', function () {
        return view('mobile.fiturCompanyLocation');
    })->name('mobile.penggunaan.fitur.company.location');

    // Tutorial Request Sakit
    Route::get('/penggunaan/fitur/request-sakit', function () {
        return view('mobile.fiturRequestSakit');
    })->name('mobile.penggunaan.fitur.request.sakit');

    // Penjelasan menu Polling
    Route::get('/penggunaan/fitur/polling', function () {
        return view('mobile.fiturPolling');
    })->name('mobile.penggunaan.fitur.polling');
});
