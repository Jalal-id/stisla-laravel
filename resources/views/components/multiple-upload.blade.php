@extends('layouts.main')

@section('container')
<div class="section-header">
    <h1>Multiple Upload</h1>
    <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Components</a></div>
    <div class="breadcrumb-item">Multiple Upload</div>
    </div>
</div>

<div class="section-body">
    <h2 class="section-title">Multiple Upload</h2>
    <p class="section-lead">
    We use 'Dropzone.js' made by @Dropzone. You can check the full documentation <a href="http://www.dropzonejs.com/">here</a>.
    </p>

    <div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h4>Multiple Upload</h4>
        </div>
        <div class="card-body">
            <form action="#" class="dropzone" id="mydropzone">
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- CSS Libraries -->
<link rel="stylesheet" href="/vendors/dropzone/dist/min/dropzone.min.css">
<!-- JS Libraies -->
<script src="/vendors/dropzone/dist/min/dropzone.min.js"></script>
<!-- Page Specific JS File -->
<script src="/assets/js/page/components-multiple-upload.js"></script>
@endsection