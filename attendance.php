<?php include ("head.php")?>
<?php include ("navbar.php")?>
<?php include('connect.php'); ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <link rel="stylesheet" href="style.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <script src="ajax.js"></script>

<div class="page-body">
          <div class="container-xl">
            <div class="card">
              <div class="card-body">
                <div id="table-default" class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th><button class="table-sort " style="width: 20rem;" data-sort="sort-name">Name</button></th>
                        <th><button class="table-sort r" style="width: 10rem;"  data-sort="sort-city">City</button></th>
                        <th><button class="table-sort " style="width: 10rem;" data-sort="sort-type">Email</button></th>
                        <th><button class="table-sort "  style="width: 10rem;"data-sort="sort-score">Score</button></th>
                        <th><button class="table-sort " style="width: 10rem;" data-sort="sort-date">Date</button></th>
                        
                        <th><button class="table-sort" data-sort="sort-progress">Progress</button></th>
                      </tr>
                    </thead>
                    <tbody class="table-tbody"><tr>
                        <td>MITHUN A</td>
                        <td>Karaikal</td>
                        <td>mitchellmithun@gmail.com</td>
                        <td>100%</td>
                        <td>August 05, 2021</td>
                       
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
                      </tr></tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>





<?php include('footer.php') ?>