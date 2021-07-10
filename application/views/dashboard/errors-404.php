<!DOCTYPE html>
<html>
<head>
	<title>Teknologi Informasi - <?php echo $title; ?></title>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.ico">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/fontawesome/css/all.min.css">
  
  <style type="text/css">
    *{
        transition: all 0.6s;
    }

    html {
        height: 100%;
    }

    body{
        font-family: 'Lato', sans-serif;
        color: #888;
        margin: 0;
    }

    #main{
        display: table;
        width: 100%;
        height: 100vh;
        text-align: center;
    }

    .fof{
        display: table-cell;
        vertical-align: middle;
    }

    .fof h1{
        font-size: 50px;
        display: inline-block;
        padding-right: 12px;
        animation: type .5s alternate infinite;
    }

    @keyframes type{
        from{box-shadow: inset -3px 0px 0px #888;}
        to{box-shadow: inset -3px 0px 0px transparent;}
    }

    .btn-back{
        color: #888;

      height: 5vmin;
      padding: 12px;
      text-decoration: none;
    }

    .btn-back:hover{
      text-decoration: 'underlined';
    }
    </style>
</head>
<body>

  <div id="main">
        <div class="fof">
          <h1>Error 404</h1>
          <br>
          <i class="far fa-arrow-alt-circle-left"></i><a class="btn-back" href="javascript:history.go(-1)">Back to previous page</a>
        </div>
  </div>

</body>
</html>