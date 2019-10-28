<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php print base_url('material/'); ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php print base_url('material/'); ?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 <title>Statistik</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php print base_url('adminlte3/'); ?>plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php print base_url('material/'); ?>assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php print base_url('material/'); ?>assets/demo/demo.css" rel="stylesheet" />
   <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php print base_url('adminlte3/'); ?>plugins/datatables/dataTables.bootstrap4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  </head>

<body>
  <?php
  if($this->session->flashdata('notifa')){
    echo
    '<div class="alert alert-danger text-center">'.
    $this->session->flashdata('notifa').'</div>';
  } 
    elseif($this->session->flashdata('tambah')){
    echo
    '<div class="alert alert-success text-center">'.
    $this->session->flashdata('tambah').'</div>';
  } 
      elseif($this->session->flashdata('edit')){
    echo
    '<div class="alert alert-warning text-center">'.
    $this->session->flashdata('edit').'</div>';
  } 
        elseif($this->session->flashdata('hapus')){
    echo
    '<div class="alert alert-danger text-center">'.
    $this->session->flashdata('hapus').'</div>';
  } 
  ?>
  <div>
