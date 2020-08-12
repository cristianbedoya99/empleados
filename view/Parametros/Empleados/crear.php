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
     
       
        <div class="form-control">
          <input  type="radio" name="sexo" id="gridRadios1" value="M">
          <label class="radio-inline" for="gridRadios1">
          masculino
          </label>
        </div>
        <div class="form-check">
          <input  type="radio" name="sexo" id="gridRadios2" value="F">
          <label class="radio-inline" for="gridRadios2">
           femenino
          </label>
        </div>
  









        <label class="control-label">Area</label>
        <div class="controls">
        <select name="area_id" style="select2">
        <option value="area_id">Seleccione </option>
                  <?php
          
          foreach($Area as $Areas){
          echo"<option value='".$areas['area_id']."'>".$Areas['nombre']."</option>";
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
      <div class="form-group">
      <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Profesional de proyectos 
      </label>

      <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Profesional estrategico
            </label>
      <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Auxiliar Administrativo
            </label>


    </div>
  </div  >  
      <button type="submit" class="btn btn-success">Guardar</button>
            </div>
          </form>
        </div>
      </div>