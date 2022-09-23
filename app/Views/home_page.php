<body>
  <div class="container-fluid position-relative vh-100 bg-light">
    <div class="card w-50 px-3 pb-5 position-absolute top-50 start-50 translate-middle bg-white shadow">
      <div class="card-body text-center">
        <h2 class="display-5 my-5">
          Welcome <?php echo $session->get('first_name') ?>
        </h2>

        <a href="<?php echo base_url('logout') ?>" class="btn btn-danger">Logout</a>
        <table class="table mt-5">
          <thead class="table-success">
            <tr>
              <th>Full Name</th>
              <th>Email</th>
            </tr>
          </thead>
          <?php if (!empty($users) && is_array($users)) : ?>
            <tbody>
              <?php foreach ($users as $user) : ?>
                <tr>
                  <td><?= esc($user['first_name']) . ', ' . esc($user['last_name']) ?></td>
                  <td><?= esc($user['email']) ?></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          <?php endif ?>
        </table>
      </div>
    </div>
  </div>
</body>

</html>