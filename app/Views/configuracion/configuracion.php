<script src="<?php echo base_url(); ?>/https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

<body class="sb-nav-fixed">
     
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">CONFIGURACION</h1>

                        <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>/unidades/insertar" autocomplete="off">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-1 col-sm-6">
                                            <label>Nombre de la tienda</label>
                                            <textarea  class="form-control" id="ticket_leyenda" name="ticket_leyenda">" INCATECH "</textarea>
                                        </div>
                                    
                                        <div class="col-1 col-sm-6">
                                            <label>RFC</label>
                                            <textarea  class="form-control" id="ticket_leyenda" name="ticket_leyenda">XXAXX000000XXX</textarea>
                                        </div>
                                    </div>

                                    <div class="row text-white" >
                                        -------------------------------------------------
                                    </div>

                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-1 col-sm-6">
                                            <label>Telefono de la tienda</label>
                                            <textarea  class="form-control" id="ticket_leyenda" name="ticket_leyenda">13-3554-53</textarea>
                                        </div>
                                    
                                        <div class="col-1 col-sm-6">
                                            <label>Correo de la tienda</label>
                                            <textarea  class="form-control" id="ticket_leyenda" name="ticket_leyenda">incatech@gmail.com</textarea>
                                        </div>
                                    </div>

                                    <div class="row text-white" >
                                        -------------------------------------------------
                                    </div>

                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-1 col-sm-6">
                                            <label>Direccion de la tienda</label>
                                            <textarea  class="form-control" id="tienda_direcccion" name="tienda_direcccion">Av. los zorritos 567</textarea>
                                        </div>
                                    
                                        <div class="col-1 col-sm-6">
                                            <label>Leyenda del ticket</label>
                                            <textarea  class="form-control" id="ticket_leyenda" name="ticket_leyenda">gracias por su compra</textarea>
                                            
                                        </div>
                                    </div>

                                    <div class="row text-white" >
                                        -------------------------------------------------
                                    </div>

                                    <div class="form-group">
                                        <div class="row"> 
                                            <div class="col-12 col-sm-6">

                                                <img src="unip.jpg" class="img-responsive" width="200" />
                                            </div>
                                        </div>
                                    </div>
                                
                                    
                                    
                                    <div class="row text-white" >
                                        -
                                    </div>
                                    <a href="<?php echo base_url(); ?>/configuracion" class ="btn btn-primary">Actualizar</a>
                                    




</form>
                    

                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>