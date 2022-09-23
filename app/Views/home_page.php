<body>
  <h1>
    Welcome <?php echo $session->get('first_name') ?>
  </h1>

  <a href="<?php echo base_url('logout') ?>" class="btn btn-danger">Logout</a>
</body>

</html>