<?php
if(isset($_POST['status'])) {
	unlink('status.txt');
    $data = $_POST['status'] . "\n";
    $ret = file_put_contents('status.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing the status file');
    }
    else {
        echo "Status updated - ";
    }
}
if(isset($_POST['loc'])) {
	unlink('loc.txt');
    $data = $_POST['loc'] . "\n";
    $ret = file_put_contents('loc.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing the location file');
    }
    else {
        echo "Location updated - ";
    } 
}
if(isset($_POST['grid'])) {
	unlink('grid.txt');
    $data = $_POST['grid'] . "\n";
    $ret = file_put_contents('grid.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing the grid file');
    }
    else {
        echo "Grid status updated";
    }
}
else {
   die('no post data to process');
}