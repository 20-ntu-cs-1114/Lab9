<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
    <form action="functions.php" class="m-3" method="post">    
            <div class="form-group row m-2">
                <label for="email" class="col-sm-2 form-control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
            </div>
            <div class="form-group row m-2" >
                <label for="password" class="col-sm-2 form-control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
            </div>
            <div class="form-group row m-2">
                <label for="" class="col-sm-2">Radios</label>
                <div class="col-sm-10">
                <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="radio" value="First Radio" checked>
                <label for="radio1" class="form-check-label">First Radio</label>
                </div>
                <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="radio" value="Second Radio">
                <label for="radio2" class="form-check-label">Second Radio</label>
                </div>
                <div class="form-check">
                <input type="radio" class="form-check-input" id="radio3" name="radio" disabled>
                <label for="radio3" class="form-check-label">Third Radio</label>
                </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="checkbox" class="col-sm-2">checkbox</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="checkbox" id="checkbox" class="form-check-input">
                    </div>
                </div>
                <div class="form-group m-2">
                    <button type="submit" class="btn btn-primary">Sign in</button>

                </div>
            </div>
    
    </form>
    









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>