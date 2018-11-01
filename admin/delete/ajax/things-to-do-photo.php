<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
include_once(dirname(__FILE__) . '/../../auth.php');

if ($_POST['option'] == 'delete') {

    $THINGS_TO_DO_PHOTO = new ThingsToDoPhoto($_POST['id']);

    unlink('../../../upload/things-to-do/gallery/' . $THINGS_TO_DO_PHOTO->image_name);
    unlink('../../../upload/things-to-do/gallery/thumb/' . $THINGS_TO_DO_PHOTO->image_name);

    $result = $THINGS_TO_DO_PHOTO->delete();


    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}