<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Students</title>
    <?php
    include 'conn.php';
    include 'bootstrap.php';
    ?>
</head>

<body class="bg-info-subtle">
    <section class="container mt-5 d-flex justify-content-center">
        <ul class="list-group col-6">
            <?php
            include 'conn.php';

            $sql = "SELECT * FROM students";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) :
                // output data of each row
                while ($row = $result->fetch_assoc()) :
            ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?php echo $row["name"]; ?>
                        <button button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#viewStudents">View Students</button>
                    </li>
            <?php
                endwhile;
            endif;
            $conn->close();
            ?>
        </ul>
    </section>
    <!-- modal -->
    <div class="modal fade" id="viewStudents" tabindex="-1" aria-labelledby="viewStudentsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <?php
                include 'conn.php';

                $sql = "SELECT * FROM students";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) :
                    // output data of each row
                    while ($row = $result->fetch_assoc()) :
                ?>
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
                                    <input type="text" class="form-control" id="fullname" value="<?php echo $row["name"]; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="col-form-label">Email</label>
                                    <input type="text" class="form-control" id="email" value="<?php echo $row["email"]; ?>">
                                </div>
                            </form>
                        </div>
                <?php
                    endwhile;
                endif;
                $conn->close();
                ?>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>