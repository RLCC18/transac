<?php
    class delete extends config {
        public $no;
        
        public function __construct($no) {
            $this->no = $no;
        }

        public function delUser() {
            $con = $this->con();
            $sql = "DELETE FROM `tbl_ts` WHERE `ts_id` = '$this->no'";
            $data = $con->prepare($sql);

            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }

?>