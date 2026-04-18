
<?= $uri = service('uri'); ?>

  <!-- Aside menu orginal -->
  <aside class="collapse show collapse-horizontal col-sm-2 p-3 border-end bg-body-tertiary" id="collapseWidthExample">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
        </svg>
      <span class="d-print-block ms-2">POS System</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto sidebar gap-2">
      <li>
        <a href="<?= base_url('dashboard') ?>" class="nav-link link-body-emphasis <?= $uri->getSegment(1) == 'dashboard' ? 'active' : '' ?>">
          <p class="bi bi-speedometer2" style="position:fixed;"> Dashboard</p><br>
        </a>
      </li>
      <li>
        <a href="<?= base_url('pos') ?>" class="nav-link link-body-emphasis <?= $uri->getSegment(1) == 'pos' ? 'active' : '' ?>">
          <p class="bi bi-menu-button-wide" style="position:fixed;"> POS App</p><br>
        </a>
      </li>
      <li>
        <a href="<?= base_url('products') ?>" class="nav-link link-body-emphasis <?= $uri->getSegment(1) == 'products' ? 'active' : '' ?>">
          <p class="bi bi-grid" style="position:fixed;"> Products</p><br>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          <p class="bi bi-tag" style="position:fixed;"> Categories</p><br>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          <p class="bi bi-menu-app" style="position:fixed;"> Cashier</p><br>
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
        data-bs-toggle="dropdown" aria-expanded="true">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <span class="d-print-block"><strong>mdo</strong></span>
      </a>
      <ul class="dropdown-menu text-small shadow">
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </aside>
<!-- End aside -->