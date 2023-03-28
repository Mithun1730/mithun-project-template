<?php include('head.php') ?>
<?php include('navbar.php') ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <link rel="stylesheet" href="style.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <script src="ajax.js"></script>
<div class="container-xl mt-3">
<div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                            
                          <th>Name</th>
                          <th>Title</th>
                          <th>Email</th>
                          <th>Today Days Present</th>
                          <th>Total Hours Worked</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                            include 'connect.php';
                            $sql = " SELECT  * FROM employee_details ";
                            $result=mysqli_query($conn,$sql);
                            if($result){
                                while($row=mysqli_fetch_array($result)){

                                ?>
                        <tr>
                          <td><?php echo $row['name'] ?></td>
                          <td class="text-muted">
                          <?php echo $row['title'] ?>
                          </td>
                          
                          <td class="text-muted"><a href="#" class="text-reset"><?php echo $row['email'] ?></a></td>
                          <td class="text-muted"><?php $sql = "SELECT * FROM attendance";?></td>
                          <td class="text-muted">
                            Not Yet Updated
                          </td>
                          <td>
                            <a href="#addEmployeeModal" data-toggle="modal" class="btn btn-danger text-white">Generate</a>
                            
                            
                          </td>
                        </tr>
                       <?php } }?>
                      </tbody>
                    </table>
                  </div>
                </div>
</div>


<div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form id="user_form">
                  <div class="modal-header">
                    <h4 class="modal-title">Payroll Generation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" id="title" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Mobile No.</label>
                      <input type="phone" id="phone" name="phone" class="form-control" required>
                    </div>     
                   

                    <div class="form-group">
                      <label>Total Days Present</label>
                      <input type="text" id="title" name="title" class="form-control" required>
                    </div>   
                    <div class="form-group">
                      <label>Total Hours Worked</label>
                      <input type="text" id="title" name="title" class="form-control" required>
                    </div>   
                    
                  </div>
                  <div class="modal-footer">
                   
                    <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-primary">Generate PDF</button>
                  </div>
                </form>
              </div>
            </div>
          </div>


<?php include('footer.php') ?>
