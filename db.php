<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'admin',
  'malaga2324',
  'crud_libros'
) or die(mysqli_erro($mysqli));

?>
