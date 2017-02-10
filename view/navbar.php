<nav class="navbar navbar-default" role="navigation">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="../index.php"><b>HOME</b></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <?php if(!isset($_SESSION["username"])):?>
      <li><a href="../controllers/registro.php">REGISTRO</a></li>
      <li><a href="../controllers/login.php">LOGIN</a></li>
    <?php else:?>
      <li><a href="../models/logout.php">LOGOUT</a></li>
    <?php endif;?>
    </ul>

  </div><!-- /.navbar-collapse -->
</div>
</nav>
