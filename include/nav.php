<!--TOGGLE MOBILE-->

<div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger">
        <div></div>
    </div>
    <div class="menu">
        <div>
            <div>
                <ul> 
                    <?php 
                        if(isset($_SESSION)){
                            if ($_SESSION['typeuser']==1){
                                echo '<li><a href="include/admin.php">admin</a></li>';
                            }
                    ?>
                    <li><p><?php echo $_SESSION['username']; ?></p></li>
                    <li><p><?php echo "est ".$_SESSION['typeuser'];?></li>
                        
                    
                    <Li><a href="deconexion.php">Deconexion</a></Li>
                    <?php }else{
                        echo  '<Li><a href="connexion.php">Connexion</a></Li>';
                    }
                    ?>
                    <Li><a href="catalogue.php">Films</a></Li>
                        <div class="liens-couleurs">

                    <li>
                        <div class="style_axel"><a href="<?php echo $actuel; ?>?style=../css/index.css"></a>
                            <div>
                    </li>
                    <li>
                        <div class="style_pol"><a href="<?php echo $actuel; ?>?style=../pol/index2.css"></a></div>
                    </li>
                    <li>
                        <div class="style_steven"><a href="<?php echo $actuel; ?>?style=../steven/index3.css"></a></div>
                    </li>
                    <li>
                        <div class="style_ilayda"><a href="<?php echo $actuel; ?>?style=../axel/index4.css"></a></div>
                    </li>
                    </div>



                    <form action="">
                        <input type="text" placeholder="" name="search">
                        <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
                    </form>

                </ul>
            </div>
        </div>
    </div>

</div>


<!--TITRE-->

<div class="title-dada">
    <h1> <a href="index.php"> ALLO SIMPLON</a></h1>
</div>


<!--NAV BAR-->

<div class="nav-dada">
    <div class="logo-dada">
        <h1><a class="lien-home" href="index.php">ALLO SIMPLON</a> </h1>
    </div>
    <div class="menu-nav">
        <form class="search-bar" action="">
            <input type="text" placeholder="" name="search">
            <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <div class="menu-dada">
            <ul>    
            <?php 
                    if(isset($_SESSION['typeuser'])){
                            if ($_SESSION['typeuser']==1){
                                ?>
                                <li><a href="include/admin.php">admin</a></li>
                                <li><p><?php echo $_SESSION['username']; ?></p></li>
                                
                                <li><a href="traitement/deconexion.php">Deconexion</a></li>
                            <?php
                            }else{ ?>
                                <li><p><?php echo $_SESSION['username']; ?></p></li>
                                <li><p><?php echo 'est '.$_SESSION['typeuser'];?></li>
                                <li><a href="traitement/deconexion.php">Deconexion</a></li>
                            <?php
                            }
                            ?>
                    <?php }else{ ?>
                                <li><a href="connexion.php">Connexion</a></li>
                    <?php
                    }
                    ?>
                <li>
                    <div class="style_axel"><a href="<?php echo $actuel; ?>?style=axel/index4.css"></a></div>
                        
                </li>
                <li>
                    <div class="style_pol"><a href="<?php echo $actuel; ?>?style=pol/index2.css"></a></div>
                </li>
                <li>
                    <div class="style_steven"><a href="<?php echo $actuel; ?>?style=steven/index3.css"></a></div>
                </li>
                <li>
                    <div class="style_ilayda"><a href="<?php echo $actuel; ?>?style=index.css"></a></div>
                </li>
                <li><a href="catalogue.php">Films</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="vide"></div>