<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
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
});
