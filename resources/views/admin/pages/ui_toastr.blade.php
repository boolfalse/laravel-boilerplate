@extends('admin.layouts.app')

@push('breadcrumb')
<!-- BOF Breadcrumb -->
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href=""><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">UI Elements</a></li>
            <li class="breadcrumb-item active">Toastr</li>
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
            <div class="card-header">
                <div class="caption uppercase">
                    <i class="ti-briefcase"></i> Toastr Notification
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <p>Toastr is a Javascript library for Gnome / Growl type non-blocking notifications. jQuery is required. The
                        goal is to create a simple core library that can be customized and extended.</p>
                    <p>For more information check out Toastr at <a href="https://codeseven.github.io/toastr/"
                                                                   target="_blank">https://codeseven.github.io/toastr/</a>.</p>
                </li>
            </ul>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" type="text" class="form-control" value="Hello World!" />
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message"
                                      rows="3">Welcome to the world of thoughts. Where ideas can flourish within your mind.</textarea>
                        </div>
                        <div class="checkbox">
                            <label class="checkbox" for="closeButton">
                                <input id="closeButton" type="checkbox" value="checked" class="input-mini" checked /> Close
                                Button
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="checkbox" for="addBehaviorOnToastClick">
                                <input id="addBehaviorOnToastClick" type="checkbox" value="checked" class="input-mini" /> Add
                                behavior on toast click
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="checkbox" for="debugInfo">
                                <input id="debugInfo" type="checkbox" value="checked" class="input-mini" /> Debug
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="checkbox" for="progressBar">
                                <input id="progressBar" type="checkbox" value="checked" class="input-mini" checked /> Progress
                                Bar
                            </label>
                        </div>
                        <div class="checkbox">
                            <label class="checkbox" for="preventDuplicates">
                                <input id="preventDuplicates" type="checkbox" value="checked" class="input-mini" /> Prevent
                                Duplicates
                            </label>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group" id="toastTypeGroup">
                            <label>Toast Type</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="toasts" value="success" checked /> Success
                                </label>
                            </div>
                            <div class="radio">
                                <label class="radio">
                                    <input type="radio" name="toasts" value="info" /> Info
                                </label>
                            </div>
                            <div class="radio">
                                <label class="radio">
                                    <input type="radio" name="toasts" value="warning" /> Warning
                                </label>
                            </div>
                            <div class="radio">
                                <label class="radio">
                                    <input type="radio" name="toasts" value="error" /> Error
                                </label>
                            </div>
                        </div>
                        <div class="form-group" id="positionGroup">
                            <label>Position</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="positions" value="toast-top-right" checked /> Top Right
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="positions" value="toast-bottom-right" /> Bottom Right
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="positions" value="toast-bottom-left" /> Bottom Left
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="positions" value="toast-top-left" /> Top Left
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="positions" value="toast-top-full-width" /> Top Full Width
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="positions" value="toast-bottom-full-width" /> Bottom Full Width
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="positions" value="toast-top-center" /> Top Center
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="positions" value="toast-bottom-center" /> Bottom Center
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="showEasing">Show Easing</label>
                            <input id="showEasing" type="text" placeholder="swing, linear" class="form-control" value="swing" />
                        </div>
                        <div class="form-group">

                            <label for="hideEasing">Hide Easing</label>
                            <input id="hideEasing" type="text" placeholder="swing, linear" class="form-control"
                                   value="linear" />
                        </div>
                        <div class="form-group">

                            <label for="showMethod">Show Method</label>
                            <input id="showMethod" type="text" placeholder="show, fadeIn, slideDown" class="form-control"
                                   value="fadeIn" />
                        </div>
                        <div class="form-group">

                            <label for="hideMethod">Hide Method</label>
                            <input id="hideMethod" type="text" placeholder="hide, fadeOut, slideUp" class="form-control"
                                   value="fadeOut" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="showDuration">Show Duration</label>
                            <input id="showDuration" type="text" placeholder="ms" class="form-control" value="400" />
                        </div>
                        <div class="form-group">
                            <label for="hideDuration">Hide Duration</label>
                            <input id="hideDuration" type="text" placeholder="ms" class="form-control" value="1000" />
                        </div>
                        <div class="form-group">
                            <label for="timeOut">Time out</label>
                            <input id="timeOut" type="text" placeholder="ms" class="form-control" value="7000" />
                        </div>
                        <div class="form-group">
                            <label for="extendedTimeOut">Extended time out</label>
                            <input id="extendedTimeOut" type="text" placeholder="ms" class="form-control" value="1000" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-primary" id="showtoast">Show Toast</button>
                        <button type="button" class="btn btn-outline-secondary" id="cleartoasts">Clear Toasts</button>
                        <button type="button" class="btn btn-outline-secondary" id="clearlasttoast">Clear Last Toast</button>
                        <button type="button" class="btn btn-outline-secondary" id="showsimple">Show simple options</button>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-dark text-light">
                <div class="row">
                    <div class="col">
                        <p>Toastr Options in JSON</p>
                        <pre id="toastrOptions" class="text-lime p-m"></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EOF MAIN-BODY -->
@endsection
