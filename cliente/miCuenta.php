<?php
include("includes/header.php");
?>
    <!-- Header Section End -->
 <!-- Breadcrumb Begin -->

 <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                  <li aria-current="page" class="breadcrumb-item active">Mis ordenes</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-3">
             <?php 
             include("includes/sidebar.php");
             ?>
            </div>
            <div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Confirmación de pago</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    <form>
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">Número de factura</label> 
                                <div class="col-8">
                                  <input id="numfactura" name="numfactura" placeholder="Número de factura" class="form-control here" required="required" type="number">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">Cantidad enviada</label> 
                                <div class="col-8">
                                  <input id="cantenviada" name="cantenviada" placeholder="Cantidad enviada" class="form-control here" type="number">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="select" class="col-4 col-form-label">Seleccione el metodo de pago</label> 
                                <div class="col-8">
                                  <select id="select" name="select" class="custom-select">
                                    <option value="Seleccione el metodo de pago">Seleccione el metodo de pago</option>
                                      <option value="Tarjeta de credito">Tarjeta de credito</option>
                                      <option value="Por la pasalera">Por la paselera</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Fecha del pago</label> 
                                <div class="col-8">
                                  <input id="fecha" name="fecha" placeholder="Fecha de pago" class="form-control here" type="date">
                                </div>
                              </div>
                             
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Nick Name*</label> 
                                <div class="col-8">
                                  <input id="text" name="text" placeholder="Nick Name" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                             
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email*</label> 
                                <div class="col-8">
                                  <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="website" class="col-4 col-form-label">Website</label> 
                                <div class="col-8">
                                  <input id="website" name="website" placeholder="website" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="publicinfo" class="col-4 col-form-label">Public Info</label> 
                                <div class="col-8">
                                  <textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">New Password</label> 
                                <div class="col-8">
                                  <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="text">
                                </div>
                              </div> 
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Confirmar pago</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>
<?php

include("includes/footer.php");

?>
    
<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>