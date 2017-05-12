<?php
$txt1 = "status.txt"; 
$txt2 = "loc.txt";
$txt3 = "grid.txt";
$fh = fopen($txt1, 'w+');
if (isset($_POST['status']) { //check if status field is set
   $txt1=$_POST['status']; 
   file_put_contents('status.txt',$txt1."\n",FILE_APPEND); // log to status.txt 
   exit();
}
    fwrite($fh,$txt1); // Write information to the file
    fclose($fh); // Close the file

$fh = fopen($txt2, 'w+');
 if (isset($_POST['loc'])) { // check if loc field is set
 	$txt2=$_POST['loc']
	file_put_contents('loc.txt',$txt2."\n",FILE_APPEND); // log to loc.txt 
   exit();
}
    fwrite($fh,$txt2); // Write information to the file
    fclose($fh); // Close the file

$fh = fopen($txt3, 'w+');
 if (isset($_POST['grid'])) { // check if grid field is set
 	$txt2=$_POST['grid']
	file_put_contents('grid.txt',$txt3."\n",FILE_APPEND); // log to grid.txt 
   exit();
}
    fwrite($fh,$txt3); // Write information to the file
    fclose($fh); // Close the file

    ?>