@extends('layouts.app')

@section('content')


<div id="content" class="col-md-8">
<div class="main-content">

<div class="container">
   
    <div class="content container" >
   

   
    <!-- <br>
 <table class="khutba table table-bordered ">
 <thead class="thead-light">
 <tr>
 <th scope="col">Tarix</th>
 <th scope="col">Başlıq</th>
 <th scope="col">Açıqlama</th>
 
 </tr>
 </thead>
 <tbody>@foreach($data['mubarek'] as $mubarek)

 <tr scope="row">
 <td>{{$mubarek->date}}</td>
 <td>{{$mubarek->title}}</td>
 <td>{{$mubarek->description}}</td>
 
 </tr>
 @endforeach
 </tbody>
 </table>
 {{ $data['mubarek']->links() }} -->

 <style type="text/css">
 #main{
  margin-top: 0%!important;
 }
table.main {
  width: 100%;
border: 1px solid black;
	background-color: #fff;
 
}
table.main td {
vertical-align: top;
font-family: Montserrat;
font-size: 11px;
}
table.main th {
	border-width: 1px 1px 1px 1px;
	padding: 0px 0px 0px 0px;
 background-color: #2ba4ac;
}
table.main a{TEXT-DECORATION: none;}
table,td{ border: 1px solid #ffffff }
</style>

<?Php
$year=date('Y'); // change this to another year 2017 or  2018 or 2019 Or ...
if(strlen($year)!= 4){
$year=date('Y'); // Current Year is taken if year is not set in above line. 
}


$row=3;  //to set the number of rows and columns in yearly calendar ( 1 to 12 )
///// No Edit below //////
$row_no=0; // 
echo "<table class='main'>"; // Outer table 
////// Starting of for loop/// 
///  Creating calendars for each month by looping 12 times ///
for($m=1;$m<=12;$m++){
$month =date($m);  // Month 
$dateObject = DateTime::createFromFormat('!m', $m);
$monthName = $dateObject->format('M'); // Month name to display at top



$d= 2; // To Finds today's date
//$no_of_days = date('t',mktime(0,0,0,$month,1,$year)); //This is to calculate number of days in a month
$no_of_days = cal_days_in_month(CAL_GREGORIAN, $month, $year);//calculate number of days in a month

$j= date('w',mktime(0,0,0,$month,1,$year)); // This will calculate the week day of the first day of the month
//echo $j;// Sunday=0 , Saturday =6
//// if starting day of the week is Monday then add following two lines ///
$j=$j-1;  
if($j<0){$j=6;}  // if it is Sunday //
//// end of if starting day of the week is Monday ////


$adj=str_repeat("<td bgcolor='silver'></td>",$j);  // Blank starting cells of the calendar 
$blank_at_end=42-$j-$no_of_days; // Days left after the last day of the month
if($blank_at_end >= 7){$blank_at_end = $blank_at_end - 7 ;} 
$adj2=str_repeat("<td bgcolor='silver'></td>",$blank_at_end); // Blank ending cells of the calendar

/// Starting of top line showing year and month to select ///////////////
if(($row_no % $row)== 0){
echo "</tr><tr>";
}
if($monthName == 'Jan' ){$monthName = 'Yanvar';}else if($monthName == 'Feb'){$monthName = 'Fevral';}
else if($monthName == 'Mar'){$monthName = 'Mart';}
else if($monthName == 'Apr'){$monthName = 'Aprel';}else if($monthName == 'Jun'){$monthName = 'İyun';}
else if($monthName == 'Jul'){$monthName = 'İyul';}else if($monthName == 'Aug'){$monthName = 'Avqust';}
else if($monthName == 'Sep'){$monthName = 'Sentyabr';}
else if($monthName == 'Oct'){$monthName = 'Oktyabr';}
else if($monthName == 'Nov'){$monthName = 'Noyabr';}
else if($monthName == 'Dec'){$monthName = 'Dekabr';}


echo "<td><table class='main'  ><td colspan=6 align=center style=' font-size: 14px!important;'> $monthName $year


 </td><td align='center'><a href=# onClick='self.close();'></a></td></tr>";
//echo "<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr><tr>";
echo "<tr style='color: white;    font-size: 13px!important;'><th>BE</th><th>ÇA</th><th>Ç</th><th>CA</th><th>Cü</th><th>Ş</th><th>B</th></tr><tr>";
////// End of the top line showing name of the days of the week//////////
$event="";
//////// Starting of the days//////////
for($i=1;$i<=$no_of_days;$i++){
$pv="'$month'".","."'$i'".","."'$year'";
$checkday=$month.'-'.$i.'-'.$year;
echo $adj."<td>
";
echo "<a  ";
foreach($data['mubarek'] as $mubarek)

{

 
 

  if($checkday == date('n-j-Y',$mubarek->date))
{echo "  href=javascript:toggleDiv('div$mubarek->id'); style='background-color: #389ba1; padding: 5px;color: white;' class='a$mubarek->id' title='$mubarek->title'  
  ";

}else{
  
}

if($checkday == date('n-j-Y',time()))
{
  if(date('n-j-Y',time()) == date('n-j-Y',$mubarek->date)){
  echo "  href=javascript:toggleDiv('div$mubarek->id'); style='border:2px solid darkred;background-color: darkred;padding: 5px;color: white;' class='a$mubarek->id'  title='$mubarek->title'  
  ";
  }else{
    echo "  href=javascript:void('0'); style='background-color: darkred;padding: 5px;color: white;' class='a$mubarek->id'  title='$mubarek->title'  
    ";

  }

}
 
}

echo ">$i</a>";
 // This will display the date inside the calendar cell
echo " </td>";
$adj='';
$j ++;
if($j==7){echo "</tr><tr>"; // start a new row
$j=0;}

}
echo $adj2;   // Blank the balance cell of calendar at the end 

echo "</tr></table></td>";

$row_no=$row_no+1;
} // end of for loop for 12 months
echo "</table>";
?>


 <br>
    <br>
    <br><br>
    <br>
  
    </div>
</div>
</div>

        </div>
         <!-- sidebar content -->
          <div  class="col-md-4" style='    position: fixed;
    display: flow-root;
    float: right;
    right: 2%;
    top: 23%;
    '>
   <?php 
    foreach($data['mubarek'] as $mubarek)

{?>

 
 
          <div class='highlight{{$mubarek->id}}  toggle'   id="div{{$mubarek->id}}"  >

         
  <h1>{{$mubarek->title}}</h1>
 <p style="    text-align: justify;"> {{$mubarek->description}}</p>

          </div>

<?php }?>
        </div>

      <?php  foreach($data['mubarek'] as $mubarek)
{

echo '
<script>
function toggleDiv(divId) {
  $("#"+divId).toggle();
  $(".toggle").not($("#"+divId)).hide();
}
$(".toggle").hide();
</script>

';}
?>

@endsection
