<?php

include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/../auth.php');


if (isset($_POST['manage-features'])) {
    $ROOM = new Room(NULL);
    $serialized_array = serialize($_POST['features']);
//    $arr = array();
//    foreach ($_POST['permission'] as $key=>$permission) {
//        if($key == 0) {
//            $arr = $permission;
//        } else {
//            $arr = $arr . "," . $permission;
//        }
//        
//    }
    $ROOM->features = $serialized_array;
    $ROOM->id = filter_input(INPUT_POST, 'id');
    $VALID = new Validator();
    dd($ROOM);
    $result = $ROOM->updateRoomFeatures();

    if (!isset($_SESSION)) {
        session_start();
    }
    $VALID->addError("Your data was saved successfully", 'success');
    $_SESSION['ERRORS'] = $VALID->errors();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
