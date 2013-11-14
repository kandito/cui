<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="<?php echo $header_content['description']; ?>">
   <meta name="keywords" content="<?php echo $header_content['keywords']; ?>">
   <meta name="author" content="<?php echo $header_content['author']; ?>">

   <title><?php echo $header_content['title']; ?></title>

   <!-- Bootstrap core CSS -->
  <?php $this->cui->css('bootstrap'); ?>
   <!-- Custom styles for this template -->
   <?php $this->cui->css('navbar'); ?>

   <!-- Just for debugging purposes. Don't actually copy this line! -->
   <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
  </head>

  <body>

    <div class="container">

		<!-- Static navbar -->
		<?php $this->cui->partial('navigation'); ?>
    <?php $this->cui->partial('header'); ?>
		<!-- Main component for a primary marketing message or call to action -->
		<div class="content row">
      <div class="col-md-9">
			 <?php echo $content; ?>
      </div>

      <div class="col-md-3">
        <?php $this->cui->partial('sidebar'); ?>
      </div>
		</div>
	  
		<div id="footer">
			<?php $this->cui->partial('footer'); ?>
		</div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<?php echo $this->cui->js('bootstrap.min') ?>
  </body>
</html>
