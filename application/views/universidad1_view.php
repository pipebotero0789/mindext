  <script src="<?php echo base_url();?>file/js/formularioUniversidad.js"></script> 

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Universidades</h1>
                    <p>Amplio portafolio de universidades, estudios de pregrado y posgrado. </p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                         <li><a href="../index.html">Mindext</a></li>
            			<li><a href="rusia.html">Rusia</a></li>
                        <li class="active">Universidades</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title--> 

    <section id="portfolio" class="container">
       <div class="row">
         <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
            
            <center><h3>Busca por palabra</h3></center>    
              <div class="form-group">
                <label for="buscar">¿Qué pregrado, postgrado, maestría, doctorado buscas? (Inglés y/o Español):</label>
                <input type="text" class="form-control" id="buscar" name="buscar">
              </div>
              <div class="form-group">
                <label for="tipo_estudio">Nivel de estudio</label>
                <?php echo form_dropdown('tipo_estudio_id1', $basica_tipo_estudio, '', 'onchange="cambioCarrera()" id="tipo_estudio1" class="form-control"'); ?>
              </div>
              <button class="btn btn-default" onclick="buscarCarreraPorTexto()">Consultar</button>
            <br>

            <center><h3>Búsqueda avanzada</h3></center> 
              <div class="form-group">
                <label for="ciudad">Ciudad</label>
                <?php echo form_dropdown('ciudad_id', $basica_ciudad, '', 'id="ciudad" class="form-control" onchange="cambiouniversidad()"'); ?>
              </div>

              <div class="form-group">
                <label for="universidad">Universidad</label>
                <?php if ($produccion_universidad == null) {
                    echo '<select name="universidad_id" id="universidad_id" class="form-control">
                    <option>Seleccione una Universidad</option>
                    </select>';
                }else
                {
                echo form_dropdown('universidad_id', $produccion_universidad, $universidad_id, 'id="universidad_id" class="form-control"');
                } ?>
              </div>

              <div class="form-group">
                <label for="tipo_estudio">Nivel de estudio</label>
                <?php echo form_dropdown('tipo_estudio_id', $basica_tipo_estudio, '', 'id="tipo_estudio" class="form-control"'); ?>
              </div>

              <button class="btn btn-default" onclick="mostrarCarrera()">Consultar</button>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6" id=infoCarrera>
           
        </div>
       </div> 
    </section><!--/#portfolio-->