@extends('admin.layouts.app')

@push('breadcrumb')
<!-- BOF Breadcrumb -->
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href=""><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item active">FullCalendar</li>
        </ol>
    </div>
</div>
<!-- EOF Breadcrumb -->
@endpush

@section('content')
<!-- BOF MAIN-BODY -->
<div class="row">
    <div class="col-md-12 mb-3">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">FullCalendar</h2>
                <p class="card-text">FullCalendar is great for displaying events, but it isn't a complete solution for event content-management. Beyond dragging an event to a different time/day, you cannot change an event's name or other associated data. It is up to you to add this functionality through FullCalendar's API.</p>
                <p class="card-text">Visit <a href="https://fullcalendar.io/" target="_blank">FullCalender Website</a> for more information and docs.</p>
            </div>
        </div>
    </div>
    <div class="col-md-12" id="calendar"></div>
</div>
<!-- EOF MAIN-BODY -->
@endsection
