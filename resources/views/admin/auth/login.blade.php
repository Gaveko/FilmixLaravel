<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin - Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="email-input" class="form-label">Email address</label>
                    <input id="email-input" type="email" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="password-input" class="form-label">Password</label>
                    <input id="password-input" type="password" class="form-control"/>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
    </body>
</html>
