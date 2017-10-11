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

$sql = 'SELECT start, end, people, dates, views, details, seat FROM article';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<!-- Search Result -->
        <article>
          <h3 class="h4 g-mb-15">
            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">' .$row['start'].' → ' .$row['end'].'</a>
          </h3>
        
          <div class="d-lg-flex justify-content-between align-items-center g-mb-15">
            <!-- Search Info -->
            <ul class="list-inline g-mb-10 g-mb-0--lg">
              <li class="list-inline-item g-mr-30">
                <img class="g-height-25 g-width-25 rounded-circle g-mr-5" src="../../assets/img-temp/100x100/img7.jpg" alt="Image Description">
                <a class="u-link-v5 g-color-main g-color-primary--hover" href="#">' .$row['people'].'</a>
              </li>
              <li class="list-inline-item g-mr-30">
                <i class="fa fa-calendar g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i>' .$row['dates'].'
              </li>
              <li class="list-inline-item g-mr-30">
                <i class="fa fa-eye g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i>' .$row['views'].'
              </li>
            </ul>
            <!-- End Search Info -->
        
            <!-- Share, Print and More -->
            <ul class="list-inline mb-0">
              <li class="list-inline-item g-mr-20">
                <p class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover">
                  <i class="fa fa-user g-pos-rel g-top-1 g-mr-5"></i> 人數:
                  <i> 2/4</i>
                </p>
              </li>
              <li class="list-inline-item">
                <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="content.html">
                  <i class="fa fa-info-circle g-pos-rel g-top-1 g-mr-5"></i> 詳細
                </a>
              </li>
            </ul>
            <!-- End Share, Print and More -->
          </div>
        
          <p class="g-mb-15"></p>
        
        </article>
        <!-- End Search Result -->
        
        <hr class="g-brd-gray-light-v4 g-my-40">';
    }
} else {
    echo '0 results';
}

$conn->close();
