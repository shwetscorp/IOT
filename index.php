
<?php

if(isset($_GET['submit'])){

$input_pins_o= $_GET['input_pins'];
$input_pin_ar=explode('~',$input_pins_o);
$input_pins=$input_pin_ar[0];
$output_pins_o = $_GET['output_pins'];
$output_pin_ar=explode('~',$output_pins_o);
$output_pins=$output_pin_ar[0];
$input_pins1_o = $_GET['input_pins1'];
$input_pin1_ar=explode('~',$input_pins1_o);
$input_pins1=$input_pin1_ar[0];
$output_pins1_o = $_GET['output_pins1'];
$output_pin1_ar=explode('~',$output_pins1_o);
$output_pins1=$output_pin1_ar[0];
$input_pins2_o = $_GET['input_pins2'];
$input_pin2_ar=explode('~',$input_pins2_o);
$input_pins2=$input_pin2_ar[0];
$output_pins2_o = $_GET['output_pins2'];
$output_pin2_ar=explode('~',$output_pins2_o);
$output_pins2=$output_pin2_ar[0];
$sensor_id = $_GET['sensor'];
$board_id = $_GET['board'];
$smodel_id = $_GET['smodel'];
$bmodel_id = $_GET['bmodel'];




if($board_id=='1')
$board_name='Arduino';

if($bmodel_id=='1')
$bmodel_name='UNO';
if($bmodel_id=='2')
$bmodel_name='Mega';
if($bmodel_id=='3')
$bmodel_name='Nano';
if($bmodel_id=='4')
$bmodel_name='Promini';
if($bmodel_id=='5')
$bmodel_name='Leonardo';

if($sensor_id=='1')
  $sensor_name='Button';
if($sensor_id=='2')
  $sensor_name='Bluetooth';
if($sensor_id=='3')
  $sensor_name='DHTtester_feb26';
if($sensor_id=='4')
  $sensor_name='Hall_Effect_sensor';
if($sensor_id=='5')
  $sensor_name='IR_distance_pna4602m';
if($sensor_id=='6')
  $sensor_name='IR_proximity_sensor_GP2Y0A21';
if($sensor_id=='7')
  $sensor_name='LM35';
if($sensor_id=='8')
  $sensor_name='Ultrasonic Sensor';
if($sensor_id=='9')
  $sensor_name='MQ Series';
if($sensor_id=='10')
  $sensor_name='PIR Sensor';
if($sensor_id=='11')
  $sensor_name='LCD16x2';
if($sensor_id=='12')
  $sensor_name='ALDX series';

$file_name="";
$file="";


if($board_id=='1' && $sensor_id=='1')
{
$file = "programs/Button/Button.php";
$file_name="programs/Button/name.php";
}
if($board_id=='1' && $sensor_id=='2')
{
$file = "programs/Bluetooth/bluetooth.php";
$file_name="programs/Bluetooth/name.php";
}
if($board_id=='1' && $sensor_id=='3')
{
$file = "C:\wamp64\www\proj1\Programs\DHTtester_feb26/DHTtester_feb26.php";
$file_name="programs/DHTtester_feb26/name.php";
}
if($board_id=='1' && $sensor_id=='4')
{
$file = "programs/Hall_Effect_sensor/Hall_Effect_sensor.php";
$file_name="programs/Hall_Effect_sensor/name.php";
}
if($board_id=='1' && $sensor_id=='5')
{
$file = "programs/IR_distance_pna4602m/IR_distance_pna4602m.php";
$file_name="programs/IR_distance_pna4602m/name.php";
}
if($board_id=='1' && $sensor_id=='6')
{
$file = "programs/IR_proximity_sensor_GP2Y0A21/IR_proximity_sensor_GP2Y0A21.php";
$file_name="programs/IR_proximity_sensor_GP2Y0A21/name.php";
}
if($board_id=='1' && $sensor_id=='7')
{
$file = "programs/LM35/LM35.php";
$file_name="programs/LM35/name.php";
}
if($board_id=='1' && $sensor_id=='8')
{
$file = "programs/SonarHCSR04/hcSR04.php";
$file_name="programs/SonarHCSR04/name.php";
}
if($board_id=='1' && $sensor_id=='11')
{
$file = "programs/LCD16x2/LCD16x2.php";
$file_name="programs/LCD16x2/name.php";
}
if($board_id=='1' && $sensor_id=='12')
{
  if($smodel_id=='Memsic2125')
  {
   $file = "programs/Memsic2125/Memsic2125.php";
   $file_name="programs/Memsic2125/name.php";
  }
  else if($smodel_id!='Memsic2125')
  {
   $file = "programs/Accelerometer_ADXL_/Accelerometer_ADXL_.php";
   $file_name="programs/Accelerometer_ADXL_/name.php";
  }
}
if($board_id=='1' && $sensor_id=='9')
{
   if($smodel_id=='MQ2_GCG')
   {
    $file = "programs/MQ2_Smoke_Sensor/MQ2_Smoke_Sensor.php";
    $file_name="programs/MQ2_Smoke_Sensor/name.php";
   }
   else if($smodel_id=='MQ3_A')
   {
    $file = "programs/MQ3_Alcohol_sensor/MQ3_Alcohol_sensor.php";
    $file_name="programs/MQ3_Alcohol_sensor/name.php";
  }
 }

if($board_id=='1' && $sensor_id=='10')
{
$file = "programs/PIR/PIR.php";
$file_name="programs/PIR/name.php";
}

}

?>


<!DOCTYPE html>
<html>
  <head lang="en">
  <meta charset="UTF-8">
  <title>Sulutions</title>
  <link rel="shortcut icon" type="image/x-icon" href="appstore.ico" />
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
    <script type="text/javascript" src="js/jquery-3.2.0.js"></script>
    <script type="text/javascript" src="js/dropdown.js"></script>


 <!--Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- javascript -->
    
    <script type="text/javascript" src="js/savetext.js"></script>
    <script type="text/javascript" src="codemirror/lib/codemirror.js"></script> 
    <script type="text/javascript" src="codemirror/mode/clike/clike.js"></script>
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

<script>
document.getElementById("form1").reset();
</script>

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

<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  else {
    if (window.XMLHttpRequest) {
// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
}
else {
// code for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
    document.getElementById("txtHint1").innerHTML = xmlhttp.responseText;
  }
}
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
}
</script>

<script type="text/javascript">
function ck()
{
    //ft.inputTextToSave.value += ft.ck.value;
    ft.getElementById('inputTextToSave').value += ft.getElementById('ck').value;
    //ft.getElementById('inputTextToSave').innerHTML += ft.getElementById('ck').value;
}
</script>
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
            <li> <a  href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;Home</a></li>
	    <li><a href="#"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>&nbsp;&nbsp;About&nbsp;Us</a>
            </li>
            
                     </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav><!--nav bar closed-->
  </header>

  <!------------>


<!-------------->



  
<div class="row">
  <div class="col-sm-6">

<div class="tab-content" style="margin-top=20px">
    <div role="tabpanel" class="tab-pane active" id="input" style="padding:px"><p>
    <div class="panel panel-default"  style="margin-left:5px;margin-top:14px;">
	  <div class="panel-heading"><center><p class="title2"><span class="glyphicon glyphicon-wrench" aria-hidden="true" style="color:#000000">
       </span><font style="color:#000000">&nbsp;&nbsp;INPUT</font></p></center>
    </div>
    <div class="panel-body">

    <form method="GET" action="" name="form1" id="form1">
    <!--select category start-->
	  <br/>
    <div class="form-group">
	  <div class="row">
    

    <?php
    //Include database configuration file
    include('core/dbConfig.php');
    
    //Get all country data
    $query = $db->query("SELECT * FROM boards WHERE status = 1 ORDER BY board_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
    <div class="col-sm-6">
    <label>Select Board :</label>
    <select id="board" name="board"  class="form-control input-md" onchange="showUser(this.value)" required>
    <?php if(isset($_GET['submit']))echo'<option>'.$board_name.'</option>'; ?>
        <option value="">Select Board</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['board_id'].'">'.$row['board_name'].'</option>';
            }
        }else{
            echo '<option value="">Board not available</option>';
        }
        ?>
    </select>
    </div>
     <div class="col-sm-6">
     <label>Select Model :</label>
    <select id="bmodel" name="bmodel" class="form-control input-md" onchange="showUser(this.value)" required>
           <?php if(isset($_GET['submit']))echo'<option>'.$bmodel_name.'</option>'; ?>
      <option value="">Select Board First</option></select>
      </div>
      </div></div>
    
   
    <div class="form-group">
	  <div class="row">
 
    <div class="col-sm-6">
    <label>Select Sensor:</label>
    <select id="sensor" name="sensor" placeholder="Select Sensor" class="form-control input-md" onchange="showUser(this.value)" required>
       <?php if(isset($_GET['submit']))echo'<option>'.$sensor_name.'</option>'; ?>
    <option value="">Select Board First</option>
    </select>
    </div>
    <div class="col-sm-6">
    <label>Select model:</label>
    <select id="smodel" name="smodel" placeholder="Select SModel" class="form-control input-md" onchange="showUser(this.value)" required>
       <?php if(isset($_GET['submit']))echo'<option>'.$smodel_id.'</option>'; ?>
    <option value="">Select Sensor First</option>
    </select>
    </div></div></div>
   <!--select categories end-->
   

    <div class="form-group">
   	<div class="row">

	  <div class="col-sm-6">
    <label>Input Pins :</label>
    <select id="input_pins" name="input_pins" placeholder="Input Pins" class="form-control input-md" onchange="showUser(this.value)" required>
    <?php if(isset($_GET['submit']))echo'<option>'.$input_pins_o.'</option>'; ?>
      <option value+"">Secect Board Model First</option>
   </select>
   </div>
	 <div class="col-sm-6">
   <label for="type">Output Pins :</label>
   <select id="output_pins" name="output_pins" placeholder="Output Pins" class="form-control input-md" onchange="validate()" required>
    <?php if(isset($_GET['submit']))echo'<option>'.$output_pins_o.'</option>'; ?>
      <option value="">Secect Board Model First</option>
   </select>
   </select>
   </div></div></div>


    <div class="form-group">
    <div class="row">

    <div class="col-sm-6">
    <select id="input_pins1" name="input_pins1" placeholder="Input Pins" class="form-control input-md" onchange="showUser(this.value)" required>
    <?php if(isset($_GET['submit']))echo'<option>'.$input_pins1_o.'</option>'; ?>
      <option value="0">0 (Not Selected)</option>
   </select>
   </div>
   <div class="col-sm-6">
   <select id="output_pins1" name="output_pins1" placeholder="Output Pins" class="form-control input-md" onchange="showUser(this.value)" required>
    <?php if(isset($_GET['submit']))echo'<option>'.$output_pins1_o.'</option>'; ?>
      <option value="0">0 (Not Selected)</option>
   </select>
   </div></div></div>


    <div class="form-group">
    <div class="row">

    <div class="col-sm-6">
    <select id="input_pins2" name="input_pins2" placeholder="Input Pins" class="form-control input-md" onchange="showUser(this.value)" required>
    <?php if(isset($_GET['submit']))echo'<option>'.$input_pins2_o.'</option>'; ?>
      <option value="0">0 (Not Selected)</option>
   </select>
   </div>
   <div class="col-sm-6">
   <select id="output_pins2" name="output_pins2" placeholder="Output Pins" class="form-control input-md" onchange="showUser(this.value)" required>
    <?php if(isset($_GET['submit']))echo'<option>'.$output_pins2_o.'</option>'; ?>
      <option value="0">0 (Not Selected)</option>
   </select>
   </div></div></div>
   
   <!--select categories end-->
   <div class="col-sm-6">
  <center><button type="submit" name="submit" class="form-control input-md" style="background:#0D5B81; border-radius:0px; " onclick="showInput();"><font color="white">Submit</font></button></center></div>
  <div class="col-sm-6">
   <center><button id="resetbtn" onclick="Reset()" class="form-control input-md" style="background:#0D5B81; border-radius:0px; "><font color="white">Reset</font></button></center></div>
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
    <div><textarea class="codemirror-textarea" name="editor" id="inputTextToSave"><?php if(isset($_GET['submit']) && $file!='')include $file; ?>//your code will be shown here...</textarea>
     <input id="inputFileNameToSaveAs" type="hidden" value="<?php if(isset($_GET['submit']) && $file_name!='')include $file_name; ?>"></input>
     <div class="col-sm-6">
     <br/>
     <br/>
	 <center><button class="form-control input-md" style="background:#0D5B81; border-radius:0px; " onclick="saveAsFile()"><font color="white">Save</font></button></td></center></div>
   <div class="col-sm-6">
     <br/>
     <br/>
   <center><button class="form-control input-md" style="background:#0D5B81; border-radius:0px; text-decoration-color: white;" id="readon"><font color="white">Edit</font></button></td></center></div>
    </div>
	  </div>
	  </div>
	 </div></div>
	
 </div></div>


    <br/>
    <footer class="page-footer" style="background:#202020;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <a href="index.php"><h4 class="title" style="color:#8f40a5; font-size: 30px">IOT Solutions</h4></a>
        </div>
         <div class="col-md-6">
            <h4 class="title" style="color:#8f40a5; font-size: 15px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="white">Developers:</font> &nbsp;&nbsp;&nbsp;Shwetank Yadav,&nbsp; Ravi Narayan Mishra</h4> 
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div ><center>© 2017 TCS RI</center>
            
          </div>
          <div class="col-md-3 offset-3">

          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>