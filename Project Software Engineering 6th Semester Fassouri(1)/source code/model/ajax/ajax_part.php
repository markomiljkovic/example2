<?php
include('../connect.php');


$type_id=$_POST['id_machine'];  

 
      //tto einai to katharo ID t type diladi mono o arithmos
$type=substr($type_id,0,4);
$id=substr($type_id,4);
 $i=1;

if($type=="pump")
{


$sql=$dbh->query("select * from parts  where parts.pump_id='$id'");
echo '<option selected disabled>--Part-- </option>';

foreach($sql as $row)

{

$id_pumps=$row['part_id'];
$data=$row['name'];

echo '<option value="'.$id_pumps.'">'.$i++.'. '.$data.'</option>';
}
}


else
{

$sql=$dbh->query("select * from parts  where parts.tourbine_id='$id' ");
echo '<option selected disabled>--Part-- </option>';

foreach($sql as $row1)

{

$id_tourbine=$row1['part_id'];
$data=$row1['name'];

echo '<option value="'.$id_tourbine.'">'.$i++.'. '.$data.'</option>';
}

}


?>