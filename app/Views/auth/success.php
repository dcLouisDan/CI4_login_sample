<body>
  <div class="container-fluid position-relative vh-100 bg-light">
    <div class="card w-50 px-3 py-5 position-absolute top-50 start-50 translate-middle bg-white shadow">
      <div class="card-body text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="170" height="170" fill="green" class="bi bi-check-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
          <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
        </svg>
        <h2 class="display-5 my-5">
          Account created successfully!
        </h2>

        <a href="<?php echo base_url('auth') ?>" class="btn btn-primary btn-lg">Go back to Log-in</a>
      </div>
    </div>
  </div>
</body>