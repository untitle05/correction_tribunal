@extends('page_model')



   @section('css')

            {!! Html::style('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') !!}
   @endsection




  @section('main_content')

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
                                      <th>Numero Ordre</th>
                                      <th>Date Première Audience</th>
                                      <th>Partie Civile</th>
                                      <th>Prevenu</th>
                                      <th>Jugment_ADD</th>
                                      <th>Jugment_Au_fond</th>
                                      <th>Date Dernier Renvoi</th>
                                      <th>Composition Jury</th>
                                      <th class="noExport">Action</th>
                                  </tr>

                              </thead>

                              <tbody>

                              @foreach($dossiers as $dossier)
                                  <tr id="membres{{$dossier->id}}">
                                      <td>{{ $dossier->numero_ordre }}</td>
                                      <td>{{ date('d M Y', strtotime($dossier->date_premiere_audience)) }}</td>
                                      <td>{{ $dossier->prevenu }}</td>
                                      <td>{{ $dossier->prevenu }}</td>
                                      <td>{{ $dossier->prevenu }}</td>
                                      <td>{{ $dossier->prevenu }}</td>
                                      <td>{{ $dossier->prevenu }}</td>
                                      <td>{{ $dossier->prevenu }}</td>
                                      <td>
                                          <button class="btn btn-xs btn-info" name="edit" id="edit" data-target="#add_data_Modal" data-id="{{ $dossier->id }}" title="voir"><i class="material-icons">list</i></button>
                                          <button class="btn btn-xs btn-danger" data-id="{{ $dossier->id }}" title="Ajouter"><i class="material-icons">add_box</i></button>
                                          <button class="btn btn-xs btn-danger" data-id="{{ $dossier->id }}" title="Supprimer"><i class="material-icons">remove</i></button>
                                      </td>
                                  </tr>
                              @endforeach

                              </tbody>

                              <tfoot>

                                  <tr>
                                      <th>Numero Ordre</th>
                                      <th>Date Première Audience</th>
                                      <th>Partie Civile</th>
                                      <th>Prevenu</th>
                                      <th>Jugment_ADD</th>
                                      <th>Jugment_Au_fond</th>
                                      <th>Date Dernier Renvoi</th>
                                      <th>Action</th>
                                  </tr>
                              </tfoot>

                          </table>

                      </div>
                  </div>
              </div>
          </div>
      </div>

  @endsection





   @section('modal_content')


   @endsection





   @section('js')
{!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/jquery.dataTables.js') !!}
{!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') !!}
{!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') !!}
{!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') !!}
{!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/jszip.min.js') !!}
{!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/pdfmake.min.js') !!}
{!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/vfs_fonts.js') !!}
{!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') !!}
{!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.print.min.js') !!}
<script>
   $(function () {
       $('.js-exportable').DataTable({
           dom: 'Bfrtip',
           responsive: true,
           buttons: [
               'copy',
               'csv',
               'excel',
               {
                   extend:'pdf',
                   exportOptions:{
                       columns:"thead th:not(.noExport)"
                   }
               },
               'print'
           ]
       });
   });
</script>
    @endsection