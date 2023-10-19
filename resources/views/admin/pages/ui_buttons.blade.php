@extends('admin.layouts.app')

@push('breadcrumb')
<!-- BOF Breadcrumb -->
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href=""><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">UI Elements</a></li>
            <li class="breadcrumb-item active">Buttons</li>
        </ol>
    </div>
</div>
<!-- EOF Breadcrumb -->
@endpush

@section('content')
<!-- BOF MAIN-BODY -->
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header uppercase">
                <div class="caption text-primary">
                    <i class="ti-briefcase"></i> Custom Bootstrap Buttons
                </div>
                <div class="tools">
                    <a href="#" class="btn btn-outline-primary"><i class="ti-pencil-alt"></i></a>
                    <a href="#" class="btn btn-outline-primary"><i class="ti-settings"></i></a>
                </div>
            </div>
            <div class="card-body">
                <p><strong>Custom Bootstrap Buttons</strong><br>See Colors Page for additonal colors that can apply to
                    button.</p>
                <button type="button" class="btn mb-1 btn-primary">Primary</button>
                <button type="button" class="btn mb-1 btn-secondary">Secondary</button>
                <button type="button" class="btn mb-1 btn-success">Success</button>
                <button type="button" class="btn mb-1 btn-danger">Danger</button>
                <button type="button" class="btn mb-1 btn-warning">Warning</button>
                <button type="button" class="btn mb-1 btn-info">Info</button>
                <button type="button" class="btn mb-1 btn-light">Light</button>
                <button type="button" class="btn mb-1 btn-dark">Dark</button>
                <button type="button" class="btn mb-1 btn-azure">Azure</button>
                <button type="button" class="btn mb-1 btn-jade">Jade</button>
                <button type="button" class="btn mb-1 btn-orchid">Orchid</button>
                <button type="button" class="btn mb-1 btn-chili">Chili</button>
                <button type="button" class="btn mb-1 btn-pumpkin">Pumpkin</button>
                <button type="button" class="btn mb-1 btn-bubblegum">Bubblegum</button>
                <button type="button" class="btn mb-1 btn-mustard">Mustard</button>
                <button type="button" class="btn mb-1 btn-caramel">Caramel</button>

                <p class="mt-4"><strong>Outline Buttons</strong><br> Replace the default modifier classes with the
                    <code>.btn-outline-*</code> ones to remove all background images and colors on any button.</p>
                <button type="button" class="btn mb-1 btn-outline-primary">Primary</button>
                <button type="button" class="btn mb-1 btn-outline-secondary">Secondary</button>
                <button type="button" class="btn mb-1 btn-outline-success">Success</button>
                <button type="button" class="btn mb-1 btn-outline-danger">Danger</button>
                <button type="button" class="btn mb-1 btn-outline-warning">Warning</button>
                <button type="button" class="btn mb-1 btn-outline-info">Info</button>
                <button type="button" class="btn mb-1 btn-outline-light">Light</button>
                <button type="button" class="btn mb-1 btn-outline-dark">Dark</button>
                <button type="button" class="btn mb-1 btn-outline-azure">Azure</button>
                <button type="button" class="btn mb-1 btn-outline-jade">Jade</button>
                <button type="button" class="btn mb-1 btn-outline-orchid">Orchid</button>
                <button type="button" class="btn mb-1 btn-outline-chili">Chili</button>
                <button type="button" class="btn mb-1 btn-outline-pumpkin">Pumpkin</button>
                <button type="button" class="btn mb-1 btn-outline-bubblegum">Bubblegum</button>
                <button type="button" class="btn mb-1 btn-outline-mustard">Mustard</button>
                <button type="button" class="btn mb-1 btn-outline-caramel">Caramel</button>

            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-3">
            <div class="card-header uppercase">
                <div class="caption text-primary">
                    <i class="ti-briefcase"></i> Sizes - States - Block
                </div>
                <div class="tools">
                    <a href="#" class="btn btn-outline-primary"><i class="ti-pencil-alt"></i></a>
                    <a href="#" class="btn btn-outline-primary"><i class="ti-settings"></i></a>
                </div>
            </div>
            <div class="card-body">
                <p>Add <code>.btn-lg</code> or <code>.btn-sm</code> for additional sizes.</p>
                <button type="button" class="btn btn-lg btn-primary mb-1">Large Button</button>
                <button type="button" class="btn btn-lg btn-outline-primary mb-1">Large Button</button>
                <br>
                <button type="button" class="btn btn-primary mb-1">Default Button</button>
                <button type="button" class="btn btn-outline-primary mb-1">Default Button</button>
                <br>
                <button type="button" class="btn btn-sm btn-primary mb-1">Small Button</button>
                <button type="button" class="btn btn-sm btn-outline-primary mb-1">Small Button</button>

                <p class="mt-4"><strong>Active & Disabled States</strong></p>
                <button type="button" class="btn mb-1 btn-primary active">Active Primary</button>
                <button type="button" class="btn mb-1 btn-danger active">Active Danger</button>
                <button type="button" class="btn mb-1 btn-warning disabled">Disabled Warning</button>
                <button type="button" class="btn mb-1 btn-info disabled">Disabled Info</button>

                <p class="mt-4"><strong>Block Level Button</strong></p>
                <button type="button" class="btn mb-1 btn-info btn-block">Block Button (.btn-block)</button>
                <button type="button" class="btn mb-1 btn-outline-secondary btn-block">Block Button
                    (.btn-block)</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header uppercase">
                <div class="caption text-primary">
                    <i class="ti-briefcase"></i> Round Buttons
                </div>
                <div class="tools">
                    <a href="#" class="btn btn-round btn-outline-primary"><i class="ti-pencil-alt"></i></a>
                    <a href="#" class="btn btn-round btn-outline-primary"><i class="ti-settings"></i></a>
                </div>
            </div>
            <div class="card-body">
                <p>
                    <strong>Round Buttons</strong><br>
                    Add <code>.btn-round</code> to button or <code>.btn-group-round</code> to button group.
                </p>
                <button type="button" class="btn btn-round mb-1 btn-primary">Primary</button>
                <button type="button" class="btn btn-round mb-1 btn-secondary">Secondary</button>
                <button type="button" class="btn btn-round mb-1 btn-success">Success</button>
                <button type="button" class="btn btn-round mb-1 btn-danger">Danger</button>
                <button type="button" class="btn btn-round mb-1 btn-warning">Warning</button>
                <button type="button" class="btn btn-round mb-1 btn-info">Info</button>
                <br>
                <button type="button" class="btn btn-round mb-1 btn-outline-primary">Primary</button>
                <button type="button" class="btn btn-round mb-1 btn-outline-secondary">Secondary</button>
                <button type="button" class="btn btn-round mb-1 btn-outline-success">Success</button>
                <button type="button" class="btn btn-round mb-1 btn-outline-danger">Danger</button>
                <button type="button" class="btn btn-round mb-1 btn-outline-warning">Warning</button>
                <button type="button" class="btn btn-round mb-1 btn-outline-info">Info</button>

                <p class="mt-3"><strong>Sizing</strong></p>
                <button type="button" class="btn btn-round btn-lg mb-1 btn-taffy"><i class="ti-save"></i> Large
                    Button</button>
                <button type="button" class="btn btn-round btn-lg mb-1 btn-outline-taffy"><i class="ti-save"></i> Large
                    Button</button>
                <br>
                <button type="button" class="btn btn-round mb-1 btn-orchid"><i class="ti-user"></i> Default
                    Button</button>
                <button type="button" class="btn btn-round mb-1 btn-outline-orchid"><i class="ti-user"></i> Default
                    Button</button>
                <br>
                <button type="button" class="btn btn-round btn-sm mb-1 btn-tortilla"><i class="ti-email"></i> Small
                    Button</button>
                <button type="button" class="btn btn-round btn-sm mb-1 btn-outline-tortilla"><i class="ti-email"></i>
                    Small Button</button>

                <p class="mt-3"><strong>Common Buttons</strong></p>
                <button type="button" class="btn btn-round mb-1 btn-success"><i class="ti-location-arrow"></i>
                    Submit</button>
                <button type="button" class="btn btn-round mb-1 btn-primary"><i class="ti-pencil-alt"></i> Edit</button>
                <button type="button" class="btn btn-round mb-1 btn-secondary"><i class="ti-close"></i> Cancel</button>
                <button type="button" class="btn btn-round mb-1 btn-danger"><i class="ti-trash"></i> Delete</button>
                <button type="button" class="btn btn-round mb-1 btn-warning"><i class="ti-export"></i> Upload</button>
                <button type="button" class="btn btn-round mb-1 btn-outline-secondary"><i
                        class="ti-pencil-alt"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-outline-secondary"><i class="ti-trash"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-outline-secondary"><i class="ti-user"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-outline-secondary"><i class="ti-email"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-outline-secondary"><i class="ti-plus"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-outline-secondary"><i class="ti-home"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-outline-secondary"><i
                        class="ti-location-pin"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-outline-secondary"><i class="ti-lock"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-outline-secondary"><i class="ti-eye"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-outline-secondary"><i
                        class="ti-settings"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-outline-secondary"><i
                        class="ti-printer"></i></button>

                <p class="mt-3"><strong>Socials</strong></p>
                <button type="button" class="btn btn-round mb-1 btn-primary"><i class="ti-twitter"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-secondary"><i class="ti-facebook"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-success"><i class="ti-github"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-danger"><i class="ti-instagram"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-pumpkin"><i class="ti-google"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-sapphire"><i class="ti-apple"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-outline-primary"><i class="ti-twitter"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-outline-secondary"><i
                        class="ti-facebook"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-outline-success"><i class="ti-github"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-outline-danger"><i
                        class="ti-instagram"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-outline-pumpkin"><i class="ti-google"></i></button>
                <button type="button" class="btn btn-round mb-1 btn-outline-sapphire"><i class="ti-apple"></i></button>

                <p class="mt-3"><strong>Button Group</strong></p>
                <div class="btn-group btn-group-round mb-1">
                    <button type="button" class="btn btn-lg btn-secondary">Orchid</button>
                    <button type="button" class="btn btn-lg btn-secondary active">Lavender</button>
                    <button type="button" class="btn btn-lg btn-secondary">Daisy</button>
                </div>
                <div class="btn-group btn-group-round mb-1">
                    <button type="button" class="btn btn-imperial">Imperial</button>
                    <button type="button" class="btn btn-pumpkin">Pumpkin</button>
                    <button type="button" class="btn btn-bubblegum">Bubblegum</button>
                </div>
                <div class="btn-toolbar mb-1">
                    <div class="btn-group btn-group-round mr-2">
                        <button type="button" class="btn btn-primary">1</button>
                        <button type="button" class="btn btn-primary">2</button>
                        <button type="button" class="btn btn-primary active">3</button>
                        <button type="button" class="btn btn-primary">4</button>
                    </div>
                    <div class="btn-group btn-group-round mr-2">
                        <button type="button" class="btn btn-primary">5</button>
                        <button type="button" class="btn btn-primary">6</button>
                        <button type="button" class="btn btn-primary">7</button>
                    </div>
                    <div class="btn-group btn-group-round mr-2">
                        <button type="button" class="btn btn-primary"><i class="ti-angle-left"></i></button>
                        <button type="button" class="btn btn-outline-primary">1</button>
                        <button type="button" class="btn btn-outline-primary">2</button>
                        <button type="button" class="btn btn-outline-primary">3</button>
                        <button type="button" class="btn btn-outline-primary">4</button>
                        <button type="button" class="btn btn-outline-primary">5</button>
                        <button type="button" class="btn btn-primary"><i class="ti-angle-right"></i></button>
                    </div>
                </div>
                <p class="mt-3"><strong>Nesting</strong></p>
                <div class="btn-group btn-group-round mb-1">
                    <button type="button" class="btn btn-outline-primary">Home</button>
                    <button type="button" class="btn btn-outline-primary">Profile</button>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle"
                                data-toggle="dropdown">Dropdown</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Employees List</a>
                            <a class="dropdown-item" href="#">Daily Schedules</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-3">
            <div class="card-header uppercase">
                <div class="caption text-primary">
                    <i class="ti-briefcase"></i> Flat Buttons
                </div>
                <div class="tools">
                    <a href="#" class="btn btn-outline-primary"><i class="ti-pencil-alt"></i></a>
                    <a href="#" class="btn btn-outline-primary"><i class="ti-settings"></i></a>
                </div>
            </div>
            <div class="card-body">
                <p>
                    <strong>Flat Buttons</strong><br>
                    Add <code>.btn-flat</code> to button or <code>.btn-group-flat</code> to button group.
                </p>
                <button type="button" class="btn btn-flat mb-1 btn-primary">Primary</button>
                <button type="button" class="btn btn-flat mb-1 btn-secondary">Secondary</button>
                <button type="button" class="btn btn-flat mb-1 btn-success">Success</button>
                <button type="button" class="btn btn-flat mb-1 btn-danger">Danger</button>
                <button type="button" class="btn btn-flat mb-1 btn-warning">Warning</button>
                <button type="button" class="btn btn-flat mb-1 btn-info">Info</button>
                <br>
                <button type="button" class="btn btn-flat mb-1 btn-outline-primary">Primary</button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-secondary">Secondary</button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-success">Success</button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-danger">Danger</button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-warning">Warning</button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-info">Info</button>

                <p class="mt-3"><strong>Sizing</strong></p>
                <button type="button" class="btn btn-lg btn-flat mb-1 btn-success"><i class="ti-save"></i> Large
                    Button</button>
                <button type="button" class="btn btn-lg btn-flat mb-1 btn-outline-success"><i class="ti-save"></i> Large
                    Button</button>
                <br>
                <button type="button" class="btn btn-flat mb-1 btn-success"><i class="ti-user"></i> Default
                    Button</button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-success"><i class="ti-user"></i> Default
                    Button</button>
                <br>
                <button type="button" class="btn btn-sm btn-flat mb-1 btn-success"><i class="ti-email"></i> Small
                    Button</button>
                <button type="button" class="btn btn-sm btn-flat mb-1 btn-outline-success"><i class="ti-email"></i>
                    Small Button</button>

                <p class="mt-3"><strong>Common Buttons</strong></p>
                <button type="button" class="btn btn-flat mb-1 btn-success"><i class="ti-location-arrow"></i>
                    Submit</button>
                <button type="button" class="btn btn-flat mb-1 btn-primary"><i class="ti-pencil-alt"></i> Edit</button>
                <button type="button" class="btn btn-flat mb-1 btn-secondary"><i class="ti-close"></i> Cancel</button>
                <button type="button" class="btn btn-flat mb-1 btn-danger"><i class="ti-trash"></i> Delete</button>
                <button type="button" class="btn btn-flat mb-1 btn-warning"><i class="ti-export"></i> Upload</button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-secondary"><i
                        class="ti-pencil-alt"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-secondary"><i class="ti-trash"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-secondary"><i class="ti-user"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-secondary"><i class="ti-email"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-secondary"><i class="ti-plus"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-secondary"><i class="ti-home"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-secondary"><i
                        class="ti-location-pin"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-secondary"><i class="ti-lock"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-secondary"><i class="ti-eye"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-secondary"><i
                        class="ti-settings"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-secondary"><i
                        class="ti-printer"></i></button>

                <p class="mt-3"><strong>Socials</strong></p>
                <button type="button" class="btn btn-flat mb-1 btn-primary"><i class="ti-twitter"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-secondary"><i class="ti-facebook"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-success"><i class="ti-github"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-danger"><i class="ti-instagram"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-pumpkin"><i class="ti-google"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-sapphire"><i class="ti-apple"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-primary"><i class="ti-twitter"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-secondary"><i
                        class="ti-facebook"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-success"><i class="ti-github"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-danger"><i class="ti-instagram"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-pumpkin"><i class="ti-google"></i></button>
                <button type="button" class="btn btn-flat mb-1 btn-outline-sapphire"><i class="ti-apple"></i></button>

                <p class="mt-3"><strong>Button Group</strong></p>
                <div class="btn-group btn-group-flat mb-1">
                    <button type="button" class="btn btn-lg btn-secondary">Orchid</button>
                    <button type="button" class="btn btn-lg btn-secondary active">Lavender</button>
                    <button type="button" class="btn btn-lg btn-secondary">Daisy</button>
                </div>
                <div class="btn-group btn-group-flat mb-1">
                    <button type="button" class="btn btn-imperial">Imperial</button>
                    <button type="button" class="btn btn-pumpkin">Pumpkin</button>
                    <button type="button" class="btn btn-bubblegum">Bubblegum</button>
                </div>
                <div class="btn-toolbar mb-1">
                    <div class="btn-group btn-group-flat mr-2">
                        <button type="button" class="btn btn-primary">1</button>
                        <button type="button" class="btn btn-primary">2</button>
                        <button type="button" class="btn btn-primary active">3</button>
                        <button type="button" class="btn btn-primary">4</button>
                    </div>
                    <div class="btn-group btn-group-flat mr-2">
                        <button type="button" class="btn btn-primary">5</button>
                        <button type="button" class="btn btn-primary">6</button>
                        <button type="button" class="btn btn-primary">7</button>
                    </div>
                    <div class="btn-group btn-group-flat mr-2">
                        <button type="button" class="btn btn-primary"><i class="ti-angle-left"></i></button>
                        <button type="button" class="btn btn-outline-primary">1</button>
                        <button type="button" class="btn btn-outline-primary">2</button>
                        <button type="button" class="btn btn-outline-primary">3</button>
                        <button type="button" class="btn btn-outline-primary">4</button>
                        <button type="button" class="btn btn-outline-primary">5</button>
                        <button type="button" class="btn btn-primary"><i class="ti-angle-right"></i></button>
                    </div>
                </div>
                <p class="mt-3"><strong>Nesting</strong></p>
                <div class="btn-group btn-group-flat mb-1">
                    <button type="button" class="btn btn-outline-primary">Home</button>
                    <button type="button" class="btn btn-outline-primary">Profile</button>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle"
                                data-toggle="dropdown">Dropdown</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Employees List</a>
                            <a class="dropdown-item" href="#">Daily Schedules</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header uppercase">
                <div class="caption text-primary">
                    <i class="ti-briefcase"></i> Button Group
                </div>
                <div class="tools">
                    <a href="#" class="btn btn-outline-primary"><i class="ti-pencil-alt"></i></a>
                    <a href="#" class="btn btn-outline-primary"><i class="ti-settings"></i></a>
                </div>
            </div>
            <div class="card-body">
                <p class="mb-3">Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>
                <div class="btn-group mb-3">
                    <button type="button" class="btn btn-primary">Left</button>
                    <button type="button" class="btn btn-primary">Middle</button>
                    <button type="button" class="btn btn-primary">Right</button>
                </div>
                <div class="btn-toolbar mb-1">
                    <div class="btn-group mr-2">
                        <button type="button" class="btn btn-secondary">1</button>
                        <button type="button" class="btn btn-secondary">2</button>
                        <button type="button" class="btn btn-secondary">3</button>
                        <button type="button" class="btn btn-secondary">4</button>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" placeholder="Input group example">
                    </div>
                </div>
                <div class="btn-toolbar justify-content-between mb-1">
                    <div class="btn-group mr-2">
                        <button type="button" class="btn btn-secondary">1</button>
                        <button type="button" class="btn btn-secondary">2</button>
                        <button type="button" class="btn btn-secondary">3</button>
                        <button type="button" class="btn btn-secondary">4</button>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" placeholder="Input group example">
                    </div>
                </div>
                <p class="mt-3 mb-3">
                    <strong>Button Toolbar</strong><br>
                    Combine sets of button groups into button toolbars for more complex components. Use utility classes
                    as needed to space out groups, buttons, and more.
                </p>
                <div class="btn-toolbar mb-1">
                    <div class="btn-group mr-2">
                        <button type="button" class="btn btn-primary">1</button>
                        <button type="button" class="btn btn-primary">2</button>
                        <button type="button" class="btn btn-primary active">3</button>
                        <button type="button" class="btn btn-primary">4</button>
                    </div>
                    <div class="btn-group mr-2">
                        <button type="button" class="btn btn-primary">5</button>
                        <button type="button" class="btn btn-primary">6</button>
                        <button type="button" class="btn btn-primary">7</button>
                    </div>
                    <div class="btn-group mr-2">
                        <button type="button" class="btn btn-outline-secondary"><i class="ti-angle-left"></i></button>
                        <button type="button" class="btn btn-outline-secondary">1</button>
                        <button type="button" class="btn btn-outline-secondary">2</button>
                        <button type="button" class="btn btn-outline-secondary active">3</button>
                        <button type="button" class="btn btn-outline-secondary">4</button>
                        <button type="button" class="btn btn-outline-secondary">5</button>
                        <button type="button" class="btn btn-outline-secondary"><i class="ti-angle-right"></i></button>
                    </div>
                </div>
                <p class="mt-3 mb-3">
                    <strong>Sizing</strong><br>
                    Instead of applying button sizing classes to every button in a group, just add
                    <code>.btn-group-*</code> to each <code>.btn-group</code>, including each one when nesting multiple
                    groups.
                </p>
                <div class="btn-toolbar mb-1">
                    <div class="btn-group btn-group-lg">
                        <button type="button" class="btn btn-success">1</button>
                        <button type="button" class="btn btn-success">2</button>
                        <button type="button" class="btn btn-success">3</button>
                        <button type="button" class="btn btn-success disabled">- Large Button Group</button>
                    </div>
                </div>
                <div class="btn-toolbar mb-1">
                    <div class="btn-group">
                        <button type="button" class="btn btn-success">1</button>
                        <button type="button" class="btn btn-success">2</button>
                        <button type="button" class="btn btn-success">3</button>
                        <button type="button" class="btn btn-success disabled">- Default Button Group</button>
                    </div>
                </div>
                <div class="btn-toolbar mb-1">
                    <div class="btn-group btn-group-sm">
                        <button type="button" class="btn btn-success">1</button>
                        <button type="button" class="btn btn-success">2</button>
                        <button type="button" class="btn btn-success">3</button>
                        <button type="button" class="btn btn-success disabled">- Small Button Group</button>
                    </div>
                </div>
                <p class="mt-3 mb-3">
                    <strong>Nesting</strong><br>
                    Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus
                    mixed with a series of buttons.
                </p>
                <div class="btn-group mb-1">
                    <button type="button" class="btn btn-primary">Home</button>
                    <button type="button" class="btn btn-primary">Profile</button>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle"
                                data-toggle="dropdown">Dropdown</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Employees List</a>
                            <a class="dropdown-item" href="#">Daily Schedules</a>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-3">
                    <strong>Vertical Button Group</strong><br>
                    <code>.btn-group-vertical</code>
                </p>
                <div class="btn-group-vertical mb-2 mr-4">
                    <button type="button" class="btn btn-pumpkin">Pumpkin</button>
                    <button type="button" class="btn btn-pumpkin">Pumpkin</button>
                    <button type="button" class="btn btn-pumpkin">Pumpkin</button>
                    <button type="button" class="btn btn-orchid">Orchid</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                </div>
                <div class="btn-group-vertical mb-1">
                    <button type="button" class="btn btn-primary">Products</button>
                    <button type="button" class="btn btn-primary">Options</button>
                    <div class="btn-group dropright">
                        <button type="button" class="btn btn-primary dropdown-toggle"
                                data-toggle="dropdown">Category</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Home and Garden</a>
                            <a class="dropdown-item" href="#">Sporting Goods</a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary">Employees</button>
                    <div class="btn-group dropright">
                        <button type="button" class="btn btn-primary dropdown-toggle"
                                data-toggle="dropdown">Customers</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Customer 1</a>
                            <a class="dropdown-item" href="#">Customer 2</a>
                            <a class="dropdown-item" href="#">Customer 3</a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary">Settings</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-3">
            <div class="card-header uppercase">
                <div class="caption text-primary">
                    <i class="ti-briefcase"></i> Button Extras
                </div>
                <div class="tools">
                    <a href="#" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                    <a href="#" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <p class="bold">Button Dropdown</p>
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-outline-danger dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <p class="mt-3 mb-3">
                        <strong>Button Dropup</strong><br>
                        Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent element.
                    </p>
                    <div class="btn-group dropup mb-2">
                        <button type="button" class="btn btn-carolina dropdown-toggle"
                                data-toggle="dropdown">Carolina</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group dropup mb-2">
                        <button type="button" class="btn btn-orchid">Orchid</button>
                        <button type="button" class="btn btn-outline-orchid dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group dropup mb-2">
                        <button type="button" class="btn btn-bubblegum">Bubblegum</button>
                        <button type="button" class="btn btn-bubblegum dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <p class="mt-3 mb-3">
                        <strong>Button Dropright</strong><br>
                        Trigger dropdown menus at the right of the elements by adding <code>.dropright</code> to the
                        parent element.
                    </p>
                    <div class="btn-group dropright mb-2">
                        <button type="button" class="btn btn-honey dropdown-toggle"
                                data-toggle="dropdown">Honey</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group dropright mb-2">
                        <button type="button" class="btn btn-lilac">Lilac</button>
                        <button type="button" class="btn btn-outline-lilac dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group dropright mb-2">
                        <button type="button" class="btn btn-lime">Lime</button>
                        <button type="button" class="btn btn-lime dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <p class="mt-3 mb-3">
                        <strong>Button Dropleft</strong><br>
                        Trigger dropdown menus at the left of the elements by adding <code>.dropleft</code> to the
                        parent element.
                    </p>
                    <div class="btn-group dropleft mb-2">
                        <button type="button" class="btn btn-coffee dropdown-toggle"
                                data-toggle="dropdown">Coffee</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group dropleft mb-2">
                        <button type="button" class="btn btn-caramel">Caramel</button>
                        <button type="button" class="btn btn-outline-caramel dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group dropleft mb-2">
                        <button type="button" class="btn btn-tortilla">Tortilla</button>
                        <button type="button" class="btn btn-tortilla dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <p class="mt-3 mb-3">
                        <strong>Checkbox and Radio Buttons</strong><br>
                        Add <code>data-toggle="buttons"</code> to a <code>.btn-group</code> containing those modified
                        buttons to enable their toggling behavior via JavaScript and add <code>.btn-group-toggle</code>
                        to style the input within your buttons.
                    </p>
                    <div class="btn-group btn-group-toggle mb-2" data-toggle="buttons">
                        <label class="btn btn-outline-primary">
                            <input type="checkbox"> Checkbox 1
                        </label>
                        <label class="btn btn-outline-primary active">
                            <input type="checkbox" checked> Checkbox 2
                        </label>
                        <label class="btn btn-outline-primary">
                            <input type="checkbox"> Checkbox 3
                        </label>
                    </div>
                    <div class="btn-group btn-group-toggle mb-2" data-toggle="buttons">
                        <label class="btn btn-outline-primary active">
                            <input type="radio" name="options" checked> Radio 1
                        </label>
                        <label class="btn btn-outline-primary">
                            <input type="radio" name="options"> Radio 2
                        </label>
                        <label class="btn btn-outline-primary">
                            <input type="radio" name="options"> Radio 3
                        </label>
                    </div>
                </li>
                <li class="list-group-item">
                    <p class="bold">Social Buttons</p>
                    <button type="button" class="btn btn-success mb-2"><i class="ti-twitter"></i></button>
                    <button type="button" class="btn btn-danger mb-2"><i class="ti-instagram"></i></button>
                    <button type="button" class="btn btn-sapphire mb-2"><i class="ti-google"></i></button>
                    <button type="button" class="btn btn-dark mb-2"><i class="ti-github"></i></button>
                    <button type="button" class="btn btn-azure mb-2"><i class="ti-facebook"></i></button>
                    <button type="button" class="btn btn-success mb-2"><i class="ti-dropbox"></i></button>
                    <button type="button" class="btn btn-light mb-2"><i class="ti-apple"></i></button>
                    <button type="button" class="btn btn-pumpkin mb-2"><i class="ti-yahoo"></i></button>
                    <button type="button" class="btn btn-chili mb-2"><i class="ti-reddit"></i></button>
                    <button type="button" class="btn btn-carolina mb-2"><i class="ti-microsoft"></i></button>
                    <button type="button" class="btn btn-sapphire mb-2"><i class="ti-linux"></i></button>
                    <button type="button" class="btn btn-primary mb-2"><i class="ti-html5"></i></button>
                    <button type="button" class="btn btn-imperial mb-2"><i class="ti-css3"></i></button>
                    <button type="button" class="btn btn-grape mb-2"><i class="ti-wordpress"></i></button>
                    <button type="button" class="btn btn-rose mb-2"><i class="ti-tumblr"></i></button>
                    <button type="button" class="btn btn-lime mb-2"><i class="ti-skype"></i></button>
                    <button type="button" class="btn btn-imperial mb-2"><i class="ti-youtube"></i></button>
                    <button type="button" class="btn btn-forest mb-2"><i class="ti-vimeo"></i></button>
                    <button type="button" class="btn btn-danger mb-2"><i class="ti-pinterest"></i></button>
                </li>
                <li class="list-group-item">
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-twitter"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-instagram"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-google"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-github"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-facebook"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-dropbox"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-apple"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-yahoo"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-reddit"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-microsoft"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-linux"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-html5"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-css3"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-wordpress"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-tumblr"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-skype"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-youtube"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-vimeo"></i></button>
                    <button type="button" class="btn btn-outline-secondary mb-2"><i class="ti-pinterest"></i></button>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- EOF MAIN-BODY -->
@endsection
