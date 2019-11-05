
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <?php
    if(empty($c1)){
        $c1="class='nav-item'";
    }else{
        $c1="class='nav-item active'";
    }
    if(empty($c2)){
        $c2="class='nav-item'";
    }else{
        $c2="class='nav-item active'";
    }
    if(empty($c3)){
        $c3="class='nav-item'";
    }else{
        $c3="class='nav-item active'";
    }
    if(empty($c4)){
        $c4="class='nav-item'";
    }else{
        $c4="class='nav-item active'";
    }
    if(empty($c5)){
        $c5="class='nav-item'";
    }else{
        $c5="class='nav-item active'";
    }
    if(empty($c6)){
        $c6="class='nav-item'";
    }else{
        $c6="class='nav-item active'";
    }
    if(empty($c7)){
        $c7="class='nav-item'";
    }else{
        $c7="class='nav-item active'";
    }
    if(empty($c8)){
        $c8="class='nav-item'";
    }else{
        $c8="class='nav-item active'";
    }
    if(empty($c9)){
        $c9="class='nav-item'";
    }else{
        $c9="class='nav-item active'";
    }
?>
<div class="sidebar">
    <div class="scrollbar-light sidebar-wrapper ">
        <div class="user">
            <div class="photo">
                <?php
               $img=$_SESSION['avatar'];
                echo"<img src='../../img/avatas/$img"."' alt='Img Profile'>";
                ?>
            </div>
            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span>
                        <?php $nome= explode(" ",$_SESSION['nome']);echo$nome[0];?>
                        <span class="user-level"><?php echo$_SESSION['perfil'];?></span>
                        <span class="caret"></span>
                    </span>
                </a>
                <div class="clearfix"></div>

                <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                    <ul class="nav">
                        <li>
                            <a href="#profile">
                                <span class="link-collapse">Minha Página</span>
                            </a>
                        </li>
                        <li>
                            <a href="#edit">
                                <span class="link-collapse">Alterar senha</span>
                            </a>
                        </li>
                        <li>
                            <a href="#settings">
                                <span class="link-collapse">Preferencias</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="user">
        
            <div class="info">
                <a class="" data-toggle="collapse" href="#dizimoNAV" aria-expanded="true">
                    <span>
                        
                        <span class="user-level"><span class="la la-heart " style="color:#ff0000; font-size: 23px;"></span>&nbsp;&nbsp;Dízimo</span>
                        <span class="caret"></span>
                    </span>
                </a>
                <div class="clearfix"></div>

                <div class="collapse in" id="dizimoNAV" aria-expanded="true" style="">
                    <ul class="nav">
                        <li>
                            <a href="#profile">
                                <span class="link-collapse">Novo Dizimista</span>
                            </a>
                        </li>
                        <li>
                            <a href="#edit">
                                <span class="link-collapse">Nossos Dizimistas</span>
                            </a>
                        </li>
                        <li>
                            <a href="#settings">
                                <span class="link-collapse">Preferencias2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>