<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-12">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
    </div>

  <div class="row">
    <div class="col-md-12">
      <a href="insert.php"  class="btn btn-primary mt-4">Add Book</a>
      <hr>
    </div>
  </div>

    <div class="col-md-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ISBN</th>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th>Publish date</th>
            <th>Price</th>
            <th>Link</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM libro";
          $result = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['isbn']; ?></td>
            <td><?php echo $row['Titulo']; ?></td>
            <td><?php echo $row['Descripcion']; ?></td>
            <td><?php echo $row['Autor']; ?></td>
            <td><?php echo $row['Fecha_Publicacion']; ?></td>
            <td><?php echo $row['Precio']; ?></td>
            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['Enlace']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_book.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
