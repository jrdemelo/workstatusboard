<?php
if(isset($_POST['status']) && isset($_POST['loc'])) {
    $data = $_POST['status'] . '-' . $_POST['loc'] . "\n";
    $ret = file_put_contents('/tmp/mydata.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}