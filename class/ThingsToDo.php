<?php

/**
 * Description of things-to-do
 *
 * @author Suharshana DsW
 */
class ThingsToDo {

    public $id;
    public $title;
    public $image_name;
    public $short_description;
    public $description;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`title`,`image_name`,`short_description`,`description`,`queue` FROM `things_to_do` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title'];
            $this->image_name = $result['image_name'];
            $this->short_description = $result['short_description'];
            $this->description = $result['description'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `things_to_do` (`title`,`image_name`,`short_description`,`description`,`queue`) VALUES  ('"
                . $this->title . "','"
                . $this->image_name . "', '"
                . $this->short_description . "', '"
                . $this->description . "', '"
                . $this->queue . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `things_to_do` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `things_to_do` SET "
                . "`title` ='" . $this->title . "', "
                . "`image_name` ='" . $this->image_name . "', "
                . "`short_description` ='" . $this->short_description . "', "
                . "`description` ='" . $this->description . "', "
                . "`queue` ='" . $this->queue . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $this->deletePhotos();

        unlink(Helper::getSitePath() . "upload/things-to-do/" . $this->image_name);

        $query = 'DELETE FROM `things_to_do` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function deletePhotos() {

        $THINGS_TO_DO_PHOTO = new ThingsToDoPhoto(NULL);

        $allPhotos = $THINGS_TO_DO_PHOTO->getThingsToDoPhotosById($this->id);

        foreach ($allPhotos as $photo) {

            $IMG = $THINGS_TO_DO_PHOTO->image_name = $photo["image_name"];
            unlink(Helper::getSitePath() . "upload/things-to-do/gallery/" . $IMG);
            unlink(Helper::getSitePath() . "upload/things-to-do/gallery/thumb/" . $IMG);

            $THINGS_TO_DO_PHOTO->id = $photo["id"];
            $THINGS_TO_DO_PHOTO->delete();
        }
    }

    public function arrange($key, $img) {
        $query = "UPDATE `things_to_do` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}