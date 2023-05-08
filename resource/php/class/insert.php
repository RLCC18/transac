<?php
    class insert extends config {
        public $task;

        public function __construct($task) {
            $con = $this->con();
            $sql = "INSERT INTO `tbl_ts` (`ts_user`) VALUES ('$this->task')";
            $data = $connect->prepare($sql);

            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>