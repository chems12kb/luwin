<body class="sb-nav-fixed">
     
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Agregar productos</h1>

                        <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>/unidades/insertar" autocomplete="off">

                        <div class="form-group">
                            <div class="row">
                            <div class="col-1 col-sm-5">
                                <label>Codigo</label>
                                <input class="form-control" id="codigo" name="codigo" type="text" autofocus require />
                            </div>

                            
                            <div class="col-1 col-sm-5">
                                <label>Nombre</label>
                                <input class="form-control" id="nombre" name="nombre" type="text" require />
                            </div>
                            </div>

                            <div class="row text-white" >
                                -------------------------------------------------
                            </div>

                            <div class="row">
                            <div class="col-1 col-sm-5">
                                <label>Precio</label>
                                <input class="form-control" id="precio_compra" name="precio_compra" type="text" autofocus require />
                            </div>
                            
                            <div class="col-1 col-sm-5">
                                <label>Marca</label>
                                <input class="form-control" id="marca" name="marca" type="text" require />
                            </div>
                            </div>

                            </div>

                            <div class="row">
                            <div class="col-1 col-sm-5">
                                <label>Descripcion</label>
                                <input class="form-control" id="descripcion" name="descripcion" type="text" autofocus require />
                            </div>
                            
                            </div>

                            
                            
                            <div class="row text-white" >
                                -
</div>

                                    <div class="form-group">
                                        <div class="row"> 
                                            <div class="col-12 col-sm-6">
                                                <label>Imagen</label><br />
                                                
                                                <input type="file" id="img_producto" name="img_producto" accept="image/*" />
                                                
                                            </div>
                                        </div>
                                    </div>                            

                            <a href="<?php echo base_url(); ?>/unidades" class ="btn btn-primary">Ver lista</a>
                            <button type="submit" class="btn btn-success">Guardar</button>

                       
                        
                        
                    </form>
</div>
                </main>
            </div>
    
       
    </body>