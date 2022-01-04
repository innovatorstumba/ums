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
    
    <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <?php
                            if ($selected != null){
                                ?>
                                <table id="invoice-list" class="table table-hover" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="checkbox-column">S/N</th>
                                        <th>Invoice Id</th>
                                        <th>AMAZINA</th>
                                        <th>Itariki</th>
                                        <th>Umwaka</th>
                                        <th>Ukwezi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($selected->result() as $row){
                                        ?>
                                        <tr>
                                            <td class="checkbox-column"> 1 </td>
                                            <td><a href=""><span class="inv-number"><?=$row->igiceri_transaction_id;?></span></a></td>
                                            <td>
                                                <div class="d-flex">

                                                    <p class="align-self-center mb-0 user-name"> <?=$this->session->userdata('firstname').' '.$this->session->userdata('lastname');?> </p>
                                                </div>
                                            </td>
                                            <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>  <?=date('d-M-Y', $row->igiceri_date)?></span></td>
                                            <td><?=$row->igiceri_year;?></td>
                                            <td><?=$row->igiceri_months;?></td>

                                        </tr>
                                        <?php
                                    }
                                    ?>

                                    </tbody>
                                </table>
                                <?php
                            } else{
                                ?>
                                <div class="infobox-1">
                                    <div class="info-icon">
                                        <svg> ... </svg>
                                    </div>
                                    <h5 class="info-heading">Nta makuru agaragara.</h5>
                                    <button class="btn btn-outline-success" onclick="history.back()">Subira Inyuma <svg> ... </svg></button>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

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
