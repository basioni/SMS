<?php

class DatePick {

var $years_selects = "" ;
var $month_selects = "" ;
var $day_selects = "" ;

function Get_Calender_lists()
{
$currentYear= date("Y") ;
$currentMonth= date("m") ;
$currentDay= date("d") ;
$this->years_selects = '<select id="years" name="years" >';

for($i=0; $i<5 ; $i++)
{
$this->years_selects .= "<option value=". $currentYear .">".$currentYear ."</option>" ;
$currentYear++ ;
}
$this->years_selects .= '</select>';

$this->month_selects = '<select id="months" name="months">';
$this->month_selects .= '<option value="01">January</option>';
$this->month_selects .= '<option value="02" >February</option>';
$this->month_selects .= '<option value="03" >March</option>';
$this->month_selects .= '<option value="04" >April</option>';
$this->month_selects .= '<option value="05" >May</option>';
$this->month_selects .= '<option value="06" >June</option>';
$this->month_selects .= '<option value="07" >July</option>';
$this->month_selects .= '<option value="08" >August</option>';
$this->month_selects .= '<option value="09" >September</option>';
$this->month_selects .= '<option value="10" >October</option>';
$this->month_selects .= '<option value="11" >November</option>';
$this->month_selects .= '<option value="12" >December</option>';
$this->month_selects .= '</select>';


$this->day_selects = '<select id="days" name="days" >';
$this->day_selects .= '<option value="01" selected >1</option>';
$this->day_selects .= '<option value="02" >2</option>';
$this->day_selects .= '<option value="03" >3</option>';
$this->day_selects .= '<option value="04" >4</option>';
$this->day_selects .= '<option value="05" >5</option>';
$this->day_selects .= '<option value="06" >6</option>';
$this->day_selects .= '<option value="07" >7</option>';
$this->day_selects .= '<option value="08" >8</option>';
$this->day_selects .= '<option value="09" >9</option>';

for($i=10; $i<32;$i++)
$this->day_selects .= '<option value="'. $i . '" >'. $i  .'</option>';

$this->day_selects .= '</select>';


}



}



?>