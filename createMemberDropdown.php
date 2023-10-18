<?php 
include("dbcon.php");





$sql = "SELECT * from member";
$result = mysqli_query($conn, $sql);
?>
    <SELECT name='memberID'>
    <OPTION value="1">Joe Bloggs</OPTION>
    <OPTION value="2">John Doe</OPTION>
    <OPTION vlue="3">Fred Nerk</OPTIION>
    </SELECT>


<?php
mysqli_close($conn); 
?>