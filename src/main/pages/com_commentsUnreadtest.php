<?php

$servername = 'localhost';
$username = 'root';
$password = '1234';
$dbname = 'member';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die('Connection failed: '.$conn->connect_error);
}

$sql = 'SELECT idmessage, type, details, details FROM message WHERE idmessage="2"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '
<!-- Panel Body -->
 <div class="card-block g-pa-0">
        <div class="media g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-20">
            <img class="d-flex g-width-50 g-height-50 g-mt-3 g-mr-20" src="../../assets/img-temp/100x100/img14.jpg" alt="Image Description">
            <div class="media-body">
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center g-mb-15 g-mb-10--sm">
                    <h5 class="h4 g-font-weight-700 g-mr-10 g-mb-5 g-mb-0--sm">' .$row['type'].'</h5>
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#" data-toggle="modal" data-target="#myMessage">
                        <i class="fa fa-commenting-o" aria-hidden="true"></i> 回覆
                      </a>

                </div>

                <a class=h ref="#" data-toggle="modal" data-target="#myData">
                    <p>' .$row['details'].'</p>
                </a>


            </div>
        </div>

       
  </div>
    <!-- End Panel Body -->

<!-- End Comments (Option 1) -->
<div class="modal fade" id="myMessage" tabindex="-1" role="dialog" aria-labelledby="myMessage1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
                </button>

                <h4 class="modal-title" id="myMessage1">
                    回覆留言
                </h4>
            </div>
            <div class="modal-body">
                <form class="bs-example bs-example-form" role="form">
                    <div class="form-group">
                        <span class="input-group-addon">內容:</span>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">關閉
				</button>
                <button type="button" class="btn btn-primary">
					送出
				</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal -->
</div>
<div class="modal fade" id="myData" tabindex="-1" role="dialog" aria-labelledby="myDataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>

                <h4 class="modal-title" id="myDataLabel">
                    詳細內容
                </h4>
            </div>
            <div class="modal-body">
                <form class="bs-example bs-example-form" role="form">
                    <div class="form-group">
                        <p>' .$row['idmessage'].'</p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">關閉
                        </button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal -->
</div>';
}
} else {
    echo '0 results';
}

$conn->close();