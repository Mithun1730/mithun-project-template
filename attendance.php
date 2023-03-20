<?php include('connect.php'); ?>
<?php session_start(); ?>
<?php include("head.php") ?>
<?php include("navbar.php") ?>


<div class="page-body">
  <div class="container-xl">
    <div class="card ">
      <div class="card-body">
      <div class="mx-auto ">
                <form action="./" method="get" autocomplete="off" novalidate="">
                  <div class="input-icon">
                    <span class="input-icon-addon">
                      <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path d="M21 21l-6 -6"></path></svg>
                    </span>
                    <input type="text" value="" class="form-control form-control-rounded  text-red" placeholder="Search…" aria-label="Search in website" fdprocessedid="ysvsd3">
                  </div>
                </form>
              </div>
        <div id="table-default " class="table-responsive">
          <table class="table mt-3">
            <thead>
              <tr>
                <th><button class="table-sort " style="width: 15rem;" data-sort="sort-name">Name</button></th>          
                <th><button class="table-sort " style="width: 15rem;" data-sort="sort-type">Email</button></th>
                <th><button class="table-sort " style="width: 10rem;" data-sort="sort-score">Status</button></th>
                <th><button class="table-sort " style="width: 10rem;" data-sort="sort-city">Check In AM</button></th>
                <th><button class="table-sort " style="width: 10rem;" data-sort="sort-city">Check Out AM/PM</button></th>
                <th><button class="table-sort " style="width: 10rem;" data-sort="sort-city">Chech In PM</button></th>
                <th><button class="table-sort " style="width: 10rem;" data-sort="sort-city">Check Out PM</button></th>
                <th><button class="table-sort " style="width: 10rem;" data-sort="sort-date">Date</button></th>
                <th><button class="table-sort" data-sort="sort-progress">Progress</button></th>
              </tr>
            </thead>
            <tbody class="table-tbody">
              <tr>
              
              <?php include "connect.php";
              $sql="SELECT * FROM attendance";
              $result=mysqli_query($conn,$sql);
              while($row=mysqli_fetch_array($result))
              {

              ?>
              
                 <td> <?php echo $row['emp_name'] ?> </td>
             
                 <td><?php echo $row['emp_email'] ?></td>
                <td><span class="badge badge-outline text-teal">Logged In</span></td>
                

                 
                 <td><?php echo $row['checkin_am']?></td>
                 <td><?php echo $row['checkout_am_pm']?></td>
                 <td><?php echo $row['checkin_pm']?></td>
                 <td><?php echo $row['checkout_pm']?></td>
            
             
                <td><?php echo date('d-m-Y')?></td>
                

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
            <?php }?>
          
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include('footer.php') ?>