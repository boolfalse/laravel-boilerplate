@extends('admin.layouts.app')

@push('breadcrumb')
<!-- BOF Breadcrumb -->
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href=""><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Components</a></li>
            <li class="breadcrumb-item active">Datepicker</li>
        </ol>
    </div>
</div>
<!-- EOF Breadcrumb -->
@endpush

@section('content')
<!-- BOF MAIN-BODY -->
<div class="row">

    <!-- Date Picker -->
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption">
                    <i class="ti-calendar"></i> Date Picker
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    Bootstrap-datepicker provides a flexible datepicker widget in the Bootstrap style. Visit <a href="https://github.com/uxsolutions/bootstrap-datepicker" target="_blank">Bootstrap Datepicker</a> page for more info.
                </li>
                <li class="list-group-item">
                    <div class="form-group row mt-3">
                        <label class="col-md-4 col-form-label">Input Picker</label>
                        <div class="col">
                            <div class="input-group">
                                <input type="text" class="form-control date-input">
                            </div>
                            <span class="form-text text-muted">Select Date</span>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-group row mt-3">
                        <label class="col-md-4 col-form-label">Compoment Picker</label>
                        <div class="col">
                            <div class="input-group date">
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="ti-calendar"></i>
                                                </span>
                                </div>
                            </div>
                            <span class="form-text text-muted">Select Date</span>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-group row mt-3">
                        <label class="col-md-4 col-form-label">Date Range</label>
                        <div class="col">
                            <div class="input-group daterange">
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text">to</span>
                                </div>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-group row mt-3">
                        <label class="col-md-4 col-form-label">Inline Picker</label>
                        <div class="col">
                            <div class="dateinline"></div>
                            <input type="hidden" id="dateinline">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Time Picker -->
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption">
                    <i class="ti-time"></i> Time Picker
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <p>Easily select a time for a text input using your mouse or keyboards arrow keys. Visit <a href="http://jdewit.github.io/bootstrap-timepicker/" target="_blank">Bootstrap Timepicker</a> page for more info.</p>
                    <p class="text-warning bold">Timepicker utilized Bootstrap 3 glyphicon icons that are not included with BoolFalse. Make sure to set the <span class="text-danger">icons</span> object for the up/down to fontawesome or themify icons in configuration.</p>
                    <pre class="text-carolina">
$('.timepicker').timepicker({
    icons: {
        up: 'ti-angle-up',
        down: 'ti-angle-down'
    }
});
</pre>
                </li>
                <li class="list-group-item">
                    <div class="form-group row mt-3">
                        <label class="col-md-4 col-form-label">Time Picker</label>
                        <div class="col">
                            <div class="input-group">
                                <input type="text" class="form-control timepicker1">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-group row mt-3">
                        <label class="col-md-4 col-form-label">With Seconds</label>
                        <div class="col">
                            <div class="input-group">
                                <input type="text" class="form-control timepicker2">
                                <div class="input-group-append timepicker-btn">
                                                <span class="input-group-text">
                                                    <i class="ti-time"></i>
                                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-group row mt-3">
                        <label class="col-md-4 col-form-label">24 Hour Mode</label>
                        <div class="col">
                            <div class="input-group">
                                <input type="text" class="form-control timepicker3">
                                <div class="input-group-append timepicker-btn">
                                                <span class="input-group-text">
                                                    <i class="ti-time"></i>
                                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-group row mt-3">
                        <label class="col-md-4 col-form-label">Keyboard Control</label>
                        <div class="col">
                            <div class="input-group">
                                <input type="text" class="form-control timepicker4">
                            </div>
                            <span class="form-text text-muted">Use keyboard arrows for control</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- EOF MAIN-BODY -->
@endsection
