<link href="<?=base_url()?>assets/assets/css/apps/invoice-preview.css" rel="stylesheet" type="text/css" />
<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="<?=base_url()?>assets/assets/css/elements/infobox.css" rel="stylesheet" type="text/css" />
    <div id="content" class="main-content">
        <?php
        if (@$selected != null){
            $row = $selected->row();
            $addrow = @$address->row();
            ?>
            <div class="layout-px-spacing">
                <div class="row invoice layout-top-spacing layout-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="doc-container">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="invoice-container">
                                        <div class="invoice-inbox">
                                            <div id="ct" class="">
                                                <div class="invoice-00001">
                                                    <div class="content-section">
                                                        <div class="inv--head-section inv--detail-section">

                                                            <div class="row">

                                                                <div class="col-sm-6 col-12 mr-auto">
                                                                    <div class="d-flex">
                                                                        <img class="company-logo" src="<?=base_url()?>assets/assets/img/cork-logo.png" alt="company">
                                                                        <h3 class="in-heading align-self-center">UMS</h3>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 text-sm-right">
                                                                    <p class="inv-list-number"><span class="inv-title">Invoice N<sup>o</sup>: </span> <span class="inv-number"><?=$row->trs_id;?></span></p>
                                                                </div>

                                                                <div class="col-sm-6 align-self-center mt-3">
                                                                    <p class="inv-street-addr">Rwanda</p>
                                                                    <p class="inv-email-address">info@ums.com</p>
                                                                </div>
                                                                <div class="col-sm-6 align-self-center mt-3 text-sm-right">
                                                                    <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date"><?=date('d-M-Y', $row->trs_date)?></span></p>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="inv--detail-section inv--customer-detail-section">

                                                            <div class="row">

                                                                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                                    <p class="inv-to">Umwirondoro wuwishyuye</p>
                                                                </div>

                                                                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 align-self-center order-sm-0 order-1 inv--payment-info">
                                                                    <h6 class=" inv-title">Address:</h6>
                                                                </div>

                                                                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                                    <p class="inv-customer-name"><?=$this->session->userdata('firstname').' '.$this->session->userdata('lastname');?></p>
                                                                    <p class="inv-street-addr"><?=$addrow->province_name;?>, <?=$addrow->d_district_name;?></p>
                                                                    <p class="inv-email-address"><?=$addrow->ldr_email;?></p>
                                                                    <p class="inv-email-address"><?=$addrow->ldr_phone;?></p>
                                                                </div>

                                                                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 order-sm-0 order-1">
                                                                    <div class="inv--payment-info">
                                                                        <p><span class=" inv-subtitle">Umurenge:</span> <span><?=$addrow->sct_name;?></span></p>
                                                                        <p><span class=" inv-subtitle">Akagali: </span> <span><?=$addrow->c_cell_name;?></span></p>
                                                                        <p><span class=" inv-subtitle">Umudugudu:</span> <span><?=$addrow->vlg_name;?></span></p>
                                                                        <p><span class=" inv-subtitle">Isibo: </span> <span><?=$addrow->isibo_name;?></span></p>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="inv--product-table-section">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead class="">
                                                                    <tr>
                                                                        <th scope="col">S.No</th>
                                                                        <th scope="col">IBYO YISHYUYE</th>
                                                                        <th class="text-right" scope="col">UMWAKA</th>
                                                                        <th class="text-right" scope="col">UKWEZI</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php
                                                                    $x = 0;
                                                                    foreach ($selected->result() as $trx){
                                                                        $x++;
                                                                        if (@$table == 'isuku'){
                                                                            $months = $trx->isuku_months;
                                                                            $year = $trx->isuku_year;
                                                                            $reason = 'AMAFARANGA Y\'ISUKU';
                                                                        }elseif (@$table == 'igiceri'){
                                                                            $months = $trx->igiceri_months;
                                                                            $year = $trx->igiceri_year;
                                                                            $reason = 'AMAFARANGA Y\'IGICERI PROG';
                                                                        }elseif (@$table == 'ejoheza'){
                                                                            $months = $trx->ejo_months;
                                                                            $year = $trx->ejo_year;
                                                                            $reason = 'AMAFARANGA YA EJOHEZA';
                                                                        }elseif (@$table == 'umutekano'){
                                                                            $months = $trx->umt_months;
                                                                            $year = $trx->umt_year;
                                                                            $reason = 'AMAFARANGA Y\'UMUTEKANO';
                                                                        }
                                                                        ?>
                                                                        <tr>
                                                                            <td><?=$x;?></td>
                                                                            <td><?=$reason;?></td>
                                                                            <td class="text-right"><?=$year;?></td>
                                                                            <td class="text-right"><?=$months;?></td>
                                                                        </tr>
                                                                        <?php
                                                                    }
                                                                    ?>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="inv--total-amounts">

                                                            <div class="row mt-4">
                                                                <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                                </div>
                                                                <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                                    <div class="text-sm-right">
                                                                        <div class="row">
                                                                            <!--<div class="col-sm-8 col-7">
                                                                                <p class="">Sub Total: </p>
                                                                            </div>
                                                                            <div class="col-sm-4 col-5">
                                                                                <p class="">$3155</p>
                                                                            </div>-->

                                                                            <div class="col-sm-8 col-7 grand-total-title">
                                                                                <h4 class="">Ayishyuwe Yose : </h4>
                                                                            </div>
                                                                            <div class="col-sm-4 col-5 grand-total-amount">
                                                                                <h4 class=""><?=number_format($trx->trs_amount).' Rwf.';?></h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="inv--note">

                                                            <div class="row mt-4">
                                                                <div class="col-sm-12 col-12 order-sm-0 order-1">
                                                                    <p>Note: Thank you for using UMS system.</p>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>


                                        </div>

                                    </div>

                                </div>

                                <div class="col-xl-3">

                                    <div class="invoice-actions-btn">

                                        <div class="invoice-action-btn">

                                            <div class="row">

                                                <div class="col-xl-12 col-md-3 col-sm-6">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-print  action-print">Print or download</a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>


                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <?php
        } else {
            ?>
            <div class="infobox-1">
                <div class="info-icon">
                    <svg> ... </svg>
                </div>
                <h5 class="info-heading">Fagitire ntibashije kuboneka.</h5>
                <button class="btn btn-outline-success" onclick="history.back()">Subira Inyuma <svg> ... </svg></button>
            </div>
            <?php
        }
        ?>
    </div>
        <script src="<?=base_url()?>assets/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?=base_url()?>assets/assets/js/app.js"></script>
  
    <script src="<?=base_url()?>assets/assets/js/custom.js"></script>
        <script src="<?=base_url()?>assets/assets/js/apps/invoice-preview.js"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=base_url()?>assets/assets/js/scrollspyNav.js"></script>