<script src="<?php echo base_url(); ?>/https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

<body class="sb-nav-fixed">
     
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Productos eliminados</h1>
            
                           <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead class=" thead bg-dark text-white">
                                        <tr>
                                            <th>id</th>
                                            <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th>Descripcion</th>
                                            <th>Marca</th>
                                            <th>Reingresar </th>
                                            
                                            
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                       
                                        <?php foreach($datos as $dato) { ?>

                                            <tr>
                                                <td><?php echo $dato['id']; ?></td>
                                                <td><?php echo $dato['codigo']; ?></td>
                                                <td><?php echo $dato['nombre']; ?></td>
                                                <td><?php echo $dato['precio_compra']; ?></td>
                                                <td><?php echo $dato['descripcion']; ?></td>
                                                <td><?php echo $dato['marca']; ?></td>
                                                <td><a href="<?php echo base_url().'/unidades/reingresar/'.$dato['id']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt">Deshacer</i></a></td>
                                                
                                                
                                            </tr>

                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                    </div>
                </main>
                
            </div>
        </div>
        
    </body>