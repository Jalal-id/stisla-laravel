@extends('layouts.main')

@section('container')
<div class="section-header">
    <h1>Toastr</h1>
    <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Modules</a></div>
    <div class="breadcrumb-item">Toastr</div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">Toastr</h2>
    <p class="section-lead">
    We use 'iziToast' made by @Dolce. You can check the full documentation <a href="https://izitoast.marcelodolza.com/">here</a>.
    </p>
    <div class="row">
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card">
        <div class="card-body text-center">
            <div class="mb-2">Info Message</div>
            <button class="btn btn-primary" id="toastr-1">Launch</button>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card">
        <div class="card-body text-center">
            <div class="mb-2">Success Message</div>
            <button class="btn btn-primary" id="toastr-2">Launch</button>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card">
        <div class="card-body text-center">
            <div class="mb-2">Warning Message</div>
            <button class="btn btn-primary" id="toastr-3">Launch</button>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card">
        <div class="card-body text-center">
            <div class="mb-2">Error Message</div>
            <button class="btn btn-primary" id="toastr-4">Launch</button>
        </div>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card">
        <div class="card-body text-center">
            <div class="mb-2">Toastr Right Bottom</div>
            <button class="btn btn-primary" id="toastr-5">Launch</button>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card">
        <div class="card-body text-center">
            <div class="mb-2">Toastr Center Bottom</div>
            <button class="btn btn-primary" id="toastr-6">Launch</button>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card">
        <div class="card-body text-center">
            <div class="mb-2">Toastr Left Bottom</div>
            <button class="btn btn-primary" id="toastr-7">Launch</button>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card">
        <div class="card-body text-center">
            <div class="mb-2">Toastr Top Center</div>
            <button class="btn btn-primary" id="toastr-8">Launch</button>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- CSS Libraries -->
<link rel="stylesheet" href="../vendors/izitoast/dist/css/iziToast.min.css">
<!-- JS Libraies -->
<script src="../vendors/izitoast/dist/js/iziToast.min.js"></script>
<!-- Page Specific JS File -->
<script src="../assets/js/page/modules-toastr.js"></script>
@endsection