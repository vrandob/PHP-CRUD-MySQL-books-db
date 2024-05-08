<?php
include("db.php");
$isbn = '';
$titulo = '';
$descripcion= '';
$autor= '';
$fecha_publicacion= '';
$precio= '';
$enlace= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM libro WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $isbn = $row['isbn'];
    $titulo = $row['Titulo'];
    $descripcion = $row['Descripcion'];
    $autor = $row['Autor'];
    $fecha_publicacion = $row['Fecha_Publicacion'];
    $precio = $row['Precio'];
    $enlace = $row['Enlace'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $isbn = $_POST['isbn'];
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $autor = $_POST['autor'];
  $fecha_publicacion = $_POST['fecha_publicacion'];
  $precio = $_POST['precio'];
  $enlace = $_POST['enlace'];

  $query = "UPDATE libro set isbn = '$isbn', titulo = '$titulo', descripcion = '$descripcion', autor = '$autor', fecha_publicacion = '$fecha_publicacion', precio = '$precio', enlace = '$enlace' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Book Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <div class="form-group">
            <input type="text" name="isbn" class="form-control" placeholder="ISBN" autofocus>
          </div>
          <div class="form-group">
            <textarea name="titulo" rows="2" class="form-control" placeholder="Título del libro"></textarea>
          </div>
          <div class="form-group">
            <textarea name="descripcion" rows="2" class="form-control" placeholder="Temática o breve descripción"></textarea>
          </div>
          <div class="form-group">
            <textarea name="autor" rows="2" class="form-control" placeholder="Autor/es"></textarea>
          </div>
          <div class="form-group">
            <textarea name="fecha_publicacion" rows="2" class="form-control" placeholder="Fecha de publicación"></textarea>
          </div>
          <div class="form-group">
            <textarea name="precio" rows="2" class="form-control" placeholder="Precio en Euros"></textarea>
          </div>
          <div class="form-group">
            <textarea name="enlace" rows="2" class="form-control" placeholder="Enlace"></textarea>
          </div>

        <input type="submit" class="btn btn-success btn-block" name="update" value="Update">
        <hr>
        <a class="btn btn-secondary btn-block" href="index.php">Cancel</a>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
