				<?php require_once('blocks/cabecera.php'); ?>
                <div class="span9" id="content">
					<?php if ($resultaop2) { ?>
						<div class="row-fluid">
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<h4>Correcto</h4>
								La operación se ha realizado correctamente.
							</div>
						</div>
					<?php } ?>
                    
                    
                     <div class="row-fluid">
						<div id="edi" class="block">
							<div class="navbar navbar-inner block-header">
								<div class="muted pull-left">Configuración buscador de la web</div>
							</div>
							<div class="block-content collapse in">
								<div class="span12">
                                    
                                    
                                    
                                                                    <form action="buscador.php?buscadorConfig=true" method="post" class="form-horizontal" enctype="multipart/form-data">
									  <fieldset>
                                        <div>
										<legend>Buscador</legend>
                                                                                
                                                                                <div class="control-group">
										  <label class="control-label" for="etiqavanzado">Buscador Avanzado</label>
										  <div class="controls">
                                                                                    <select id="etiqavanzado" name="etiqProCesta" class="">
                                                                                        <option value="0" <?=($elemento['activo'] == 0 ? ' selected' : '')?>>Desactivado</option>
                                                                                        <option value="1" <?=($elemento['activo'] == 1 ? ' selected' : '')?>>Activado</option>
                                                                                    </select>
											<span style="color: red; font-size: 0.70rem;">Requerido</span><br>
										  </div>
										</div>
                                                                                
                                                                                
                                                                                
                                                                               
                                                                                
                                                                                
                                                                                
                                                                                
                                        <button type="submit" style="margin: 0px 0px 0px 10%;" class="btn btn-success">Guardar Cambios</button>
                                        
                                        </div>
                                        
                                        
                                        
                                                                             
                                        
									  </fieldset>
									</form>
								</div>
							</div>
						</div>

                    </div>
                </div>
				<?php require_once('blocks/pie.php'); ?>