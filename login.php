<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap index</title>
        <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    </head>
    <body>
        <div class ="container" >
            <div class = "row">
                <div class="col">

                </div>
                <div class="col-6 gy-3">
                    <form action="authenticate.php" method="post">
                        <div class="mb-3">  <!--sets bottom margin -->
                            <label for="exampleInputEmail1" class ="form-label">Email address</label>
                            <input type="email" class = "form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "email">
                            <div id="emailHelp" class="form-text">Email help text</div>
                        </div>
                        <div class="mb-3"> 
                            <label for="examplePassword1" class="form-label">Password</label>
                            <input type="password" class = "form-control" id = "examplePassword1" name="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class = "form-check-input" id="exampleCheck1" name="signup" value="signup">
                            <label  class="form-check-label" for="exampleCheck1">I'm a new user, sign me up</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
</body>
</html>
