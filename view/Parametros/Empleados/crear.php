<div class="widget-box">
         <h3>Crear empleado</h>
        <div class="widget-title"> <span class="icon"> </span>
          <h5>Los campos con asteriscos(*)son obligatorios</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?php echo getUrl("Parametros","Empleados","postCrear");?>" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nombre completo</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Nombre" name="nombre">
              </div>
            </div>
       <div class="control-group">
              <label class="control-label">Correo electronico </label>
              <div class="controls">
                <input type="email" class="span11" placeholder="Nombre" name="email">
              </div>
            </div>
        <div class="control-group">
              <label class="control-label">Sexo</label>
              <div class="controls">
                <label>
                  <div> <input type="radio" name="sexo" value="M"></div>
                  Masculino</label>
                <label>
                  <div><span><input type="radio" name="sexo" value="F"></span></div>
                 Femenino</label>
              </div>
            </div>
        <label class="control-label">Area</label>
        <div class="controls">
        <select name="area_id" style="select2">
        <option value="area_id">Seleccione </option>
                  <?php
          
          foreach($area as $areas){
          echo"<option value='".$areas['area_id']."'>".$areas['nombre']."</option>";
          }
          
          ?>
                </select>
              </div>
            <div class="row">
                  <div class="col-6">
                    <div class="control-group">
                      <div class="col-12">
                          <label class="control-label">Descripcion</label> 
                        <textarea required name="descripcion" class="col-12" value="" rows="6" style="resize: both !important;"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
            <div class="control-group">
              <label class="control-label">Boletin?</label>
              <div class="controls">
                <label>
              <input class="form-check-input" name="boletin" type="checkbox" value="1">    
              </div>
            </div>

          <div class="control-group">
              <label class="control-label">Roles</label>
              <div class="controls">
                <label>
                  <div><input type="checkbox" name="radios"></div>
                  Administrador</label>
                <label>
                  <div><input type="checkbox" name="radios"></div>
                  Jefe de proyectos</label>
                <label>
                  <div><input type="checkbox" name="radios"></div>
                  Ventas</label>
              </div>

               <div class="pull-right">
               <button type="submit" class="btn btn-success">Guardar</button>
               </div>
            </div>
            </div>
          </form>
        </div>
      </div>