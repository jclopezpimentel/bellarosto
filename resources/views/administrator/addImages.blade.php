<div class="tab-pane active" id="add-Image" role="tabpanel">
  <div class="col-md-10 ml-auto mr-auto">
    <div class="row collections">
      <div class="text-center col-md-12">
        <h2 align="center">Subir Imágenes</h2>
        <form id="uploadImageForm">
          <div class="row col-md-12 ">
            <div class="col-md-1"></div>
            <label for="imageName" class="col-md-2">Nombre </label>
            <input type="text" id="imageName" class="form-control col-md-7" placeholder="Ingrese un nombre para la imágen" style="background-color: white;" required />                        
          </div><br>

          <div class="text-center">
            <span class="image"><input type="file" id="image" name="image" /></span>
            <label for="image">
              <i class="now-ui-icons arrows-1_share-66" style="font-size: 16px;vertical-align: middle;"></i>
              <span>Seleccionar Imágen</span>
            </label> 
          </div><br>                    
          
          <div class="row col-md-12">
            <div class="col-md-1"></div>
            <label for="imageCategory" class="col-md-2">Categoría</label>
            <select class="form-control col-md-5" id="imageCategory" style="background-color: white;">
              <option value="1">ads</option>
              <option value="2">Ocasdasulto</option>
            </select>
            <div class="checkbox col-md-3">
              <input id="imageVisibility" type="checkbox" checked="true">
              <label for="imageVisibility">Visible</label>
            </div>  
          </div><br><br>
          
          <button class="btn btn-lg btn-info btn-round">
            <i class="now-ui-icons arrows-1_cloud-upload-94"> </i> Subir
          </button>
        
        </form> 
      </div>
    </div>
  </div>
</div>
