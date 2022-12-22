<body class="sb-nav-fixed">
     
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                       

                        <form method="POST" action="<?php echo base_url(); ?>/compras/insertar" autocomplete="off">

                        <div class="form-group">
                            <div class="row">

                            <div class="col-1 col-sm-4">
                               
                                <label>Codigo</label>
                                <input class="form-control" id="codigo" name="codigo" type="text" pleaceholder="escriba el codigo " autofocus />
                            </div>
                            
                            
                            <div class="col-1 col-sm-4">
                                <label>Nombre del producto</label>
                                <input class="form-control" id="nombre" name="nombre" type="text" />
                            </div>

                            <div class="col-1 col-sm-4">
                                <label>Cantidad</label>
                                <input class="form-control" id="cantidad" name="cantidad" type="text" />
                            </div>

                            </div>

                            <div class="row text-white" >
                                -------------------------------------------------
                            </div>

                            <div class="row">
                            <div class="col-1 col-sm-4">
                                <label>Precio de compra</label>
                                <input class="form-control" id="precio_compra" name="precio_compra" type="text" />
                            </div>
                            
                            <div class="col-1 col-sm-4">
                                <label>Sub total </label>
                                <input class="form-control" id="precio_compra" name="precio_compra" type="text" />
                            </div>

                            <div class="col-1 col-sm-4">
                                
                                <label><br>&nbsp;</label>
                                <button type="submit" class="btn btn-success btn bg-primary">Agregar productos</button>
                                
                            </div>

                            </div>

                            </div>
                            
                            <div class="row text-white" >
                                -
                            </div>

                            <div class="row">
                            <h1 class="mt-1">Detalles de la compra</h1>
                            <table id="tablaProductos" class="table table-hover table-striped table-sm table-responsive tablaProductos" >
                                    <thead class=" thead bg-dark text-white">
                                        <tr>
                                            <th>#</th>
                                            <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th>Total</th>
                                            <th width="1%"></th>
                                            
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                       
                                       <?php foreach($datos as $dato) { ?>

                                           <tr>
                                               <td><?php echo $dato['id']; ?></td>
                                               <td><?php echo $dato['codigo']; ?></td>
                                               <td><?php echo $dato['nombre']; ?></td>
                                               <td><?php echo $dato['cantidad']; ?></td>
                                               <td><?php echo $dato['precio_compra']; ?></td>
                                               <td><?php echo $dato['precio_compra']; ?></td>
                                              
                                               
                                           </tr>

                                       <?php } ?>
                                       
                                       
                                   </tbody>
                                </table>


                            </div>

                            <div class="row text-white" >
                                -------------------------------------------------
                            </div>

                            <div class="row" >
                                <div class="col-12 col-sm-9 offset-md-9">
                                    
                                    <a class="nav-link" href="<?php echo base_url(); ?>/compras/ventacompletada"><button type="button" id="compra" class="btn btn-danger">Completar Compra</button></a>
                                    

                                </div>
                            </div>

                            

                       
                        
                        
                    </form>
</div>
                </main>

                
            </div>
       
        
    </body>