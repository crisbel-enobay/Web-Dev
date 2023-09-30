<div class="modal fade" id="viewStudents_<?php echo $row["id"]; ?>" tabindex="-1" aria-labelledby="viewStudentsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 font-monospace" id="viewStudentsLabel">
                    Student id: <?php echo $row["id"]; ?>
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="fullname" class="col-form-label">Fullname</label>
                        <input type="text" class="form-control" id="fullname" value="<?php echo $row["name"]; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="text" class="form-control" id="email" value="<?php echo $row["email"]; ?>" readonly>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>