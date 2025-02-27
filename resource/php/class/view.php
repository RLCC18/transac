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
                        <td>
                            <a class="btn btn-success btn-sm " href="queue.php?edit=$data[ts_id]">Next</a>
                            <a class="btn btn-danger btn-sm " href="queue.php?delete=$data[ts_id]">Cancel</a>
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
            $sql = "SELECT * FROM `tbl_ts` WHERE `ts_status` = 'FINISHED'";
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
                        <td>
                            <a class="btn btn-primary">Call</a>
                        </td>
                    </tr>
                ';
            }
            echo '
                </tbody>
            </table>
            ';
        }
    }
?>