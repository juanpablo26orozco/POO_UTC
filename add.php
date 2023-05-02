<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>


<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="home.php">
        <img src="./img/Bienestar_familiar_Colombia_logo.svg.png" class="m-3" width="50" height="50" class="d-inline-block align-top" alt="Logo de Orfananto">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link btn btn-outline me-5" href="login.php" style="transition: all .4s ease;">Sign In</a>
            </li>
        </ul>
    </div>
</nav>

<body class="bg-dark">
        <div class="d-flex justify-content-center align-items-center h-100 mt-5">
            <div class="card p-5" style="width: 80rem;">
                <h5 class="card-title text-center mb-4">ADD</h5>
                <form action="./config/Process.php" method="post">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control form-control-lg" id="first_name" placeholder="Enter first name" name="f_name" required>
                    </div>
                    <div class="form-group">
                        <label for="second_name">Second Name</label>
                        <input type="text" class="form-control form-control-lg" id="second_name" placeholder="Enter second name" name="s_name" required>
                    </div>
                    <div class="form-group">
                        <label for="first_surname">First Surname</label>
                        <input type="text" class="form-control form-control-lg" id="first_surname" placeholder="Enter first surname" name="f_surname" required>
                    </div>
                    <div class="form-group">
                        <label for="second_surname">Second Surname</label>
                        <input type="text" class="form-control form-control-lg" id="second_surname" placeholder="Enter second surname" name="s_surname" required>
                    </div>
                    <div class="form-group">
                        <label for="ti">TI</label>
                        <input type="text" class="form-control form-control-lg" id="ti" placeholder="Enter TI" name="ti" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block btn-lg mt-3" name="create">Submit</button>
                </form>
            </div>
        </div>
</body>

</html>