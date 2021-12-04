

<script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('password2').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
s

</script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?=base_url()?>asset/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
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
        <form  id="msform" method="POST">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Personal </li>
                <li>Social </li>
                <li>Account </li>
                <li>Security </li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">uzuza neza ibisabwa</h2>
                <h3 class="fs-subtitle">Umwirondoro w'uhagarariye umuryango</h3>
                <input type="text" name="fname" placeholder="IZINA RYAMBER" required/>
                <input type="text" name="lname" placeholder="IZINA RYAKABIRI" required/>
                <input type="date" name="birthday" placeholder="ITARIKI Y'AMAVUKO" required/>
                <input type="text" name="id" placeholder="NIMERO Y'IRANGAMUNTU" required/>
                <input type="button" name="next" class="next action-button" value="KOMEZA"/>
            </fieldset>
            <fieldset>
            <h2 class="fs-title">uzuza neza ibisabwa</h2>
                <h3 class="fs-subtitle">Umwirondoro w'uhagarariye umuryango</h3>
                <select name="sex" required>
                <option style="display:none">Hitamo Igitsina</option>
                <option value="male">GABO</option>
                <option value="female">GORE</option>
                <option value="other">OTHER</option>
                <select>
                <select name="ubudehe" required>
                <option style="display:none">HITAMO UBUDEHE</option>
                <?php
									foreach($data as $row)
									{?>
									<option value=""><?=$row->category_name?></option>
									<?php
									}
				?>
                <select>
                <select name="isano" required>
                <option style="display:none">HITAMO ISANO</option>
                <option value="parent">UMUBYEZI</option>
                <option value="child">UMWANA</option>
                <option value="other">OTHER</option>
                <select>
                <select name="insurance" id="insurance" required>
                <option style="display:none">HITAMO UBWINSHINGIZI</option>
                <?php
									foreach($insurance as $row)
									{?>
									<option value=""><?=$row->ubw_name?></option>
									<?php
									}
				?>
                <option value="other">Other</option>
                </select>
                <input type="button" name="previous" class="previous action-button-previous" value="GARUKA"/>
                <input type="button" name="next" class="next action-button" value="KOMEZA"/>
            </fieldset>
            <fieldset>
            <h2 class="fs-title">uzuza neza ibisabwa</h2>
                <h3 class="fs-subtitle">Address z'uhagarariye umuryango</h3>
                <input type="text" name="tel" placeholder="NIMERO YA TELEPHONE"required/>
                <input type="text" name="email" placeholder="EMAIL"/>
                <input type="text" name="houseNummber" placeholder="NIMERO YINZU ATUYEMO" required/>
                <input type="button" name="previous" class="previous action-button-previous" value="GARUKA"/>
                <input type="button" name="next" class="next action-button" value="KOMEZA"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">uzuza neza ibisabwat</h2>
                <h3 class="fs-subtitle">Fungura konte yo kwinjira</h3>
                <input type="text" name="uname" placeholder="IZINA RYO KWINJIRA" required/>
                <input type="password" name="password" id="password" placeholder="IJAMBO RY'IBANGA" required/>
                <input type="password" name="comfirmPassword" id="password2" onkeyup='check();' placeholder="EMEZA IJAMBO RY'IBANGA" required/>
                <span id='message'></span><br>
                <input type="button" name="previous" class="previous action-button-previous" value="GARUKA"/>
                <input type="submit" name="submit"  value="OHEREZA"/>
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

<!-- <script>
    $("#insurance").change(function () {
  var numInputs = $(this).val();
  if (numInputs == "other"){
    $("#inputArea").append('<input name="insurance2" placeholder="ubundi bwishingizi"/>');
  }
});
</script> -->