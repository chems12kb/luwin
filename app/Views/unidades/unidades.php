<script src="<?php echo base_url(); ?>/https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

<body class="sb-nav-fixed">
     
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><strong>LISTA DE PRODUCTOS</strong></h1>
                    

                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead class=" thead bg-dark text-white">
                                        <tr>
                                            <th>id</th>
                                            <th>Codigo</th>
                                            <th>imagen</th>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th>Descripcion</th>
                                            <th>Marca</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                            
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                       
                                        <?php foreach($datos as $dato) { ?>

                                            <tr>
                                                <td><?php echo $dato['id']; ?></td>
                                                <td><?php echo $dato['codigo']; ?></td>
                                                <td><img src="<?php echo base_url().'/images/productos/'.$dato['id'].'.jpg'; ?>" class="img-responsive" width="100" /></td>
                                                <td><?php echo $dato['nombre']; ?></td>
                                                <td><?php echo $dato['precio_compra']; ?></td>
                                                <td><?php echo $dato['descripcion']; ?></td>
                                                <td><?php echo $dato['marca']; ?></td>
                                                <td><a href="<?php echo base_url(); ?>/unidades/editar/ <?php echo $dato['id']; ?>" class="btn btn-primary"><i class="fas fa-pencil-alt">editar</i></a></td>
                                                <td><a href="<?php echo base_url(); ?>/unidades/eliminar/ <?php echo $dato['id']; ?>" class="btn btn-danger"><i class="fas fa-trash">eliminar</i></a></td>
                                                
                                            </tr>

                                        <?php } ?>
                                        
                                        
                                    </tbody>
                                </table>
                    </div>
                </main>
                
            </div>
        </div>
        
    </body>