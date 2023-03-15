<?php
if(!isset($_SESSION['name'])){
  header('location:signin.php');
}
?>
<?php include("head.php") ?>
<?php include("navbar.php") ?>
<?php include('connect.php'); ?>

<div class="page-body">
  <div class="container-xl">
    <div class="card ">
      <div class="card-body">
        <div id="table-default" class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th><button class="table-sort " style="width: 15rem;" data-sort="sort-name">Name</button></th>
                <th><button class="table-sort " style="width: 10rem;" data-sort="sort-city">City</button></th>
                <th><button class="table-sort " style="width: 15rem;" data-sort="sort-type">Email</button></th>
                <th><button class="table-sort " style="width: 10rem;" data-sort="sort-score">Status</button></th>
                <th><button class="table-sort " style="width: 10rem;" data-sort="sort-date">Date</button></th>

                <th><button class="table-sort" data-sort="sort-progress">Progress</button></th>
              </tr>
            </thead>
            <?php include "connect.php";
              $sql="SELECT * FROM employee_details";
              $result=mysqli_query($conn,$sql);
              while($row=mysqli_fetch_array($result))
              {
              ?>
            <tbody class="table-tbody">
              <tr>
                <td> <?php echo $row['name']?> </td>
                <td> <?php echo $row['city'] ?> </td>
                <td> <?php echo $row['email'] ?>  </td>

                
                
                <td>Logged In</td>
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
              </tr>
            </tbody>
            <?php } ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>