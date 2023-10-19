@extends('admin.layouts.app')

@push('breadcrumb')
<!-- BOF Breadcrumb -->
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href=""><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Tables</a></li>
            <li class="breadcrumb-item active">Basic</li>
        </ol>
    </div>
</div>
<!-- EOF Breadcrumb -->
@endpush

@section('content')
<!-- BOF MAIN-BODY -->
<div class="row">
    <div class="col-lg-6">
        <div class="card mb-3">
            <div class="card-header uppercase">
                <div class="caption">
                    <i class="ti-briefcase"></i> Basic Table
                </div>
                <div class="tools">
                    <a href="#" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                    <a href="#" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>First</th>
                            <th>Last</th>
                            <th>Handle</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td class="text-center"><button class="btn btn-sm btn-primary"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td class="text-center"><button class="btn btn-sm btn-primary"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td class="text-center"><button class="btn btn-sm btn-primary"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card card-orchid mb-3">
            <div class="card-header uppercase">
                <div class="caption text-white">
                    <i class="ti-briefcase"></i> Colored Background
                </div>
                <div class="tools">
                    <a href="#" class="btn btn-outline-light"><i class="ti-pencil-alt"></i></a>
                    <a href="#" class="btn btn-outline-light"><i class="ti-settings"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First</th>
                            <th>Last</th>
                            <th>Handle</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td class="text-center"><button class="btn btn-sm btn-grape"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td class="text-center"><button class="btn btn-sm btn-grape"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td class="text-center"><button class="btn btn-sm btn-grape"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card mb-3">
            <div class="card-header uppercase">
                <div class="caption">
                    <i class="ti-briefcase"></i> Small Table
                </div>
                <div class="tools">
                    <a href="#" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                    <a href="#" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-bordered table-hover">
                        <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>First</th>
                            <th>Last</th>
                            <th>Handle</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td class="text-center"><button class="btn btn-sm btn-primary"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td class="text-center"><button class="btn btn-sm btn-primary"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td class="text-center"><button class="btn btn-sm btn-primary"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card mb-3">
            <div class="card-header uppercase">
                <div class="caption">
                    <i class="ti-briefcase"></i> Contextual Classes
                </div>
                <div class="tools">
                    <a href="#" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                    <a href="#" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-bordered table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Class</th>
                            <th>Handle</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="table-primary text-dark">
                            <th>1</th>
                            <td>Primary</td>
                            <td>@mdo</td>
                            <td class="text-center"><button class="btn btn-sm btn-info"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        <tr class="table-success text-dark">
                            <th>2</th>
                            <td>Success</td>
                            <td>@fat</td>
                            <td class="text-center"><button class="btn btn-sm btn-info"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        <tr class="table-danger text-dark">
                            <th>3</th>
                            <td>Danger</td>
                            <td>@twitter</td>
                            <td class="text-center"><button class="btn btn-sm btn-info"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-3">
            <div class="card-header uppercase">
                <div class="caption">
                    <i class="ti-briefcase"></i> Fixed Height Table
                </div>
                <div class="tools">
                    <a href="#" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                    <a href="#" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
                </div>
            </div>
            <div class="card-body scrollbox-lg" data-simplebar>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Heading</th>
                            <th>Heading</th>
                            <th>Heading</th>
                            <th>Heading</th>
                            <th>Heading</th>
                            <th>Heading</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td class="text-center"><button class="btn btn-sm btn-info"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        <tr>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td class="text-center"><button class="btn btn-sm btn-info"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        <tr>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td class="text-center"><button class="btn btn-sm btn-info"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        <tr>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td class="text-center"><button class="btn btn-sm btn-info"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        <tr>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td class="text-center"><button class="btn btn-sm btn-info"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        <tr>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td class="text-center"><button class="btn btn-sm btn-info"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        <tr>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td class="text-center"><button class="btn btn-sm btn-info"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        <tr>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td class="text-center"><button class="btn btn-sm btn-info"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        <tr>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td class="text-center"><button class="btn btn-sm btn-info"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        <tr>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td>Data</td>
                            <td class="text-center"><button class="btn btn-sm btn-info"><i class="ti-write"></i>
                                    Edit</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EOF MAIN-BODY -->
@endsection
