<!-- Modal -->
<div class="modal fade" id="modalFormProductos" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nueva Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formProductos" name="formProductos" class="form-horizontal">
              <input type="hidden" id="idProducto" name="idProducto" value="">
              <p class="text-primary">Los campos con asterisco (<span class="required">*</span>) son obligatorios.</p>
              <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                      <label class="control-label">Descripción Producto <span class="required">*</span></label>
                      <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" ></textarea>
                    </div>


                    
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="listMarca">Marca <span class="required">*</span></label>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="listCategoria">Categoría <span class="required">*</span></label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-5">
                              <select class="form-control" id="listMarca" name="listMarca"  data-live-search="true"  required=""></select>
                        </div>
                        <div class="form-group col-md-1"> 
                            <button class="btnAddMarca btn btn-success btn-sm" onclick="fntAñadirMarca();" type="button">
                              <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <div class="form-group col-md-5"> 
                            <select class="form-control" id="listCategoria" name="listCategoria"  data-live-search="true" required=""></select>
                        </div>
                        <div class="form-group col-md-1"> 
                            <button class="btnAddCategoria btn btn-success btn-sm" onclick="fntAñadirCategoria();" type="button">
                              <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        
                    </div>


                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="listUnidad">Unidad de Medida  <span class="required">*</span></label>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="listEstado">Estado <span class="required">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                      
                        <div class="form-group col-md-5">
                             <select class="form-control" id="listUnidad" name="listUnidad" data-live-search="true" required></select>
                        </div>
                          <div class="form-group col-md-1">
                              <button class="btnAddUnidad btn btn-success btn-sm" onclick="fntAñadirUnidad();" type="button">
                                <i class="fas fa-plus"></i>
                              </button>
                          </div>
                          
                     

                        
                   

                          <div class="form-group col-md-6">
                            <select class="form-control selectpicker" id="listEstado" name="listEstado" required="">
                              <option value="1">Activo</option>
                              <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">Código <span class="required">*</span></label>
                        <input class="form-control" id="txtCodigo" name="txtCodigo" type="text" placeholder="Código de barra" required="">
                        <br>
                        <div id="divBarCode" class="notblock textcenter">
                            <div id="printCode">
                                <svg id="barcode"></svg> 
                            </div>
                            <button class="btn btn-success btn-sm" type="button" onClick="fntPrintBarcode('#printCode')"><i class="fas fa-print"></i> Imprimir</button>
                        </div>
                    </div>
                    

                    
                    <br><br>
                    <div class="row">
                       <div class="form-group col-md-6">
                           <button id="btnActionForm" class="btn btn-success btn-lg btn-block" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>
                       </div> 
                       <div class="form-group col-md-6">
                           <button class="btn btn-danger btn-lg btn-block" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
                       </div> 
                    </div>  
                </div>
              </div>
              
              <div class="tile-footer">
                 <div class="form-group col-md-12">
                     <div id="containerGallery">
                         <span>Agregar foto (440 x 545)</span>
                         <button class="btnAddImage btn btn-success btn-sm" type="button">
                             <i class="fas fa-plus"></i>
                         </button>
                     </div>
                     <hr>
                     <div id="containerImages">
                         <!-- <div id="div24">
                             <div class="prevImage">
                                 <img src="<?= media(); ?>/images/uploads/producto1.jpg">
                             </div>
                             <input type="file" name="foto" id="img1" class="inputUploadfile">
                             <label for="img1" class="btnUploadfile"><i class="fas fa-upload "></i></label>
                             <button class="btnDeleteImage" type="button" onclick="fntDelItem('div24')"><i class="fas fa-trash-alt"></i></button>
                         </div>
                         <div id="div24">
                             <div class="prevImage">
                                 <img class="loading" src="<?= media(); ?>/images/loading.svg">
                             </div>
                             <input type="file" name="foto" id="img1" class="inputUploadfile">
                             <label for="img1" class="btnUploadfile"><i class="fas fa-upload "></i></label>
                             <button class="btnDeleteImage" type="button" onclick="fntDelItem('div24')"><i class="fas fa-trash-alt"></i></button>
                         </div> -->
                        
                     </div>
                 </div>
                                
              </div>
            </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalViewProducto" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    <div class="modal-content">
      <div class="modal-header header-primary">
        <h5 class="modal-title" id="titleModal">Datos del Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>Codigo:</td>
              <td id="celCodigo"></td>
            </tr>
            <tr>
              <td>Descripción:</td>
              <td id="celDescripcion"></td>
            </tr>
            <tr>
              <td>Stock:</td>
              <td id="celStock"></td>
            </tr>
            <tr>
              <td>Marca:</td>
              <td id="celMarca"></td>
            </tr>
            <tr>
              <td>Categoría:</td>
              <td id="celCategoria"></td>
            </tr>
            <tr>
              <td>Unidad de Medida:</td>
              <td id="celUnidad"></td>
            </tr>
            <tr>
              <td>Estado:</td>
              <td id="celEstado"></td>
            </tr>
            
            <tr>
              <td>Fotos de referencia:</td>
              <td id="celFotos">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalAyuda" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        <h5>Ayuda</h5>
        <hr>
        <p><b>1. Crear producto:</b></p>
        <p>Para crear un nuevo producto dar click en el botón "Nuevo +".</p>
        <img src="<?= media(); ?>/images/ayuda/botonnuevo-producto.png" alt="" width="450">
        <p>Debe llenar los campos y dar click en el botón de "Guardar".</p>
        <img src="<?= media(); ?>/images/ayuda/nuevo-producto.png" alt="" width="450">
        <br><br>

        <p><b>2. Ver producto:</b></p>
        <p>Para ver los datos del producto dar click en el botón "Ver".</p>
        <img src="<?= media(); ?>/images/ayuda/botonver-producto.png" alt="" width="450">
        <br><br>

        <p><b>3. Editar producto:</b></p>
        <p>Para editar los datos del producto dar click en el botón "Editar".</p>
        <img src="<?= media(); ?>/images/ayuda/botoneditar-producto.png" alt="" width="450">
        <br><br>

        <p><b>4. Eliminar producto:</b></p>
        <p>Para eliminar un producto dar click en el botón "Eliminar".</p>
        <img src="<?= media(); ?>/images/ayuda/botoneliminar-producto.png" alt="" width="450">

        

      </div>
      
    </div>
  </div>
</div>
