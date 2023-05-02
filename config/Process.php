<?php


include_once('DatabaseProces.php');

if (isset($_POST['login'])) {
   $user = $_POST['user'];
   $pass = $_POST['pass'];



   //instanciar el objeto
   $users = new DatabaseProcess();
   // llamado función de loguin
   $users->login($user, $pass);

   $response = $users->login($user, $pass);

   echo $response;

   if ($response === "verdadero") {
      header("Location: ../admin.php");
   } else {
      echo '<script language="javascript">alert("Error En Datos");</script>';
   }
}

if (isset($_POST['create'])) {
   $f_name = $_POST['f_name'];
   $s_name = $_POST['s_name'];
   $f_surname = $_POST['f_surname'];
   $s_surname = $_POST['s_surname'];
   $ti = $_POST['ti'];


   $env = new DatabaseProcess();

   $response = $env->create($f_name, $s_name, $f_surname,$s_surname, $ti);

   echo $response;

   if ($response === "verdadero") {
      header("Location: ../admin.php");
   } else {
      echo '<script language="javascript">alert("Error En Datos");</script>';
   }

}

if (isset($_POST['update'])) {
   $id = $_POST['id_update'];
   $f_name = $_POST['f_name'];
   $s_name = $_POST['s_name'];
   $f_surname = $_POST['f_surname'];
   $s_surname = $_POST['s_surname'];
   $ti = $_POST['ti'];

   $env = new DatabaseProcess();

   $response = $env->update($id, $f_name, $s_name, $f_surname,$s_surname, $ti);

   echo $response;

   if ($response === "verdadero") {
      header("Location: ../admin.php");
   } else {
      echo '<script language="javascript">alert("Error En Datos");</script>';
   }

}

if (isset($_POST['delete'])) {
   $id = $_POST['id'];

   $env = new DatabaseProcess();

   $response = $env->delete($id);

   echo $response;

   if ($response === "verdadero") {
      header("Location: ../admin.php");
   } else {
      echo '<script language="javascript">alert("Error En Datos");</script>';
   }
}
