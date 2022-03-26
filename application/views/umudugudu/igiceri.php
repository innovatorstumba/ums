
  <link rel="icon" type="image/x-icon" href="<?=base_url()?>assets/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/css/forms/theme-checkbox-radio.css">
    <link href="<?=base_url()?>assets/assets/css/apps/invoice-list.css" rel="stylesheet" type="text/css" />
  <!--  BEGIN CUSTOM STYLE FILE  -->
  <link href="<?=base_url()?>assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    <div class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>REBA ABISHYUYE</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <form class="row" method="post">

                                    <div class="col-xl-3 mb-xl-0 mb-2">
                                        <select class="form-control form-control-lg" name="year">
                                            <option selected disabled hidden>Hitamo Umwaka</option>
                                            <?php
                                            for ($year=date('Y'); $year >= 2021 ; $year--) {
                                                ?>
                                                <option value="<?=$year;?>"><?=$year;?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 mb-xl-0 mb-2">
                                        <select class="form-control" name="month">
                                            <option selected disabled hidden>Hitamo Ukwezi</option>
                                            <?php
                                            $month_arr = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
                                            foreach ($month_arr as $mon){
                                                ?>
                                                <option value="<?=$mon;?>"><?=$mon;?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 mb-xl-0 mb-2">
                                        <input type="submit" name="find" class="mb-4 btn btn-primary" value="Shaka">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (isset($payed)) {
                        if ($payed != null){
                            ?>
                            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <h2>Abishyuye (<?=@$year_payed.' - '.@$month_payed;?>)</h2>
                                    <table id="invoice-list" class="table table-hover" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th > Record no. </th>
                                            <th>AMAZINA</th>
                                            <th>IRANGAMUNTU</th>
                                            <th>TELEPHONE</th>
                                            <th>UKWEZI</th>
                                            <th>Status</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $x = 0;
                                        foreach ($payed as $payedArr){
                                            $x++;
                                            ?>
                                            <tr>
                                                <td> <?=$x;?> </td>
                                                <td>
                                                    <div class="d-flex">

                                                        <p class="align-self-center mb-0 user-name"> <?=$payedArr['ldr_firstname'].' '.$payedArr['ldr_lastname'];?> </p>
                                                    </div>
                                                </td>
                                                <td><span class="inv-number"> <?=$payedArr['ldr_nid'];?></span></td>
                                                <td><span class="inv-number"> <?=$payedArr['ldr_phone'];?></span></td>
                                                <td><span class="inv-date"> <?=$month_payed;?></span></td>
                                                <td><span class="badge badge-success inv-status">Paid</span></td>


                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <?php
                        }
                    }

                    if (isset($notPayed)) {
                        if ($notPayed != null){
                            ?>
                            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <h2>Abatarishyura (<?=@$year_payed.' - '.@$month_payed;?>)</h2>
                                    <table id="invoice-list2" class="table table-hover" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th > Record no. </th>
                                            <th>AMAZINA</th>
                                            <th>IRANGAMUNTU</th>
                                            <th>TELEPHONE</th>
                                            <th>UKWEZI</th>
                                            <th>Status</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $y = 0;
                                        foreach ($notPayed as $notPayedArr){
                                            $y++;
                                            ?>
                                            <tr>
                                                <td> <?=$y;?> </td>
                                                <td>
                                                    <div class="d-flex">

                                                        <p class="align-self-center mb-0 user-name"> <?=$notPayedArr['ldr_firstname'].' '.$notPayedArr['ldr_lastname'];?> </p>
                                                    </div>
                                                </td>
                                                <td><span class="inv-number"> <?=$notPayedArr['ldr_nid'];?></span></td>
                                                <td><span class="inv-number"> <?=$notPayedArr['ldr_phone'];?></span></td>
                                                <td><span class="inv-date"> <?=$month_payed;?></span></td>
                                                <td><span class="badge badge-success inv-status">Not Paid</span></td>


                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
        </div>
    
        <script src="<?=base_url()?>assets/assets/js/libs/jquery-3.1.1.min.js"></script>
 
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?=base_url()?>assets/plugins/table/datatable/datatables.js"></script>
    <script src="<?=base_url()?>assets/assets/js/apps/invoice-list.js"></script>
  <!-- END GLOBAL MANDATORY SCRIPTS -->
  <script src="<?=base_url()?>assets/js/scrollspyNav.js"></script>

  <script>
      var invoiceList = $('#invoice-list2').DataTable({
          "dom": "<'inv-list-top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'l<'dt-action-buttons align-self-center'B>><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f<'toolbar align-self-center'>>>>" +
              "<'table-responsive'tr>" +
              "<'inv-list-bottom-section d-sm-flex justify-content-sm-between text-center'<'inv-list-pages-count  mb-sm-0 mb-3'i><'inv-list-pagination'p>>",

          headerCallback:function(e, a, t, n, s) {
              e.getElementsByTagName("th")[0].innerHTML='<label class="new-control new-checkbox checkbox-primary m-auto">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
          },
          columnDefs:[ {
              targets:0,
              width:"30px",
              className:"",
              orderable:!1,
              render:function(e, a, t, n) {
                  return'<label class="new-control new-checkbox checkbox-primary  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
              },
          }],
          buttons: [
              {
                  text: 'Add New',
                  className: 'btn btn-primary btn-sm',
                  action: function(e, dt, node, config ) {
                      window.location = 'apps_invoice-add.html';
                  }
              }
          ],
          "order": [[ 1, "asc" ]],
          "oLanguage": {
              "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
              "sInfo": "Showing page _PAGE_ of _PAGES_",
              "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
              "sSearchPlaceholder": "Search...",
              "sLengthMenu": "Results :  _MENU_",
          },
          "stripeClasses": [],
          "lengthMenu": [5, 10, 15, 20],
          "pageLength": 5
      });

      // $("div.toolbar").html('<button class="dt-button dt-delete btn btn-danger btn-sm" tabindex="0" aria-controls="invoice-list"><span>Delete</span></button>');

      multiCheck(invoiceList);


      $('.dt-delete').on('click', function() {
          // Read all checked checkboxes
          $(".select-customers-info:checked").each(function () {
              if (this.classList.contains('chk-parent')) {
                  return;
              } else {
                  $(this).parents('tr').remove();
              }
          });

      })


      $('.action-delete').on('click', function() {
          $(this).parents('tr').remove();
      })
  </script>