@extends('admin.layouts.app')

@push('breadcrumb')
<!-- BOF Breadcrumb -->
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href=""><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Forms</a></li>
            <li class="breadcrumb-item active">Form Control</li>
        </ol>
    </div>
</div>
<!-- EOF Breadcrumb -->
@endpush

@section('content')
<!-- BOF MAIN-BODY -->
<div class="row">
    <!-- BOF General Form -->
    <div class="col-lg-6">
        <div class="card mb-3">
            <form role="form">
                <div class="card-header uppercase">
                    <div class="caption">
                        <i class="ti-briefcase"></i> General Form
                    </div>
                    <div class="tools">
                        <a href="#" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                        <a href="#" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">First</span>
                                <span class="input-group-text">Last</span>
                            </div>
                            <input type="text" class="form-control" placeholder="First Name">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-email"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email Address">
                            <div class="input-group-append">
                                <span class="input-group-text">@example.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-carolina"><i class="ti-user text-light"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-carolina"><i class="ti-lock text-light"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Mobile Number">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="ti-mobile"></i></span>
                            </div>
                        </div>
                        <span class="form-text text-muted">Add helper text with <code>.form-text</code></span>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="form-group row">
                            <div class="col">
                                Checkboxes
                                <div class="form-checkbox">
                                    <label>
                                        <input type="checkbox" name="checkbox1">
                                        <span class="checkmark"><i class="fa fa-check"></i></span>
                                        Checkbox 1
                                    </label>
                                </div>
                                <div class="form-checkbox">
                                    <label>
                                        <input type="checkbox" name="checkbox2">
                                        <span class="checkmark"><i class="fa fa-check"></i></span>
                                        Checkbox 2
                                    </label>
                                </div>
                                <div class="form-checkbox">
                                    <label>
                                        <input type="checkbox" name="checkbox3">
                                        <span class="checkmark"><i class="fa fa-check"></i></span>
                                        Checkbox 3
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                Radios
                                <div class="form-radio">
                                    <label>
                                        <input type="radio" name="radio1">
                                        <span class="radiomark"><i class="fa fa-circle"></i></span> Radio 1
                                    </label>
                                </div>
                                <div class="form-radio radio-inline">
                                    <label>
                                        <input type="radio" name="radio1">
                                        <span class="radiomark"><i class="fa fa-circle"></i></span> Radio 2
                                    </label>
                                </div>
                                <div class="form-radio radio-inline">
                                    <label>
                                        <input type="radio" name="radio1">
                                        <span class="radiomark"><i class="fa fa-circle"></i></span> Radio 3
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                Inline Checkboxes
                                <div class="form-checkbox">
                                    <label class="mr-3">
                                        <input type="checkbox" name="checkbox4">
                                        <span class="checkmark"><i class="fa fa-check"></i></span>
                                        Checkbox 4
                                    </label>
                                    <label class="mr-3">
                                        <input type="checkbox" name="checkbox5">
                                        <span class="checkmark"><i class="fa fa-check"></i></span>
                                        Checkbox 5
                                    </label>
                                    <label class="mr-3">
                                        <input type="checkbox" name="checkbox6">
                                        <span class="checkmark"><i class="fa fa-check"></i></span>
                                        Checkbox 6
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                Inline Radios
                                <div class="form-radio">
                                    <label class="mr-3">
                                        <input type="radio" name="radio2">
                                        <span class="radiomark"><i class="fa fa-circle"></i></span> Radio 1
                                    </label>
                                    <label class="mr-3">
                                        <input type="radio" name="radio2">
                                        <span class="radiomark"><i class="fa fa-circle"></i></span> Radio 2
                                    </label>
                                    <label class="mr-3">
                                        <input type="radio" name="radio2">
                                        <span class="radiomark"><i class="fa fa-circle"></i></span> Radio 3
                                    </label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">
                            <label>Disabled Input</label>
                            <input type="text" class="form-control" placeholder="Disabled Input" disabled>
                        </div>
                        <div class="form-group">
                            <label>Disabled Select Menu</label>
                            <select class="form-control" disabled>
                                <option>Disabled Select</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Disabled Textarea</label>
                            <textarea class="form-control" placeholder="Disabled textarea input" disabled></textarea>
                        </div>
                        <div class="form-checkbox">
                            <label>
                                <input type="checkbox" name="disabled-checkbox" disabled>
                                <span class="checkmark"><i class="fa fa-check"></i></span>
                                Disabled Checkbox
                            </label>
                        </div>
                        <div class="form-radio">
                            <label class="mr-3">
                                <input type="radio" name="radio2" disabled>
                                <span class="radiomark"><i class="fa fa-circle"></i></span> Radio 1
                            </label>
                            <label class="mr-3">
                                <input type="radio" name="radio2" disabled>
                                <span class="radiomark"><i class="fa fa-circle"></i></span> Radio 2
                            </label>
                            <label class="mr-3">
                                <input type="radio" name="radio2" disabled>
                                <span class="radiomark"><i class="fa fa-circle"></i></span> Radio 3
                            </label>
                        </div>
                    </li>
                </ul>
                <div class="card-footer text-right">
                    <a href="#" class="btn btn-flat btn-primary"><i class="ti-face-smile"></i> Submit</a>
                    <a href="#" class="btn btn-flat btn-secondary"><i class="ti-face-sad"></i> Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <!-- EOF General Form -->
    <!-- BOF Horizontal Form -->
    <div class="col-lg-6">
        <div class="card mb-3">
            <form role="form">
                <div class="card-header uppercase">
                    <div class="caption">
                        <i class="ti-briefcase"></i> Horizontal Form
                    </div>
                    <div class="tools">
                        <a href="#" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                        <a href="#" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Create horizontal forms with the grid by adding the <code>.row</code> class to
                        form groups and using the <code>.col-*-*</code> classes to specify the width of your labels and
                        controls. Be sure to add <code>.col-form-label</code> to your labels as well so they’re
                        vertically centered with their associated form controls.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Full Name</label>
                            <div class="col">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Email</label>
                            <div class="input-group col">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-email"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Username</label>
                            <div class="input-group col">
                                <input type="text" class="form-control" placeholder="Username">
                                <div class="input-group-append">
                                                <span class="input-group-text bg-danger"><span
                                                        class="text-light">Required</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Password</label>
                            <div class="input-group col">
                                <input type="password" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                                <span class="input-group-text bg-danger"><i
                                                        class="fa fa-asterisk text-light"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Plain Text</label>
                            <div class="col">
                                <span class="form-control-plaintext">email@example.com</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Address</label>
                            <div class="input-group col">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Street</span>
                                </div>
                                <input type="text" class="form-control" placeholder="12345 My Street">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="input-group col offset-md-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">City</span>
                                </div>
                                <input type="text" class="form-control" placeholder="City Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="input-group col offset-md-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">State</span>
                                </div>
                                <input type="text" class="form-control" placeholder="NY">
                            </div>
                            <div class="input-group col">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Zip</span>
                                </div>
                                <input type="text" class="form-control" placeholder="00000">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="input-group col offset-md-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Country</span>
                                </div>
                                <input type="text" class="form-control" placeholder="United States">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <label class="col-md-3 col-form-label">Checkboxes</label>
                            <div class="col">
                                <div class="form-checkbox">
                                    <label>
                                        <input type="checkbox" name="checkbox7">
                                        <span class="checkmark"><i class="fa fa-check"></i></span>
                                        Checkbox 7
                                    </label>
                                </div>
                                <div class="form-checkbox">
                                    <label>
                                        <input type="checkbox" name="checkbox8" checked>
                                        <span class="checkmark"><i class="fa fa-check"></i></span>
                                        Checkbox 8
                                    </label>
                                </div>
                                <div class="form-checkbox">
                                    <label>
                                        <input type="checkbox" name="checkbox9">
                                        <span class="checkmark"><i class="fa fa-check"></i></span>
                                        Checkbox 9
                                    </label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <label class="col-md-3 col-form-label">Inline Check</label>
                            <div class="col">
                                <div class="form-checkbox">
                                    <label class="mr-3">
                                        <input type="checkbox" name="checkbox10">
                                        <span class="checkmark"><i class="fa fa-check"></i></span>
                                        Check 10
                                    </label>
                                    <label class="mr-3">
                                        <input type="checkbox" name="checkbox11">
                                        <span class="checkmark"><i class="fa fa-check"></i></span>
                                        Check 11
                                    </label>
                                    <label class="mr-3">
                                        <input type="checkbox" name="checkbox12" checked>
                                        <span class="checkmark"><i class="fa fa-check"></i></span>
                                        Check 12
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">Inline Radios</label>
                            <div class="col">
                                <div class="form-radio">
                                    <label class="mr-3">
                                        <input type="radio" name="radio4">
                                        <span class="radiomark"><i class="fa fa-circle"></i></span> Radio 1
                                    </label>
                                    <label class="mr-3">
                                        <input type="radio" name="radio4" checked>
                                        <span class="radiomark"><i class="fa fa-circle"></i></span> Radio 2
                                    </label>
                                    <label class="mr-3">
                                        <input type="radio" name="radio4">
                                        <span class="radiomark"><i class="fa fa-circle"></i></span> Radio 3
                                    </label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">BS-Select</label>
                            <div class="col">
                                <select class="form-control selectpicker">
                                    <option>Bootstrap-Select Plugin</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Multi-Select</label>
                            <div class="col">
                                <select multiple class="form-control">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                    <option>Option 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Textarea</label>
                            <div class="col">
                                <textarea class="form-control" placeholder="Hello World!"></textarea>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Agreement</label>
                            <div class="col">
                                            <span class="form-control-plaintext">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                minim veniam.</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="input-group col offset-md-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="">
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Type your name to sign">
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="card-footer">
                    <div class="row">
                        <div class="col offset-md-3 pl-3">
                            <a href="#" class="btn btn-flat btn-primary"><i class="ti-face-smile"></i> Submit</a>
                            <a href="#" class="btn btn-flat btn-secondary"><i class="ti-face-sad"></i> Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- EOF Horizontal Form -->
</div>
<div class="row">
    <!-- BOF Plaintext Form -->
    <div class="col-lg-6">
        <div class="card mb-3">
            <form action="">
                <div class="card-header uppercase">
                    <div class="caption">
                        <i class="ti-briefcase"></i> Plain Text Form
                    </div>
                    <div class="tools">
                        <a href="#" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                        <a href="#" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        If you want to have <code>input</code> elements in your form styled as plain text, use the
                        <code>.form-control-plaintext</code> class to remove the default form field styling and preserve
                        the correct margin and padding.
                    </p>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-right">Client's Name</label>
                        <div class="col">
                            <input type="text" class="form-control-plaintext" value="Johnathan Doester">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-right">Email</label>
                        <div class="col">
                            <input type="text" class="form-control-plaintext" value="j.doester@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-right">Address</label>
                        <div class="col">
                            <input type="text" class="form-control-plaintext" value="12345 My Street">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4 offset-md-3">
                            <input type="text" class="form-control-plaintext" value="Westminster">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control-plaintext" value="NY">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control-plaintext" value="98765">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-right">Username</label>
                        <div class="col">
                            <input type="text" class="form-control-plaintext" value="mrdoester1990">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-right">Password</label>
                        <div class="col">
                            <input type="password" class="form-control-plaintext" value="123456789">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-right">Comments</label>
                        <div class="col">
                                        <textarea
                                            class="form-control-plaintext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col offset-md-3 pl-3">
                            <button type="submit" class="btn btn-primary"><i class="ti-new-window"></i> Submit</button>
                            <a href="#" class="btn btn-secondary"><i class="ti-close"></i> Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- EOF Plaintext Form -->
    <!-- BOF Sizing -->
    <div class="col-lg-6">
        <div class="card mb-3">
            <form role="form">
                <div class="card-header uppercase">
                    <div class="caption">
                        <i class="ti-briefcase"></i> Sizing
                    </div>
                    <div class="tools">
                        <a href="#" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                        <a href="#" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Set heights using classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.
                        Use <code>.col-form-label-sm</code> or <code>.col-form-label-lg</code> to your
                        <code>&lt;label&gt;</code> or <code>&lt;legend&gt;</code> to correctly follow the size of
                        <code>.form-control-lg</code> and <code>.form-control-sm</code>.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label-sm">Small</label>
                            <div class="col">
                                <input type="text" class="form-control form-control-sm" placeholder=".form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Default</label>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Default input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label-lg">Large</label>
                            <div class="col">
                                <input type="text" class="form-control form-control-lg" placeholder=".form-control-lg">
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label-sm">Small</label>
                            <div class="col">
                                <select class="form-control form-control-sm">
                                    <option>Small Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Default</label>
                            <div class="col">
                                <select class="form-control">
                                    <option>Default Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label-lg">Large</label>
                            <div class="col">
                                <select class="form-control form-control-lg">
                                    <option>Large Select</option>
                                </select>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="card-footer text-right">
                    <a href="#" class="btn btn-primary"><i class="ti-new-window"></i> Submit</a>
                    <a href="#" class="btn btn-secondary"><i class="ti-close"></i> Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <!-- EOF Sizing -->
</div>
<div class="row">
    <!-- BOF Validation Feedback -->
    <div class="col-lg-6">
        <div class="card mb-3">
            <form class="validate1" novalidate>
                <div class="card-header uppercase">
                    <div class="caption">
                        <i class="ti-briefcase"></i> Validation
                    </div>
                    <div class="tools">
                        <a href="#" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                        <a href="#" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">For custom Bootstrap form validation messages, you’ll need to add the
                        <code>novalidate</code> boolean attribute to your form. This disables the browser default
                        feedback tooltips, but still provides access to the form validation APIs in JavaScript.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Name</label>
                            <div class="input-group col">
                                <input type="text" class="form-control" placeholder="Name" required>
                                <div class="input-group-append">
                                                <span class="input-group-text bg-danger"><i
                                                        class="fa fa-asterisk text-light"></i></span>
                                </div>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Name is required</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Email</label>
                            <div class="input-group col">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-email"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Email Address" required>
                                <div class="input-group-append">
                                                <span class="input-group-text bg-danger"><i
                                                        class="fa fa-asterisk text-light"></i></span>
                                </div>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Email is required</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Username</label>
                            <div class="input-group col">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username" required>
                                <div class="input-group-append">
                                                <span class="input-group-text bg-danger"><i
                                                        class="fa fa-asterisk text-light"></i></span>
                                </div>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Username is required</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Password</label>
                            <div class="input-group col">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Password" required>
                                <div class="input-group-append">
                                                <span class="input-group-text bg-danger"><i
                                                        class="fa fa-asterisk text-light"></i></span>
                                </div>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Password is required</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" required>
                                    <label class="form-check-label">
                                        Agree to Terms & Conditions
                                    </label>
                                    <div class="invalid-feedback">Must agree to terms & conditions</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="card-footer text-right">
                    <button class="btn btn-primary"><i class="ti-new-window"></i> Click To Validate</button>
                    <a href="#" class="btn btn-secondary"><i class="ti-close"></i> Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <!-- EOF Validation Feedback -->
    <!-- BOF Validation Tooltip -->
    <div class="col-lg-6">
        <div class="card mb-3">
            <form class="validate2" novalidate>
                <div class="card-header uppercase">
                    <div class="caption">
                        <i class="ti-briefcase"></i> Validation Tooltips
                    </div>
                    <div class="tools">
                        <a href="#" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                        <a href="#" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Swap the <code>.{valid|invalid}-feedback</code> classes for
                        <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled
                        tooltip. Be sure to have a parent with <code>position: relative</code> on it for tooltip
                        positioning.</p>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Full Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Full Name" required>
                            <div class="invalid-tooltip">Name cannot be empty</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email Address" required>
                            <div class="input-group-append">
                                <span class="input-group-text">@example.com</span>
                            </div>
                            <div class="invalid-tooltip">Please provide a valid email</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-carolina"><i class="ti-user text-light"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" required>
                            <div class="invalid-tooltip">Choose a unique username</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary"><i class="ti-new-window"></i> Click To
                        Validate</button>
                    <a href="#" class="btn btn-secondary"><i class="ti-close"></i> Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <!-- EOF Validation Tooltip -->
</div>
<div class="row">
    <!-- BOF Input Group -->
    <div class="col-lg-12">
        <div class="card mb-3">
            <div class="card-header uppercase">
                <div class="caption">
                    <i class="ti-briefcase"></i> Input Group
                </div>
                <div class="tools">
                    <a href="#" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                    <a href="#" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <!-- Left column -->
                        <div class="col-lg-6">
                            <h5 class="text-carolina mb-3">Basic Examples</h5>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                       aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username"
                                       aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                </div>
                            </div>

                            <label for="basic-url">Personal URL</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                                <span class="input-group-text bg-carolina text-white"
                                                      id="basic-addon3">https://example.com/users/</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-carolina text-white">$</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">With textarea</span>
                                </div>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>

                            <h5 class="text-carolina mb-3">Multiple Inputs and Addons</h5>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">First and last name</span>
                                </div>
                                <input type="text" class="form-control">
                                <input type="text" class="form-control">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-carolina text-white">$</span>
                                    <span class="input-group-text">0.00</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-carolina text-white">$</span>
                                    <span class="input-group-text">0.00</span>
                                </div>
                            </div>

                            <h5 class="text-carolina">Buttons with Dropdowns</h5>
                            <p class="mb-3">Add <code>data-display="static"</code> attribute to dropdown button to fix
                                the position caused by popper.js</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-carolina dropdown-toggle" type="button"
                                            data-toggle="dropdown">Dropdown</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                <div class="input-group-append">
                                    <button class="btn btn-carolina dropdown-toggle" type="button"
                                            data-toggle="dropdown">Dropdown</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>

                            <h5 class="text-carolina mb-3">Custom File Input</h5>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ti-export"></i></span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <label class="custom-file-label">Choose file</label>
                                    <input type="file" class="custom-file-input">
                                </div>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-carolina"><i class="fa fa-upload"></i>
                                        Upload</button>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-outline-secondary"><i class="fa fa-upload"></i>
                                        Button</button>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-carolina"><i class="ti-export"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- Right column -->
                        <div class="col-lg-6">
                            <h5 class="text-carolina mb-3">Sizing & Border Color</h5>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-carolina border-carolina text-white">Small</span>
                                </div>
                                <input type="text" class="form-control border-carolina" placeholder=".input-group-sm">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-orchid border-orchid text-white">Default</span>
                                </div>
                                <input type="text" class="form-control border-orchid" placeholder="default size">
                            </div>
                            <div class="input-group input-group-lg mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-taffy border-taffy text-white">Large</span>
                                </div>
                                <input type="text" class="form-control border-taffy" placeholder=".input-group-lg">
                            </div>

                            <h5 class="text-carolina mb-3">Checkboxes and Radios</h5>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-carolina">
                                        <input type="checkbox" name="">
                                    </div>
                                </div>
                                <input type="text" class="form-control border-carolina" placeholder=".border-carolina">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-tortilla">
                                        <input type="radio" name="">
                                    </div>
                                </div>
                                <input type="text" class="form-control border-tortilla" placeholder=".border-tortilla">
                            </div>

                            <h5 class="text-carolina mb-3">Button Addons</h5>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-success" type="button">Button</button>
                                </div>
                                <input type="text" class="form-control" placeholder=".btn-success">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control border-orchid"
                                       placeholder=".btn-outline-orchid, .border-orchid">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-orchid" type="button">Button</button>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-carolina" type="button">Submit</button>
                                    <button class="btn btn-secondary" type="button">Cancel</button>
                                </div>
                                <input type="text" class="form-control" placeholder="">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Voter's name">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button"><i
                                            class="fa fa-thumbs-up"></i></button>
                                    <button class="btn btn-bubblegum" type="button"><i
                                            class="fa fa-thumbs-down"></i></button>
                                </div>
                            </div>

                            <h5 class="text-carolina mb-3">Segmented Buttons</h5>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-carolina">Action</button>
                                    <button type="button"
                                            class="btn btn-outline-carolina dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <input type="text" class="form-control border-carolina">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control border-taffy">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-taffy">Submit</button>
                                    <button type="button" class="btn btn-taffy dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>

                            <h5 class="text-carolina mb-3">Custom Select</h5>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text"><i class="ti-layers-alt"></i></label>
                                </div>
                                <select class="custom-select">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <select class="custom-select">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text">Options</label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-orchid" type="button"><i class="ti-layers-alt"></i>
                                        Button</button>
                                </div>
                                <select class="custom-select">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect04"
                                        aria-label="Example select with button addon">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- EOF Input Group -->
</div>
<!-- EOF MAIN-BODY -->
@endsection
