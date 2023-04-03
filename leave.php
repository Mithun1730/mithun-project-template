<?php include('head.php') ?>
<?php include('navbar.php') ?>



<div class=" mx-auto mt-2 mb-2">

    <form class="form-inline" method="GET">

      <label> From </label>
      <div class="form-group input-icon mb-2">

        <input class="form-control " type="date" name="from" value='<?php echo $_GET['from'] ?>'>

      </div>

      <label> To </label>

      <div class="form-group input-icon mb-2">

        <input class="form-control " type="date" name="to" value='<?php echo $_GET['to'] ?>'>
        
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
            <th>Name</th>
            <th>Title</th>
            <th>Email</th>
            <th>Leaves Taken</th>
            <th class="w-1"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <?php
  include "connect.php";
  if (isset($_GET['from']) && isset($_GET['to'])) {
    $from = $_GET['from'];
    $to = $_GET['to'];
    $secs_per_day = 24 * 60 * 60;
    $diff = abs( (strtotime($from) - strtotime($to)) / $secs_per_day );
    

   
    $sql="SELECT * FROM attendance";
    // $sql= " SELECT attendance_emp_id, count(emp_name) AS present FROM attendance GROUP BY attendance_emp_id ";
    $result = mysqli_query($conn,$sql);
    if($result){
      while($row = mysqli_fetch_array($result)){
        
        ?>
            <td><?php echo $row['emp_name']?></td>
            <td class="text-muted">
            <?php echo $row['emp_title']?>
            </td>
            <td class="text-muted"><a href="#" class="text-reset"><?php echo $row['emp_email']?></a></td>
            
            <td class="text-muted">
              <?php
            $sql2= " SELECT attendance_emp_id, count(emp_name) AS present FROM attendance GROUP BY attendance_emp_id ";
            $result2 = mysqli_query($conn,$sql2);
            $row = mysqli_fetch_array($result2);
            echo abs($diff - $row); 
            ?>
            <td>
              <a href="#">Edit</a>
            </td>
          </tr>
          <?php  }} } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include('footer.php') ?>