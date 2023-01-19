<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 text-sm">
  <title>Ingressos</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('theme/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('theme/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('theme/dist/css/adminlte.min.css')?>">

  <!-- JS -->
  <script src="<?= base_url('assets/js/chart.js') ?>"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php include_once('navbar.php') ?>
<?php include_once('sidebar.php') ?>


<div class="w-100 d-flex" rv-attr-data-row="%row%" data-row="1">
  <div class="tower-field__row active" rv-class-active="row.active">
    <!-- rivets: each-item --><button class="tower-field__game-button active" rv-on-click="view.selectItem" rv-class-selected="item.selected" rv-class-active="row.active">
      <!-- rivets: unless item.failed --><div class="d-flex justify-content-center align-items-center">
        <!-- rivets: unless item.selected --><span class="tower-field__game-button_prize">
          +<span rv-currency="row.value"> ◎ 0,02</span>
        </span>
        <!-- rivets: if item.selected -->
      </div>

      <!-- rivets: if item.failed -->
    </button><button class="tower-field__game-button active" rv-on-click="view.selectItem" rv-class-selected="item.selected" rv-class-active="row.active">
      <!-- rivets: unless item.failed --><div class="d-flex justify-content-center align-items-center">
        <!-- rivets: unless item.selected --><span class="tower-field__game-button_prize">
          +<span rv-currency="row.value"> ◎ 0,02</span>
        </span>
        <!-- rivets: if item.selected -->
      </div>

      <!-- rivets: if item.failed -->
    </button><button class="tower-field__game-button active" rv-on-click="view.selectItem" rv-class-selected="item.selected" rv-class-active="row.active">
      <!-- rivets: unless item.failed --><div class="d-flex justify-content-center align-items-center">
        <!-- rivets: unless item.selected --><span class="tower-field__game-button_prize">
          +<span rv-currency="row.value"> ◎ 0,02</span>
        </span>
        <!-- rivets: if item.selected -->
      </div>

      <!-- rivets: if item.failed -->
    </button>
  </div>
</div>