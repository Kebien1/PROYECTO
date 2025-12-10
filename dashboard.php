<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: index.php');
    exit;
}
include 'header.php';
?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-sm">
        <div class="card-body">
          <h1 class="h3 mb-0">Panel de control</h1>
        </div>
      </div>
    </div>
  </div>
</div>
