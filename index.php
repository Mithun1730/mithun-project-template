<?php include('head.php') ?>
<?php include('navbar.php') ?>

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
                      <input type="hidden" id="employee_id" name='employee_id'>
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
            while ($row = mysqli_fetch_array($result)) {
              $id = $row['employee_id'];
            ?>
              <tbody>
                <tr>
                  <td data-label="Name">
                    <div class="d-flex py-1 align-items-center">

                      <div class="flex-fill">
                        <div class="font-weight-medium" id="name"><?php echo $row['employee_name']; ?></div>
                      </div>
                    </div>
                  </td>
                  <td data-label="Title">
                    <div id="title"><?php echo $row['title']; ?></div>

                  </td>
                  <td class="text-muted" data-label="Role">
                    <div id="address"><?php echo $row['employee_address']; ?></div>
                  </td>
                  <td class="text-muted" data-label="Role">
                    <div id="email"><?php echo $row['employee_email']; ?></div>
                  </td>
                  <td class="text-muted" data-label="Role">
                    <div id="mobile"><?php echo $row['employee_mobile']; ?></div>
                  </td>
                  <td class="text-muted" data-label="Role">
                    <div id="salary"><?php echo $row['basic_salary']; ?></div>
                  </td>
                  <td>
                    <div class="btn-list flex-nowrap">
                      <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                        <button type="button" class="btn btn-warning edit_data" value="edit" data-bs-toggle="modal" data-bs-target="#modal" id=" <?php echo $row['employee_id'] ?>">
                          Edit
                        </button>
                        <button type="button" class="btn btn-danger delete_data" value="delete" data-bs-toggle="modal" data-bs-target="#deletemodal" id=" <?php echo $row['employee_id'] ?>">
                          Delete
                        </button>
                      </div>
                    </div>
                  <?php
                }
                  ?>

                  <!-- Edit Box -->


                  <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="editmodal" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form action="update.php" id="editform" method="post">

                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Details</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>


                          <div class="modal-body" id="edit_details">

                            <div class="mb-3">
                              <label class="form-label">Name</label>
                              <input type="hidden" id="editid" name="editid">
                              <input type="text" class="form-control" name="editname" id="editname" value="<?php echo $row['employee_name'] ?>">

                            </div>

                            <div class="mb-3">
                              <label class="form-label">Title<span class="form-label-description">56/100</span></label>
                              <textarea class="form-control" name="edittitle" id="edittitle" rows="6" value="<?php echo $row['title'] ?>></textarea>
                    </div>

                    <div class=" mb-3">
                        <label class="form-label">Address <span class="form-label-description">56/100</span></label>
                        <textarea class="form-control" name="editaddress" id="editaddress" rows="6" value="<?php echo $row['employee_address'] ?>></textarea>
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Email address</label>
                              <input type="email" class="form-control" name="editemail" id="editemail" placeholder="Email" value="<?php echo $row['employee_email'] ?>>
                    </div>

                    <div class=" mb-3">
                              <label class="form-label">Basic Salary</label>
                              <input type="tel" class="form-control" name="editsalary" id="editsalary" autocomplete="off" value="<?php echo $row['basic_salary'] ?>>
                    </div>

                    <div class=" mb-3">
                              <label class="form-label">Phone number</label>
                              <input type="tel" class="form-control" name="editmobile" id="editmobile" autocomplete="off" value="<?php echo $row['employee_mobile'] ?>>
                    </div>
                </div>

                <div class=" modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" name="edituser" id="edituser" class="btn btn-primary">
                                Save Changes
                                </a>
                              </button>

                            </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- End of Edit Box -->
                  <script>
                    $(document).ready(function() {
                      $(document).on('click', '.edit_data', function() {
                        var edit_id = $(this).attr('id');
                        $.ajax({
                          url: 'editmodal.php',
                          method: 'post',
                          data: {
                            edit_id: edit_id
                          },
                          success: function(data) {
                            $('#edit_details').html(data)
                          }
                        })
                      });
                    });
                  </script>
                  <!-- Delete Box -->
                  <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="deletemodal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="deletemodal">Delete Record</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Do you want to delete this...?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!--End of Delete Box-->
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