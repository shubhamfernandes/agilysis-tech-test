<?php  if(isset($_SESSION["error"])) : ?>
  <div class="error">
  	<?php $errors = $_SESSION["error"];
  	
  	 foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>

