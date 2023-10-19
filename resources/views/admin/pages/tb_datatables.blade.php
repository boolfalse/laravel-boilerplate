@extends('admin.layouts.app')

@push('breadcrumb')
<!-- BOF Breadcrumb -->
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href=""><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Tables</a></li>
            <li class="breadcrumb-item active">DataTables</li>
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
            <div class="card-body">
                <p class="card-text">DataTables is a simple-to-use jQuery plug-in with a huge range of customisable
                    options. The examples in this section demonstrate basic initialisation of DataTables and how it can
                    be easily customised by passing an object with the options you want.</p>
                <p class="card-text">To learn more visit <a href="https://datatables.net"
                                                            target="_blank">https://datatables.net/</a></p>
            </div>
        </div>
    </div>
</div>
<!-- BOF Basic Datatable -->
<div class="row">
    <div class="col-lg-6">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase">
                    <i class="ti-briefcase"></i> Basic Datatable
                </div>
                <div class="tools">
                    <a href="javascript:;" class="btn btn-sm btn-primary"><i class="ti-write"></i> Edit</a>
                    <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-eye"></i> View</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover init-datatable" id="">
                        <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                        </tr>
                        <tr class="bg-taffy text-white">
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                        </tr>
                        <tr class="bg-carolina text-white">
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                        </tr>
                        <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                        </tr>
                        <tr>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>36</td>
                        </tr>
                        <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                            <td>43</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card card-carolina mb-3">
            <div class="card-header">
                <div class="caption text-white uppercase">
                    <i class="ti-briefcase"></i> Colored Background
                </div>
                <div class="tools">
                    <a href="javascript:;" class="btn btn-sm btn-primary"><i class="ti-write"></i> Edit</a>
                    <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-eye"></i> View</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover init-datatable" id="">
                        <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                        </tr>
                        <tr class="bg-taffy text-white">
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                        </tr>
                        <tr class="bg-mustard text-dark">
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                        </tr>
                        <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                        </tr>
                        <tr>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>36</td>
                        </tr>
                        <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                            <td>43</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EOF Basic Datatable -->
<!-- BOF Datatable Addrows -->
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase">
                    <i class="ti-briefcase"></i> Dynamic Add Rows
                </div>
                <div class="tools">
                    <a href="javascript:;" class="btn btn-sm btn-primary" id="btn-addrow"><i class="ti-plus"></i> Click
                        To Add New Row</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dt-addrows">
                        <thead class="thead-light">
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                            <th>Column 4</th>
                            <th>Column 5</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Column 1</td>
                            <td>Column 2</td>
                            <td>Column 3</td>
                            <td>Column 4</td>
                            <td>Column 5</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EOF Datatable Addrows -->
<!-- BOF Datatable Complex Headers -->
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase">
                    <i class="ti-briefcase"></i> Complex Headers (rowspan and colspan)
                </div>
                <div class="tools">
                    <a href="javascript:;" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                    <a href="javascript:;" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover init-datatable" id="">
                        <thead class="thead-light">
                        <tr>
                            <th rowspan="2">Name</th>
                            <th colspan="2" class="text-center">HR Information</th>
                            <th colspan="3" class="text-center">Contact</th>
                        </tr>
                        <tr>
                            <th>Position</th>
                            <th>Salary</th>
                            <th>Office</th>
                            <th>Extn.</th>
                            <th>E-mail</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>$320,800</td>
                            <td>Edinburgh</td>
                            <td>5421</td>
                            <td>t.nixon@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>$170,750</td>
                            <td>Tokyo</td>
                            <td>8422</td>
                            <td>g.winters@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>$86,000</td>
                            <td>San Francisco</td>
                            <td>1562</td>
                            <td>a.cox@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>$433,060</td>
                            <td>Edinburgh</td>
                            <td>6224</td>
                            <td>c.kelly@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>$162,700</td>
                            <td>Tokyo</td>
                            <td>5407</td>
                            <td>a.satou@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>$372,000</td>
                            <td>New York</td>
                            <td>4804</td>
                            <td>b.williamson@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>$137,500</td>
                            <td>San Francisco</td>
                            <td>9608</td>
                            <td>h.chandler@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>$327,900</td>
                            <td>Tokyo</td>
                            <td>6200</td>
                            <td>r.davidson@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>$205,500</td>
                            <td>San Francisco</td>
                            <td>2360</td>
                            <td>c.hurst@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>$103,600</td>
                            <td>Edinburgh</td>
                            <td>1667</td>
                            <td>s.frost@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>$90,560</td>
                            <td>London</td>
                            <td>3814</td>
                            <td>j.gaines@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>$342,000</td>
                            <td>Edinburgh</td>
                            <td>9497</td>
                            <td>q.flynn@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>$470,600</td>
                            <td>San Francisco</td>
                            <td>6741</td>
                            <td>c.marshall@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>$313,500</td>
                            <td>London</td>
                            <td>3597</td>
                            <td>h.kennedy@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>$385,750</td>
                            <td>London</td>
                            <td>1965</td>
                            <td>t.fitzpatrick@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td>$198,500</td>
                            <td>London</td>
                            <td>1581</td>
                            <td>m.silva@datatables.net</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EOF Datatable Complex Headers -->
<!-- BOF Datatable Row Selection -->
<div class="row">
    <div class="col-lg-6">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase">
                    <i class="ti-briefcase"></i> Multiple Rows Selection
                </div>
                <div class="tools">
                    <a href="javascript:;" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                    <a href="javascript:;" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dt-multirowselection">
                        <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase">
                    <i class="ti-briefcase"></i> Row Selection and Deletion
                </div>
                <div class="tools">
                    <a href="javascript:;" class="btn btn-outline-primary btn-deleterow">Delete Selected Row</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dt-rowselection">
                        <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EOF Datatable Row Selection -->
<!-- BOF Datatable Events -->
<div class="row">
    <div class="col-lg-6">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase">
                    <i class="ti-briefcase"></i> Event Row Click
                </div>
                <div class="tools">
                    <a href="javascript:;" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                    <a href="javascript:;" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dt-event">
                        <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase">
                    <i class="ti-briefcase"></i> Form Inputs
                </div>
                <div class="tools">
                    <a href="javascript:;" class="btn btn-outline-primary btn-forminputs"><i class="ti-pencil-alt"></i>
                        Submit</a>
                    <a href="javascript:;" class="btn btn-outline-secondary"><i class="ti-close"></i> Cancel</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dt-forminputs">
                        <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td><input type="text" id="row-1-position" name="row-1-position"
                                       value="System Architect"></td>
                            <td><select size="1" id="row-1-office" name="row-1-office">
                                    <option value="Edinburgh" selected="selected">
                                        Edinburgh
                                    </option>
                                    <option value="London">
                                        London
                                    </option>
                                    <option value="New York">
                                        New York
                                    </option>
                                    <option value="San Francisco">
                                        San Francisco
                                    </option>
                                    <option value="Tokyo">
                                        Tokyo
                                    </option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td><input type="text" id="row-2-position" name="row-2-position" value="Accountant">
                            </td>
                            <td><select size="1" id="row-2-office" name="row-2-office">
                                    <option value="Edinburgh">
                                        Edinburgh
                                    </option>
                                    <option value="London">
                                        London
                                    </option>
                                    <option value="New York">
                                        New York
                                    </option>
                                    <option value="San Francisco">
                                        San Francisco
                                    </option>
                                    <option value="Tokyo" selected="selected">
                                        Tokyo
                                    </option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td><input type="text" id="row-3-position" name="row-3-position"
                                       value="Junior Technical Author"></td>
                            <td><select size="1" id="row-3-office" name="row-3-office">
                                    <option value="Edinburgh">
                                        Edinburgh
                                    </option>
                                    <option value="London">
                                        London
                                    </option>
                                    <option value="New York">
                                        New York
                                    </option>
                                    <option value="San Francisco" selected="selected">
                                        San Francisco
                                    </option>
                                    <option value="Tokyo">
                                        Tokyo
                                    </option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td><input type="text" id="row-4-position" name="row-4-position"
                                       value="Senior Javascript Developer"></td>
                            <td><select size="1" id="row-4-office" name="row-4-office">
                                    <option value="Edinburgh" selected="selected">
                                        Edinburgh
                                    </option>
                                    <option value="London">
                                        London
                                    </option>
                                    <option value="New York">
                                        New York
                                    </option>
                                    <option value="San Francisco">
                                        San Francisco
                                    </option>
                                    <option value="Tokyo">
                                        Tokyo
                                    </option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td><input type="text" id="row-5-position" name="row-5-position" value="Accountant">
                            </td>
                            <td><select size="1" id="row-5-office" name="row-5-office">
                                    <option value="Edinburgh">
                                        Edinburgh
                                    </option>
                                    <option value="London">
                                        London
                                    </option>
                                    <option value="New York">
                                        New York
                                    </option>
                                    <option value="San Francisco">
                                        San Francisco
                                    </option>
                                    <option value="Tokyo" selected="selected">
                                        Tokyo
                                    </option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td><input type="text" id="row-6-position" name="row-6-position"
                                       value="Integration Specialist"></td>
                            <td><select size="1" id="row-6-office" name="row-6-office">
                                    <option value="Edinburgh">
                                        Edinburgh
                                    </option>
                                    <option value="London">
                                        London
                                    </option>
                                    <option value="New York" selected="selected">
                                        New York
                                    </option>
                                    <option value="San Francisco">
                                        San Francisco
                                    </option>
                                    <option value="Tokyo">
                                        Tokyo
                                    </option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td><input type="text" id="row-7-position" name="row-7-position"
                                       value="Sales Assistant"></td>
                            <td><select size="1" id="row-7-office" name="row-7-office">
                                    <option value="Edinburgh">
                                        Edinburgh
                                    </option>
                                    <option value="London">
                                        London
                                    </option>
                                    <option value="New York">
                                        New York
                                    </option>
                                    <option value="San Francisco" selected="selected">
                                        San Francisco
                                    </option>
                                    <option value="Tokyo">
                                        Tokyo
                                    </option>
                                </select></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EOF Datatable Events -->
<!-- BOF Datatable Show/Hide Columns -->
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase">
                    <i class="ti-briefcase"></i> Show/Hide Columns Dynamically (Fixed Height)
                </div>
                <div class="tools">
                    <a href="javascript:;" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                    <a href="javascript:;" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row px-4">
                        <div class="col-lg-6">
                            <div class="form-check pl-0 mb-2">
                                <input type="checkbox" class="form-check-input toggle-column" data-toggle="toggle"
                                       data-size="sm" data-column="0" checked>
                                <label class="form-check-label">Show/Hide Name Column</label>
                            </div>
                            <div class="form-check pl-0 mb-2">
                                <input type="checkbox" class="form-check-input toggle-column" data-toggle="toggle"
                                       data-size="sm" data-column="1" checked>
                                <label class="form-check-label">Show/Hide Position Column</label>
                            </div>
                            <div class="form-check pl-0 mb-2">
                                <input type="checkbox" class="form-check-input toggle-column" data-toggle="toggle"
                                       data-size="sm" data-column="2" checked>
                                <label class="form-check-label">Show/Hide Office Column</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-check pl-0 mb-2">
                                <input type="checkbox" class="form-check-input toggle-column" data-toggle="toggle"
                                       data-size="sm" data-column="3" checked>
                                <label class="form-check-label">Show/Hide Age Column</label>
                            </div>
                            <div class="form-check pl-0 mb-2">
                                <input type="checkbox" class="form-check-input toggle-column" data-toggle="toggle"
                                       data-size="sm" data-column="4" checked>
                                <label class="form-check-label">Show/Hide Date Column</label>
                            </div>
                            <div class="form-check pl-0 mb-2">
                                <input type="checkbox" class="form-check-input toggle-column" data-toggle="toggle"
                                       data-size="sm" data-column="5" checked>
                                <label class="form-check-label">Show/Hide Salary Column</label>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover" id="dt-showhidecolumn">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                    </tr>
                    <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                    </tr>
                    <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                    </tr>
                    <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                    </tr>
                    <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                    </tr>
                    <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                    </tr>
                    <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                    </tr>
                    <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                    </tr>
                    <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- EOF MAIN-BODY -->
@endsection
