<div class="content py-3 my-3">
    <div class="container-fluid">
        <div class="row">
            <div class="registro">
                <form class="row g-3 needs-validation">
                    <div class="col-md-4">
                      <label for="validationCustom01" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="validationCustom01" placeholder="Tu nombre" required>
                      <div class="valid-feedback">
                        Se ve bien!
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="validationCustom02" class="form-label">Apellido</label>
                      <input type="text" class="form-control" id="validationCustom02" placeholder="Tu apellido" required>
                      <div class="valid-feedback">
                        Se ve bien!
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="validationCustomUsername" class="form-label">Nombre de usuario</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Por favor, ingrese un nombre de usuario.
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label for="validationCustom03" class="form-label">Ciudad</label>
                      <input type="text" class="form-control" id="validationCustom03" required>
                      <div class="invalid-feedback">
                        Por favor, ingrese una ciudad.
                    </div>
                    </div>
                    <div class="col-md-3">
                      <label for="validationCustom04" class="form-label">Provincia</label>
                      <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Elija...</option>
                        <option>...</option>
                      </select>
                      <div class="invalid-feedback">
                        Por favor, ingrese una provincia.
                      </div>
                    </div>
                    <div class="col-md-3">
                      <label for="validationCustom05" class="form-label">Codigo Postal</label>
                      <input type="text" class="form-control" id="validationCustom05" required>
                      <div class="invalid-feedback">
                        Por favor, ingrese un codigo postal.
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                          Acepto los terminos y condiciones.
                        </label>
                        <div class="invalid-feedback">
                          Debes estar de acuerdo antes de registrarte.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary" type="submit">Registrarse</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>