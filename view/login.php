<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('template/header.php'); ?>
    <title>Login</title>
</head>

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">
            Login Form
        </h3>
        <div class="container">
            <div id="login-row" class="row justify-content align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-form" class="col-md-12">
                        <form id="login-form" class="form" action="?action=login" method="post">
                            <h3 class="txt-center text-info">Login</h3>
                            <!-- username  -->
                            <div class="from-group">
                                <label for="username" class="txt-info">
                                    Username:
                                </label>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <!-- password  -->
                            <div class="from-group">
                                <label for="password" class="txt-info">
                                    Password:
                                </label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <!-- Submit  -->
                            <div class="form-group">
                                <input type="submit" name="LoginSubmit" class="btn btn-info btn-md" value="Submit">
                            </div>
                            <div id="reg_link" class="text-right">
                                <a href="?action=register" class="text-info">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('template/footer.php'); ?>
</body>

</html>