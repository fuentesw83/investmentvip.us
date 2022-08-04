<?php
include('includes/header.php');
?>
    <!-- hero start -->
    <section class="hero bg_img" data-background="webAssets/images/bg/hero.jpg">
        
         
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-8">
                <?php
                    if( isset($_SESSION['status']) ) {
                        echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
                        unset($_SESSION['status']);
                    }
                    ?>
              <div class="hero__content">
                
                <div class="row justify-content-center">
                    <!-- 
                    <div class="col-md-6">
                    
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                Login
                                <a href="index.php" class="btn btn-danger float-end">Regresar</a>
                            </h4>
                        </div>
                    </div>
                    -->
                    <div class="card-body">
                        <form action="registro.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" class="form-control"></input>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Telefono</label>
                                <input type="number" name="telefono" class="form-control"></input>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Correo</label>
                                <input type="email" name="email" class="form-control"></input>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Clave</label>
                                <input type="text" name="clave" class="form-control"></input>
                            </div><div class="form-group mb-3">
                                <button type="submit" name="registrar_btn" class="cmn-btn text-uppercase font-weight-600 mt-4">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div><!-- termina formulario -->
                
              </div>
            </div>
          </div>
        </div>
        
    </section>

<?php
include('includes/footer.php');
?>