<?php
session_start();
  unset ($_SESSION['us_permissao']);
  unset ($_SESSION['us_nome']);
  header('location:index.php');
  
  ?>