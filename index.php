<?php include('head.php') ?>
<?php include('navbar.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="button.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>




  <div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Home
          </div>
          <div class="button">
            <a href="" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 5l0 14"></path>
                <path d="M5 12l14 0"></path>
              </svg>
              Add new employee
            </a>
          </div>

          <div class="modal fade" id="modal-report" tabindex="-1" aria-labelledby="modal-report" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Employee Details</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="add.php" method="POST" id="insertform">
                  <div class="modal-body">

                    <div class="form-group">
                      <label class="form-label">Name</label>
                      <input type="text" id="name" class="form-control" name="name" placeholder="Input placeholder">
                    </div>

                    <div class="form-group">
                      <label class="form-label">Title<span class="form-label-description">56/100</span></label>
                      <textarea class="form-control" id="title" name="title" rows="6" placeholder="Content.."></textarea>
                    </div>

                    <div class="form-group">
                      <label class="form-label">Address <span class="form-label-description">56/100</span></label>
                      <textarea class="form-control" id="address" name="address" rows="6" placeholder="Content.."></textarea>
                    </div>

                    <div class="form-group">
                      <label class="form-label">Email address</label>
                      <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com">
                    </div>

                    <div class="form-group">
                      <label class="form-label">Basic Salary</label>
                      <input type="tel" id="salary" name="salary" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <label class="form-label">Phone number</label>
                      <input type="tel" id="mobile" name='mobile' class="form-control" autocomplete="off">
                    </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="adduser " name="adduser" class="btn btn-primary">

                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 5l0 14"></path>
                        <path d="M5 12l14 0"></path>
                      </svg>
                      Create new employee
                      </a>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>


          <?php
          include('connect.php');
          $query = 'SELECT * FROM employees';
          $result = mysqli_query($conn, $query);
          ?>
          <table class="table table-vcenter table-mobile-md card-table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Title</th>
                <th>Address</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Basic Salary</th>
                <th>Action</th>
                <th class="w-1"></th>
              </tr>
            </thead>
            <?php
            if ($result) {
              foreach ($result as $row) {
                $id=$row['employee_id'];
            ?>
                <tbody>
                  <tr>
                    <td data-label="Name">
                      <div class="d-flex py-1 align-items-center">

                        <div class="flex-fill">
                          <div class="font-weight-medium"><?php echo $row['employee_name']; ?></div>
                        </div>
                      </div>
                    </td>
                    <td data-label="Title">
                      <div><?php echo $row['title']; ?></div>

                    </td>
                    <td class="text-muted" data-label="Role">
                      <?php echo $row['employee_address']; ?>
                    </td>
                    <td class="text-muted" data-label="Role">
                      <?php echo $row['employee_email']; ?>
                    </td>
                    <td class="text-muted" data-label="Role">
                      <?php echo $row['employee_mobile']; ?>
                    </td>
                    <td class="text-muted" data-label="Role">
                      <?php echo $row['basic_salary']; ?>
                    </td>
                    <td>
                      <div class="btn-list flex-nowrap">
                        <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Edit
                          </button>
                          <button type="button"  id="deletebutton" name="deletebutton" class="btn btn-danger  " data-bs-toggle="modal" data-bs-target="#deleterow">
                           <a href="delete.php?deleteid = '.$id.'" class="text-light" >Delete</a> 
                          </button>
                        </div>
                      </div>
                  <?php
                }
              }
                  ?>

                  <!-- Edit Box -->


                  <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Employee Details</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="update.php" method="POST" id="editform">
                          <div class="modal-body">

                            <div class="mb-3">
                              <label class="form-label">Name</label>
                              <input type="text" class="form-control" name="example-text-input" placeholder="Input placeholder">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Title<span class="form-label-description">56/100</span></label>
                              <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Content..">Web Developer</textarea>
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Address <span class="form-label-description">56/100</span></label>
                              <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Content..">Oh! Come and see the violence inherent in the system! Help, help, I'm being repressed! We shall say 'Ni' again to you, if you do not appease us. I'm not a witch. I'm not a witch. Camelot!</textarea>
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Email address</label>
                              <input type="email" class="form-control" placeholder="Email">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Basic Salary</label>
                              <input type="tel" class="form-control" autocomplete="off">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Phone number</label>
                              <input type="tel" class="form-control" autocomplete="off">
                            </div>
                          </div>
                        </form>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" name="edituser" id="edituser" class="btn btn-primary">
                            <a href="update.php" class="btn btn-primary ms-auto" data-bs-dismiss="modal">

                              Save Changes
                            </a>
                          </button>

                        </div>
                      </div>
                    </div>
                  </div>


                  <!-- Delete Box -->

                  <div class="modal fade" id="deleterow" tabindex="-1" aria-labelledby="deleterow" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-status bg-danger"></div>
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="deleterow">Record Deleted</h1>
                          <button type="button" name="delete" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="text-muted">Record deleted successfully.</div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>







                    </td>
                  </tr>
                </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Page body -->

</body>

</html>
<?php include('footer.php') ?>