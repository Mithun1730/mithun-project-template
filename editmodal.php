
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
                        <input type="text" class="form-control" name="editname" id="editname">

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Title<span class="form-label-description">56/100</span></label>
                        <textarea class="form-control" name="edittitle" id="edittitle" rows="6"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address <span class="form-label-description">56/100</span></label>
                        <textarea class="form-control" name="editaddress" id="editaddress" rows="6"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" name="editemail" id="editemail" placeholder="Email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Basic Salary</label>
                        <input type="tel" class="form-control" name="editsalary" id="editsalary" autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone number</label>
                        <input type="tel" class="form-control" name="editmobile" id="editmobile" autocomplete="off">
                    </div>
                </div>

                <div class="modal-footer">
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