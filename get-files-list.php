<?php
// header('Content-Type: application/json');

$dir = "./python-app/out"; //path

$list = array(); //main array

if(is_dir($dir)){
    if($dh = opendir($dir)){
        while(($file = readdir($dh)) != false){

            if($file == "." or $file == ".." or !strpos($file, ".zip")){
                //...
            } else { //create object with two fields
                $list3 = [
                'name' => $file, 
                ];
                array_push($list, $list3);
            }
        }
    }

    $return_array = array('files'=> $list);

    echo json_encode($return_array);
    }

?>