
<link href="<?=base_url()?>assets/assets/css/apps/invoice-preview.css" rel="stylesheet" type="text/css" />

    <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row invoice layout-top-spacing layout-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                        <div class="doc-container">

                            <div class="row">

                                <div class="col-xl-12">

                                    <div class="invoice-container">
                                        <div class="invoice-inbox">
                                            
                                            <div id="ct" class="">
                                                
                                                <div class="invoice-00001">
                                                    <div class="content-section">
    
                                                        <div class="inv--head-section inv--detail-section">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-12 mr-auto">
                                                                        <div class="d-flex float-right">
                                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add member</button>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        
                                                            <div class="row">
                                                                <?php
                                                                $id;
                                                                $ld;
                                                                $count = 0;
                                                                if($data){
                                                                    foreach($data as $row){
                                                                        $id = $row->ldr_leader_id;
                                                                        $ld = $row->ldr_firstname;
                                                                        $count++;
                                                                        if($count==1){
                                                                        ?>
                                                                
                                                                    <div class="col-sm-6 col-12 mr-auto">
                                                                        <div class="d-flex">
                                                                            <img class="company-logo" src="assets/img/dadoh.png" alt="profile">
                                                                            <h3 class="in-heading align-self-center"><?=$row->ldr_lastname." ".$row->ldr_firstname?></h3>
                                                                        </div>
                                                                    </div>
    
                                                                    <div class="col-sm-6 text-sm-right">
                                                                        <p class="inv-list-number"><span class="inv-title"></span> <span class="inv-number"></span></p>
                                                                    </div>
    
                                                                    <div class="col-sm-6 align-self-center mt-3">
                                                                        <p class="inv-street-addr">Umucurizi</p>
                                                                        <p class="inv-email-address"><?=$row->ldr_email?></p>
                                                                        <p class="inv-email-address"><?=$row->ldr_phone?></p>
                                                                    </div>
                                                                   <?php
                                                                    }
                                                                }
                                                                }else{
                                                                    foreach($family as $row){
                                                                        $id = $row->ldr_leader_id;
                                                                        $count++;
                                                                        if($count==1){
                                                                        ?>
                                                                
                                                                    <div class="col-sm-6 col-12 mr-auto">
                                                                        <div class="d-flex">
                                                                            <img class="company-logo" src="assets/img/dadoh.png" alt="profile">
                                                                            <h3 class="in-heading align-self-center"><?=$row->ldr_lastname." ".$row->ldr_firstname?></h3>
                                                                        </div>
                                                                    </div>
    
                                                                    <div class="col-sm-6 text-sm-right">
                                                                        <p class="inv-list-number"><span class="inv-title"></span> <span class="inv-number"></span></p>
                                                                    </div>
    
                                                                    <div class="col-sm-6 align-self-center mt-3">
                                                                        <p class="inv-street-addr">Umucurizi</p>
                                                                        <p class="inv-email-address"><?=$row->ldr_email?></p>
                                                                        <p class="inv-email-address"><?=$row->ldr_phone?></p>
                                                                
                                                                    </div>
                                                                   <?php
                                                                    }
                                                                }
                                                                }
                                                                ?>
                                                            
                                                            </div>
                                                            
                                                        </div>

                                                        <!-- The Modal -->
                                                        <div class="modal" id="myModal">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">


                                                                <form method="POST" enctype="multipart/form-data" id="msform">
                                                                    <!-- Modal body -->
                                                                    <div class="modal-body" class="was-validated">
                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                <input type="text" class="form-control" id="email" placeholder="Izina rya mbere" name="fname">
                                                                                </div>
                                                                                <div class="col">
                                                                                <input type="text" class="form-control" placeholder="Izina ry'idini" name="lname">
                                                                                </div>
                                                                            </div>                                                                            
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" id="uname" placeholder="Telephone" name="tel" required>
                                                                            <div class="valid-feedback">Valid.</div>
                                                                            <div class="invalid-feedback">Please fill out this field.</div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" id="uname" placeholder="Indangamuntu" name="nid" required>
                                                                            <div class="valid-feedback">Valid.</div>
                                                                            <div class="invalid-feedback">Please fill out this field.</div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" id="uname" placeholder="email" name="email" required>
                                                                            <div class="valid-feedback">Valid.</div>
                                                                            <div class="invalid-feedback">Please fill out this field.</div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="date" class="form-control" id="uname" placeholder="Itariki y'amavuko" name="dob" required>
                                                                            <div class="valid-feedback">Valid.</div>
                                                                            <div class="invalid-feedback">Please fill out this field.</div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select class="form-control"name="ins" required>
                                                                            <?php
                                                                                foreach($insurance as $row){
                                                                                    ?>
                                                                                    <option value="<?=$row->ubw_id?>"><?=$row->ubw_name?></option>
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" id="uname" placeholder="Isano" name="isano" required>
                                                                            <div class="valid-feedback">Valid.</div>
                                                                            <div class="invalid-feedback">Please fill out this field.</div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email">Igitsina:</label>
                                                                            <input type="radio" name="sex" value="male"> <b>Gabo</b>
                                                                            <input type="radio" name="sex" value="female"> <b>Gore</b>
                                                                        </div>
                                                                        <input type="hidden"  name="id" value="<?=$id?>">
                                                                    </div>

                                                                    <!-- Modal footer -->
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                        <input type="submit" name="save" class="btn btn-success" value="Bika amakuru">
                                                                    </div>
                                                                </form>                                                            

                                                                </div>
                                                            </div>
                                                            </div
                                                       <center> <b3 style="font-size:26px;color:black; font-weight:bold; text-align:center">    ABAGIZE UMURYANGO WA <?=$ld?></b3></center>

                                                        <div class="inv--product-table-section">
                                                            <div class="table-responsive">
                                                            <table id="default-ordering" style="width:100%; color:#000; font-family:arial">
                                <thead>
                                    <tr style="background-color:#f1f1f1">
                                    <th>No</th>
                                        <th>AMAZINA</th>
                                        <th>IRANGAMUNTU</th>
                                        <th>NIMERO YA TELEPHONE</th>
                                        <th>ITALIKI Y'AMAVUKO</th>
                                        <th>UBWISHINGIZI</th>
                                        <th>IGITSINA</th>
                                        <th>ISANO</th>
                                    </tr>
                                </thead>
                                                                    <tbody>
                                <?php
                                $nber = 0;
                                if($data){
                                    foreach($data as $row)
                                  {
                                      $nber++;
                                      ?>
                                    <tr><td><?=$nber?></td>
                                        <td><?php echo $row->mbr_lastname." ".$row->mbr_firstname; ?></td>
                                        <td><?php echo $row->mbr_nid; ?></td>
                                        <td><?php echo $row->mbr_phone; ?></td>
                                        <td><?php echo $row->mbr_dob; ?></td>
                                        <td><?php echo $row->ubw_name; ?></td>
                                        <td><?php echo $row->mbr_gender; ?></td>
                                        <td><?=$row->mbr_relationship?></td>
                                    </tr>
                                  <?php
                                  }
                                }else{
                                    ?>
                                    <tr>
                                        <td colspan="7"><center><?="no data"?></center></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-9 align-self-center mt-3 text-sm-right">
                                                          <b3 style="font-size:26px;color:black; font-weight:bold">    ANDI MAKURU YO MUMURYANGO</b3>
                                                              </div>
                                                              <br>
                                                              <br>
                                                        <div class="inv--detail-section inv--customer-detail-section">

                                                            <div class="row">
    
                                                                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                                    <p class="inv-to">RAPORO Y'IBARURA</p>
                                                                </div>

                                                                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 align-self-center order-sm-0 order-1 inv--payment-info">
                                                                    <h6 class=" inv-title">IMIHIGO Y'UMURYANGO:</h6>
                                                                </div>
                                                                
                                                                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                                <p><span class=" inv-subtitle"><b style="color:#0f0965">AFITE GIRINKA:</b></span> <span>YEGO</span></p>
                                                                        <p><span class=" inv-subtitle"><b style="color:#0f0965">AFITE AKARIMA KIGIKONI:</b> </span> <span>YEGO</span></p>
                                                                        <p><span class=" inv-subtitle"><b style="color:#0f0965">ACANA AKORESHEJE IKI:</b></span> <span>GAS</span></p>
                                                                        <p><span class=" inv-subtitle"><b style="color:#0f0965">UBWISHINGIZI AKORESHA:</b> </span> <span>RAM</span></p>
                                                                   
                                                                </div>
                                                                
                                                                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 order-sm-0 order-1">
                                                                    <div class="inv--payment-info">
                                                                    <p class="inv-customer-name">UMUHIGO No:<a href="#"><u style="color:#0f0965">#00001</u></a></p>
                                                                    <p class="inv-customer-name">UMUHIGO No:<a href="#"><u style="color:#0f0965">#00002</u></a></p>
                                                                    <p class="inv-customer-name">UMUHIGO No:<a href="#"><u style="color:#0f0965">#00003</u></a></p>
                                                                    <p class="inv-customer-name">UMUHIGO No:<a href="#"><u style="color:#0f0965">#00004</u></a></p>
                                                                    <p class="inv-customer-name">UMUHIGO No:<a href="#"><u style="color:#0f0965">#00005</u></a></p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            
                                                        </div>

                                                        
                                                        <div class="inv--total-amounts">
                                                        
                                                        

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
                </div>
            </div>
           
        </div>
        <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
  
    <script src="assets/js/custom.js"></script>
        <script src="assets/js/apps/invoice-preview.js"></script>
