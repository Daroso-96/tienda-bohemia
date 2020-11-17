<?php
$active='Tienda';
include("includes/header.php");
?>
    <!-- Header Section End -->
      <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <?php 
                   if(!isset($_GET['pro_cat'])){
                    
                    if(!isset($_GET['cat'])){
                  
                   echo "
                    <div class='breadcrumb__links'>
                     
                        <a href='index.php'><i class='fa fa-home'></i> Inicio</a>
                        <a href='#'><i class='fa fa-home'></i> Tienda</a>
                         <a href='#'><i class='fa fa-home'></i> X</a>
                         
                    </div>
                    ";
                    }
                }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Breadcrumb End -->

      <!-- Shop Section Begin -->


   <!-- Shop Section Begin -->
   <?php

include("includes/sidebar.php");

?>
  
    <!-- Shop Section Begin -->  
    <!--
      <section class="shop spad">
        <div class="container">
            <div class="row">
             -->
               <!-- Aqui van los productos :D -->  
                <?php 
                      if(!isset($_GET['pro_cat'])){
                    
                        if(!isset($_GET['cat'])){
                            $per_page=6;
                            if(isset($_GET['page'])){ 
                                $page = $_GET['page'];
                            }else{
                                
                                $page=1;
                                
                            }
                            $start_from = ($page-1) * $per_page;
                 $get_productos = "SELECT * FROM productos ORDER BY 1 DESC LIMIT $start_from ,$per_page";
                 $run_productos = mysqli_query($con, $get_productos);    
                  while($row_productos= mysqli_fetch_array($run_productos)){
                    $pro_id = $row_productos['pro_id'];
                    $pro_nom = $row_productos['pro_nom'];
                    $pro_precio = $row_productos['pro_precio'];
                    $pro_img1 = $row_productos['pro_img1'];
                    echo "
                      
                    ";

                  }       
                }


                     
                   ?>


                    <!-- Fin Aqui van los productos :D -->  
                        <div class="col-lg-12 text-center">
                            <div class="pagination__option">
                            <?php
                             
                             $query = "SELECT * FROM productos";
                                      
                             $result = mysqli_query($con,$query);
                                      
                             $total_records = mysqli_num_rows($result);
                                      
                             $total_pages = ceil($total_records / $per_page);
                                      
                                 echo "
                                 
                                     <li>
                                     
                                         <a href='tienda.php?page=1'> ".'First Page'." </a>
                                     
                                     </li>
                                 
                                 ";
                                      
                                 for($i=1; $i<=$total_pages; $i++){
                                     
                                       echo "
                                 
                                     <li>
                                     
                                         <a href='tienda.php?page=".$i."'> ".$i." </a>
                                     
                                     </li>
                                 
                                 ";  
                                     
                                 };
                                      
                                 echo "
                                 
                                     <li>
                                     
                                         <a href='tienda.php?page=$total_pages'> ".'Last Page'." </a>
                                     
                                     </li>
                                 
                                 ";
                                      
                                     }
                                     
                                 
                              
                              ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
<!-- Search End -->
<!--Footer-->
<?php

include("includes/footer.php");

?>
<!--Fin footer-->
    
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