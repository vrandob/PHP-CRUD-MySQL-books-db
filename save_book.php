<?php

include('db.php');

if (isset($_POST['save_book'])) {
  $isbn = $_POST['isbn'];
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $autor = $_POST['autor'];
  $fecha_publicacion = $_POST['fecha_publicacion'];
  $precio = $_POST['precio'];
  $enlace = $_POST['enlace'];
  $query = "INSERT INTO libro(isbn, Titulo, Descripcion, Autor, Fecha_Publicacion, Precio, Enlace) VALUES ('$isbn', '$titulo', '$descripcion', '$autor', '$fecha_publicacion', '$precio', '$enlace')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Book Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
