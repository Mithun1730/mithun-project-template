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