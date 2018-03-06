{{--{{ dd($dossiers) }}--}}
@extends('page_model', ['hideSidebar' => true])



   @section('css')
    <link href={{asset("css/sweetalert2.min.css")}} rel="stylesheet" />
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/bootstrap-select/css/bootstrap-select.css")}} rel="stylesheet">
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/waitme/waitMe.css")}} rel="stylesheet">
    {!! Html::style('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') !!}

    <style>
        .delete-member-block{
            position: absolute;
            right: 5px;
            z-index: 2;
        }
    </style>
   @endsection




  @section('main_content')

      <div style="position: relative;  top: 100px; left:-40%; text-align: center"><button class="btn btn-success bars">Afficher/Cacher le Menu</button><br></div>
      <div class="row clearfix">
          <br><br><br><br><br><br><br>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="position: absolute; left: 1.2%;">
              <div class="card">
                  <div class="header">
                      <h2>
                          LISTE DES DERNIERS RENVOIS DE DOSSIERS
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
                  <div class="body" >
                      <div class="table-responsive" >
                          <table class="table table-bordered table-striped table-hover dataTable js-exportable" >
                              <thead >

                                  <tr>
                                      <th>Numero Ordre</th>
                                      <th>Date Dernier Renvoi</th>
                                      <th>Partie Civile</th>
                                      <th>Prevenu</th>
                                      <th>Situation Penale</th>
                                      <th>Jugment ADD</th>
                                      <th>Jugment Au fond</th>
                                      <th>Motif du renvoi</th>
                                      <th>Composition Jury</th>
                                      <th class="noExport">Action</th>
                                  </tr>

                              </thead>

                              <tbody>

                              @foreach($dossiers as $dossier)
                                  <tr id="membres{{$dossier->dossier_id}}">
                                      <td>{{ $dossier->numero_ordre }}</td>
                                      <td>{{ date('d M Y', strtotime($dossier->date_renvoi)) }}</td>
                                      <td>{{ $dossier->partie_civile }}</td>
                                      <td>{{ $dossier->prevenu }}</td>
                                      <td>{{ $dossier->situation_penale }}</td>
                                      <td>{{ $dossier->jugment_ADD }}</td>
                                      <td>{{ $dossier->jugement_au_fond }}</td>
                                      <td>{{ $dossier->motif_renvoi}}</td>
                                      <td>{{ $dossier->membres }}</td>
                                      <td>
                                          <button class="btn btn-xs btn-info voir-renvoi" data-target="#dossier_renvoi_Modal" data-id="{{ $dossier->dossier_id }}" title="voir"><i class="material-icons">list</i></button>
                                          <button class="btn btn-xs btn-danger" data-id="{{ $dossier->dossier_id }}" title="Ajouter"><i class="material-icons">add_box</i></button>
                                          <button class="btn btn-xs btn-danger" data-id="{{ $dossier->dossier_id }}" title="Supprimer"><i class="material-icons">remove</i></button>
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
       <div id="dossier_renvoi_Modal" class="modal fade">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                       <h4 class="modal-title">Renvoi du dossier</h4>

                       <button class="btn btn-primary print-renvois">Imprimer</button>
                   </div>
                   <div class="modal-body">

                   </div>

               </div>
           </div>
       </div>
       <div id="modifier_renvoi_Modal" class="modal fade">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                       <h4 class="modal-title">Modifier renvoi</h4>
                   </div>
                   <div class="modal-body">

                   </div>

               </div>
           </div>
       </div>
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
{!! Html::script('js/jspdf.min.js') !!}
<script>

    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    });


   $(function () {
       $('.js-exportable').DataTable({
           dom: 'Bfrtip',
           responsive: true,
           columns: [
               null,
               null,
               null,
               null,
               null,
               null,
               null,
               null,
               {
                   "render": function(data, type, row){
                       return data.split(", ").join("<br/>");
                   }
               },
               null
           ],
           buttons: [
               {
                   extend:'excel',
                   exportOptions: {
                       columns: "thead th:not(.noExport)"
                   }
               },
               {

                   extend:'pdf',
                   exportOptions:{
                       columns:"thead th:not(.noExport)"
                   }
               },
               'print'
           ]
       });

       $(".voir-renvoi").click(function () {
           $('#dossier_renvoi_Modal').modal('show');
           dossier_id=$(this).data('id');
           hydradeRenvoiModal();
       })
   });

   dossier_id=null;
   function hydradeRenvoiModal() {
       console.log('affichage du dossier : '+dossier_id)
       $("#dossier_renvoi_Modal .modal-body").load("/listRenvois?id="+dossier_id, null, function () {
           $(".modifier-renvoi").click(function () {
               console.log("test");
               $('#modifier_renvoi_Modal').modal('show');
               $("#modifier_renvoi_Modal .modal-body").load("/modifierRenvoi?id="+$(this).data('id'));
           })

           $('.print-renvois').click(function () {
               printPDF('#dossier_renvoi_Modal');
           });

           $('.supprimer-renvoi').click(function (e) {
               e.preventDefault();
               var value= $(this).data('id');
               var url = '{{ URL::to('deleteRenvoi') }}';
               console.log("supression de l'id", value);
               if(confirm("Voulez vous supprimer ce dossier ?")==true){

                   $.ajax({
                       type : 'get',
                       url : url,
                       data : {'id':value},
                       success:function (data) {
                           console.log(data);
                           hydradeRenvoiModal();

                       }
                   });
               }
           });

           $('tbody').delegate('.btn-danger','click',function () {




           });

//           var doc = new jsPDF();
//           var elementHandler = {
//               '#ignorePDF': function (element, renderer) {
//                   return true;
//               }
//           };
//           var source = $('#dossier_renvoi_Modal').get();
//           doc.fromHTML(
//                   source,
//                   15,
//                   15,
//                   {
//                       'width': 180,'elementHandlers': elementHandler
//                   });
//           doc.output("dataurlnewwindow");
       });
   }

   function printPDF(selector) {
       var printDoc = new jsPDF();
       printDoc.fromHTML($(selector).get(0), 10, 10, {'width': 180});

       var nom_fichier = $(selector).find('.dossier').data('partiecivil').replace(/[^\w\s]/gi, '');
       printDoc.save('Renvois-'+ nom_fichier +'.pdf');
       // printDoc.autoPrint();
       // printDoc.output("dataurlnewwindow"); // this opens a new popup,  after this the PDF opens the print window view but there are browser inconsistencies with how this is handled
   }


</script>
    @endsection