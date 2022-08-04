<?php
session_start();
include('includes/header.php');
?>

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">
        <?php
        if( isset($_SESSION['status']) ) {
            echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
            unset($_SESSION['status']);
        }
        ?>
        <div class="card">
            <div class="card-header">
                <h4>
                    Login
                    <a href="index.php" class="btn btn-danger float-end">Regresar</a>
                </h4>
            </div>
        </div>

        <div class="card-body">
            <form action="registro.php" method="POST">

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
                </div>

                <div class="form-group mb-3">
                    <button type="submit" name="registro_btn" class="btn btn-primary">Registrar</button>
                </div>

            </form>
            
        </div>
        
        </div>
    
    </div>

</div>
<?php
include('includes/footer.php');
?>