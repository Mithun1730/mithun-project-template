<?php include('connect.php'); ?>
<?php session_start(); ?>
<?php include("head.php") ?>
<?php include("navbar.php") ?>

<head>
  <style>
    body {
      background-color: white;
    }
  </style>
  <script src="/dist/js/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="ajax.js"></script>

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

</head>

<body>

  <div class="page-body">
    <div class="container-xl">
      <div class="card ">
        <div class="card-body">


          <div class="mx-auto ">
            <form action="" method="GET">
              <div class="input-icon col-md-3 mt-1">
                <span class="input-icon-addon">
                  <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-info" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                    <path d="M21 21l-6 -6"></path>
                  </svg>
                </span>
                <input type="text" value="<?php if (isset($_GET['search'])) {
                                            echo $_GET['search'];
                                          }  ?>" name="search" class="form-control form-control-rounded text-info" placeholder="Search…" aria-label="Search in website" fdprocessedid="ysvsd3">
              </div>
            </form>
          </div>
          <div id="table-default " class="table-responsive">
            <table class="table mt-3">
              <thead>
                <tr>
                  <th><button class="table-sort " style="width: 15rem;" data-sort="sort-name">Name</button></th>
                  <th><span style="width: 5rem;" data-sort="sort-name"></th>
                  <th><button class="table-sort " style="width: 15rem;" data-sort="sort-type">Email</button></th>
                  <th><button class="table-sort " style="width: 10rem;" data-sort="sort-score">Status</button></th>
                  <th><button class="table-sort " style="width: 10rem;" data-sort="sort-city">Check In AM</button></th>
                  <th><button class="table-sort " style="width: 10rem;" data-sort="sort-city">Check Out AM/PM</button></th>
                  <th><button class="table-sort " style="width: 10rem;" data-sort="sort-city">Chech In PM</button></th>
                  <th><button class="table-sort " style="width: 10rem;" data-sort="sort-city">Check Out PM</button></th>
                  <th><button class="table-sort " style="width: 10rem;" data-sort="sort-date">Date</button></th>
                  <th><button class="table-sort " style="width: 10rem;" data-sort="sort-date">Hours Worked</button></th>
                  <th><button class="table-sort" data-sort="sort-progress">Progress</button></th>
                </tr>
              </thead>
              <tbody class="table-tbody">
                <tr>
                  <?php

                  include "connect.php";
                  if (isset($_GET['search'])) {
                    $searchobj = $_GET['search'];
                    $sql = "SELECT * FROM attendance WHERE CONCAT(attendance_emp_id, emp_name, emp_email, date) LIKE '%$searchobj%' ";
                    $res = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($res) > 0) {
                      foreach ($res as $row) { ?>
                <tr>
                  <td> <?php echo $row['emp_name'] ?> </td>
                  <td><a href="#" rel="popover" data-placement="left" data-trigger="hover" data-toggle="popover" title="<?php if (!empty($row['daily_report'])) {
                                                                                                                          echo $row['daily_report'];
                                                                                                                        } else {
                                                                                                                          echo 'No record found!';
                                                                                                                        } ?>" data-content="<?php if (!empty($row['daily_report'])) {
                                                                                                                                              echo $row['daily_report'];
                                                                                                                                            } else {
                                                                                                                                              echo 'No record found!';
                                                                                                                                            } ?>">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pen" viewBox="0 0 20 20">
                          <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                        </svg>
                      </span></a>
                  </td>
                  <script>
                    $(document).ready(function() {
                      $('[data-toggle="popover"]').popover();
                      e.preventDefault();
                      e.stopPropagation();
                      return false;
                    });
                  </script>
                  <td><?php echo $row['emp_email'] ?></td>
                  <td><span class="badge badge-outline text-teal">Logged In</span></td>
                  <td><?php echo $row['checkin_am'] ?></td>
                  <td><?php echo $row['checkout_am_pm'] ?></td>
                  <td><?php echo $row['checkin_pm'] ?></td>
                  <td><?php echo $row['checkout_pm'] ?></td>
                  <td><?php echo $row['date'] ?></td>
                  <td><span class="badge badge-outline bg-orange-lt">

                      <?php

                        $checkin_am = strtotime($row['checkin_am']);
                        $checkout_am_pm = strtotime($row['checkout_am_pm']);
                        $checkin_pm = strtotime($row['checkin_pm']);
                        $checkout_pm = strtotime($row['checkout_pm']);

                        $timediff1 = abs($checkout_am_pm - $checkin_am);
                        $timediff2 = abs($checkout_pm - $checkin_pm);

                        $hr1 = floor($timediff1 / (60 * 60));
                        $hr2 = floor($timediff2 / (60 * 60));

                        $hours = abs($hr1 + $hr2);

                        $min1 = floor($timediff1 / 60 % 60);
                        $min2 = floor($timediff2 / 60 % 60);


                        $mins = abs($min1 + $min2);


                        $sec1 = floor($timediff1 % 60);
                        $sec2 = floor($timediff2 % 60);


                        $sec = abs($sec1 + $sec2);


                        if ($mins >= 60) {
                          $hours = $hours + 1;
                          $mins = $mins - 60;
                        }

                        if ($sec >= 60) {
                          $sec = $sec - 60;
                          $mins = $mins + 1;
                        }

                        echo $hours . 'h' . " " . $mins . 'm' . " " . $sec . 's';

                      ?>
                    </span>
                  </td>
                  <td class="sort-progress" data-progress="30">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-auto">30%</div>
                      <div class="col">
                        <div class="progress" style="width: 5rem">
                          <div class="progress-bar" style="width: 30%" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" aria-label="30% Complete">
                            <span class="visually-hidden">30% Complete</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
            <?php }
                    } else {
                      echo "<div class='mt-3 text-red'><b> No records found !!! </b></div>";
                    }
                  } else {


            ?>

            <?php include "connect.php";
                    $sql = "SELECT * FROM attendance";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {

            ?>
              <tr>
                <td> <?php echo $row['emp_name'] ?>

                </td>
                <td>

                  <a href="#" data-trigger="hover" data-toggle="popover" title="<?php if (!empty($row['daily_report'])) {
        echo $row['daily_report'];
         } else {
        echo 'No record found!';
         } ?>" data-content="<?php if (!empty($row['daily_report'])) {
          echo $row['daily_report'];
           } else {
          echo 'No record found!';
         } ?>">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pen" viewBox="0 0 20 20">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                      </svg>
                    </span></a>
                </td>
                <script>
                  $(document).ready(function() {
                    $('[data-toggle="popover"]').popover();
                    return false;
                  });
                </script>

                <td><?php echo $row['emp_email'] ?></td>

                <td><span class="badge badge-outline text-teal">Logged In</span></td>

                <td><strong><?php echo date('h:i:s a ', strtotime($row['checkin_am'])) ?></strong></td>
                <td><strong><?php echo date('h:i:s a ', strtotime($row['checkout_am_pm'])) ?></strong></td>
                <td><strong><?php echo date('h:i:s a ', strtotime($row['checkin_pm'])) ?></strong></td>
                <td><strong><?php echo date('h:i:s a ', strtotime($row['checkout_pm'])) ?></strong></td>


                <td>
                  <div class="text-primary"><?php echo $row['date'] ?></div>
                </td>
                <td><span class="badge badge-pill bg-orange-lt">
                    <?php
                      if (!empty($row['checkin_am']) && !empty($row['checkout_am_pm']) && !empty($row['checkin_pm']) && !empty($row['checkout_pm'])) {
                        $checkin_am = strtotime($row['checkin_am']);
                        $checkout_am_pm = strtotime($row['checkout_am_pm']);
                        $checkin_pm = strtotime($row['checkin_pm']);
                        $checkout_pm = strtotime($row['checkout_pm']);
                        $timediff1 = abs($checkout_am_pm - $checkin_am);
                        $timediff2 = abs($checkout_pm - $checkin_pm);

                        $hr1 = floor($timediff1 / (60 * 60));
                        $hr2 = floor($timediff2 / (60 * 60));

                        $hours = abs($hr1 + $hr2);

                        $min1 = floor($timediff1 / 60 % 60);
                        $min2 = floor($timediff2 / 60 % 60);

                        $mins = abs($min1 + $min2);


                        $sec1 = floor($timediff1 % 60);
                        $sec2 = floor($timediff2 % 60);


                        $sec = abs($sec1 + $sec2);


                        if ($mins >= 60) {
                          $hours = $hours + 1;
                          $mins = $mins - 60;
                        }

                        if ($sec >= 60) {
                          $sec = $sec - 60;
                          $mins = $mins + 1;
                        }

                        $_SESSION['hours'] = $hours;
                        echo $hours . 'h' . " " . $mins . 'm' . " " . $sec . 's';
                      }


                    ?>
                  </span>
                </td>

                <td class="sort-progress" data-progress="30">
                  <div class="row align-items-center">
                    <div class="col-12 col-lg-auto">10%</div>
                    <div class="col">
                      <div class="progress" style="width: 5rem">
                        <div class="progress-bar" style="width: 30%" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" aria-label="30% Complete">
                          <span class="visually-hidden">10% Complete</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              </tbody>
            <?php } ?>
          <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>


<?php include('footer.php') ?>