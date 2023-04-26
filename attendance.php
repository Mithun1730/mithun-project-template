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
                  <th><span class="table-sort " style="width: 15rem;" data-sort="sort-name">Name</span></th>
                  <th><span style="width: 5rem;" data-sort="sort-name"></th>
                  <th><span style="width: 5rem;" data-sort="sort-name"></th>
                  <th><span class="table-sort " style="width: 25rem;" data-sort="sort-type">Email</span></th>
                  <th><span class="table-sort " style="width: 10rem;" data-sort="sort-score">Status</span></th>
                  <th><span class="table-sort " style="width: 10rem;" data-sort="sort-city">Check In AM</span></th>
                  <th><span class="table-sort " style="width: 10rem;" data-sort="sort-city">Check Out AM/PM</span></th>
                  <th><span class="table-sort " style="width: 10rem;" data-sort="sort-city">Chech In PM</span></th>
                  <th><span class="table-sort " style="width: 10rem;" data-sort="sort-city">Check Out PM</span></th>
                  <th><span class="table-sort " style="width: 10rem;" data-sort="sort-date">Date</span></th>
                  <th><span class="table-sort " style="width: 10rem;" data-sort="sort-date">Hours Worked</span></th>

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
                  <td>
                    <a href="" data-toggle="popover"  rel="popover" data-placement="left" title="Hello" data-content="Hello">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16" style="color: orange;">
                          <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                          <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                      </span>
                    </a>
                  </td>
                  <script>
                    $(document).ready(function() {
                      $('[data-toggle="popover"]').popover();

                    });

                  </script>

                  <script>
                   
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

                  <a href="#" trigger="hover" data-toggle="popover" title="<?php if (!empty($row['daily_report'])) {
                                                                              echo $row['daily_report'];
                                                                            } else {
                                                                              echo 'No record found!';
                                                                            } ?>" data-content="<?php if (!empty($row['daily_report'])) {
                                                                                                  echo $row['daily_report'];
                                                                                                } else {
                                                                                                  echo 'No record found!';
                                                                                                } ?>">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-code" viewBox="0 0 16 16" style="color: brown;">
                        <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                        <path d="M8.646 6.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 9 8.646 7.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 9l1.647-1.646a.5.5 0 0 0 0-.708z" />
                      </svg>
                    </span>
                  </a>
                </td>

                <td>
                  <a href="" data-toggle="popover2" title="Hello" data-content="Hello">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16" style="color: orange;">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                      </svg>
                    </span>
                  </a>
                </td>
                <script>
                  $(document).ready(function() {
                    $('[data-toggle="popover2"]').popover();

                  });

                  $(document).ready(function() {
                    $('[data-toggle="popover"]').popover();
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