<?php include('head.php') ?>
<?php include('navbar.php') ?>
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
            <th class="w-25">Name</th>
            <th>Title</th>
            <th>Email</th>
            <th>Leaves Taken</th>
            <th>Days</th>
            <th class="w-1"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <?php
  include "connect.php";
  if (isset($_GET['from']) && isset($_GET['to'])) {
    //$from =  $_GET['from'];
    //$to =  $_GET['to'];
    //$query = "SELECT * FROM attendance WHERE date >= $from AND date =<$to";
    //$result_query = mysqli_query($conn,$query);
    //if($result_query){ 
    $start = new DateTime($_GET['from']);
    $end = new DateTime($_GET['to']);
// otherwise the  end date is excluded (bug?)
$end->modify('+1 day');

$interval = $end->diff($start);

// total days
$days = $interval->days;

// create an iterateable period of date (P1D equates to 1 day)
$period = new DatePeriod($start, new DateInterval('P1D'), $end);

// best stored as array, so you can add more than one
 //$holidays = array('2023-05-01');

foreach($period as $dt) {
    $curr = $dt->format('D');

    // substract if Saturday or Sunday
    if ( $curr == 'Sun') {
        $days--;
    }

  // (optional) for the updated question
   //   elseif (in_array($dt->format('Y-m-d'), $holidays)) {
   // $days--;
   // }
}
    

   
    //SELECT attendance_emp_id, count(emp_name) AS present ,emp_name,emp_email,emp_title FROM attendance GROUP BY attendance_emp_id
    $sql="SELECT attendance_emp_id, count(emp_name) AS present,emp_name,emp_email,emp_title,GROUP_CONCAT(date) AS dates FROM attendance GROUP BY attendance_emp_id ";
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
            <?php  echo abs($days - $row['present'] ); ?>
            </td>

            <td><?php // echo $row['dates']?></td>

            <td>
              <a href="#">Edit</a>
            </td>

          </tr>
          <?php } } } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include('footer.php') ?>

