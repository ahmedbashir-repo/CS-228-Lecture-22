<?php
    $pageTitle = "PHP and MySQL";
    require_once "includes/header.php";
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">PHP and MySQL Demo</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="process.php" method="post">
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth: </label>
                        <input type="date" name="dob" id="dob" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="country">Country: </label>
                        <select name="country" id="country" class="form-control">
                            <option value="">--SELECT--</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="SriLanka">SriLanka</option>
                        </select>
                    </div>
                    <input type="submit" name="submit" value="Add User" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>

    <?php require_once "includes/footer.php"; ?>
</body>
</html>