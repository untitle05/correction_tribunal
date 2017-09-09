@extends('page_model')


  @section('css')
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
      <link href={{asset("bower_components/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css")}} rel="stylesheet">
     @endsection

@section('main_content')

<section class="content">
    <div class="modal-body">test</div>
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                JQUERY DATATABLES
                <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
            </h2>
        </div>

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EXPORTABLE TABLE
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
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
                                @for($i=0;$i<10;$i++)

                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>


                                </tbody>
                                    @endfor
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>
    @endsection

@section('js')

    <!-- Jquery DataTable Plugin Js -->
    <script src={{asset("bower_components/adminbsb-materialdesign/plugins/jquery-datatable/jquery.dataTables.js")}}></script>
    <script src={{asset("bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js")}}></script>
    <script src={{asset("bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.flash.min.js")}}></script>
    <script src={{asset("bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/jszip.min.js")}}></script>
    <script src={{asset("bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/pdfmake.min.js")}}></script>
    <script src={{asset("bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/vfs_fonts.js")}}></script>
    <script src={{asset("bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.html5.min.js")}}></script>
    <script src={{asset("bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.print.min.js")}}></script>

   <!-- Custom Js -->
    <script src={{asset("bower_components/adminbsb-materialdesign/js/pages/tables/jquery-datatable.js")}}></script>




@endsection

