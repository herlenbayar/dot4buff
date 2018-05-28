<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%;
        }
        html {
            display: table;
            margin: auto;
        }
        body {
            display: table-cell;
        }
        form.login-form {
            width:450px;
            padding: 40px 40px 60px 40px;
            margin-top: 50%;
            border:2px solid #007bff;
        }
        form.login-form div.title {
            font-size: 30px;
            margin-bottom: 25px;
            font-weight : 600;
            color: #007bff;
        }
        form.login-form input {
            border-color: #007bff;
            margin-bottom: 30px;
        }
        form.login-form button {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <form class="login-form" action="<?=URL.ROOT?>/admin/login" method="POST">
        <div class="title text-center"> Login </div>
        <div class="form-group">
            <input class="form-control" type="text" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="passwd" placeholder="Password">
        </div>
        <button class="btn btn-primary btn-block" type="submit">Login</button>
    </form>

</body>
</html>
