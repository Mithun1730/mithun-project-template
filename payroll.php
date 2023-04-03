<?php include('head.php') ?>
<?php include('navbar.php') ?>

<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="/dist/jquery-ui.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="ajax.js"></script>



</head>

  <div class=" mx-auto mt-2 mb-2">
    
      <form class="form-inline" method="GET">

    <label>From</label>

        <div class="form-group input-icon mb-2">
          <input class="form-control " type="date" name="from" value = '<?php echo$_GET['from']?>'>
        </div>

      <label>To</label>

      <div class="form-group input-icon mb-2">
          <input class="form-control " type="date" name="to" value = '<?php echo $_GET['to']?>'>
          
        </div>
  
        <button type="submit" name="submit" class="btn btn-primary btn-sm mb-1">Get Data</button>

      </form>
    
  </div>
  
 

  <div class="container-xl mt-3">
    <div class="card">


      <div class="table-responsive">
        <table class="table table-vcenter card-table">
          <thead>
            <tr>
              <th>ID</th>
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
  include "connect.php";
  if(isset($_GET['from']) && isset($_GET['to'])){
    $from = $_GET['from'];
    $to = $_GET['to'];

    $sql = " SELECT * FROM attendance WHERE date >= '$from' AND date <= '$to' ";
    
   //  $sql .= " SELECT attendance_emp_id, count(emp_name) AS present FROM attendance GROUP BY attendance_emp_id ; UNION ALL";

    // $sql .= " SELECT attendance_emp_id, sum(total_hours) AS total FROM attendance GROUP BY attendance_emp_id ; ";

    $result = mysqli_query($conn,$sql);
   
    
    if($result){
      while($row = mysqli_fetch_array($result)){    
       ?>
   
 <tr>
                  <td><?php echo $row['attendance_emp_id'] ?></td>
                  <td><?php echo $row['emp_name'] ?></td>
                  <td class="text-muted">
                    <?php echo $row['emp_title'] ?>
                  </td>

                  <td class="text-muted"><a href="#" class="text-reset"><?php echo $row['emp_email'] ?></a>
                  </td>
                  
                   
                  <td>
                  <?php
                  $sql2= " SELECT attendance_emp_id, count(emp_name) AS present FROM attendance GROUP BY attendance_emp_id " ; 
                  $result2 = mysqli_query($conn,$sql2);
                  if($result2){
                    $row = mysqli_fetch_array($result2);
                      echo $row['present'];
                
                  }
                  ?>
                  </td>
                  <td>
                  <?php
                 $sql3= " SELECT attendance_emp_id, sum(total_hours) AS total FROM attendance GROUP BY attendance_emp_id ";
                  $result3 = mysqli_query($conn,$sql3);
                  if($result3){
                    $row = mysqli_fetch_array($result3);
                      echo $row['total'];
                
                  }
                  ?>
                  </td>
                          
                  <td>
                    <button id=" <?php echo $row['attendance_emp_id'] ?>" data-target= "#payrollmodal" data-toggle="modal" class="btn btn-danger text-white" onclick="showDetails(this);">Generate</button>
                
                  </td>
                </tr> 
                <?php  } } }  ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script>
    function showDetails(button){
        var selected_emp = button.id;
        $.ajax({
          url:'getdata.php',
          method:'GET',
          data:{"selected_emp":selected_emp},
          success:function(response){
            var employee = JSON.parse(response);
            $('#id').text(employee.attendance_emp_id);
            $('#name').text(employee.emp_name);
            $('#title').text(employee.emp_title);
            $('#email').text(employee.emp_email);
            $('#mobile').text(employee.mobile);
          }
        });
    }
  </script>

  <div id="payrollmodal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="user_form" action="pdf_generator.php" method="post">
          <div class="modal-header">
            <h4 class="modal-title">Payroll Generation</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
          <div class="form-group">
              <label>ID</label>
              <input type="text" id="id" value="<?php echo  $row['attendance_emp_id']?>" name="id" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Name</label>
              <input type="text" id="name" value="<?php echo $row['emp_name']?>" name="name" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Title</label>
              <input type="text" id="title" value="<?php echo $row['emp_title']?>" name="title" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" id="email" value="<?php echo $row['emp_email']?>" name="email" class="form-control" required>
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
            <button type="submit"   class="btn btn-primary">Generate PDF</button>
          </div>
        </form>
      </div>
    </div>
  </div>

 

  

