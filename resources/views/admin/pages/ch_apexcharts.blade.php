@extends('admin.layouts.app')

@push('breadcrumb')
<!-- BOF Breadcrumb -->
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href=""><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Charts</a></li>
            <li class="breadcrumb-item active">Apex Charts</li>
        </ol>
    </div>
</div>
<!-- EOF Breadcrumb -->
@endpush

@section('content')
<!-- BOF MAIN-BODY -->
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-body">
                <p>ApexCharts is a modern charting library that helps developers to create beautiful and interactive visualizations for web pages. It is an open-source project licensed under MIT and is free to use in commercial applications.</p>
                <p>For more information check out ApexCharts at <a href="https://apexcharts.com/" target="_blank">https://apexcharts.com/</a>.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-body" id="chart1"></div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-body" id="chart2"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-body" id="chart3"></div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-body" id="chart4"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-body" id="chart5"></div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-body" id="chart6"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-body" id="chart7"></div>
        </div>
    </div>
</div>
<!-- EOF MAIN-BODY -->
@endsection
