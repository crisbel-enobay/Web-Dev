<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php
    include 'conn.php';
    include 'bootstrap.php';
    ?>
</head>

<body class="bg-info-subtle">
    <section class="container mt-5 d-flex justify-content-center">
        <form method="POST" action="save_user.php" class="col-6">
            <div class="d-flex justify-content-end col-12">
                <a href="view_student.php" class="btn btn-info">View Students</a>
            </div>
            <div class="mb-3">
                <label for="inputName" class="form-label">Fullname</label>
                <input type="text" name="fullname" class="form-control" id="inputName" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>

</body>

</html>