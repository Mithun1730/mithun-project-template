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
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
                    Add new employee
                  </a>
                  </div>
                <table class="table table-vcenter table-mobile-md card-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Title</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Basic Salary</th>
                          <th>Action</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td data-label="Name">
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar me-2" style="background-image: url(./static/avatars/010m.jpg)"></span>
                              <div class="flex-fill">
                                <div class="font-weight-medium">Thatcher Keel</div>
                                <div class="text-muted"><a href="#" class="text-reset">tkeelf@blogger.com</a></div>
                              </div>
                            </div>
                          </td>
                          <td data-label="Title">
                            <div>VP Sales</div>
                            <div class="text-muted">Business Development</div>
                          </td>
                          <td class="text-muted" data-label="Role">
                            User
                          </td>
                          <td class="text-muted" data-label="Role">
                            User
                          </td>
                          <td class="text-muted" data-label="Role">
                            User
                          </td>
                          <td>
                            <div class="btn-list flex-nowrap">
                            <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                        <a href="#" class="btn btn-success w-100">
                          Edit
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                        <a href="#" class="btn btn-danger w-100">
                          Delete
                        </a>
                      </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td data-label="Name">
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar me-2" style="background-image: url(./static/avatars/005f.jpg)"></span>
                              <div class="flex-fill">
                                <div class="font-weight-medium">Dyann Escala</div>
                                <div class="text-muted"><a href="#" class="text-reset">descalag@usatoday.com</a></div>
                              </div>
                            </div>
                          </td>
                          <td data-label="Title">
                            <div>Mechanical Systems Engineer</div>
                            <div class="text-muted">Sales</div>
                          </td>
                          <td class="text-muted" data-label="Role">
                            Admin
                          </td>
                          <td class="text-muted" data-label="Role">
                            Admin
                          </td>
                          <td class="text-muted" data-label="Role">
                            Admin
                          </td>
                          <td>
                            <div class="btn-list flex-nowrap">
                            <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                        <a href="#" class="btn btn-success w-100">
                          Edit
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                        <a href="#" class="btn btn-danger w-100">
                          Delete
                        </a>
                      </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td data-label="Name">
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar me-2" style="background-image: url(./static/avatars/006f.jpg)"></span>
                              <div class="flex-fill">
                                <div class="font-weight-medium">Avivah Mugleston</div>
                                <div class="text-muted"><a href="#" class="text-reset">amuglestonh@intel.com</a></div>
                              </div>
                            </div>
                          </td>
                          <td data-label="Title">
                            <div>Actuary</div>
                            <div class="text-muted">Sales</div>
                          </td>
                          <td class="text-muted" data-label="Role">
                            User
                          </td>
                          <td class="text-muted" data-label="Role">
                            User
                          </td>
                          <td class="text-muted" data-label="Role">
                            User
                          </td>
                          <td>
                            <div class="btn-list flex-nowrap">
                            <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                        <a href="#" class="btn btn-success w-100">
                          Edit
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                        <a href="#" class="btn btn-danger w-100">
                          Delete
                        </a>
                      </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td data-label="Name">
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar me-2">AA</span>
                              <div class="flex-fill">
                                <div class="font-weight-medium">Arlie Armstead</div>
                                <div class="text-muted"><a href="#" class="text-reset">aarmsteadi@yellowpages.com</a></div>
                              </div>
                            </div>
                          </td>
                          <td data-label="Title">
                            <div>VP Quality Control</div>
                            <div class="text-muted">Accounting</div>
                          </td>
                          <td class="text-muted" data-label="Role">
                            Owner
                          </td>
                          <td class="text-muted" data-label="Role">
                            Owner
                          </td>
                          <td class="text-muted" data-label="Role">
                            Owner
                          </td>
                          <td>
                            <div class="btn-list flex-nowrap">
                            <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                        <a href="#" class="btn btn-success w-100">
                          Edit
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                        <a href="#" class="btn btn-danger w-100">
                          Delete
                        </a>
                      </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td data-label="Name">
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar me-2" style="background-image: url(./static/avatars/008f.jpg)"></span>
                              <div class="flex-fill">
                                <div class="font-weight-medium">Tessie Curzon</div>
                                <div class="text-muted"><a href="#" class="text-reset">tcurzonj@hp.com</a></div>
                              </div>
                            </div>
                          </td>
                          <td data-label="Title">
                            <div>Research Nurse</div>
                            <div class="text-muted">Product Management</div>
                          </td>
                          <td class="text-muted" data-label="Role">
                            Admin
                          </td>
                          <td class="text-muted" data-label="Role">
                            Admin
                          </td>
                          <td class="text-muted" data-label="Role">
                            Admin
                          </td>
                          <td>
                            <div class="btn-list flex-nowrap">
                            <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                        <a href="#" class="btn btn-success w-100">
                          Edit
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                        <a href="#" class="btn btn-danger w-100">
                          Delete
                        </a>
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
    <div class="page-body">
    </div>
    </body>
</html>
    <?php include('footer.php') ?>