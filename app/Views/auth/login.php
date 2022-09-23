<body class="bg-light">
  <div class="d-flex flex-column vh-100">
    <div class="navbar py-0" style="z-index: 5;">
      <header class="container-fluid d-flex w-100 justify-content-space-between align-items-center pb-4 px-4 bg-white shadow-sm py-4">
        <div class="position-relative ms-4">
          <i class="bi bi-person-circle h4 position-absolute top-50 start-0 translate-middle"></i>
          <span class="h5 ms-4">Login - Sample</span>
        </div>
        <!-- LOGIN FORM -->
        <?= form_open('login', 'class="me-5"') ?>
        <div class="row d-flex align-items-center">
          <div class="col col-auto position-relative">
            <input type="email" class="form-control form-control-sm" name="email" placeholder="Email">

          </div>
          <div class="col col-auto">
            <input type="password" class="form-control form-control-sm" name="password" placeholder="Password">
          </div>
          <input class="col col-auto btn btn-primary btn-sm" name="login" type="submit" value="Login">
        </div>
        <?= form_close() ?>
      </header>
    </div>
    <div class="container w-100 h-100 me-0 d-flex p-0" style="z-index: 0">
      <div class="py-5 px-5 h-100 bg-white shadow ms-auto">
        <h1 class="mb-5">Register</h1>
        <!-- SIGN-UP FORM -->

        <?php if (isset($validation)) : ?>
          <?= $validation->listErrors(); ?>
          <?= $errors ?>
        <?php endif; ?>

        <?= form_open('signup') ?>
        <div class="mb-4 row">
          <div class="col-6">
            <input type="text" class="form-control py-3" name="firstName" placeholder="First Name">
          </div>
          <div class="col-6">
            <input type="text" class="form-control py-3" name="lastName" placeholder="Last Name">
          </div>
        </div>
        <div class="mb-4">
          <input type="email" class="form-control py-3" name="email" placeholder="Email address">
        </div>
        <div class="mb-4">
          <input type="password" class="form-control py-3" name="password" placeholder="Password">
        </div>
        <div class="mb-4">
          <input type="password" class="form-control py-3" name="repeatPassword" placeholder="Repeat Password">
        </div>
        <div class="d-grid">
          <input type="submit" name="signUp" value="Sign-up" class="btn btn-success py-3">
        </div>
        <?= form_close() ?>

        <div>
          <?php
          ?>
        </div>

      </div>
    </div>
    <img src="https://picsum.photos/1920/1080" alt="" style="
      z-index: -5;
      height: 100vh;
      width:auto;
      position: fixed;
    ">
  </div>
</body>

</html>