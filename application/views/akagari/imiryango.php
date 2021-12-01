
   <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link rel="icon" type="image/x-icon" href="<?=base_url()?>assets/assets/img/favicon.ico"/>
    <link href="<?=base_url()?>assets/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?=base_url()?>assets/assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/table/datatable/dt-global_style.css">
    
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
 <!--  BEGIN CONTENT AREA  -->
 <div id="content" class="main-content">
            <div class="layout-px-spacing">
                
                <div class="row layout-top-spacing" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                        <form method="GET" style='float:right; margin-right:20px' action="">
                        <select class="mt-4 mb-4 btn btn-primary" name='umu'>
                        <option>select village
                <option>inyamibwa
                <option>inganji 
                </select>
                <input class="mt-4 mb-4 btn btn-primary" type='submit' name='submitt' value='go'>
               </form>
               <?php
               if(isset($_GET['submitt'])){
               $selected=$_GET['umu'];
               if($selected =='inyamibwa'){
               ?><h1>INYAMIBWA VILLAGE</H1>
                            <table id="default-ordering" border=1  style="width:100%; color:#000; font-family:arial">
                                <thead>
                                    <tr style="background-color:#f1f1f1"><th>No</th>
                                        <th>AMAZINA</th>
                                        <th>IRANGAMUNTU</th>
                                        <th>NIMERO YA TELEPHONE</th>
                                        <th>NIMERO Y'INZU</th>
                                        <th>ITALIKI Y'AMAVUKO</th>
                                        <th>IGITSINA</th>
                                        <th>FUNGURA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>2</td>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>3</td>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>4</td>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr  style="background-color:#f1f1f1"><td>5</td>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>6</td>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr  style="background-color:#f1f1f1"><td>7</td>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>8</td>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>9</td>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>10</td>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>11</td>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>12</td>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>13</td>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>14</td>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>15</td>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>16</td>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>17</td>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>18</td>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>19</td>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>20</td>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>21</td>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>22</td>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>23</td>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr  style="background-color:#f1f1f1"><td>24</td>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sidney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr style="background-color:#f1f1f1"><th>No</th>
                                <th>AMAZINA</th>
                                        <th>IRANGAMUNTU</th>
                                        <th>NIMERO YA TELEPHONE</th>
                                        <th>NIMERO Y'INZU</th>
                                        <th>ITALIKI Y'AMAVUKO</th>
                                        <th>IGITSINA</th>
                                        <th>FUNGURA</th>
                                    </tr>
                                </tfoot>
                            </table>


                            <?php }else{?>
                              <h1>INGANJI VILLAGE</H1>
                            <table id="default-ordering" border=1  style="width:100%; color:#000; font-family:arial">
                                <thead>
                                    <tr style="background-color:#f1f1f1"><th>No</th>
                                        <th>AMAZINA</th>
                                        <th>IRANGAMUNTU</th>
                                        <th>NIMERO YA TELEPHONE</th>
                                        <th>NIMERO Y'INZU</th>
                                        <th>ITALIKI Y'AMAVUKO</th>
                                        <th>IGITSINA</th>
                                        <th>FUNGURA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>2</td>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>3</td>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>4</td>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr  style="background-color:#f1f1f1"><td>5</td>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>6</td>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr  style="background-color:#f1f1f1"><td>7</td>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>8</td>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>9</td>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>10</td>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>11</td>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>12</td>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>13</td>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>14</td>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>15</td>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>16</td>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>17</td>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>18</td>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>19</td>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>20</td>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>21</td>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>22</td>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>23</td>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr  style="background-color:#f1f1f1"><td>24</td>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sidney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr style="background-color:#f1f1f1"><th>No</th>
                                <th>AMAZINA</th>
                                        <th>IRANGAMUNTU</th>
                                        <th>NIMERO YA TELEPHONE</th>
                                        <th>NIMERO Y'INZU</th>
                                        <th>ITALIKI Y'AMAVUKO</th>
                                        <th>IGITSINA</th>
                                        <th>FUNGURA</th>
                                    </tr>
                                </tfoot>
                            </table>
<?php }} else{?>
  <h1>ALL VILLAGE</H1>
                            <table id="default-ordering" border=1  style="width:100%; color:#000; font-family:arial">
                                <thead>
                                    <tr style="background-color:#f1f1f1"><th>No</th>
                                        <th>AMAZINA</th>
                                        <th>IRANGAMUNTU</th>
                                        <th>NIMERO YA TELEPHONE</th>
                                        <th>NIMERO Y'INZU</th>
                                        <th>ITALIKI Y'AMAVUKO</th>
                                        <th>IGITSINA</th>
                                        <th>FUNGURA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>2</td>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>3</td>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>4</td>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr  style="background-color:#f1f1f1"><td>5</td>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>6</td>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr  style="background-color:#f1f1f1"><td>7</td>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>8</td>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>9</td>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>10</td>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>11</td>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>12</td>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>13</td>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>14</td>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>15</td>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>16</td>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>17</td>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>18</td>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>19</td>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>20</td>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>21</td>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>22</td>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr><td>23</td>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                    <tr  style="background-color:#f1f1f1"><td>24</td>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sidney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                        <td class="text-center"><a href="<?=base_url()?>akagari/kureba_umuryango"><button class="btn btn-primary btn-sm">Fungura</button></a> </td>

                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr style="background-color:#f1f1f1"><th>No</th>
                                <th>AMAZINA</th>
                                        <th>IRANGAMUNTU</th>
                                        <th>NIMERO YA TELEPHONE</th>
                                        <th>NIMERO Y'INZU</th>
                                        <th>ITALIKI Y'AMAVUKO</th>
                                        <th>IGITSINA</th>
                                        <th>FUNGURA</th>
                                    </tr>
                                </tfoot>
                            </table>
<?php }?>
                        </div>
                    </div>

                </div>

                </div>
      
        </div>
   
       
  
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?=base_url()?>assets/plugins/table/datatable/datatables.js"></script>
    <script>        
        $('#default-ordering').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "order": [[ 3, "desc" ]],
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered'); }
	    } );
    </script>