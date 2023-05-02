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
                <h1 class="row d-flex justify-content-center align-items-center h-100">Hi! Admin</h1>
                <h4>List Children</h4>
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
                            <th>Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($children as $boy) { ?>
                            <tr>
                                <td><?php echo $boy['f_name'] ?></td>
                                <td><?php echo $boy['s_name'] ?></td>
                                <td><?php echo $boy['f_surname'] ?></td>
                                <td><?php echo $boy['s_surname'] ?></td>
                                <td>

                                <form action="./update.php" method="post" class="d-inline-flex mx-3">
                                    <input type="text" name="id" value="<?php echo $boy['id'] ?> " hidden>
                                    <button type="submit" class="bg-transparent"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                    </svg></button>
                                </form>
                                   
                                <form action="./config/Process.php" method="post" class="d-inline-flex mx-3">
                                <input type="text" name="id" value="<?php echo $boy['id'] ?> " hidden>
                                    <button type="submit" name="delete" class="bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                    </svg>
                                    </button>
                                </form>
                                    

                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>

                </table>
                <div class="pt-1 mb-4 me-auto">
                    <a href="add.php" class="btn btn-success  btn-lg btn-block" name="create" type="button">Add</a>
                </div>


</html>