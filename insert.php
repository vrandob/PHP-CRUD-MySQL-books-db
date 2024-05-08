<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-8">

      <!-- ADD BOOK FORM -->
      <div class="card card-body">
        <form action="save_book.php" method="POST">
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

          <input type="submit" name="save_book" class="btn btn-success btn-block" value="Save Book">
          <hr>
          <a class="btn btn-secondary btn-block" href="index.php">Cancel</a>
        </form>
      </div>
    </div>
  </div>

<?php include('includes/footer.php'); ?>
