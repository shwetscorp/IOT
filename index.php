
<?php

if(isset($_GET['submit'])){

$input_pins = $_GET['input_pins'];
$output_pins = $_GET['output_pins'];
$sensor_id = $_GET['sensor_id'];
$board_id = $_GET['board_id'];
$smodel_id = $_GET['smodel_id'];
$bmodel_id = $_GET['bmodel_id'];

$file_name="";
$file="";


if($board_id=='Arduino' && $sensor_id=='Button')
{
$file = "programs/Button/Button.php";
$file_name="programs/Button/name.php";
}
if($board_id=='Arduino' && $sensor_id=='Sonar_HC_SR04')
{
$file = "programs/SonarHCSR04/hcSR04.php";
$file_name="programs/SonarHCSR04/name.php";
}
if($board_id=='Arduino' && $sensor_id=='Bluetooth')
{
$file = "programs/bluetooth/bluetooth.php";
$file_name="programs/bluetooth/name.php";
}




}

?>


<!DOCTYPE html>
<html>
  <head lang="en">
  <meta charset="UTF-8">
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<!--css-->
<link rel="stylesheet" type="text/css" href="codemirror/addon/hint/show-hint.css">
  <link rel="stylesheet" type="text/css" href="codemirror/lib/codemirror.css">
  <link rel="stylesheet" type="text/css" href="codemirror/theme/default.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
          <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<noscript><link rel="stylesheet" type="text/css" href="css/noJS.css" /></noscript>

 <!--Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script>
  $(function () {
    $(document).on( 'scroll', function(){
      console.log('scroll top : ' + $(window).scrollTop());
      if($(window).scrollTop()>=$(".logo").height())
      {
       $(".navbar").addClass("navbar-fixed-top");
     }
     if($(window).scrollTop()<$(".logo").height())
     {
       $(".navbar").removeClass("navbar-fixed-top");
     }
   });
  });</script>
  
</head>

<body>


<header>
    <div class="logo">
      <div class="row">
        <div class="col-md-6"><a href="#"></br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="appstore.ico" height="100" width="100" />
          <p style="color:#ffffff ;margin-top:-100px;font-size:50px;margin-left:120px;margin-bottom:20px;">&nbsp;&nbsp; IOT SOLUTIONS</p></a>
        </div>
      </div>
    </div>
	 <!--nav bar start-->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li> <a  href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;Home</a></li>
            <li> <a  href="#"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>&nbsp;&nbsp;Infographs</a></li>
	    <li><a href="#"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>&nbsp;&nbsp;About&nbsp;Us</a>
            </li>
            <li><a href="#"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>&nbsp;My&nbsp;Dashboard</a>
            </li>
            
                     </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav><!--nav bar closed-->
  </header>
  
  
<div class="row">
  <div class="col-sm-6">

<div class="tab-content" style="margin-top=20px">
    <div role="tabpanel" class="tab-pane active" id="input" style="padding:px"><p>
    <div class="panel panel-default"  style="margin-left:5px;margin-top:14px;">
	  <div class="panel-heading"><center><p class="title2"><span class="glyphicon glyphicon-wrench" aria-hidden="true" style="color:#000000">
       </span><font style="color:#000000">&nbsp;&nbsp;INPUT</font></p></center>
    </div>
    <div class="panel-body">

    <form method="GET" action="">
    <!--select category start-->
	  <br/>
    <div class="form-group">
	  <div class="row">
    <div class="col-sm-6">
    <label for="BOARD">Select Board :</label>
    <select id="Board" name="board_id" placeholder="Select Board" class="form-control input-md" onchange="showUser(this.value)" required>
       <?php if(isset($_GET['submit']))echo'<option>'.$board_id.'</option>'; ?>
      <option value="">Select Board</option>
      <option onclick="func(this)">Arduino</option><option onclick="func(this)">abc</option><option >def</option><option >ghi</option><option >jkl</option> 
    </select>
    </div>
	  <div class="col-sm-6">
	  <label for="BOARD">Select Model :</label>
    <select id="Board" name="bmodel_id" placeholder="Select BModel" class="form-control input-md" onchange="showUser(this.value)" required>
           <?php if(isset($_GET['submit']))echo'<option>'.$bmodel_id.'</option>'; ?>
      <option value="">Select model</option>
      <option onclick="func(this)">Uno</option><option onclick="func(this)">abc</option><option >def</option><option >ghi</option><option >jkl</option> 
    </select>
    </div></div>
    </div>
   
      <div class="form-group">
	  <div class="row">
	  <div class="col-sm-6">
    <label for="Sensor">Select Sensor:</label>
    <select id="Sensor" name="sensor_id" placeholder="Select Sensor" class="form-control input-md" onchange="showUser(this.value)" required>
       <?php if(isset($_GET['submit']))echo'<option>'.$sensor_id.'</option>'; ?>
    <option value="">Select Sensor:</option>
    <option>Button</option><option>Bluetooth</option><option>Sonar_HC_SR04</option><option>ghi</option><option>jkl</option> </select>
    </div>
    <div class="col-sm-6">
    <label for="Sensor">Select model:</label>
    <select id="Smodel" name="smodel_id" placeholder="Select SModel" class="form-control input-md" onchange="showUser(this.value)" required>
       <?php if(isset($_GET['submit']))echo'<option>'.$smodel_id.'</option>'; ?>
    <option value="">Select Model</option>
    <option>Button</option><option>abc</option><option>def</option><option>ghi</option><option>jkl</option> </select>
    </div></div></div>
   <!--select categories end-->
   

    <div class="form-group">
   	<div class="row">
	  <div class="col-sm-6">
    <label for="type">Input Pins :</label>
    <select id="sel1" name="input_pins" placeholder="Input Pins" class="form-control input-md" required>
    <?php if(isset($_GET['submit']))echo'<option>'.$input_pins.'</option>'; ?>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option> 
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      <option>13</option>
   </select>
   </div>
	 <div class="col-sm-6">
   <label for="type">Output Pins :</label>
   <select id="sel2" name="output_pins" placeholder="Input Pins" class="form-control input-md" required>
   <?php if(isset($_GET['submit']))echo'<option>'.$output_pins.'</option>'; ?>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option> 
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      <option>13</option>
   </select>
   </div></div></div>
   <br/>
   <!--select categories end-->
   <center><button type="submit" name="submit" class="btn btn-primary sub" style="background:#0D5B81; border-radius:0px; " onclick="showInput();">Submit</button></center>
   </form>
   <!-------------------------------------------------------------------------------------------------->
   <!--panel end--></div>
   </div></div>
   </div></div>

  <div class="col-sm-6">

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="CODE" style="padding:5px"><p>
    <div class="panel panel-default" >
	  <div class="panel-heading"><center><p class="title2"><span class="glyphicon glyphicon-align-left" aria-hidden="true" style="color:#000000;"></span><font style="color:#000000">&nbsp;&nbsp;CODE</font></p></center></div>
    <div class="panel-body">
    <div><textarea class="codemirror-textarea" name="editor" id="inputTextToSave"><?php if(isset($_GET['submit']) && $file!='')include $file; ?></textarea>
     <input id="inputFileNameToSaveAs" type="hidden" value="<?php if(isset($_GET['submit']) && $file_name!='')include $file_name; ?>"></input>
	 <button onclick="saveAsFile()">Save</button></td>

    </div>
	  </div>
	  </div>
	 </div></div>
	
 </div>

    <!-- javascript -->
    <script type="text/javascript" src="js/jquery-3.2.0.js"></script>
    <script type="text/javascript" src="js/savetext.js"></script>
    <script type="text/javascript" src="codemirror/lib/codemirror.js"></script> 
    <script type="text/javascript" src="codemirror/mode/clike/clike.js"></script>
    <script type="text/javascript" src="codemirror/mode/cmake/cmake.js"></script>
    <script type="text/javascript" src="codemirror/mode/css/css.js"></script>
    <script type="text/javascript" src="codemirror/mode/javascript/javascript.js"></script>
    <script type="text/javascript" src="codemirror/mode/xml/xml.js"></script>
    <script type="text/javascript" src="js/default.js"></script>

    <!-- addon script -->
    <script type="text/javascript" src="codemirror/addon/edit/closebrackets.js"></script>
    <script type="text/javascript" src="codemirror/addon/edit/closetags.js"></script>
    <script type="text/javascript" src="codemirror/addon/edit/matchbrakets.js"></script>
    <script type="text/javascript" src="codemirror/addon/edit/matchtags.js"></script>
    <script type="text/javascript" src="codemirror/addon/edit/continuelist.js"></script>
    <script type="text/javascript" src="codemirror/addon/edit/trailingspace.js"></script>
    <script type="text/javascript" src="codemirror/addon/hint/show-hint.js"></script>
    <script type="text/javascript" src="codemirror/addon/hint/anyword-hint.js"></script>
    <script type="text/javascript" src="codemirror/addon/hint/html-hint.js"></script>



</body>
</html>