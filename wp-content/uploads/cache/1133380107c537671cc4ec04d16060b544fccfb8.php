<nav class="nav-primary navbar navbar-expand-lg position-fixed top-0 w-100 d-none d-lg-block">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url('/home'); ?>">Hostell</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo site_url('/home'); ?>">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo site_url('/destination'); ?>" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Destination
            </a>
            <ul class="dropdown-menu ms-auto" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/services'); ?>">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/about'); ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/contact'); ?>">Contact</a>
          </li>
        </ul>
      </div>
      <a class="navbar-contact" href="#"><button class="nav-tel"><i class="fa-solid fa-phone"></i></button> 123-123-123</a>
    </div>
</nav> 
