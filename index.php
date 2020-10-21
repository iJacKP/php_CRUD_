<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Company</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <div class="jumbotron">
        <h1 class="text-center">
            Product Company

        </h1>


    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">
                <form action="./submit.php" method="POST">
               
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="pname" id="name">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="pprice" id="price">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="pdescription" class="form-control" id="description" cols="30" rows="10"> </textarea>
                </div>

                <input type="submit" name="submitForm" value="Submit" class="btn btn-primary btn-block">


                </form>
            </div>


        </div>

    </div>

</body>

</html>