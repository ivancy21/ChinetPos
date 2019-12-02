<?php
function LeftDiv()
{
   $html = "<div style='max-width: 1024px; width:1024px; display:inline-block;  height: 100%;'>
            <div style=' position: absolute;  padding-left: 5px;'>";
   return $html;
}

function RightDiv()
{
    $html = "</div>
            <div style=\"padding-left:300px;\">";
   return $html;
}

function LeftDivFirst($Name, $ImgSrc)
{
    $html="<div class='DivTemplate' style='background-color: white; border-top: 70px solid #0996c1'>
            <div class='d-flex justify-content-center'>
            <img id='Photo' src=\"$ImgSrc\" width='100px' height='100px' style='border: #0996c1 solid medium; margin-top: -50px'>
            </div>
            <p class='HeaderText text-center' style='padding-top: 8px; padding-bottom: 10px'>$Name</p>";
    return $html;
}

function LeftDivFirstClosing()
{
    $html = "</div>";
    return $html;
}

function get_local_time(){

    $ip = file_get_contents("http://ipecho.net/plain");

    $url = 'http://ip-api.com/json/'.$ip;

    $tz = file_get_contents($url);

    $tz = json_decode($tz,true)['timezone'];

    return $tz;

 }
?>

<?php
function goToDiv($ButtonID, $ButtonName, $TargetDivID)
{
   $html = "<button id=\"". $ButtonID ."\" class=\"goToButtons\">". $ButtonName ."</button>
            <script>
                $(\"#". $ButtonID ."\").click(function() {
                    $('html, body').animate({
                    scrollTop: $(\"#". $TargetDivID ."\").offset().top
                    }
                    , 500);
                });
            </script>";
           return $html;
}

?>

<?php 
//function for date values
function quantity(){
    $html ='<option value="" disabled selected>Quantity</option>
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
                
            ';
    return $html;
}
function month(){
    $html ='<option value="" disabled selected>Month</option>
            <option value="1">Jan</option>
            <option value="2">Feb</option>
            <option value="3">Mar</option>
            <option value="4">Apr</option>
            <option value="5">May</option>
            <option value="6">Jun</option>
            <option value="7">Jul</option>
            <option value="8">Aug</option>
            <option value="9">Sep</option>
            <option value="10">Oct</option>
            <option value="11">Nov</option>
            <option value="12">Dec</option>';
    return $html;
}
function year(){
    $firstYear = 2030;
    $lastYear = 1900;
    for($i=$firstYear;$i>=$lastYear;$i--){
        echo '<option value='.$i.'>'.$i.'</option>';
    }
}

?>
