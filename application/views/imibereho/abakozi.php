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
    

<style>

@import url(https://fonts.googleapis.com/css?family=Gabriela);
@import url(https://fonts.googleapis.com/css?family=Open+Sans);


.page {
	position: relative;
	max-width: 100%;
	margin: 0 auto;
	padding: 0 20px 40px;
}

/**/
/* main styles */
/**/
.pcss3t {
	margin: 0;
	padding: 0;
	border: 0;
	outline: none;
	font-size: 0;
	text-align: left;
}
.pcss3t > input {
	position: absolute;
	left: -9999px;
}
.pcss3t > label {
	position: relative;
	display: inline-block;
	margin: 0;
	padding: 0;
	border: 0;
	outline: none;
	cursor: pointer;
	transition: all 0.1s;
	-o-transition: all 0.1s;	
	-ms-transition: all 0.1s;	
	-moz-transition: all 0.1s;	
	-webkit-transition: all 0.1s;
}
.pcss3t > label i {
	display: block;
	float: left;
	margin: 16px 8px 0 -2px;
	padding: 0;
	border: 0;
	outline: none;
	font-family: FontAwesome;
	font-style: normal;
	font-size: 17px;
}
.pcss3t > input:checked + label {
	cursor: default;
}
.pcss3t > ul {
	list-style: none;
	position: relative;
	display: block;
	overflow: hidden;
	margin: 0;
	padding: 0;
	border: 0;
	outline: none;
	font-size: 13px;
}
.pcss3t > ul > li {
	position: absolute;
	width: 100%;
	overflow: auto;
	padding: 30px 40px 40px;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	opacity: 0;
	transition: all 0.5s;
	-o-transition: all 0.5s;	
	-ms-transition: all 0.5s;	
	-moz-transition: all 0.5s;	
	-webkit-transition: all 0.5s;
}
.pcss3t > .tab-content-first:checked ~ ul .tab-content-first,
.pcss3t > .tab-content-2:checked ~ ul .tab-content-2,
.pcss3t > .tab-content-3:checked ~ ul .tab-content-3,
.pcss3t > .tab-content-4:checked ~ ul .tab-content-4,
.pcss3t > .tab-content-5:checked ~ ul .tab-content-5,
.pcss3t > .tab-content-6:checked ~ ul .tab-content-6,
.pcss3t > .tab-content-7:checked ~ ul .tab-content-7,
.pcss3t > .tab-content-8:checked ~ ul .tab-content-8,
.pcss3t > .tab-content-9:checked ~ ul .tab-content-9,
.pcss3t > .tab-content-last:checked ~ ul .tab-content-last {
	z-index: 1;
	top: 0;
	left: 0;
	opacity: 1;
	-webkit-transform: scale(1,1);
	-webkit-transform: rotate(0deg);
}


/*----------------------------------------------------------------------------*/
/*                                 EXTENSIONS                                 */
/*----------------------------------------------------------------------------*/

/**/
/* auto height */
/**/

.pcss3t-height-auto > .tab-content-first:checked ~ ul .tab-content-first,
.pcss3t-height-auto > .tab-content-2:checked ~ ul .tab-content-2,
.pcss3t-height-auto > .tab-content-3:checked ~ ul .tab-content-3,
.pcss3t-height-auto > .tab-content-4:checked ~ ul .tab-content-4,
.pcss3t-height-auto > .tab-content-5:checked ~ ul .tab-content-5,
.pcss3t-height-auto > .tab-content-last:checked ~ ul .tab-content-last {
	display: block;
}


/**/
/* grid */
/**/
.pcss3t .grid-row {
	margin-top: 5px;
}
.pcss3t .grid-row:after {
	content: '';
	display: table;
	clear: both;
}
.pcss3t .grid-row:first-child {
	margin-top: 0;
}
.pcss3t .grid-col {
	display: block;
	float: left;
	margin-left: 2%;
}
.pcss3t .grid-col:first-child {
	margin-left: 0;
}
.pcss3t .grid-col .inner {
	padding: 10px 0;
	border-radius: 5px;
	background: #f2f2f2;
	text-align: center;
}
.pcss3t .grid-col-1 {
	width: 15%;
}
.pcss3t .grid-col-2 {
	width: 32%;
}
.pcss3t .grid-col-3 {
	width: 49%;
}
.pcss3t .grid-col-4 {
	width: 66%;
}
.pcss3t .grid-col-5 {
	width: 83%;
}
.pcss3t .grid-col-offset-1 {
	margin-left: 19%;
}
.pcss3t .grid-col-offset-1:first-child  {
	margin-left: 17%;
}
.pcss3t .grid-col-offset-2 {
	margin-left: 36%;	
}
.pcss3t .grid-col-offset-2:first-child {
	margin-left: 34%;
}
.pcss3t .grid-col-offset-3 {
	margin-left: 53%;
}
.pcss3t .grid-col-offset-3:first-child {
	margin-left: 51%;
}
.pcss3t .grid-col-offset-4 {
	margin-left: 70%;
}
.pcss3t .grid-col-offset-4:first-child {
	margin-left: 68%;
}
.pcss3t .grid-col-offset-5:first-child {
	margin-left: 85%;
}


/**/
/* typography */
/**/
.pcss3t .typography {
	color: #666;
}
.pcss3t .typography h1,
.pcss3t .typography h2,
.pcss3t .typography h3,
.pcss3t .typography h4,
.pcss3t .typography h5,
.pcss3t .typography h6 {
	margin: 40px 0 0 0;
	padding: 0;
	font-family: Gabriela, Georgia, serif;
	text-align: left;
	color: #333;
}
.pcss3t .typography h1 {
	font-size: 40px;
	line-height: 60px;
	text-shadow: 3px 3px rgba(0,0,0,0.1);
}
.pcss3t .typography h2 {
	font-size: 32px;
	line-height: 48px;
	text-shadow: 2px 2px rgba(0,0,0,0.1);
}
.pcss3t .typography h3 {
	font-size: 26px;
	line-height: 38px;
	text-shadow: 1px 1px rgba(0,0,0,0.1);
}
.pcss3t .typography h4 {
	font-size: 20px;
	line-height: 30px;
}
.pcss3t .typography h5 {
	font-size: 15px;
	line-height: 23px;
	text-transform: uppercase;
}
.pcss3t .typography h6 {
	font-size: 13px;
	line-height: 20px;
	font-weight: 700;
	text-transform: uppercase;
}
.pcss3t .typography p {
	margin: 20px 0 0 0;
	padding: 0;
	line-height: 20px;
	text-align: left;
}
.pcss3t .typography ul,
.pcss3t .typography ol {
	list-style: none;
	margin: 20px 0 0 0;
	padding: 0;
}
.pcss3t .typography li {
	position: relative;
	margin-top: 5px;
	padding-left: 20px;
}
.pcss3t .typography li ul,
.pcss3t .typography li ol {
	margin-top: 5px;
}
.pcss3t .typography ul li:before {
	content: '';
	position: absolute;
	top: 8px;
	left: 0;
	width: 6px;
	height: 4px;
	background: #404040;
}
.pcss3t .typography ol {
	counter-reset: list1;
}
.pcss3t .typography ol > li:before {
	counter-increment:list1;
	content: counter(list1)'.';
	position: absolute;
	top: 0;
	left: 0;
}
.pcss3t .typography a {
	text-decoration: underline;
	color: #1889e6;
}
.pcss3t .typography a:hover {
	text-decoration: none;
}
.pcss3t .typography .pic {
	padding: 4px;
	border: 1px dotted #ccc;
}
.pcss3t .typography .pic img {
	display: block;
}
.pcss3t .typography .pic-right {
	float: right;
	margin: 0 0 10px 20px;
}
.pcss3t .typography .link {
	text-decoration: underline;
	color: #1889e6;
	cursor: pointer;
}
.pcss3t .typography .link:hover {
	text-decoration: none;
}
.pcss3t .typography h1:first-child,
.pcss3t .typography h2:first-child,
.pcss3t .typography h3:first-child,
.pcss3t .typography h4:first-child,
.pcss3t .typography h5:first-child,
.pcss3t .typography h6:first-child,
.pcss3t .typography p:first-child {
	margin-top: 0;
}
.pcss3t .typography .text-center {
	text-align: center;
}
.pcss3t .typography .text-right {
	text-align: right;
}


/**/
/* steps */
/**/
.pcss3t-steps > label {
	cursor: default;
}


/**/
/* animation effects */
/**/
.pcss3t-effect-scale > ul > li {
	-webkit-transform: scale(0.1,0.1);
}
.pcss3t-effect-rotate  > ul > li {
	-webkit-transform: rotate(180deg);
}
.pcss3t-effect-slide-top > ul > li {
	top: -40px;
}
.pcss3t-effect-slide-right > ul > li {
	left: 80px;
}
.pcss3t-effect-slide-bottom > ul > li {
	top: 40px;
}
.pcss3t-effect-slide-left > ul > li {
	left: -80px;
}



/*----------------------------------------------------------------------------*/
/*                                   LAYOUTS                                  */
/*----------------------------------------------------------------------------*/

/**/
/* top right */
/**/
.pcss3t-layout-top-right {
	text-align: right;
}


/**/
/* top center */
/**/
.pcss3t-layout-top-center {
	text-align: center;
}


/**/
/* top combi */
/**/
.pcss3t > .right {
	float: right;
}



/*----------------------------------------------------------------------------*/
/*                                    ICONS                                   */
/*----------------------------------------------------------------------------*/

/**/
/* icons positions */
/**/
.pcss3t-icons-top > label {
	text-align: center;
}
.pcss3t-icons-top > label i {
	float: none;
	margin: 0 auto -10px;
	padding-top: 17px;
	font-size: 23px;
	line-height: 23px;
	text-align: center;
}
.pcss3t-icons-right > label i {
	float: right;
	margin: 0 -2px 0 8px;
}
.pcss3t-icons-bottom > label {
	text-align: center;
}
.pcss3t-icons-bottom > label i {
	float: none;
	margin: -10px auto 0;
	padding-bottom: 17px;
	font-size: 23px;
	line-height: 23px;
	text-align: center;
}
.pcss3t-icons-only > label i {
	float: none;
	margin: 0 auto;
	font-size: 23px;
}


/**/
/* font awesome */
/**/



/*----------------------------------------------------------------------------*/
/*                               RESPONSIVENESS                               */
/*----------------------------------------------------------------------------*/

/**/
/* pad */
/**/
@media screen and (max-width: 980px) {
	
}


/**/
/* phone */
/**/
@media screen and (max-width: 767px) {
	.pcss3t > label {
		display: block;
	}
	.pcss3t > .right {
		float: none;
	}
}



/*----------------------------------------------------------------------------*/
/*                                   THEMES                                   */
/*----------------------------------------------------------------------------*/

/**/
/* default */
/**/
.pcss3t > label {	
	padding: 0 20px;
	background: #e5e5e5;
	font-size: 13px;
	line-height: 49px;
}
.pcss3t > label:hover {
	background: #f2f2f2;
}
.pcss3t > input:checked + label {
	background: #fff;
}
.pcss3t > ul {
	background: #fff;
	text-align: left;
}
.pcss3t-steps > label:hover {
	background: #e5e5e5;	
}


/**/
/* theme 1 */
/**/
.pcss3t-theme-1 > label {
	margin: 0 5px 5px 0;
	border-radius: 5px;
	background: #fff;
	box-shadow: 0 2px rgba(0,0,0,0.2);
	color: #808080;
	opacity: 0.8;
}
.pcss3t-theme-1 > label:hover {
	background: #fff;
	opacity: 1;
}
.pcss3t-theme-1 > input:checked + label {
	margin-bottom: 0;
	padding-bottom: 5px;
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0;
	color: #2b82d9;
	opacity: 1;
}
.pcss3t-theme-1 > ul {
	border-radius: 5px;
	box-shadow: 0 3px rgba(0,0,0,0.2);
}
.pcss3t-theme-1 > .tab-content-first:checked ~ ul {
	border-top-left-radius: 0;
}
@media screen and (max-width: 767px) {
	.pcss3t-theme-1 > label {
		margin-right: 0;
	}
	.pcss3t-theme-1 > input:checked + label {
		margin-bottom: 5px;
		padding-bottom: 0;
		border-radius: 5px;
	}
	.pcss3t-theme-1 > .tab-content-first:checked ~ ul {
		border-top-left-radius: 5px;
	}
}


/**/
/* theme 2 */
/**/
.pcss3t-theme-2 {
	padding: 5px;
	background: rgba(0,0,0,0.2);
}
.pcss3t-theme-2 > label {
	margin-right: 0;
	margin-bottom: 0;
	background: none;
	border-radius: 0;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
	color: #fff;
	opacity: 1;
}
.pcss3t-theme-2 > label:hover {
	background: rgba(255,255,255,0.2);
}
.pcss3t-theme-2 > input:checked + label {
	padding-bottom: 0;
	background: #fff;
	background: linear-gradient(to bottom, #e5e5e5 0%, #ffffff 100%);
	background: -o-linear-gradient(top, #e5e5e5 0%, #ffffff 100%);
	background: -ms-linear-gradient(top, #e5e5e5 0%, #ffffff 100%);
	background: -moz-linear-gradient(top, #e5e5e5 0%, #ffffff 100%);
	background: -webkit-linear-gradient(top, #e5e5e5 0%, #ffffff 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=0);
	text-shadow: 1px 1px 1px rgba(255,255,255,0.5);
	color: #822bd9;
}
.pcss3t-theme-2 > ul {
	margin: 0 -5px -5px;
	border-radius: 0;
	box-shadow: none;
}
@media screen and (max-width: 767px) {
	.pcss3t-theme-2 > ul {
		margin-top: 5px;
	}
}


/**/
/* theme 3 */
/**/
.pcss3t-theme-3 {
	background: rgba(0,0,0,0.8);	
}
.pcss3t-theme-3 > label {
	background: none;
	border-right: 1px dotted rgba(255,255,255,0.5);
	text-align: center;
	color: #fff;
	opacity: 0.6;
}
.pcss3t-theme-3 > label:hover {
	background: none;
	color: #d9d92b;
	opacity: 0.8;
}
.pcss3t-theme-3 > input:checked + label {
	background: #d9d92b;
	color: #000;
	opacity: 1;
}
.pcss3t-theme-3 > ul {
	border-top: 4px solid #d9d92b;
	border-bottom: 4px solid #d9d92b;
	border-radius: 0;
	box-shadow: none;
}


/**/
/* theme 4 */
/**/
.pcss3t-theme-4 > label {
	margin: 0 10px 10px 0;
	border-radius: 5px;
	background: #78c5fd;
	background: linear-gradient(to bottom, #78c5fd 0%, #2c8fdd 100%);
	background: -o-linear-gradient(top, #78c5fd 0%, #2c8fdd 100%);
	background: -ms-linear-gradient(top, #78c5fd 0%, #2c8fdd 100%);
	background: -moz-linear-gradient(top, #78c5fd 0%, #2c8fdd 100%);
	background: -webkit-linear-gradient(top, #78c5fd 0%, #2c8fdd 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#78c5fd', endColorstr='#2c8fdd', GradientType=0);
	box-shadow: inset 0 1px rgba(255,255,255,0.5), 0 1px rgba(0,0,0,0.5);
	line-height: 39px;
	text-shadow: 0 1px rgba(0,0,0,0.5);
	color: #fff;
}
.pcss3t-theme-4 > label:hover {
	background: #90cffc;
	background: linear-gradient(to bottom, #90cffc 0%, #439bde 100%);
	background: -o-linear-gradient(top, #90cffc 0%, #439bde 100%);
	background: -ms-linear-gradient(top, #90cffc 0%, #439bde 100%);
	background: -moz-linear-gradient(top, #90cffc 0%, #439bde 100%);
	background: -webkit-linear-gradient(top, #90cffc 0%, #439bde 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#90cffc', endColorstr='#439bde', GradientType=0);
}
.pcss3t-theme-4 > input:checked + label {
	top: 1px;
	background: #5f9dc9;
	background: linear-gradient(to bottom, #5f9dc9 0%, #2270ab 100%);
	background: -o-linear-gradient(top, #5f9dc9 0%, #2270ab 100%);
	background: -ms-linear-gradient(top, #5f9dc9 0%, #2270ab 100%);
	background: -moz-linear-gradient(top, #5f9dc9 0%, #2270ab 100%);
	background: -webkit-linear-gradient(top, #5f9dc9 0%, #2270ab 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5f9dc9', endColorstr='#2270ab', GradientType=0);
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.5), 0 1px rgba(255,255,255,0.5);
	text-shadow: none;
}
.pcss3t-theme-4 > ul {
	border-radius: 5px;
	box-shadow: 0 2px 2px rgba(0,0,0,0.3);
}
@media screen and (max-width: 767px) {
	.pcss3t-theme-4 > label {
		margin-right: 0;
	}
}


/**/
/* theme 5 */
/**/
.pcss3t-theme-5 {
	padding: 15px;
	border-radius: 5px;
	background: #ad6395;
	background: linear-gradient(to right, #ad6395 0%, #a163ad 100%);
	background: -o-linear-gradient(left, #ad6395 0%, #a163ad 100%);
	background: -ms-linear-gradient(left, #ad6395 0%, #a163ad 100%);
	background: -moz-linear-gradient(left, #ad6395 0%, #a163ad 100%);
	background: -webkit-linear-gradient(left, #ad6395 0%, #a163ad 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5f9dc9', endColorstr='#a163ad', GradientType=1);
}
.pcss3t-theme-5 > label {
	margin-right: 10px;
	margin-bottom: 15px;
	background: none;
	border-radius: 5px;
	text-align: center;
	color: #fff;
	opacity: 1;
}
.pcss3t-theme-5 > label:hover {
	background: rgba(255,255,255,0.15);
}
.pcss3t-theme-5 > input:checked + label {
	background: rgba(255,255,255,0.3);
	color: #000;
}
.pcss3t-theme-5 > input:checked + label:after {
	content: '';
	position: absolute;
	top: 100%;
	left: 50%;
	margin-top: 10px;
	margin-left: -6px;
	border-right: 6px solid transparent;
	border-bottom: 6px solid #fff;
	border-left: 6px solid transparent;
}
.pcss3t-theme-5 > ul {
	margin: 0 -15px -15px;
	border-radius: 0 0 5px 5px;
	box-shadow: none;
}
@media screen and (max-width: 767px) {
	.pcss3t-theme-5 > input:checked + label:after {
		display: none;
	}
}


/*----------------------------------------------------------------------------*/
/*                               CUSTOMIZATION                                */
/*----------------------------------------------------------------------------*/

/**/
/* height */
/**/
.pcss3t > ul,
.pcss3t > ul > li {
	height: 600px;
}
</style>
<div id="content" class="main-content">
            <div class="layout-px-spacing"><link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" />
	</head>
	<body>

		<div class="page">
			<h1>ABAKOZI</h1>			
	
			
			<!-- tabs -->
			<div class="pcss3t pcss3t-effect-scale pcss3t-theme-1">
				<input type="radio" name="pcss3t" checked  id="tab1"class="tab-content-first">
				<label for="tab1"><i class="icon-bolt"></i>ABAKOZI</label>
				
				<input type="radio" name="pcss3t" id="tab2" class="tab-content-2">
				<label for="tab2"><i class="icon-picture"></i>ABASHOMERI</label>
              <ul>
					<li class="tab-content tab-content-first typography">
                    <table id="zero-config" border=1 class="table table-striped"  style="width:100%; color:#000; font-family:arial">
                                <thead>
                                    <tr style="background-color:#f1f1f1"><th>No</th>
                                        <th>AMAZINA</th>
                                        <th>IRANGAMUNTU</th>
                                        <th>NIMERO YA TELEPHONE</th>
                                        <th>ITALIKI Y'AMAVUKO</th>
                                        <th>IGITSINA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr style="background-color:#f1f1f1"><th>No</th>
                                <th>AMAZINA</th>
                                        <th>IRANGAMUNTU</th>
                                        <th>NIMERO YA TELEPHONE</th>
                                        <th>ITALIKI Y'AMAVUKO</th>
                                        <th>IGITSINA</th>
                                    </tr>
                                </tfoot>
                            </table>
                
                </li>
					
                <li class="tab-content tab-content-2 typography">
                <table id="default-ordering" border=1  style="width:100%; color:#000; font-family:arial">
                                <thead>
                                    <tr style="background-color:#f1f1f1"><th>No</th>
                                        <th>AMAZINA</th>
                                        <th>IRANGAMUNTU</th>
                                        <th>NIMERO YA TELEPHONE</th>
                                        <th>ITALIKI Y'AMAVUKO</th>
                                        <th>IGITSINA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> <tr><td>1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr style="background-color:#f1f1f1"><th>No</th>
                                <th>AMAZINA</th>
                                        <th>IRANGAMUNTU</th>
                                        <th>NIMERO YA TELEPHONE</th>
                                        <th>ITALIKI Y'AMAVUKO</th>
                                        <th>IGITSINA</th>
                                    </tr>
                                </tfoot>
                            </table>	</li>
					
				
				</ul>
			</div>
			<!--/ tabs -->
		</div>
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
      <script>
        $('#zero-config').DataTable({
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
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        });
    </script>