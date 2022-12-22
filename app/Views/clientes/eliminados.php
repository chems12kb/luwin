<script src="<?php echo base_url(); ?>/https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

<body class="sb-nav-fixed">
     
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Historial de clientes </h1>
            
                           <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead class=" thead bg-dark text-white">
                                        <tr>
                                            <th>id</th>
                                            <th>Nombre</th>
                                            <th>Direccion</th>
                                            <th>Contacto</th>
                                            <th>Correo</th>
                                            <th>Reingresar </th>
                                            
                                            
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                       
                                        <?php foreach($datos as $dato) { ?>

                                            <tr>
                                                <td><?php echo $dato['id']; ?></td>
                                                <td><?php echo $dato['nombre']; ?></td>
                                                <td><?php echo $dato['direccion']; ?></td>
                                                <td><?php echo $dato['telefono']; ?></td>
                                                <td><?php echo $dato['correo']; ?></td>
                                                <td><a href="<?php echo base_url().'/clientes/reingresar/'.$dato['id']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt">Deshacer</i></a></td>
                                                
                                                
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