<body>
  <div class="container-fluid d-flex justify-content-around align-items-center vh-100 bg-light">
    <!-- Card 1 -->
    <div class="card col col-4 px-5 pb-5 bg-white shadow">
      <div class="card-body text-center">
        <h2 class="display-5 my-5">
          Welcome <?php echo $session->get('first_name') ?>
        </h2>

        <a href="<?php echo base_url('logout') ?>" class="btn btn-danger">Logout</a>
        <table class="table border mt-5">
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
    <!-- Card 2 -->
    <div class="card col col-5 px-3 pb-5 bg-white shadow">
      <div class="card-head mt-5 mb-4 px-4">
        <h3>Upload Files</h3>
      </div>
      <div class="card-body">

        <?= form_open_multipart('upload') ?>
        <div class="mb-3">
          <label for="formFile" class="form-label">Choose file...</label>
          <input class="form-control" type="file" id="formFile" name="fileInput">
        </div>

        <button type="submit" class="btn btn-success">Upload</button>
        <?= form_close() ?>

        <table class="table border mt-5">
          <thead class="table-success">
            <tr>
              <th>File Name</th>
              <th>File Size</th>
              <th>Uploaded By</th>
              <th>Date Uploaded</th>
            </tr>
          </thead>
          <?php if (!empty($files) && is_array($files)) : ?>
            <tbody>
              <?php foreach ($files as $file) : ?>
                <tr>
                  <td><?= esc($file['file_name']) ?></td>
                  <td><?= esc($file['file_size']) ?> MB</td>
                  <td><?= esc($file['uploader_name']) ?></td>
                  <td><?= esc($file['date_uploaded']) ?></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          <?php endif ?>
        </table>
      </div>
    </div>
    <!-- Card 3 -->
    <!-- <div class="card col col-3 px-5 pb-5 bg-white shadow">
      <div class="card-head my-5">
        <h3>Others</h3>
      </div>
      <div class="card-body">

      </div>
    </div> -->
  </div>
</body>

</html>