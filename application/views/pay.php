
 
<!DOCTYPE html>
<html lang="zxx">
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery-2.2.3.min.js"></script>
    
<style>
    .creditly-wrapper {
	-webkit-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
	font-size: 14px;
	color: white;
}

.creditly-wrapper .credit-card-wrapper {
	padding: 0;
}

.creditly-wrapper input.has-error {
	outline: none;
	border-color: #ff7076;
	border-top-color: #ff5c61;
	border: 1px solid #ff7076;
}

.creditly-wrapper label {
	display: inline-block;
	margin-bottom: 10px;
	color: #000;
	font-size: 1.1em;
}

.creditly-wrapper .form-group {
	width: 100%;
	display: table;
}

.creditly-wrapper .card-type {
	margin-top: 10px;
}

.creditly-card-form .submit {
	outline: none;
	overflow: hidden;
	display: inline-block;
	visibility: visible !important;
	-webkit-font-smoothing: antialiased;
	border: none;
	padding: 0;
	text-decoration: none;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	-o-user-select: none;
	user-select: none;
	cursor: pointer;
}

.creditly-card-form .submit span {
	display: block;
	position: relative;
	outline: none;
	padding: 10px 20px;
	background: #000;
	font-size: 1.1em;
	font-weight: 400;
	color: #fff;
	border: none;
	text-transform: capitalize;
	letter-spacing: 1px;
	float: left;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	-ms-transition: 0.5s all;
}

.creditly-card-form .submit span:hover {
	background: #000;
	color: #fff;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	-ms-transition: 0.5s all;
}

.creditly-card-form .submit span:hover i {
	padding-left: 1em;
}

.creditly-card-form .submit span i {
	transition: .5s ease-in;
	-webkit-transition: .5s ease-in;
	-moz-transition: .5s ease-in;
	-o-transition: .5s ease-in;
	-ms-transition: .5s ease-in;
}

.form-control {
	height: 46px;
	margin-bottom: 1em;
}

.radio_one input[type="radio"] {
	margin: 0 1em;
}

@media (max-width: 768px) {
	.creditly-card-form .submit span {
		padding: 9.5px 20px;
		font-size: 1em;
		letter-spacing: 2px;
	}
}

@media (max-width: 480px) {
	.creditly-card-form .submit span {
		padding: 6px 30px 11px;
		letter-spacing: 1px;
	}
}

@media (max-width: 414px) {
	.creditly-card-form .submit span:hover i {
		padding-left: 0.5em;
	}
}

@media (max-width: 375px) {
	.creditly-card-form .submit span {
		font-size: 1.2em;
	}
}

}
/*
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
*/

/*--reset--*/

html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
dl,
dt,
dd,
ol,
nav ul,
nav li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
    display: block;
}

ol,
ul {
    list-style: none;
    margin: 0px;
    padding: 0px;
}

blockquote,
q {
    quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
    content: '';
    content: none;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

/*--start editing from here--*/

a {
    text-decoration: none;
}

.txt-rt {
    text-align: right;
}

/* text align right */

.txt-lt {
    text-align: left;
}

/* text align left */

.txt-center {
    text-align: center;
}

/* text align center */

.float-rt {
    float: right;
}

/* float right */

.float-lt {
    float: left;
}

/* float left */

.clearfix {
    clear: both;
}

/* clear float */

.pos-relative {
    position: relative;
}

/* Position Relative */

.pos-absolute {
    position: absolute;
}

/* Position Absolute */

.vertical-base {
    vertical-align: baseline;
}

/* vertical align baseline */

.vertical-top {
    vertical-align: top;
}

/* vertical align top */

nav.vertical ul li {
    display: block;
}

/* vertical menu */

nav.horizontal ul li {
    display: inline-block;
}

/* horizontal menu */

img {
    max-width: 100%;
}

/*--end reset--*/

body a:hover {
    text-decoration: none;
}

.clearfix {
    clear: both;
}

/* content */

/* body {
    background: url(../images/banner.jpg) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-attachment: fixed;
    font-family: 'PT Sans', sans-serif;
} */

.text-center {
    text-align: center;
}

h1 {
    font-size: 2.9em;
    text-transform: uppercase;
    color: #ffffff;
    text-shadow: 2px 3px 1px rgba(0, 0, 0, 0.57);
    letter-spacing: 3px;
    margin: 0.8em 1vw .9em;
    font-family: 'PT Sans', sans-serif;
}

h2,
h3 {
    color: #e6aa3c;
    letter-spacing: 0.5px;
    margin-bottom: 10px;
    font-weight: 600;
    text-transform: capitalize;
}

.responsive_tabs.w3ls_tab {
    margin: 0 5vw;
    background: #fff;
    padding: 3.5vw;
    box-sizing: border-box;
    display: flex;
    display: -webkit-flex;
    flex-wrap: wrap;
}

/*-- Pay-page --*/

.tab-grid p {
    color: #8B8B8B;
    font-size: 0.95em;
    line-height: 1.8em;
    font-weight: 400;
    margin: 10px 0;
}

.agile_pay input[type="email"],
.agile_pay input[type="password"],
.creditly-wrapper .form-control {
    display: block;
    width: 95.5%;
    padding: 15px 10px;
    height: auto;
    font-size: 14px;
    color: #212121;
    background: #fff;
    border: 1px solid #e7e7e7;
    margin-bottom: 25px;
    outline: none;
    font-family: 'PT Sans', sans-serif;
}

.agile_pay input[type="email"]:focus,
.agile_pay input[type="password"]:focus,
.creditly-wrapper .form-control:focus {
    border-color: #66afe9;
    outline: 0;
}

.agile_pay input[type="submit"] {
    outline: none;
    padding: 10px 20px;
    background: #000;
    font-size: 1em;
    font-weight: 400;
    color: #fff;
    border: none;
    text-transform: capitalize;
    letter-spacing: 1px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.agile_pay input[type="submit"]:hover {
    background: #000;
}

.swit-radio label {
    font-size: 15px;
    color: #eee;
    font-weight: 400;
    cursor: pointer;
}

.radio_one:first-child {
    margin-left: 0;
    margin: 0;
}

.radio_one {
    padding-left: 0;
    line-height: 28px;
    color: #404040;
    cursor: pointer;
}

.radio_one {
    position: relative;
    display: inline-block;
    margin-left: 15px;
}

.section_room_pay select {
    padding: 6px 10px;
    width: 100%;
    border: none;
    background: none;
    border: 1px solid #E6E4E4;
    color: #777;
    outline: none;
    font-size: 16px;
    margin-bottom: 0;
    background: #fff;
    background-size: 4% !important;
    -webkit-appearance: none;
    font-family: 'PT Sans', sans-serif;
}

select.form-control.option-fieldf {
    width: 100%;
    padding: 8px 10px;
    font-size: 0.8em;
    margin: 0.5em 0;
    outline: none;
    color: #212121;
    border: none;
    border: 1px solid #ccc;
    letter-spacing: 1px;
    text-align: left;
    font-family: 'PT Sans', sans-serif;
}

.checkout-right-basket span {
    margin-left: 1em;
}

.check_box_one {
    margin-bottom: 10px;
}

.form-control {
    border-radius: 0;
}

.btn-primary {
    color: #000;
    background-color: #e6aa3c;
    border-color: #e6aa3c;
    padding: 5px 10px;
}

button.submit.check_out {
    outline: none;
    padding: 10px 28px;
    background: #34c663;
    font-size: 1.1em;
    border-radius: 7px;
    font-weight: 400;
    color: #fff;
    border: none;
    text-transform: capitalize;
    letter-spacing: 2px;
    margin-top: 1em;
    font-family: 'PT Sans', sans-serif;
}

button.submit.check_out:hover {
    background: #e85342;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.section_room_pay {
    margin-bottom: 2em;
}

.copy-wthree {
    margin: 3em 0em;
}

.copy-wthree p {
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
}

.copy-wthree a {
    color: #000;
}

.paypal_agile {
    margin-top: 1.5em;
}

@media (max-width: 1920px) {
    h1 {
        font-size: 3.3vw;
    }
}

@media (max-width: 1024px) {
    h1 {
        font-size: 4.3vw;
    }
}

@media (max-width:736px) {
    h1 {
        font-size: 5.2vw;
    }
}

@media (max-width: 480px) {
    .copy-wthree p {
        line-height: 1.7;
    }
    .copy-wthree {
        margin: 2em 0;
    }
    h1 {
        font-size: 6.5vw;
    }
}

@media (max-width: 384px) {
    .agile_pay input[type="email"],
    .agile_pay input[type="password"],
    .creditly-wrapper .form-control {
        width: 93%;
        padding: 10px 10px;
    }
}
ul.resp-tabs-list,
p {
  margin: 0px;
  padding: 0px;
}

.resp-tabs-list li {
  font-weight: 500;
  font-size: 19px;
  display: inline-block;
  padding: 13px 15px;
  margin: 0;
  list-style: none;
  cursor: pointer;
  float: left;
  text-transform: capitalize;
}

.resp-tabs-container {
  padding: 0px;
  clear: left;
}

h5.resp-accordion {
  cursor: pointer;
  padding: 5px;
  display: none;
}

.resp-tab-content {
  display: none;
  padding: 0 4em;
}

.resp-tab-active {
  border: 0.1px solid #c1c1c1;
  border-bottom: none;
  margin-bottom: -1px !important;
  /*padding: 12px 14px 14px 14px !important;*/
}

.resp-tab-active {
  border-bottom: none;
  background-color: #fff;
}

.resp-content-active,
.resp-accordion-active {
  display: block;
}

.resp-tab-content {
  background: rgba(31, 16, 9, 0);
  border: 0.1px solid #c1c1c1;
}

h5.resp-accordion {
  border: 1px solid #c1c1c1;
  border-top: 0px solid #c1c1c1;
  background: #000;
  margin: 0px;
  padding: 10px 15px;
  font-size: 0.9em;
  letter-spacing: 0.7px;
  text-transform: uppercase;
  color: #000;
  font-weight: bold;
}

h5.resp-tab-active {
  border-bottom: 0px solid #c1c1c1 !important;
  margin-bottom: 0px !important;
  padding: 10px 15px !important;
}

h5.resp-tab-title:last-child {
  border-bottom: 12px solid #c1c1c1 !important;
  background: blue;
}

/*-----------Vertical tabs-----------*/

.resp-vtabs ul.resp-tabs-list {
  float: left;
  width: 100%;
}

.resp-vtabs .resp-tabs-list li {
  display: inline-block;
  padding: 40px 10px !important;
  margin: 0 !important;
  cursor: pointer;
  float: left;
  width: 20%;
  text-transform: capitalize;
  background: #d2d2d2;
  /* border-top: 1px solid #ececec; */
  /* border-left: 1px solid #ececec; */
  letter-spacing: 1px;
  color: #000;
  text-align: center;
  transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
  -ms-transition: 0.5s all;
}

.resp-vtabs .resp-tabs-list li:last-child {
  /*border-bottom:1px solid #ececec;*/
}

.resp-vtabs .resp-tabs-container {
  padding: 6.7em 0 0;
  background-color: #000;
  border: none;
  margin: 0 auto;
  text-align: center;
  border-radius: 0;
  clear: none;
}

.resp-vtabs .resp-tab-content {
  border: none;
}

.resp-vtabs li.resp-tab-active {
  border: none;
  border-right: none;
  position: relative;
  z-index: 1;
  margin-right: 0;
  color: #000;
  background: #168eea;
}

.resp-vtabs .resp-tabs-list li:hover {
  background: #168eea;
  color: #000;
  transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
  -ms-transition: 0.5s all;
}

.resp-arrow {
  width: 0;
  height: 0;
  float: right;
  margin-top: 3px;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-top: 12px solid #c1c1c1;
}

h5.resp-tab-active span.resp-arrow {
  border: none;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 12px solid #fff;
}

/*-----------Accordion styles-----------*/

h5.resp-tab-active {
  background: #e91e63 !important;
  color: #fff !important;
}

h5.resp-accordion:hover {
  background: #e91e63;
  color: #fff;
}

.resp-easy-accordion h5.resp-accordion {
  display: block;
}

.resp-easy-accordion .resp-tab-content {
  border: 1px solid #c1c1c1;
}

.resp-easy-accordion .resp-tab-content:last-child {
  border-bottom: 1px solid #c1c1c1 !important;
}

.resp-jfit {
  width: 100%;
  margin: 0px;
}

.resp-tab-content-active {
  display: block;
}

h5.resp-accordion:first-child {
  border-top: 1px solid #c1c1c1 !important;
}

/*-- Inner-Tabs-Styling --*/

.w3ls_tab .agile_pay {
  padding: 3px;
}

.w3ls_tab .resp-tabs-list li {
  padding: 12px 13px;
  margin: 0;
  list-style: none;
  cursor: pointer;
  float: left;
  color: #000;
  width: 250px;
  text-align: center;
  font-size: 0.9em;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.w3ls_tab .resp-tabs-list li:last-child {
  width: 25.7%;
}

.w3ls_tab .resp-tab-active {
  background-color: #000;
  color: #fff !important;
}

/*--// Inner-Tabs-Styling --*/

/*Here your can change the breakpoint to set the accordion, when screen resolution changed*/

@media only screen and (max-width: 1600px) {
  .resp-vtabs .resp-tabs-list li {
    width: 20%;
    border-right: 1px solid #eee;
  }
}

@media only screen and (max-width: 1080px) {
  .resp-vtabs .resp-tabs-container {
    width: 90%;
  }
}

@media(max-width:1080px) {
  .w3ls_tab .resp-tabs-list li {
    padding: 12px 15px;
    font-size: 0.9em;
    letter-spacing: 0.5px;
  }
}

@media only screen and (max-width: 900px) {
  .resp-vtabs .resp-tabs-container {
    padding: 4.3em 0 0;
  }
}

@media only screen and (max-width: 768px) {
  h5.resp-accordion i {
    padding-right: 1em;
  }
  ul.resp-tabs-list {
    display: none;
  }
  h5.resp-accordion {
    display: block;
  }
  .resp-vtabs .resp-tab-content {
    border: 1px solid #C1C1C1;
  }
  .resp-vtabs .resp-tabs-container {
    border: none;
    float: none;
    width: 100%;
    min-height: initial;
    clear: none;
  }
  .resp-accordion-closed {
    display: none !important;
  }
  .resp-vtabs .resp-tab-content:last-child {
    border-bottom: 1px solid #c1c1c1 !important;
  }
  .resp-tab-content {
    display: none;
    padding: 2em;
  }
  .resp-vtabs .resp-tabs-container {
    padding: 0em 0 0;
  }
}

@media (max-width: 1050px) {
  .resp-vtabs .resp-tabs-list li {
    padding: 25px 10px !important;
  }
  .resp-vtabs .resp-tabs-container {
    padding: 4.8em 0 0;
  }
}

@media (max-width: 768px) {
  .w3ls_tab .agile_pay {
    padding: 0;
  }
  .resp-vtabs .resp-tabs-container {
    padding: 0em 0 0;
  }
}

@media (max-width: 767px) {
  .tabsf-w3-agileits-grids {
    width: 50%;
    float: left;
  }
}

@media (max-width: 667px) {
  .tabsf-w3-agileits-grids {
    width: 80%;
    float: none;
    margin: 1.5em auto;
  }
  .main-topicsf {
    margin-top: 0 !important;
  }
}

@media (max-width: 480px) {
  .tabsf-w3-agileits-grids {
    width: 100%;
  }
}

@media (max-width: 384px) {
  .resp-tab-content {
    padding: 1em;
  }
}

</style>
<script>
    var Creditly = (function() {
  var getInputValue = function(e, selector) {
    var inputValue = $.trim($(selector).val());
    inputValue = inputValue + String.fromCharCode(e.which);
    return getNumber(inputValue);
  };

  var getNumber = function(string) {
    return string.replace(/[^\d]/g, "");
  };

  var reachedMaximumLength = function(e, maximumLength, selector) {
    return getInputValue(e, selector).length > maximumLength;
  };

  // Backspace, delete, tab, escape, enter, ., Ctrl+a, Ctrl+c, Ctrl+v, home, end, left, right
  var isEscapedKeyStroke = function(e) {
    return ( $.inArray(e.which,[46,8,9,0,27,13,190]) !== -1 ||
      (e.which == 65 && e.ctrlKey === true) || 
      (e.which == 67 && e.ctrlKey === true) || 
      (e.which == 86 && e.ctrlKey === true) || 
      (e.which >= 35 && e.which <= 39));
  };

  var isNumberEvent = function(e) {
    return (/^\d+$/.test(String.fromCharCode(e.which)));
  };

  var onlyAllowNumeric = function(e, maximumLength, selector) {
    e.preventDefault();
    // Ensure that it is a number and stop the keypress
    if (reachedMaximumLength(e, maximumLength, selector) || e.shiftKey || (!isNumberEvent(e))) {
      return false;
    }
    return true;
  };

  var isAmericanExpress = function(number) {
    return number.match("^(34|37)");
  };

  var shouldProcessInput = function(e, maximumLength, selector) {
    return (!isEscapedKeyStroke(e)) && onlyAllowNumeric(e, maximumLength, selector);
  };

  var CvvInput = (function() {
    var selector;
    var numberSelector;

    var createCvvInput = function(mainSelector, creditCardNumberSelector) {
      selector = mainSelector;
      numberSelector = creditCardNumberSelector;

      var getMaximumLength = function(isAmericanExpressCard) {
        if (isAmericanExpressCard) {
          return 4;
        } else {
          return 3;
        }
      };

      $(selector).keypress(function(e) {
        $(selector).removeClass("has-error");
        var number = getInputValue(e, numberSelector);
        var cvv = getInputValue(e, selector)
        var isAmericanExpressCard = isAmericanExpress(number);
        var maximumLength = getMaximumLength(isAmericanExpressCard);
        if (shouldProcessInput(e, maximumLength, selector)) {
          $(selector).val(cvv);
        }
      });
    };

    return {
      createCvvInput: createCvvInput
    };
  })();

  var NumberInput = (function() {
    var selector;
    var americanExpressSpaces = [4, 10, 15];
    var defaultSpaces = [4, 8, 12, 16];

    var getMaximumLength = function(isAmericanExpressCard) {
      if (isAmericanExpressCard) {
        return 15;
      } else {
        return 16;
      }
    };

    var createNumberInput = function(mainSelector) {
      selector = mainSelector;
      $(selector).keypress(function(e) {
        $(selector).removeClass("has-error");
        var number = getInputValue(e, selector);
        var isAmericanExpressCard = isAmericanExpress(number);
        var maximumLength = getMaximumLength(isAmericanExpressCard);
        if (shouldProcessInput(e, maximumLength, selector)) {
          var newInput;
          if (isAmericanExpressCard) {
            newInput = addSpaces(number, americanExpressSpaces);
          } else {
            newInput = addSpaces(number, defaultSpaces);
          }

          $(selector).val(newInput);
          $(selector).trigger("changed_input");
        }
      });
    };

    var addSpaces = function(number, spaces) {
      var parts = []
      var j = 0;
      for (var i=0; i<spaces.length; i++) {
        if (number.length > spaces[i]) {
          parts.push(number.slice(j, spaces[i]));
          j = spaces[i];
        } else {
          if (i < spaces.length) {
            parts.push(number.slice(j, spaces[i]));
          } else {
            parts.push(number.slice(j));
          }
          break;
        }
      }

      if (parts.length > 0) {
        return parts.join(" ");
      } else {
        return number;
      }
    };

    return {
      createNumberInput: createNumberInput
    };
  })();

  var Validation = (function() {
    var Validators = (function() {
      var expirationRegex = /(\d\d)\s*\/\s*(\d\d)/;

      var creditCardExpiration = function(selector, data) {
        var expirationVal = $.trim($(selector).val());
        var match = expirationRegex.exec(expirationVal);
        var isValid = false;
        var outputValue = ["", ""];
        if (match && match.length === 3) {
          var month = parseInt(match[1], 10);
          var year = "20" + match[2];
          if (month >= 0 && month <= 12) {
            isValid = true;
            var outputValue = [month, year];
          }
        }

        return {
          "is_valid": isValid,
          "messages": [data["message"]],
          "output_value": outputValue
        };
      };

      var isValidSecurityCode = function(isAmericanExpress, securityCode) {
        if ((isAmericanExpress && securityCode.length == 4) || 
            (!isAmericanExpress && securityCode.length == 3)) {
          return true;
        }
        return false;
      };

      var creditCard = function(selector, data) {
        var rawNumber = $(data["creditCardNumberSelector"]).val();
        var number = $.trim(rawNumber).replace(/\D/g, "");
        var rawSecurityCode = $(data["cvvSelector"]).val();
        var securityCode = $.trim(rawSecurityCode).replace(/\D/g, "");
        var messages = [];
        var isValid = true;
        var selectors = [];

        if (!isValidCreditCardNumber(number)) {
          messages.push(data["message"]["number"]);
          selectors.push(data["creditCardNumberSelector"]);
          isValid = false;
        }

        if (!isValidSecurityCode(isAmericanExpress(number), securityCode)) {
          messages.push(data["message"]["security_code"]);
          selectors.push(data["cvvSelector"]);
          isValid = false;
        }

        result = {
          "is_valid": isValid,
          "output_value": [number, securityCode],
          "selectors": selectors,
          "messages": messages
        };
        return result;
      };

      var isAmericanExpress = function(number) {
        return (number.length == 15);
      };

      // Luhn Algorithm.
      var isValidCreditCardNumber = function(value) {
        if (value.length === 0) return false;
        // accept only digits, dashes or spaces
        if (/[^0-9-\s]+/.test(value)) return false;

        var nCheck = 0, nDigit = 0, bEven = false;
        for (var n = value.length - 1; n >= 0; n--) {
          var cDigit = value.charAt(n);
          var nDigit = parseInt(cDigit, 10);
          if (bEven) {
            if ((nDigit *= 2) > 9) nDigit -= 9;
          }
          nCheck += nDigit;
          bEven = !bEven;
        }
        return (nCheck % 10) == 0;
      };

      return {
        creditCard: creditCard,
        creditCardExpiration: creditCardExpiration,
      };
    })();

    var ValidationErrorHolder = (function() {
      var errorMessages = [];
      var selectors = [];

      var addError = function(selector, validatorResults) {
        if (validatorResults.hasOwnProperty("selectors")) {
          selectors = selectors.concat(validatorResults["selectors"]);
        } else {
          selectors.push(selector)
        }

        errorMessages.concat(validatorResults["messages"]);
      };

      var triggerErrorMessage = function() {
        var errorsPayload = {
          "selectors": selectors,
          "messages": errorMessages
        };
        for (var i=0; i<selectors.length; i++) {
          $(selectors[i]).addClass("has-error");
        }
        $("body").trigger("creditly_client_validation_error", errorsPayload);
      };

      return {
        addError: addError,
        triggerErrorMessage: triggerErrorMessage
      };
    });

    var ValidationOutputHolder = (function() {
      var output = {};

      var addOutput = function(outputName, value) {
        var outputParts = outputName.split(".");
        var currentPart = output;
        for (var i=0; i<outputParts.length; i++) {
          if (!currentPart.hasOwnProperty(outputParts[i])) {
            currentPart[outputParts[i]] = {};
          }

          // Either place the value into the output, or continue going down the
          // search space.
          if (i === outputParts.length-1) {
            currentPart[outputParts[i]] = value
          } else {
            currentPart = currentPart[outputParts[i]];
          }
        }
      };

      var getOutput = function() {
        return output;
      };

      return {
        addOutput: addOutput,
        getOutput: getOutput
      }
    });

    var processSelector = function(selector, selectorValidatorMap, errorHolder, outputHolder) {
      if (selectorValidatorMap.hasOwnProperty(selector)) {
        var currentMapping = selectorValidatorMap[selector];
        var validatorType = currentMapping["type"];
        var fieldName = currentMapping["name"];
        var validatorResults = Validators[validatorType](selector, currentMapping["data"]);

        if (validatorResults["is_valid"]) {
          if (currentMapping["output_name"] instanceof Array) {
            for (var i=0; i<currentMapping["output_name"].length; i++) {
              outputHolder.addOutput(currentMapping["output_name"][i],
                  validatorResults["output_value"][i]);
            }
          } else {
            outputHolder.addOutput(currentMapping["output_name"],
                validatorResults["output_value"]);
          }
        } else {
          errorHolder.addError(selector, validatorResults);
          return true;
        }
      }
    };

    var validate = function(selectorValidatorMap) {
      var errorHolder = ValidationErrorHolder();
      var outputHolder = ValidationOutputHolder();
      var anyErrors = false;
      for (var selector in selectorValidatorMap) {
        if (processSelector(selector, selectorValidatorMap, errorHolder, outputHolder)) {
          anyErrors = true;
        }
      }
      if (anyErrors) {
        errorHolder.triggerErrorMessage();
        return false;
      } else {
        return outputHolder.getOutput();
      }
    };

    return {
      validate: validate
    };
  })();

  var ExpirationInput = (function() {
    var maximumLength = 4;
    var selector;

    var createExpirationInput = function(mainSelector) {
      selector = mainSelector
      $(selector).keypress(function(e) {
        $(selector).removeClass("has-error");
        if (shouldProcessInput(e, maximumLength, selector)) {
          var inputValue = getInputValue(e, selector);
          if (inputValue.length >= 2) {
            var newInput = inputValue.slice(0, 2) + " / " + inputValue.slice(2);
            $(selector).val(newInput);
          } else {
            $(selector).val(inputValue);
          }
        }
      });
    };

    var parseExpirationInput = function(expirationSelector) {
      var inputValue = getNumber($(expirationSelector).val());
      var month = inputValue.slice(0,2);
      var year = "20" + inputValue.slice(2);
      return {
        'year': year,
        'month': month
      };
    };

    return {
      createExpirationInput: createExpirationInput,
      parseExpirationInput: parseExpirationInput
    };
  })();

  var CardTypeListener = (function() {
    var determineCardType = function(value) {
      if (/^(34|37)/.test(value)) {
        return "American Express";
      } else if (/^4/.test(value)) {
        return "Visa";
      } else if (/^5[0-5]/.test(value)) {
        return "MasterCard";
      } else if (/^(6011|622|64[4-9]|65)/.test(value)) {
        return "Discover";
      } else {
        return "";
      }
    };

    var changeCardType = function(numberSelector, cardTypeSelector) {
      $(numberSelector).on("changed_input keypress keydown keyup", function(e) {
        var data = $(numberSelector).val();
        var cardType = determineCardType(getNumber(data));
        $(cardTypeSelector).text(cardType);
      });
    };

    return {
      changeCardType: changeCardType
    };

  })();

  var initialize = function(expirationSelector, creditCardNumberSelector, cvvSelector, cardTypeSelector, options) {
    createSelectorValidatorMap(expirationSelector, creditCardNumberSelector, cvvSelector, options);

    ExpirationInput.createExpirationInput(expirationSelector);
    NumberInput.createNumberInput(creditCardNumberSelector);
    CvvInput.createCvvInput(cvvSelector, creditCardNumberSelector);
    CardTypeListener.changeCardType(creditCardNumberSelector, cardTypeSelector);

    return this;
  };

  var selectorValidatorMap;

  var createSelectorValidatorMap = function(expirationSelector, creditCardNumberSelector, cvvSelector, options) {
    var optionValues = options || {};
    optionValues["security_code_message"] = optionValues["security_code_message"] || "Your security code is invalid";
    optionValues["number_message"] = optionValues["number_message"] || "Your credit card number is invalid";
    optionValues["expiration_message"] = optionValues["expiration_message"] || "Your credit card expiration is invalid";

    selectorValidatorMap = {};
    selectorValidatorMap[creditCardNumberSelector] = {
        "type": "creditCard",
        "data": {
          "cvvSelector": cvvSelector,
          "creditCardNumberSelector": creditCardNumberSelector,
          "message": {
            "security_code": optionValues["security_code_message"],
            "number": optionValues["number_message"]
          }
        },
        "output_name": ["number", "security_code"]
      };
    selectorValidatorMap[expirationSelector] = {
        "type": "creditCardExpiration",
        "data": {
          "message": optionValues["expiration_message"]
        },
        "output_name": ["expiration_month", "expiration_year"]
      };
  };

  var validate = function() {
    return Validation.validate(selectorValidatorMap);
  };

  return {
    initialize: initialize,
    validate: validate,
  };
})();
// Easy Responsive Tabs Plugin
(function ($) {
    $.fn.extend({
        easyResponsiveTabs: function (options) {
            //Set the default values, use comma to separate the settings, example:
            var defaults = {
                type: 'default', //default, vertical, accordion;
                width: 'auto',
                fit: true,
                closed: false,
                activate: function(){}
            }
            //Variables
            var options = $.extend(defaults, options);            
            var opt = options, jtype = opt.type, jfit = opt.fit, jwidth = opt.width, vtabs = 'vertical', accord = 'accordion';

            //Events
            $(this).bind('tabactivate', function(e, currentTab) {
                if(typeof options.activate === 'function') {
                    options.activate.call(currentTab, e)
                }
            });

            //Main function
            this.each(function () {
                var $respTabs = $(this);
                var $respTabsList = $respTabs.find('ul.resp-tabs-list');
                $respTabs.find('ul.resp-tabs-list li').addClass('resp-tab-item');
                $respTabs.css({
                    'display': 'block',
                    'width': jwidth
                });

                $respTabs.find('.resp-tabs-container > div').addClass('resp-tab-content');
                jtab_options();
                //Properties Function
                function jtab_options() {
                    if (jtype == vtabs) {
                        $respTabs.addClass('resp-vtabs');
                    }
                    if (jfit == true) {
                        $respTabs.css({ width: '100%', margin: '0px' });
                    }
                    if (jtype == accord) {
                        $respTabs.addClass('resp-easy-accordion');
                        $respTabs.find('.resp-tabs-list').css('display', 'none');
                    }
                }

                //Assigning the h5 markup to accordion title
                var $tabItemh5;
                $respTabs.find('.resp-tab-content').before("<h5 class='resp-accordion' role='tab'><span class='resp-arrow'></span></h5>");

                var itemCount = 0;
                $respTabs.find('.resp-accordion').each(function () {
                    $tabItemh5 = $(this);
                    var innertext = $respTabs.find('.resp-tab-item:eq(' + itemCount + ')').html();
                    $respTabs.find('.resp-accordion:eq(' + itemCount + ')').append(innertext);
                    $tabItemh5.attr('aria-controls', 'tab_item-' + (itemCount));
                    itemCount++;
                });

                //Assigning the 'aria-controls' to Tab items
                var count = 0,
                    $tabContent;
                $respTabs.find('.resp-tab-item').each(function () {
                    $tabItem = $(this);
                    $tabItem.attr('aria-controls', 'tab_item-' + (count));
                    $tabItem.attr('role', 'tab');

                    //First active tab, keep closed if option = 'closed' or option is 'accordion' and the element is in accordion mode 
                    if(options.closed !== true && !(options.closed === 'accordion' && !$respTabsList.is(':visible')) && !(options.closed === 'tabs' && $respTabsList.is(':visible'))) {                  
                        $respTabs.find('.resp-tab-item').first().addClass('resp-tab-active');
                        $respTabs.find('.resp-accordion').first().addClass('resp-tab-active');
                        $respTabs.find('.resp-tab-content').first().addClass('resp-tab-content-active').attr('style', 'display:block');
                    }

                    //Assigning the 'aria-labelledby' attr to tab-content
                    var tabcount = 0;
                    $respTabs.find('.resp-tab-content').each(function () {
                        $tabContent = $(this);
                        $tabContent.attr('aria-labelledby', 'tab_item-' + (tabcount));
                        tabcount++;
                    });
                    count++;
                });

                //Tab Click action function
                $respTabs.find("[role=tab]").each(function () {
                    var $currentTab = $(this);
                    $currentTab.click(function () {

                        var $tabAria = $currentTab.attr('aria-controls');

                        if ($currentTab.hasClass('resp-accordion') && $currentTab.hasClass('resp-tab-active')) {
                            $respTabs.find('.resp-tab-content-active').slideUp('', function () { $(this).addClass('resp-accordion-closed'); });
                            $currentTab.removeClass('resp-tab-active');
                            return false;
                        }
                        if (!$currentTab.hasClass('resp-tab-active') && $currentTab.hasClass('resp-accordion')) {
                            $respTabs.find('.resp-tab-active').removeClass('resp-tab-active');
                            $respTabs.find('.resp-tab-content-active').slideUp().removeClass('resp-tab-content-active resp-accordion-closed');
                            $respTabs.find("[aria-controls=" + $tabAria + "]").addClass('resp-tab-active');

                            $respTabs.find('.resp-tab-content[aria-labelledby = ' + $tabAria + ']').slideDown().addClass('resp-tab-content-active');
                        } else {
                            $respTabs.find('.resp-tab-active').removeClass('resp-tab-active');
                            $respTabs.find('.resp-tab-content-active').removeAttr('style').removeClass('resp-tab-content-active').removeClass('resp-accordion-closed');
                            $respTabs.find("[aria-controls=" + $tabAria + "]").addClass('resp-tab-active');
                            $respTabs.find('.resp-tab-content[aria-labelledby = ' + $tabAria + ']').addClass('resp-tab-content-active').attr('style', 'display:block');
                        }
                        //Trigger tab activation event
                        $currentTab.trigger('tabactivate', $currentTab);
                    });
                    //Window resize function                   
                    $(window).resize(function () {
                        $respTabs.find('.resp-accordion-closed').removeAttr('style');
                    });
                });
            });
        }
    });
})(jQuery);

</script>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
   <link href="http://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">

<script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
	(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "../../../../../../../vdo.ai/core/w3layouts/vdo.ai.js");
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125810435-1');
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<div id="content" class="main-content">
            <div class="layout-px-spacing">
        <div class="responsive_tabs w3ls_tab">
            <h1><?=@$title?></h1>
            <div id="horizontalTab" >
                <ul  class="resp-tabs-list" >
                    <li ><img style="height:40px;" src="<?=base_url()?>assets/assets/img/mtn.png">Mobile Money</li>
                    <li ><img style="height:40px" src="<?=base_url()?>assets/assets/img/visa.png"></li>
                    <li ><img style="height:40px;color:#fff" src="<?=base_url()?>assets/assets/img/bank.png"> ISHYURA NA BANKI</li>
                </ul>
                <div class="resp-tabs-container">
                    <!--tab_one-->
                    <div class="tab1">
                        <div class="agile_pay">
                            <!-- <div class=" tab-grid">
                                <p>Important: You will be redirected to PayPal's website to securely complete your payment.</p>
                                <a href="#" class="btn btn-primary">Checkout via Paypal</a>
                            </div> -->
                            <div class="paypal_agile">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <section class="creditly-wrapper payf_wrapper">
                                        <div class="credit-card-wrapper">
                                            <div class="first-row form-group">
                                                <div class="paymntf_card_number_grids">
                                                    <div class="fpay_card_number_grid_left">
                                                        <div class="controls">
                                                            <label style="color:#000" class="control-label">Agiye kwishyurwa</label><br>
                                                            <label style="color:#000" class="control-label"><b>Amafaranga:</b> <?=@$amount?> RWF/ Ukwezi</label><br>
                                                            <label style="color:#000" class="control-label"><b>Umubare W'amezi:</b> <?=@$amezi?></label><br>
                                                            <label style="color:#000" class="control-label"><b>Yose Hamwe:</b> <?=@$total?> RWF</label>
                                                            <input type="hidden" value="<?=@$total?>" name="amt">
                                                            <input type="hidden" value="<?=@$amezi?>" name="amezi">
                                                            <input type="hidden" value="<?=@$table?>" name="table">
                                                        </div>
                                                    </div>
                                                    <div class="clear"> </div>
                                                </div>
                                            </div>
                                            <input name="nber" class="btn btn-primary submit" type="submit" value="ISHYURA">
                                        </div>
                                    </section>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- //tab one -->
					<!---728x90--->

                    <!-- tab two -->
                    <div class="tab2">
                        <div class="agile_pay">
                            <form action="#" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                                <section class="creditly-wrapper payf_wrapper">
                                    <div class="credit-card-wrapper">
                                        <div class="first-row form-group">
                                            <div class="controls">
                                                <label style="color:#000" class="control-label">AMAZINA Y'IKARITA</label>
                                                <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
                                            </div>
                                            <div class="paymntf_card_number_grids">
                                                <div class="fpay_card_number_grid_left">
                                                    <div class="controls">
                                                        <label style="color:#000"  class="control-label">IMIBARE YA KONTE</label>
                                                        <input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
                                                               autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                    </div>
                                                </div>
                                                <div class="fpay_card_number_grid_right">
                                                    <div class="controls">
                                                        <label style="color:#000"  class="control-label">CVV</label>
                                                        <input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
                                                    </div>
                                                </div>
                                                <div class="clear"> </div>
                                            </div>
                                            <div class="controls">
                                                <label style="color:#000"  class="control-label">Expiration Date</label>
                                                <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                            </div>
                                        </div>
                                        <button style="color:#000"  class="submit">
                                            <span>ISHYURA </span>
                                        </button>
                                    </div>
                                </section>
                            </form>

                        </div>
                    </div>
                    <!-- //tab two -->

                    <!-- tab three -->
                    <div class="tab3">
                        <div class="agile_pay">
                            <div class="vertical_post">
                                <form action="#"  method="post">
                                    <h2 style="color:#000">HITAMO Bank YAWE</h2>
                                    <div class="swit-radio">
                                        <div class="check_box_one">
                                            <div class="radio_one">
                                                <label style="color:#000">
                                                    <input type="radio" name="radio" checked="">
                                                    <i></i>EQUITY Bank</label>
                                            </div>
                                        </div>
                                        <div class="check_box_one">
                                            <div class="radio_one">
                                                <label style="color:#000">
                                                    <input type="radio" name="radio">
                                                    <i></i>Bank of Kigali</label>
                                            </div>
                                        </div>
                                        <div class="check_box_one">
                                            <div class="radio_one">
                                                <label style="color:#000">
                                                    <input type="radio" name="radio">
                                                    <i></i>GT Bank</label>
                                            </div>
                                        </div>
                                        <div class="check_box_one">
                                            <div class="radio_one">
                                                <label style="color:#000">
                                                    <input type="radio" name="radio">
                                                    <i></i >ACCESS Bank</label>
                                            </div>
                                        </div>
                                        <div class="check_box_one">
                                            <div class="radio_one">
                                                <label style="color:#000">
                                                    <input type="radio" name="radio">
                                                    <i></i> Bank Of Africa</label>
                                            </div>
                                        </div>

                                        <div class="check_box_one">
                                            <div class="radio_one">
                                                <label style="color:#000">
                                                    <input type="radio" name="radio">
                                                    <i></i> BANK POPULAIRE</label>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <h3 style="color:#000"> NIMERO YA BANKI</h3>
                                    <div class="section_room_pay">
                                        <input class="billing-address-name form-control" type="text" name="name" placeholder="Ex:8574-42344-43234">

                                    </div>
                                    <input type="submit" value="ISHYURA">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- //tab three -->
                </div>
            </div>
       
    <!-- //payment -->
	<!---728x90--->

    <!-- Common js -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <!--// Common js -->
    <!-- easy-responsive-tabs -->
    <script src="js/easy-responsive-tabs.js"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script>
    <!-- //easy-responsive-tabs -->
    <!-- credit-card -->
 <script>
        $(function () {
            var creditly = Creditly.initialize(
                '.creditly-wrapper .expiration-month-and-year',
                '.creditly-wrapper .credit-card-number',
                '.creditly-wrapper .security-code',
                '.creditly-wrapper .card-type');

            $(".creditly-card-form .submit").click(function (e) {
                e.preventDefault();
                var output = creditly.validate();
                if (output) {
                    // Your validated credit card output
                    console.log(output);
                }
            });
        });
    </script>
    <!-- //credit-card -->
   
</div>
<!-- //Body -->

