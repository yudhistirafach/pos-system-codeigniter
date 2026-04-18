<?= $this->extend('Layouts/layout') ?>
<?= $this->section('content') ?>

<!-- Content of the main body - heres the main content like graph, tables, etc... -->
 <main class="col-sm-10 bg-body-tertiary dashboard">

     <div class="container-fluid">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" id="title">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button"
            class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <i class="bi bi-calendar3"></i>
            This week
          </button>
        </div>
      </div>
      
      <div class="row">
          </div>
          
          <!-- New graph -->
          <div class="row">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Overview</li>
                    </ol>
                </nav>
                <p>This is the homepage of a simple admin interface which is part of a tutorial written on Themesberg</p>
                <div class="row my-4">
                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">Customers</h5>
                            <div class="card-body">
                <h5 class="card-title">345k</h5>
                <p class="card-text">Feb 1 - Apr 1, United States</p>
                <p class="card-text text-success">18.2% increase since last month</p>
              </div>
            </div>
        </div>
          <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
                <h5 class="card-header">Revenue</h5>
              <div class="card-body">
                <h5 class="card-title">$2.4k</h5>
                <p class="card-text">Feb 1 - Apr 1, United States</p>
                <p class="card-text text-success">4.6% increase since last month</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
              <h5 class="card-header">Purchases</h5>
              <div class="card-body">
                <h5 class="card-title">43</h5>
                <p class="card-text">Feb 1 - Apr 1, United States</p>
                <p class="card-text text-danger">2.6% decrease since last month</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card">
              <h5 class="card-header">Traffic</h5>
              <div class="card-body">
                <h5 class="card-title">64k</h5>
                <p class="card-text">Feb 1 - Apr 1, United States</p>
                <p class="card-text text-success">2.5% increase since last month</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-lg-0">
        <div class="card">
            <h5 class="card-header">Latest transactions</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Order</th>
                                <th scope="col">Product</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Total</th>
                                <th scope="col">Date</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">17371705</th>
                                <td>Volt Premium Bootstrap 5 Dashboard</td>
                                <td>johndoe@gmail.com</td>
                                <td>€61.11</td>
                                <td>Aug 31 2020</td>
                                <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                            </tr>
                            <tr>
                        <th scope="row">17370540</th>
                        <td>Pixel Pro Premium Bootstrap UI Kit</td>
                        <td>jacob.monroe@company.com</td>
                        <td>$153.11</td>
                        <td>Aug 28 2020</td>
                        <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                      </tr>
                      <tr>
                          <th scope="row">17371705</th>
                          <td>Volt Premium Bootstrap 5 Dashboard</td>
                          <td>johndoe@gmail.com</td>
                          <td>€61.11</td>
                          <td>Aug 31 2020</td>
                          <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                        </tr>
                        <tr>
                            <th scope="row">17370540</th>
                            <td>Pixel Pro Premium Bootstrap UI Kit</td>
                            <td>jacob.monroe@company.com</td>
                            <td>$153.11</td>
                            <td>Aug 28 2020</td>
                            <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                        </tr>
                        <tr>
                        <th scope="row">17371705</th>
                        <td>Volt Premium Bootstrap 5 Dashboard</td>
                        <td>johndoe@gmail.com</td>
                        <td>€61.11</td>
                        <td>Aug 31 2020</td>
                        <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                      </tr>
                      <tr>
                        <th scope="row">17370540</th>
                        <td>Pixel Pro Premium Bootstrap UI Kit</td>
                        <td>jacob.monroe@company.com</td>
                        <td>$153.11</td>
                        <td>Aug 28 2020</td>
                        <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <a href="#" class="btn btn-block btn-light">View all</a>
        </div>
    </div>
</div>
<div class="col-12 col-xl-4">
    <div class="card">
        <h5 class="card-header">Traffic last 6 months</h5>
        <div class="card-body">
            <div id="traffic-chart"></div>
        </div>
    </div>
</div>
</div>
      </div>    
      
      <!-- Footer for end section -->
      <div class="row">
          <footer class="pt-5 d-flex justify-content-between">
              <span>Copyright © 2019-2020 <a href="https://themesberg.com">Themesberg</a></span>
              <ul class="nav m-0">
                  <li class="nav-item">
              <a class="nav-link text-secondary" aria-current="page" href="#">Privacy Policy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="#">Terms and conditions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="#">Contact</a>
            </li>
        </ul>
    </footer>
</div>
<!-- End footer -->

</div>
</main>
<!-- end main -->

<script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
    integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp"
    crossorigin="anonymous"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="dashboard.js"></script>
  <script>
    new Chartist.Line('#traffic-chart', {
      labels: ['January', 'Februrary', 'March', 'April', 'May', 'June'],
      series: [
        [23000, 25000, 19000, 34000, 56000, 64000]
      ]
    }, {
      low: 0,
      showArea: true
    });
  </script>

  <script>
    function changeclass() {
      $("#main").toggleClass('col-sm-10 col-sm-12');
    }

  </script>

<?= $this->endSection() ?> 