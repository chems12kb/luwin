<script src="<?php echo base_url(); ?>/https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

<body class="sb-nav-fixed">
     
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">DETALLES DE LA COMPRA</h1>
                    

                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead class=" thead bg-dark text-white">
                                        <tr>
                                            <th>id</th>
                                            <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th>Subtotal</th>
                                            <th></th>
                                            
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
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>