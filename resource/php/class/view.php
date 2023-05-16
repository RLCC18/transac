<?php
    class view extends config {

        public function viewPend() {
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_ts` WHERE `ts_status` = 'PENDING'";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);

            echo '<h3 class="text-center mt-3 mb-3">Pending List</h3>';
            echo '
                <table class="table table-striped table-bordered mb-5">
                    <thead>
                        <tr>
                            <th class="text-center">Token</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
            ';
            foreach ($result as $data) {
                echo '
                    <tr>
                        <td class="text-center">'.$data['ts_qnum'].'</td>
                        <td class="text-center">'.$data['ts_user'].'</td>
                        <td class="text-center">
                            <a class="btn btn-success btn-sm " href="queue.php?edit='.$data['ts_id'].'">Next</a>
                            <a class="btn btn-danger btn-sm " href="queue.php?delete='.$data['ts_id'].'">Cancel</a>
                        </td>
                    </tr>
                ';
            }
            echo '
                </tbody>
            </table>
            ';
        }

        public function viewDone() {
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_ts` WHERE `ts_status` = 'NEXT'";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);

            echo '<h3 class="text-center mt-3 mb-3">Next in Line</h3>';
            echo '
                <table class="table table-striped table-bordered mb-5">
                    <thead>
                        <tr>
                            <th class="text-center">Token</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Counter</th>
                        </tr>
                    </thead>
                    <tbody>
            ';
            foreach ($result as $data) {
                echo '
                    <tr>
                        <td class="text-center">'.$data['ts_qnum'].'</td>
                        <td class="text-center">'.$data['ts_user'].'</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="queue.php?next='.$data['ts_id'].'">Call</a>
                        </td>
                    </tr>
                ';
            }
            echo '
                </tbody>
            </table>
            ';
        }

        public function viewDisplay() {
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_ts` WHERE `ts_status` = 'DISPLAY' ORDER BY `ts_date` DESC LIMIT 1";
            $b = rand(1,4);
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $data) {
                echo '
                    <h1 class="display-4 text-light text-center text-uppercase">Client No. '.$data['ts_qnum'].'</h1>
                    <h3 class="display-4 text-light text-center text-uppercase">Proceed to Counter '.$b.'</h3>
                ';
            }
        }
    }
?>
