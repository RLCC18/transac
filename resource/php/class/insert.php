<?php
    class insert extends config {
        public $action;

        public function __construct($action) {
            $this->action = $action;
        }
        
        public function insertStuff() {
            $con = $this->con();
            $a;
            $b;
            
            if (isset($_POST['withbtn'])) {
                $a = "W-" . rand(0,9999);
                $b = "Withdraw";
            } elseif (isset($_POST['depobtn'])) {
                $a = "D-" . rand(0,9999);
                $b = "Deposit";
            }
            
            $sql = "INSERT INTO `tbl_ts` (`ts_user`, `ts_action`, `ts_qnum`) VALUES ('$this->action', '$b', '$a')";
            $data = $con->prepare($sql);

            if ($data->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>