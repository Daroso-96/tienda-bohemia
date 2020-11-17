<?php 

$db = mysqli_connect("localhost","root","","bdproyecto");
/* Mostrar los productos*/
function getPro(){
    
    global $db;
    $get_productos = "SELECT * FROM productos ORDER BY 1 DESC LIMIT 0,8";
    $run_productos = mysqli_query($db, $get_productos);
    while($row_productos=mysqli_fetch_array($run_productos)){
     $pro_id = $row_productos['pro_id'];
     $pro_nom = $row_productos['pro_nom'];
     $pro_precio = $row_productos['pro_precio'];
     $pro_img1 = $row_productos['pro_img1'];
     echo "
     

       <div class='col-md-4 col-sm-6 single'>
        
            <div class='product'>
            
                <a href='detalle.php?pro_id=$pro_id'>
                
                    <img class='img-responsive' src='admin_area/img_productos/$pro_img1'>
                    
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='detalle.php?pro_id=$pro_id'>

                            $pro_nom

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                        $ $pro_precio
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-secondary' href='detalle.php?pro_id=$pro_id'>

                            Ver más

                        </a>
                    
                        <a class='btn btn-primary' href='detalle.php?pro_id=$pro_id'>

                            <i class='fa fa-shopping-cart'></i> Añadir al carrito

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
        
        ";

    }
    
  
    
} 
/* Mostrar las categorías*/
function getProCats(){ 
    global $db;
    $get_pro_cats = "SELECT * FROM  productos_categorias";
    $run_pro_cats = mysqli_query($db, $get_pro_cats);
    while($row_pro_cats = mysqli_fetch_array($run_pro_cats)){
        $pro_id_cat = $row_pro_cats['pro_id_cat'];
         $pro_cat_titulo = $row_pro_cats['pro_cat_titulo'];
        
         echo "
         <li><a href='tienda.php?pro_cat=$pro_id_cat'> $pro_cat_titulo</a></li>
         
         ";
       }

}

function getCats(){
    
    global $db;
    
    $get_cats = "select * from categorias";
    
    $run_cats = mysqli_query($db,$get_cats);
    
    while($row_cats=mysqli_fetch_array($run_cats)){
        
        $cat_id = $row_cats['cat_id'];
        
        $cat_titulo = $row_cats['cat_titulo'];
        
        echo "
        
            <li>
            
                <a href='tienda.php?cat=$cat_id'> $cat_titulo </a>
            
            </li>
        
        ";
        
    }
    
}
    

?>