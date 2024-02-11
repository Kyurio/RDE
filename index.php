<?php
  include 'components/inc/header.php';
?>

<body>
  <main>


    <div class="row">
      <div class="col-md-1">

        <div class="sidebar d-flex flex-column flex-shrink-0 bg-body-tertiary">
          <a href="/" class="d-block p-3 link-body-emphasis text-decoration-none" title="Icon-only" data-bs-toggle="tooltip" data-bs-placement="right">
            <svg class="bi pe-none" width="40" height="32">
              <use xlink:href="#bootstrap" />
            </svg>
            <span class="visually-hidden">Icon-only</span>
          </a>
          <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="nav-item">
              <a href="#" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
                <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Home">
                  <use xlink:href="#home" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Dashboard">
                  <use xlink:href="#speedometer2" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Orders" data-bs-toggle="tooltip" data-bs-placement="right">
                <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Orders">
                  <use xlink:href="#table" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Products" data-bs-toggle="tooltip" data-bs-placement="right">
                <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Products">
                  <use xlink:href="#grid" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Customers" data-bs-toggle="tooltip" data-bs-placement="right">
                <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Customers">
                  <use xlink:href="#people-circle" />
                </svg>
              </a>
            </li>
          </ul>
          <div class="dropdown border-top">
            <a href="#" class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow">
              <li><a class="dropdown-item" href="#">New project...</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
        </div>

      </div>
      <div class="col-md-10">

        <nav class="navbar navbar-expand-lg bg-body-tertiary mt-1">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container">


          <!-- contenedor principal de la app -->
          <section>
            <div class="card mt-5 mx-4 py-4">
              <div class="card-body">

                <h3>Eventos</h3>


                <div class="py-5 mx-5">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </section>
          <!-- end contenedor principal -->

        </div>

      </div>
    </div>




  </main>
  <?php include 'components/inc/footer.php' ?>
</body>

</html>