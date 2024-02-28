<div class="sidebar d-flex flex-column flex-shrink-0 p-3 text-bg-dark">
    <select class="form-select" aria-label="Default select example">
        <option v-for="item in Areas" :value="item.id">{{ item.detalle }}</option>
    </select>
    <hr>
    <ul class="nav nav-pills nav-flush flex-column mb-auto">

        <li class="nav-item">
            <a href="#" class="nav-link active py-3  rounded-0" data-bs-toggle="tab" data-bs-target="#home-tab-pane">
                <i class="fa-solid fa-house"></i> Home
            </a>
        </li>
        <li>
            <a href="#" class="nav-link py-3  rounded-0" data-bs-toggle="tab" data-bs-target="#Eventos-tab-pane">
                <i class="fa-solid fa-hill-rockslide"></i> Operacion
            </a>
        </li>
        <li>
            <a href="#" class="nav-link py-3  rounded-0" data-bs-toggle="tab" data-bs-target="#Estadistcias-tab-pane">
                <i class="fa-solid fa-chart-simple"></i> Estadisticas
            </a>
        </li>
        <li>
            <a href="#" class="nav-link py-3  rounded-0" data-bs-toggle="tab" data-bs-target="#Perfiles-tab-pane">
                <i class="fa-solid fa-user"></i> Usuario
            </a>
        </li>
        <li>
            <a href="#" class="nav-link py-3  rounded-0" data-bs-toggle="tab" data-bs-target="#Configuracion-tab-pane">
                <i class="fa-solid fa-gear"></i> Configuracion
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
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