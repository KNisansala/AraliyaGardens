<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if ($_POST['option'] == 'GETFEATURES') {

    $ROOM = new Room($_POST['id']);
   
    $ROOM_FEATURES = unserialize($ROOM->features);

    header('Content-Type: application/json');

    echo json_encode($ROOM_FEATURES);
    exit();
}