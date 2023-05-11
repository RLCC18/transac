<?php
    function user_valid() {
        if (!empty($_POST['userbox'])) {
            $insert = new insert($_POST['userbox']);
            
            if ($insert->insertStuff()) {
                echo '
                    <div class="alert alert-success alert-dismissable fade show mt-3" role="alert">
                        Successfully queued!
    
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            } else {
                echo '
                    <div class="alert alert-danger alert-dismissable fade show mt-3 " role="alert">
                        Unsuccessful queue...
    
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>            
                ';
            }
        }
    }

    function user_next() {
        if (!empty($_GET['next'])) {
            $next = new next($_GET['next']);

            if ($next->changeDisplay()) {
                echo '
                <div class="alert alert-success alert-dismissable fade show mt-3" role="alert">
                    Successfully called!

                    <button class="close" type="button" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
            } else {
                echo '
                <div class="alert alert-danger alert-dismissable fade show mt-3 " role="alert">
                    Unsuccessful call...

                    <button class="close" type="button" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>            
            ';
            }
        }
    }

    function user_edit() {
        if (!empty($_GET['edit'])) {
            $edit = new edit($_GET['edit']);

            if ($edit->changeStatus()) {
                echo '
                <div class="alert alert-success alert-dismissable fade show mt-3" role="alert">
                    Successfully added in line!

                    <button class="close" type="button" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
            } else {
                echo '
                <div class="alert alert-danger alert-dismissable fade show mt-3 " role="alert">
                    Unsuccessful queue...

                    <button class="close" type="button" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>            
            ';
            }
        }
    }

    function user_delete() {
        if (!empty($_GET['delete'])) {
            $del = new delete($_GET['delete']);

            if ($del->delUser()) {
                echo '
                <div class="alert alert-success alert-dismissable fade show mt-3" role="alert">
                    Successfully removed from line!

                    <button class="close" type="button" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
            } else {
                echo '
                <div class="alert alert-danger alert-dismissable fade show mt-3 " role="alert">
                    Unsuccessful action...

                    <button class="close" type="button" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>            
            ';
            }
        }
    }
    
    function combo() {
        user_edit();
        user_delete();
        user_next();
    }
?>