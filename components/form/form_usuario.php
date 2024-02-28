<form class="row g-3 needs-validation" novalidate>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Tu nombre" required>
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" placeholder="Tu apellido" required>
    </div>
    <div class="mb-3">
        <label for="validationCustomUsername" class="form-label">Correo</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="email" class="form-control" id="correo" aria-describedby="inputGroupPrepend" placeholder="Tu correo" required>
        </div>
    </div>
    <div class="mb-3">
        <label for="validationCustom03" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="validationCustom03" required>
       
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Agregar</button>
    </div>
</form>