
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
      </div>
      
          <form class="form1"  id="frminsert" onsubmit="return insertarDatos()" method="post">
          <div class="title">
          
          <h1>Registro Usuario</h1>
          
          </div>  
           <br><div class="one-half ">
             <input  type="text" id="nombre" name="nombre" minlength="3" maxlength="30" required=""><span class="barra"></span>
               <label>Nombre del cliente </label>
             </div>  
             <div class="one-half last ">
               <input type="text" id="apellido" name="apellido" minlength="3" maxlength="30"  required=""><span class="barra"></span>
               <label>Apellidos del cliente </label>
             </div> 
               <div class="one-half ">
               <input type="text" id="documento" name="documento" minlength="5" maxlength="10" required=""><span class="barra"></span>
               <label>Documento </label>
             </div> 
               <div class="one-half last">
               <input type="text" id="telefono" name="telefono" minlength="6" maxlength="11" required=""><span class="barra"></span>
               <label>Telefono </label>
             </div>  
             <div class="one-half ">
               <input type="email" id="correo" name="correo"  maxlength="40" required=""><span class="barra"></span>
               <label>Correo </label>
             </div>
             <div class="one-half last">
               <input type="text" id="direccion" name="direccion" minlength="5" maxlength="30" required=""><span class="barra"></span>
               <label>Dirección </label>
             </div>
             <div class="one-half ">
               <input type="password" id="contraseña" name="contraseña" required=""><span class="barra"></span>
               <label>Contraseña </label>
             </div>
             <div class="one-half last ">
               <input type="text" id="rol" name="rol"  required=""><span class="barra"></span>
               <label>Rol </label>
             </div>
               <input type="reset" class="reset1" value="Reset">
                <input type="submit" value="Guardar" class="boton2">
                <div class="close">
                <button type="button"  class="btn btn-primary" data-dismiss="modal">X</button>
                </div>
          </form>
      </div>
      

      </div>
    </div>
  </div>
</div>
