<meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
 
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">

.social-feed-separated .social-avatar {
  float: left;
  padding: 0;
  
}
.social-feed-separated .social-avatar img {
  width: 52px;
  height: 52px;
  border: 1px solid #e7eaec;
}
.social-feed-separated .social-feed-box .social-avatar {
  padding: 15px 15px 0 15px;
  float: none;
}
.social-feed-box {
  /*padding: 15px;*/
  border: 1px solid #e7eaec;
  background: #fff;
  margin-bottom: 15px;
}
.article .social-feed-box {
  margin-bottom: 0;
  border-bottom: none;
}
.article .social-feed-box:last-child {
  margin-bottom: 0;
  border-bottom: 1px solid #e7eaec;
}
.article .social-feed-box p {
  font-size: 13px;
  line-height: 18px;
}
.social-action {
  margin: 15px;
}
.social-avatar {
  padding: 15px 15px 0 15px;
 
}
.social-comment .social-comment {
  margin-left: 45px;
}
.social-avatar img {
  height: 40px;
  border-radius:50px;
  width: 40px;
  margin-right: 10px;
}
.social-avatar .media-body a {
  font-size: 14px;
  display: block;
  
}
.social-body {
  padding: 15px;
}
.social-body img {
  margin-bottom: 10px;
  border-radius:5px;
  width:100%;
  border: 20px solid #F0F0F0;
  text-align:center;
  
}
.social-footer {
  border-top: 1px solid #e7eaec;
  padding: 10px 15px;
  background: #f9f9f9;
}
.social-footer .social-comment img {
  width: 32px;
  margin-right: 10px;
}
.social-comment:first-child {
  margin-top: 0;
}
.social-comment {
  margin-top: 15px;
}
.social-comment textarea {
  font-size: 12px;
}


.form-control, .single-line {
    background-color: #FFFFFF;
    background-image: none;
    border: 1px solid #e5e6e7;
    border-radius: 1px;
    color: inherit;
    display: block;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
    font-size: 14px;
}


.ibox {
  clear: both;
  margin-bottom: 25px;
  margin-top: 0;
  padding: 0;
}
.ibox.collapsed .ibox-content {
  display: none;
}
.ibox.collapsed .fa.fa-chevron-up:before {
  content: "\f078";
}
.ibox.collapsed .fa.fa-chevron-down:before {
  content: "\f077";
}
.ibox:after,
.ibox:before {
  display: table;
}
.ibox-title {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background-color: #ffffff;
  border-color: #e7eaec;
  border-image: none;
  border-style: solid solid none;
  border-width: 3px 0 0;
  color: inherit;
  margin-bottom: 0;
  padding: 14px 15px 7px;
  min-height: 48px;
}
.ibox-content {
  background-color: #ffffff;
  color: inherit;
  padding: 15px 20px 20px 20px;
  border-color: #e7eaec;
  border-image: none;
  border-style: solid solid none;
  border-width: 1px 0;
}
.ibox-footer {
  color: inherit;
  border-top: 1px solid #e7eaec;
  font-size: 90%;
  background: #ffffff;
  padding: 10px 15px;
}


.panel {
    box-shadow: 0 2px 0 rgba(0,0,0,0.075);
    border-radius: 0;
    border: 0;
    margin-bottom: 15px;
}

.panel .panel-footer, .panel>:last-child {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.panel .panel-heading, .panel>:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.panel-body {
    padding: 25px 20px;
}

</style>

<div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                <div class="container">
<div class="col-md-9" style="padding-right:30px" >
<div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4 style="font-family:Sans-serif; text-align:center; text-transform:none; color:#000; font-weight:bold">UZUZA NEZA HANO IBISABWA</h4>
                                        </div>
                                    </div>
                                </div>
                                <div style="color:#000; font-weight:bold" class="widget-content widget-content-area">
                                    <?php echo form_open_multipart(site_url('akagari/emeza_umuyobozi'));?>
                                        <div class="form-group mb-4">
                                            <label style="color:#000;" for="exampleFormControlInput2">NIMERO Y'IRANGAMUNTU</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput2" name="id" placeholder="UWATSINZE AMATORA">
                                        </div>
                                        <!-- <div class="form-group mb-4">
                                            <label style="color:#000;" for="exampleFormControlInput2">IZINA RYAMBERE</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="IZINA RYAMBERE">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label style="color:#000;" for="exampleFormControlInput2">IZINA RYANYUMA</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="IZINA RYANYUMA">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label style="color:#000;" for="exampleFormControlInput2">NIMERO YA TELEPHONE</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="+2507865643534">
                                        </div> -->
                                        <div class="form-group mb-4">
                                            <label style="color:#000;" for="exampleFormControlInput2">UMUDUGUDU</label>
                                            <select class="mt-4 mb-4 btn btn-primary" name="village" required>
                                                <option value="" disabled selected>HITAMO UMUDUGUDU</option>
                                                <?php
                                                if (is_array($data)) {
                                                    foreach ($data as $value) {
                                                        ?>
                                                        <option value="<?=$value->village_code?>"><?=$value->village_name?></option>
                                                        <?php
                                                    }
                                                }else {
                                                    ?>
                                                    <option value="">no village availabe</option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                            <input type="submit" value="SUZUMA" class="mt-4 mb-4 btn btn-primary" id="exampleFormControlInput2">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

   
   
</div>
</div>
<div class="test" style="overflow: scroll;height:600px">
                        <div class="widget widget-activity-five" style="overflow: scroll;">
   <h5 style="padding-top:20px"> ABATURAGE</h>
                           <center>
                            <div class="widget-content">
                                <div id="chart-2" class=""></div>
                            </div>
</center>
<hr>
<h5>ABASHYITSI</h5>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<canvas id="myChartt" style="padding-right:15px;" width="350" height="350"></canvas>

<script>
var ctx = document.getElementById('myChartt').getContext('2d');
var myChartt = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [18, 19, 20, 15, 16, 10],
            backgroundColor: [
                'Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'
            ],
            borderColor: [
                'Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
<script src="<?=base_url()?>assets/plugins/apex/apexcharts.min.js"></script>
    <script src="<?=base_url()?>assets/assets/js/dashboard/dash_1.js"></script>

                    <!-- <div class="test" >
                        <div class="widget widget-activity-five">

                            <div class="widget-heading">
                                <h5 class=""> AMATANGAZO</h5>

                                <div class="task-action">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                            <a class="dropdown-item" href="javascript:void(0);">View All</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Mark as Read</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content">

                                <div class="w-shadow-top"></div>

                                <div class="mt-container mx-auto"  style="height: 470px; overflow: auto;">
                                    <div  class="timeline-line">
                                        
                                        <div class="item-timeline timeline-new" >
                                            <div class="t-dot">
                                                <div class="t-secondary" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5 style="color:#000; font-weight:bold">Amabwiriza yasohotse yo kwirinda corona virus : <a href="javscript:void(0);"><span>Soma Itangazo</span></a></h5>
                                                </div>
                                                <p style="color:#0f0999;font-weight:bold">27 Feb 2020, 12:00PM</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5 style="color:#000;font-weight:bold">Menya Aho urukingo rwa covid-19 ruri gutangirwa: <a href="javascript:void(0);"><span>Soma Itangazo</span></a></h5>
                                                </div>
                                                <p style="color:#0f0999;font-weight:bold">28 Feb 2020, 12:30PM</p>
                                            </div>
                                        </div>
                                         
                                        <div class="item-timeline timeline-new" >
                                            <div class="t-dot">
                                                <div class="t-secondary" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5 style="color:#000;font-weight:bold">Itangazo Aho urukingo rwa covid-19 ruri gutangirwa: <a href="javascript:void(0);"><span>Soma Itangazo</span></a></h5>
                                                </div>
                                                <p style="color:#0f0999;font-weight:bold">28 Feb 2020, 12:30PM</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5 style="color:#000;font-weight:bold"> Aho umuganda usoza ukwezi gutaha uzabera: <a href="javascript:void(0);"><span>Soma Itangazo</span></a></h5>
                                                </div>
                                                <p style="color:#0f0999;font-weight:bold">28 Feb 2020, 2:40PM</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5 style="color:#000;font-weight:bold">Menya Aho urukingo rwa covid-19 ruri gutangirwa: <a href="javascript:void(0);"><span>Soma Itangazo</span></a></h5>
                                                </div>
                                                <p style="color:#0f0999;font-weight:bold">28 Feb 2020, 13:30PM</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Menya Aho urukingo rwa covid-19 ruri gutangirwa: <a href="javascript:void(0);"><span>Soma Itangazo</span></a></h5>
                                                </div>
                                                <p>28 Feb 2020, 11:31PM</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Menya Aho urukingo rwa covid-19 ruri gutangirwa: <a href="javascript:void(0);"><span>Soma Itangazo</span></a></h5>
                                                </div>
                                                <p>28 Feb 2020, 6:55PM</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Server rebooted successfully</h5>
                                                    <span class=""></span>
                                                </div>
                                                <p>06 Apr, 2020</p>
                                            </div>
                                        </div>                                      
                                    </div>                                    
                                </div>

                                <div class="w-shadow-bottom"></div>
                            </div> --> -->
                        </div>
                    </div>