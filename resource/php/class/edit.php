<?php
    class edit extends config {
        public $no;

        public function __construct($no) {
            $this->no = $no;
        }

        public function changeStatus() {
            $con = $this->con();
            $sql = "UPDATE `tbl_ts` SET `ts_status` = 'FINISHED' WHERE `ts_id` = '$this->no'";
            $data = $con->prepare($sql);

            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>