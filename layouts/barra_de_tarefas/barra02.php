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
<div class="sidebar" style='<?php if(!empty($_SESSION['background'])){ echo"background-color:".$_SESSION['background'].";";} ?>' >
    <div class="scrollbar-light sidebar-wrapper ">
        <div class="user">
            <div class="photo">
                <?php
               $img=$_SESSION['avatar'];
                echo"<img src='../../assets/img/$img"."' alt='Img Profile'>";
                ?>
            </div>
            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span>
                        <?php $nome= explode(" ",$_SESSION['nome']);echo utf8_encode($nome[0]);?>
                        <span class="user-level">Administrador</span>
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
        <ul class="nav">
            <li <?php echo$c1;?> >
                <a href="../../select/alunos/">
                    <i class="la la-user-plus" style="color:#ff0000"></i>
                    <p>Alunos</p>                    
                </a>
            </li>
            
            <li <?php echo$c3;?>>
                <a href="../../select/cursos/">
                    <i class="la la-users"></i>
                    <p>Cursos</p>
                    <span class="badge badge-count"></span>
                </a>
            </li>
            <li <?php echo$c4;?>>
                <a href="../../select/turma/">
                    <i class="la la-cubes"></i>
                    <p>Turmas</p>
                    <span class="badge badge-count"></span>
                </a>
            </li>
            <li <?php echo$c5;?>>
                <a href="../../paginas/desenvolvedor/developer.php">
                    <i class="la la-cog"></i>
                    <p>Administrador</p>
                    <span class="badge badge-success"></span>
                </a>
            </li>
           
            
           
           
            
            
            
        </ul>
    </div>
</div>