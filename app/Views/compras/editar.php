<body class="sb-nav-fixed">
     
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?php echo $titulo; ?></h1>

                        <form method="POST" action="<?php echo base_url(); ?>/unidades/actualizar" autocomplete="off">

                        <input type="hidden" value="<?php echo $datos['id']; ?>" name="id" />

                        <div class="form-group">
                            <div class="row">
                            <div class="col-1 col-sm-6">
                                <label>Nombre</label>
                                <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $datos['nombre']; ?>" autofocus require />
                            </div>
                            
                            <div class="col-1 col-sm-6">
                                <label>Codigo</label>
                                <input class="form-control" id="nombre_corto" name="nombre_corto" type="text" value="<?php echo $datos['nombre_corto']; ?>" require />
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-1 col-sm-6">
                                <label>Precio</label>
                                <input class="form-control" id="preciod" name="preciod" type="text" value="<?php echo $datos['preciod']; ?>" require />
                            </div>
                            
                            <div class="col-1 col-sm-6">
                                <label>Marca</label>
                                <input class="form-control" id="marca" name="marca" type="text" value="<?php echo $datos['marca']; ?>" require />
                            </div>
                            </div>
                            </div>
                            
                            <div class="row text-white" >
                                -
</div>
                            <a href="<?php echo base_url(); ?>/unidades" class ="btn btn-primary">Regresar</a>
                            <button type="submit" class="btn btn-success">Guardar</button>

                       
                        
                        
                    </form>
</div>
                </main>
            </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>