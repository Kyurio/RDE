<?php
include 'components/inc/header.php';
?>

<body>
  <main>

    <div id="app">



      <?php include 'components/navbar/navbar.php' ?>

      <div class="row">
        <div class="col-md-2">

          <?php include 'components/navbar/sidebar.php' ?>

        </div>
        <div class="col-md-10">
          <div class="container">


            <div class="tab-content" id="myTabContent">

              <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                <div class="container mx-4">

                  <!-- dashboard -->
                  <?php include 'components/section/dashboard.php' ?>
                  <!-- charts -->
                  <?php include 'components/section/charts.php' ?>
                  <!-- charts -->
                  <?php include 'components/section/status.php' ?>

                </div>

              </div>

              <div class="tab-pane fade" id="Eventos-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <!-- tabla eventos -->
                <div class="container">

                  <div class="card mt-5 mx-4 py-4 me-4">
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
                              <td>
                                <button class="btn btn-sm btn-dark" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                                  <i class="fa-solid fa-plus"></i>
                                </button>
                              </td>
                            </tr>


                          </tbody>
                        </table>
                      </div>

                    </div>
                  </div>

                </div>
                <!-- end tabla eventos -->
              </div>

              <div class="tab-pane fade" id="Estadistcias-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">

              </div>

              <div class="tab-pane fade" id="Perfiles-tab-pane" role="tabpanel" tabindex="0">

                  <div class="container">
                    <?php require 'components/tables/table_usuarios.php' ?>
                  </div>
            

              </div>

              <div class="tab-pane fade" id="Configuracion-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
            </div>

            <!-- fin de turno / inicio de turno -->
            <div class="container">
              <div class="d-flex">
                <div class="p-2 flex-grow-1"></div>
                <div class="p-2">Inicio turno</div>
                <div class="p-2">Fin turno</div>
              </div>
            </div>

          </div>
        </div>
      </div>


      <!-- offcanvas -->
      <?php include 'components/offcanvas/offcanvasUsuarios.php' ?>
      <div class="offcanvas fullpantalla offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Asignar de causa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">


          <div class="container mt-5">

            <div class="mb-3">
              <select class="form-select" aria-label="Default select example">
                <option selected>Equipo</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <small>{{error}}</small>
            </div>

            <div class="mb-3">
              <select class="form-select" aria-label="Default select example">
                <option selected>Equipo</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <small>{{error}}</small>
            </div>

            <div class="mb-3">
              <select class="form-select" aria-label="Default select example">
                <option selected>Equipo</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <small>{{error}}</small>
            </div>

            <div class="mb-3">
              <div class="form-floating">
                <textarea class="form-control" id="floatingTextarea2"></textarea>
                <label for="floatingTextarea2">Causa</label>
              </div>
            </div>

            <div class="mb-3">
              <div class="form-floating">
                <textarea class="form-control" id="floatingTextarea2"></textarea>
                <label for="floatingTextarea2">Comentario</label>
              </div>
            </div>

            <button class="btn btn-sm">Agregar</button>

          </div>


        </div>
      </div>



    </div>




  </main>
  <?php include 'components/inc/footer.php' ?>
</body>

</html>