
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../asset/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="<?=base_url()?>assets/asset/multistepform/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



<div id="content" class="main-content">

<!-- MultiStep Form -->
<div class="row">
    <div  class="col-md-10 col-md-offset-1" >
        <form  id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Personal Details</li>
                <li>Social Profiles</li>
                <li>Account Setup</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">uzuza neza ibisabwa</h2>
                <h3 class="fs-subtitle">Umwirondoro w'uhagarariye umuryango</h3>
                <input type="text" name="fname" placeholder="IZINA RYAMBER"/>
                <input type="text" name="lname" placeholder="IZINA RYAKABIRI"/>
                <input type="date" name="phone" placeholder="ITARIKI Y'AMAVUKO"/>
                <input type="text" name="address" placeholder="NIMERO Y'IRANGAMUNTU"/>
                <input type="button" name="next" class="next action-button" value="KOMEZA"/>
            </fieldset>
            <fieldset>
            <h2 class="fs-title">uzuza neza ibisabwa</h2>
                <h3 class="fs-subtitle">Umwirondoro w'uhagarariye umuryango</h3>
                <select>
                <option>Hitamo Igitsina</option>
                <option>GABO</option>
                <option>GORE</option>
                <option>OTHER</option>
                <select>
                <select>
                <option>HITAMO IKICIRO CY'UBUDEHE</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <select>
                <select>
                <option>HITAMO ISANO</option>
                <option>UMUBYEZI</option>
                <option>UMWANA</option>
                <option>OTHER</option>
                <select>
                <select>
                <option>HITAMO UBWINSHINGIZI</option>
                <option>MITUWELI</option>
                <option>RAMA</option>
                <option>MMI</option>
                <option>OTHER</option>
                <select>
                <input type="button" name="previous" class="previous action-button-previous" value="GARUKA"/>
                <input type="button" name="next" class="next action-button" value="KOMEZA"/>
            </fieldset>
            <fieldset>
            <h2 class="fs-title">uzuza neza ibisabwa</h2>
                <h3 class="fs-subtitle">Address z'uhagarariye umuryango</h3>
                <input type="text" name="umudugudu" placeholder="UBWISHINGIZI"/>
                <input type="text" name="umurenge" placeholder="NIMERO YA TELEPHONE"/>
                <input type="text" name="akagari" placeholder="EMAIL"/>
                <input type="text" name="umudugudu" placeholder="NIMERO YINZU ATUYEMO"/>
                <input type="button" name="previous" class="previous action-button-previous" value="GARUKA"/>
                <input type="button" name="next" class="next action-button" value="KOMEZA"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">uzuza neza ibisabwat</h2>
                <h3 class="fs-subtitle">Fungura konte yo kwinjira</h3>
                <input type="text" name="email" placeholder="IZINA RYO KWINJIRA"/>
                <input type="password" name="pass" placeholder="IJAMBO RY'IBANGA"/>
                <input type="password" name="cpass" placeholder="EMEZA IJAMBO RY'IBANGA"/>
                <input type="button" name="previous" class="previous action-button-previous" value="GARUKA"/>
                <input type="submit" name="submit" class="submit action-button" value="OHEREZA"/>
            </fieldset>
        </form>
        <!-- link to designify.me code snippets -->
    </div>
</div>
<!-- /.MultiStep Form -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="<?=base_url()?>assets/asset/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/asset/multistepform/js/msform.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../asset/js/ie10-viewport-bug-workaround.js"></script>