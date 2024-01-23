<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                                <input type="submit" name="LoginSubmit" class="btn btn-info btn-md" value="submit">
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
</body>

</html>