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
    <div class="container mt-4">
        <div class="card bg-white">
            <div class="card-body">
                <h1>List Children</h1>
                <?php
                include_once("./config/DatabaseProces.php");
                $consulta = new DatabaseProcess();
                $children = $consulta->getAll();

                ?>
                <table class="table table-success">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Second Name</th>
                            <th>First Surname</th>
                            <th>Second Surname</th>
                            <th>More Inf</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($children as $boy) { ?>
                            <tr>
                                <td><?php echo $boy['f_name'] ?></td>
                                <td><?php echo $boy['s_name'] ?></td>
                                <td><?php echo $boy['f_surname'] ?></td>
                                <td><?php echo $boy['s_surname'] ?></td>
                                <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                                        <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z" />
                                    </svg></td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>


</html>