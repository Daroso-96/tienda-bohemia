<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <h4>Bohemia Botiquite</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    cilisis.</p>
                    <div class="footer__payment">
                        <a href="#"><img src="img/payment/payment-1.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-2.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-3.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-4.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-5.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Top de categorías</h6>
                    <ul>
                       
                        <?php
                          $get_pro_cats = "SELECT * FROM productos_categorias";
                          $run_pro_cats = mysqli_query($con,$get_pro_cats);
                          while($row_pro_cats = mysqli_fetch_array($run_pro_cats)){
                            $pro_id_cat = $row_pro_cats['pro_id_cat'];
                             $pro_cat_titulo = $row_pro_cats['pro_cat_titulo'];
                             
                             echo "
                             <li> <a href= 'tienda.php?pro_cat$pro_id_cat'</a>
                             $pro_cat_titulo
                             </li>
                             
                             ";
                           }
                           
                       ?>    
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>Account</h6>
                    <ul>
                        <li><a href="#">Mi cuenta</a></li>
                        <li><a href="carrito.php">Carrito de compras</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Wishlist</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6>Siguenos en Instagram</h6>
                    
                    <div class="footer__social">
                      
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="footer__copyright__text">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Hecho con <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Bohemia botiquite</a></p>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->