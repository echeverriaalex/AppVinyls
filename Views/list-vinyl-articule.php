<?php
    require_once("nav.php");
?>

<main class="main">
    <div class="articulo">  
        <?php
            if(!empty($vinylsList)){
                foreach($vinylsList as $vinyl){        
        ?>       
                    <article class="article">
                        <div class="imagen"><img src="assets/img/queendisco.jpg" alt="" width="100%" height="100%"></div>
                            <div class="texto">
                                <div><h3> <?php echo $vinyl->getArtist(); ?> </h3></div>
                                <div><h5> <?php echo $vinyl->getDiskName(); ?> </h5></div>
                                <div><p>  <?php echo $vinyl->getCountryEdition(); ?> </p></div>
                            
                                <div class="btn"> 
                                <button onclick="myFunction()" class="button">Eliminar</button>
                                <a href="modificar-discos.html"  class="button">Modificar</a>
                            </div>
                        </div>             
                    </article>        
        <?php
                }
            }
        ?>
    </div>         
</main>    