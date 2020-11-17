  <!-- Shop Section Begin -->
  <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                       
                       
                        <div class="sidebar__sizes">
                            <div class="section-title">
                                <h4>Categoría de productos</h4>
                            </div>
                            <div class="size__list">
                            <?php
                             getProCats();
                             ?>
                            </div>
                        </div>
                        <div class="sidebar__color">
                            <div class="section-title">
                                <h4>Categorías</h4>
                            </div>
                            <div class="size__list color__list">
                            <?php
                             getCats();
                             ?>
                            </div>
                        </div>
                    </div>
                </div>