<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MeroBeema</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/font-awesome/css/font-awesome.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/freelancer.min.css');?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css" />
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js');?>"></script>
  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>assets/images/new_logo.png" style="padding: 8px;"/></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Products</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <?PHP
             if(!$this->session->userdata('admin_id')){
            ?>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url().'company'; ?>">Company Zone</a>
            </li>

            <?PHP
          }
            if(!$this->session->userdata('company_id')){
            if( $this->session->userdata('admin_id')){
            ?>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url().'admin/admin_logout'; ?>">Logout</a>
            </li>

            <?PHP
          }
          else
          {

                    ?>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url().'user'; ?>">User Zone</a>
            </li>
            <?PHP
          }
        }
          ?>

          </ul>
        </div>
      </div>
    </nav>

<div style="height: 120px;clear:both;"></div>

