<body class="sb-nav-fixed">
     
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Agregar cliente nuevo</h1>

                        <form method="POST" action="<?php echo base_url(); ?>/clientes/insertar" autocomplete="off">

                        <div class="form-group">
                            <div class="row">
                            <div class="col-1 col-sm-6">
                                <label>Nombre</label>
                                <input class="form-control" id="nombre" name="nombre" type="text" autofocus require />
                            </div>
                            
                            <div class="col-1 col-sm-6">
                                <label>Direccion</label>
                                <input class="form-control" id="direccion" name="direccion" type="text" />
                            </div>
                            </div>

                            <div class="row text-white" >
                                -------------------------------------------------
                            </div>

                            <div class="row">
                            <div class="col-1 col-sm-6">
                                <label>Contacto</label>
                                <input class="form-control" id="telefono" name="telefono" type="text" />
                            </div>
                            
                            <div class="col-1 col-sm-6">
                                <label>Correo</label>
                                <input class="form-control" id="correo" name="correo" type="text" />
                            </div>
                            </div>

                            </div>
                            
                            <div class="row text-white" >
                                -
</div>
                            <a href="<?php echo base_url(); ?>/unidades" class ="btn btn-primary">Ver lista</a>
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