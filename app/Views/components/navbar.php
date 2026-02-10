  <header>
  <nav class="nav" aria-label="Main Navigation">
    <a href="<?= base_url('/') ?>" class="nav-logo">
      <img src="<?= base_url('images/logo/LOGO.png') ?>" alt="Iron soft">
    </a>
    <ul class="nav-menu">
      <li class="nav-item dropdown">
        <a class="navigation-link dropdown-toggle"
          href="#"
          role="button"
           aria-haspopup="true"
          data-bs-toggle="dropdown"
          aria-expanded="false">
          Products
        </a>
        <ul class="dropdown-menu">
          <li>
            <a class="dropdown-item" href="<?= base_url('products/iron-pdf') ?>">
              Iron PDF
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="navigation-link" href="<?= base_url('about') ?>">About us</a>
      </li>
      <li class="nav-item">
        <a class="navigation-link" href="<?= base_url('career') ?>">Career</a>
      </li>
    </ul>
  </nav>
  </header>