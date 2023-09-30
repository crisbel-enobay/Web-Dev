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
    <section class="container mt-5 d-flex flex-column">
        <div class="d-flex justify-content-start">
            <a href="index.php">
                <img src="./assets/arrow_left.svg" alt="arrow" height="20">
            </a>
        </div>
        <div class="d-flex justify-content-center">
            <?php
            include 'conn.php';

            $sql = "SELECT * FROM students";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) :
                // Output data of each row
            ?>
                <ul class="list-group col-6">
                    <?php
                    while ($row = $result->fetch_assoc()) :
                    ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><?php echo $row["name"]; ?></span>
                            <div class="d-flex align-items-center">
                                <a data-bs-toggle="modal" class="btn btn-outline-primary ms-2" data-bs-target="#viewStudents_<?php echo $row["id"]; ?>" data-student-id="<?php echo $row["id"]; ?>">
                                    <img src=" ./assets/eye.svg" alt="info">
                                </a>
                                <span class="ms-2">
                                    <a class="btn btn-outline-success">
                                        <img src="./assets/pencil.svg" alt="edit" data-bs-toggle="modal" data-bs-target="#editStudent_<?php echo $row["id"]; ?>">
                                    </a>
                                </span>
                                <span class="ms-2">
                                    <a href="delete_student.php?id=<?php echo $row["id"]; ?>" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this student?');">
                                        <img src="./assets/trash.svg" alt="Delete">
                                    </a>
                                </span>
                            </div>
                        </li>
                        <?php
                        include 'view_modal.php';
                        include 'update_modal.php';
                        ?>
                    <?php
                    endwhile;
                    ?>
                </ul>
            <?php
            else :
                // Display an alert message if there's no data
            ?>
                <div class="alert alert-warning col-6" role="alert">
                    No students found.
                </div>
            <?php
            endif;
            $conn->close();
            ?>
        </div>
    </section>
</body>

</html>