

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PhP Strong Password Generator</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h2>Random Password Generator</h2>
            </div>
            <div class="col-12">
                <form action="./passpage.php" method="GET">
                    <p class="my-2">Generate your Random Password</p>
                    <input class="mx-2" type="number" name="num" placeholder="insert a number">
                    <button class="btn btn-success py-2 px-3 m-2" type="submit" value="Generate Your Password">Generate your Password</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>