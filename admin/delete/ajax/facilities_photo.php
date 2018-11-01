<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
include_once(dirname(__FILE__) . '/../../auth.php');

if ($_POST['option'] == 'delete') {

    $FACILITIES_PHOTO = new FacilitiesPhoto($_POST['id']);

    unlink('../../../upload/facilities/gallery/' . $FACILITIES_PHOTO->image_name);
    unlink('../../../upload/facilities/gallery/thumb/' . $FACILITIES_PHOTO->image_name);

    $result = $FACILITIES_PHOTO->delete();


    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}