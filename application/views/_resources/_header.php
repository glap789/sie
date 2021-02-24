<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
      
       <link rel="icon" href="<?php echo base_url(); ?>assets/dashboard/demo/logo.svg" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/dashboard/demo/logo.svg" />
      
    <title>Dashboard - SIE-UPAO - Sistema de Información de Alumnos UPAO</title>
    <!-- CSS files -->
    <link href="<?php echo base_url();?>assets/css/tabler.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/css/demo.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/css/css-externo.css" rel="stylesheet"/>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>



    <script>
    // Add restrictions
    Dropzone.options.fileupload = {
      acceptedFiles: 'image/*',
      dictDefaultMessage: "Arrastra las imagenes aquí: \u2764",
      maxFilesize: 50 // MB
        
    };
        
   
    </script>
      
      
  </head>
    
    <body class="antialiased ">
        
         <div class="page" style="min-height: 97vh;">