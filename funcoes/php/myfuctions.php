<?php

class myfunctions {
    
public function remover_caracter($string) {
    $string = preg_replace("/[áàâãä]/", "a", $string);
    $string = preg_replace("/[ÁÀÂÃÄ]/", "A", $string);
    $string = preg_replace("/[éèê]/", "e", $string);
    $string = preg_replace("/[ÉÈÊ]/", "E", $string);
    $string = preg_replace("/[íì]/", "i", $string);
    $string = preg_replace("/[ÍÌ]/", "I", $string);
    $string = preg_replace("/[óòôõö]/", "o", $string);
    $string = preg_replace("/[ÓÒÔÕÖ]/", "O", $string);
    $string = preg_replace("/[úùü]/", "u", $string);
    $string = preg_replace("/[ÚÙÜ]/", "U", $string);
    $string = preg_replace("/ç/", "c", $string);
    $string = preg_replace("/Ç/", "C", $string);
    $string = preg_replace("/[][><}{)(:;,!?*%~^`@]#/", "", $string);
    $string = preg_replace("/ /", "_", $string);
    return $string;
}

    public function getEndereco($cep) {
        $cep = preg_replace("/[^0-9]/", "", $cep);
        $url = "http://viacep.com.br/ws/$cep/xml/";
        $xml = simplexml_load_file($url);
        return $xml;
    }

    public function insertINPUT_CHECKBOX($name, $id, $label, $tam, $input, $inputTYPE = '', $inputNAME = '', $inputPLACEHOLDER = '', $inputID = '') {
        echo"<div class='col-lg-" . $tam . "'><div class='form-check'>
            <label class='form-check-label'>
                <input name='" . $name . "' id='" . $id . "' class='form-check-input' type='checkbox'>
                <span class='form-check-sign'>$label</span>
                ";
        if ($input == 1) {
            echo"<input type='" . $inputTYPE . "' class='form-control' name='" . $inputNAME . "' id='" . $inputID . "' placeholder='" . $inputID . "'>";
        }


        echo"<div class='validation' id='valida_" . $id . "'></div></label>
        </div></div>";
    }

    public function decriptografar($texto) {
        $palavras = explode('|', $texto);
        $texto2 = '';
        foreach ($palavras as $p) {
            $newWord = '';
            $num_caracter = strlen($p);
            for ($i = 1; $i <= $num_caracter; $i++) {
                $k = $p{$num_caracter - $i};
                $x = $this->segredo(($k));
                $newWord = $newWord . $x;
            }
            $texto2 = $newWord . ' ' . $texto2;
          
        }
        return$texto2;
    }

    public function criptografar($texto) {
        $palavras = explode(' ', $texto);
        $texto2 = '';
        foreach ($palavras as $p) {
            $newWord = '';
            $num_caracter = strlen($p);
            for ($i = 1; $i <= $num_caracter; $i++) {
                $k = ($p{$num_caracter - $i});
                $x = $this->segredo($k);
                $newWord = $newWord . $x;
            }

            $texto2 = $newWord . '|' . $texto2;
        }
        return$texto2;
    }

    private function segredo($c) {
        switch ($c) {
            case 'a':
                $x = '@';
                break;
            case 'b':
                $x = 'x';
                break;
            case 'c':
                $x = ')';
                break;
            case 'd':
                $x = ',';
                break;
            case 'e':
                $x = '!';
                break;
            case 'f':
                $x = '4';
                break;
            case 'g':
                $x = '0';
                break;
            case 'h':
                $x = 'z';
                break;
            case 'i':
                $x = '(';
                break;
            case 'j':
                $x = '5';
                break;
            case 'l':
                $x = ':';
                break;
            case 'm':
                $x = ' ';
                break;
            case 'n':
                $x = '-';
                break;
            case 'o':
                $x = ']';
                break;
            case 'p':
                $x = '6';
                break;
            case 'q':
                $x = '%';
                break;
            case 'r':
                $x = '.';
                break;
            case 's':
                $x = '7';
                break;
            case 't':
                $x = 'y';
                break;
            case 'u':
                $x = 'v';
                break;
            case 'v':
                $x = 'u';
                break;
            case 'x':
                $x = 'b';
                break;
            case 'y':
                $x = 't';
                break;
            case 'z':
                $x = 'h';
                break;
            case 'k':
                $x = 'w';
                break;
            case 'w':
                $x = 'k';
                break;
         











            case '0':
                $x = 'g';
                break;
            case '1':
                $x = '2';
                break;
            case '2':
                $x = '1';
                break;
            case '3':
                $x = '8';
                break;
            case '4':
                $x = 'f';
                break;
            case '5':
                $x = 'j';
                break;
            case '6':
                $x = 'p';
                break;
            case '7':
                $x = 's';
                break;
            case '8':
                $x = '3';
                break;
            case '9':
                $x = '*';
                break;
            case '*':
                $x = '9';
                break;
            case '@':
                $x = 'a';
                break;
            case '#':
                $x = ';';
                break;
            case '%':
                $x = 'q';
                break;

            case '!':
                $x = 'e';
                break;
            case '.':
                $x = 'r';
                break;
            case ',':
                $x = 'd';
                break;
            case ';':
                $x = '#';
                break;
            case ')':
                $x = 'c';
                break;
            case '(':
                $x = 'i';
                break;
            case '-':
                $x = 'n';
                break;

            case ']':
                $x = 'o';
                break;
            case '{':
                $x = '}';
                break;
            case '}':
                $x = '{';
                break;
            case '&':
                $x = '_';
                break;
            case '_':
                $x = '&';
                break;
            case ' ':
                $x = 'm';
                break;
            case ':':
                $x = 'l';
                break;
            case '<':
                $x = '/';
                break;
            case '/':
                $x = '<';
                break;
            case '>':
                $x = 'i';
                break;
            default :
                $x = $c;
        }
        return$x;
    }
    
    private function validaInteiro($inteiro){
        $verdade = true;
        if(($inteiro*1)!=$inteiro){
            $verdade=false;
        }
        if(!is_int($resposta) && $verdade=true){
            $verdade = false;
        }
        return $verdade;
    }

    public function erros($tipo, $codigo = 0, $mensagem = 0, $detalhes = 0) {
        if ($tipo == 1) {
            if ($codigo == 6) {

                header('location:../erros/login/erros.php');
            }
        }
    }

    public function insertSelect2($option, $n1, $n2, $tam, $id, $name, $label) {
        echo"<div class='col-lg-" . $tam . "'><div class='form-group'>"
        . "<label>$label</label>"
        . "<select name='" . $name . "' id='" . $id . "' class='form-control'>";
        for ($i = $n1; $i < $n2; $i++) {
            echo"<option value=" . $i . ">$option[$i]</option>";
        }
        echo"</select><div class='validation' id='valida_" . $id . "'></div></div></div>";
    }

    public function logout() {
        if (!empty($_SESSION['id'])) {
            $conection = $this->conecta();
            $sql = "update usuarios set online = '0' where(id='" . $_SESSION['id'] . "');";
            mysqli_query($conection, $sql);
            unset($_SESSION['id']);
            unset($_SESSION['nome']);
            unset($_SESSION['sexo']);
            unset($_SESSION['login']);
            unset($_SESSION['avatar']);
            unset($_SESSION['perfil']);
            unset($_SESSION['nivel']);
            
        }
    
    }

    public function redirecionar_pagina($url) {
        echo"<script>"
        . "$(document).ready(function(){"
        . "window.location.href='" . $url . "';"
        . "});</script>";
    }
    public function insertDATALIST($sql, $value, $option, $label, $name, $id, $tam) {
        echo"<div class=' col-lg-" . $tam . "'><div class='form-group'>
                <label >$label</label>
                    <input name='" . $name . "' list='list_" . $id . "' id='" . $id . "' type='text' class='form-control'/>
                       <datalist id='list_" . $id . "'>
                <select  >";
        

        $link = $this->conecta();
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_row($result)) {
            echo"<option data-value='" . $row[$value] . "' value='" . ($row[$option]) . "'>";
        }
        echo"   </select><div class='validation' id='valida_" . $id . "'></div>
        </div></div>";
    }

    public function insereSELECT_1($sql, $value, $option, $label, $name, $id, $tam) {
        echo"<div class=' col-" . $tam . "'><div class='form-group'>
                <label >$label</label>
                <select class='custom-select' name='" . $name . "' id='" . $id . "' >"
        . "<option value='0'>Selecione</value>";

        $link = $this->conecta();
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_row($result)) {
            echo"<option value='" . $row[$value] . "'>" . utf8_encode($row[$option]) . "</option>";
        }
        echo"   </select><div class='validation' id='valida_" . $id . "'></div>
        </div></div>";
    }
    
    public function mensagens_erro($r){
        $erro = explode('.', $r);
        $r = $erro[0];
        $t = count($erro);
        if ($t > 1) {
            $position = $erro[1];
            
        } else {
            $position = 0;
        }
        if(!empty($erro[2])){
            $sql=$erro[2];
        }else{
            $sql='';
        }
        if(!empty($erro[3])){
            $sqlDetalhes='<br><b>Detalhes: #</b>'. str_replace("'", " ", $erro[3]) ;
        }else{
            $sqlDetalhes='';
        }

        switch ($r) {

            case 0://Não Existe
                $mensagem = "&nbsp<b>OPS!</b> Impossivel prosseguir!<br><small>Detalhes:A variavel $position não existe.</small>";
                $state = "danger";
                $icon="fa fa-band";
                break;
            case 1://Campos não preenchidos
                $mensagem = "&nbsp<b>OPS!</b> Por favor preencha todos os campos!<br><small>Detalhes:O campo $position não possui valor.</small>";
                $state = "warning";
                $icon="fa fa-band";
                break;
            case 2://Campos com dados incopativeis ao tipo de variavel
                $mensagem = "&nbsp<b>OPS!</b> Por verifique se todos os campos foram preenchidos corretamente!<br><small>Detalhes:O campo $position não equivale ao tipo esperado.</small>";
                $state = "warning";
                $icon="fa fa-band";
                break;
            case 3://Inseriu numero '0'
                $mensagem = "&nbsp<b>OPS!</b> Por favor insiera um valor maior que <b>ZERO</b> no campo $position!<br><small>Detalhes:O campo $position não aceita valores menor que ZERO.</small>";
                $state = "warning";
                $icon="fa fa-band";
                break;
            case 4://Erro no mysql
                $mensagem = "&nbsp<b>Erro Crítico!</b> Impossivel conectar com o banco de dados!<br><small>Detalhes:Ocorreu um erro ao inserir os dados por favor verifique o SQL.<br>Código:$sql $sqlDetalhes</small>";
                $state = "danger";
                $icon="fa fa-exclamation-triangle";
                $time='10000';
                break;
            case 5://registro salvo
                $mensagem = "&nbsp<b>OK!</b> Registro salvo com sucesso!";
                $state = "success";
                $icon="fa fa-check";
                break;
            case 13:
                $mensagem = "&nbsp<b>Erro Crítico!</b> Erro ao salvar o arquivo.";
                $state = "danger";
                $icon="fa fa-band";
                
                break;
            case 14:
                $mensagem = "&nbsp<b>OPS!</b> Você poderá enviar apenas arquivos '*.jpg;*.jpeg;*.png'<br/>";
                $state = "warning";
                $icon="fa fa-band";
                break;
            case 15:
                $mensagem = "&nbsp<b>OPS!</b> Você não enviou nenhum arquivo.<br>";
                $state = "warning";
                $icon="fa fa-band";
                break;
            case 16:
                $state = "success";
                $mensagem = "&nbsp<b>OK!</b> Postagem realizada com sucesso!";
                $icon="fa fa-check";

                break;
            case 18://registro excluido
                $mensagem = "&nbsp<b>OK!</b> Registro excluido com sucesso!";
                $state = "success";
                $icon = 'fa fa-trash';
                break;
            case 19://registro atualizado
                $mensagem = "&nbsp<b>OK!</b> Registro atualizado com sucesso!";
                $state = "primary";
                $icon = 'fas fa-sync-alt';
                break;
            case 20://registro não atualizado
                $mensagem = "&nbsp<b>OPS!</b>  Nenhum dado foi alterado.";
                $state = "info";
                $icon = 'fas fa-exclamation-circle';
                break;
            case 22://Venda Cancelada com sucesso
                $mensagem = "<b>OK!</b> Venda cancelada com sucesso!";
                $state = "success";
                $icon = 'fa fa-ban';
                break;
            default:
                $mensagem = "Erro inesperado do sistema, verifique a função";
                $state = "danger";
                $icon = 'fa fa-close';
        }
        
        $resposta = [ 
          'mensagen'  =>$mensagem,
            'status'=>$state,
            'icone'=>$icon
        ];
        return $resposta;
    }

    public function notificacao1($r, $men = 0) {


        $erro = explode('.', $r);
        $r = $erro[0];
        $t = count($erro);
        if ($t > 1) {
            $position = $erro[1];
            
        } else {
            $position = 0;
        }
        if(!empty($erro[2])){
            $sql=$erro[2];
        }else{
            $sql='';
        }
        if(!empty($erro[3])){
            $sqlDetalhes='<br><b>Detalhes: #</b>'. str_replace("'", " ", $erro[3]) ;
        }else{
            $sqlDetalhes='';
        }

        switch ($r) {

            case 0://Não Existe
                $mensagem = "&nbsp<b>OPS!</b> Impossivel prosseguir!<br><small>Detalhes:A variavel $position não existe.</small>";
                $state = "danger";
                break;
            case 1://Campos não preenchidos
                $mensagem = "&nbsp<b>OPS!</b> Por favor preencha todos os campos!<br><small>Detalhes:O campo $position não possui valor.</small>";
                $state = "warning";
                break;
            case 2://Campos com dados incopativeis ao tipo de variavel
                $mensagem = "&nbsp<b>OPS!</b> Por verifique se todos os campos foram preenchidos corretamente!<br><small>Detalhes:O campo $position não equivale ao tipo esperado.</small>";
                $state = "warning";
                break;
            case 3://Inseriu numero '0'
                $mensagem = "&nbsp<b>OPS!</b> Por favor insiera um valor maior que <b>ZERO</b> no campo $position!<br><small>Detalhes:O campo $position não aceita valores menor que ZERO.</small>";
                $state = "warning";
                break;
            case 4://Erro no mysql
                $mensagem = "&nbsp<b>Erro Crítico!</b> Impossivel conectar com o banco de dados!<br><small>Detalhes:Ocorreu um erro ao inserir os dados por favor verifique o SQL.<br>Código:$sql $sqlDetalhes</small>";
                $state = "danger";
                $time='10000';
                break;
            case 5://registro salvo
                $mensagem = "&nbsp<b>OK!</b> Registro salvo com sucesso!";
                $state = "success";
                break;
            case 13:
                $mensagem = "&nbsp<b>Erro Crítico!</b> Erro ao salvar o arquivo.";
                $state = "danger";
                break;
            case 14:
                $mensagem = "&nbsp<b>OPS!</b> Você poderá enviar apenas arquivos '*.jpg;*.jpeg;*.png'<br/>";
                $state = "warning";
                break;
            case 15:
                $mensagem = "&nbsp<b>OPS!</b> Você não enviou nenhum arquivo.<br>";
                $state = "warning";
                break;
            case 16:
                $state = "success";
                $mensagem = "&nbsp<b>OK!</b> Postagem realizada com sucesso!";

                break;
            case 18://registro excluido
                $mensagem = "&nbsp<b>OK!</b> Registro excluido com sucesso!";
                $state = "success";
                $icon = 'fa fa-trash';
                break;
            case 19://registro atualizado
                $mensagem = "&nbsp<b>OK!</b> Registro atualizado com sucesso!";
                $state = "primary";
                $icon = 'fas fa-sync-alt';
                break;
            case 20://registro não atualizado
                $mensagem = "&nbsp<b>OPS!</b>  Nenhum dado foi alterado.";
                $state = "info";
                $icon = 'fas fa-exclamation-circle';
                break;
            case 22://Venda Cancelada com sucesso
                $mensagem = "<b>OK!</b> Venda cancelada com sucesso!";
                $state = "success";
                $icon = 'fa fa-ban';
                break;
        }
        if (empty($icon)) {
            $icon = 'fa fa-bell';
        }
        if ($men != 0) {
            $mensagem = $men;
        }
        if(empty($time)){
            $time=1000;
        }
        $M = "<script>
            $('document').ready(function(){
                var placementFrom = 'top';
		var placementAlign = 'right';
		var state ='" . $state . "';        
		var content = {};

		content.message = '" . $mensagem . "';
		content.title = '';
		
		content.icon = ' " . $icon . "';
		
		
		content.url = '';
		content.target = '_blank';
               
		$.notify(content,{
			type: state,
			placement: {
				from: placementFrom,
				align: placementAlign
			},
                        offset: 20,
                        spacing: 10,
                        allow_dismiss: true,
                        z_index: 1031,
                        delay: 7000,
			time: $time,
                        showProgressbar: false,
                        
                        animate: {
                                enter: 'animated fadeInDown',
                                exit: 'animated fadeOutUp'
                        },
                        
                        
                        
                });
		});</script>";



        return $M;
    }

    public function notificacao2($tipo, $mensagem, $tempo = 1000) {



        $M = "<script>
            $('document').ready(function(){
                var placementFrom = 'top';
		var placementAlign = 'right';
		var state ='".$tipo."';        
		var content = {};

		content.message = '" . $mensagem . "';
		content.title = '';
		
			content.icon = 'fas fa-bell';	
		
		
		//content.url = 'processamento.php';
		content.target = '_blank';
               
		$.notify(content,{
			type: state,
			placement: {
				from: placementFrom,
				align: placementAlign
			},
                        offset: 20,
                        spacing: 10,
                        allow_dismiss: true,
                        z_index: 1031,
                        delay: 7000,
			time: $tempo,
                        showProgressbar: false,
                        
                        animate: {
                                enter: 'animated fadeInDown',
                                exit: 'animated fadeOutUp'
                        },
                        
                        
                        
                });
		});</script>";

        return $M;
    }

    public function insereINPUT($label, $type, $id, $name, $placeholder, $comentario, $tam, $id_label) {
        if (empty($placeholder)) {
            $placeholder = "";
        }
        if (empty($id_label)) {
            $id_label = "";
        }
        echo"<div class='col-lg-" . $tam . "'><div class='form-group'>
	<label id='" . $id_label . "'>$label</label>
	<input type='" . $type . "' class='form-control' name='" . $name . "' id='" . $id . "' placeholder='" . $placeholder . "'>"
        . "<div class='validation' id='valida_" . $id . "'></div>";

        if (!empty($comentario)) {
            echo"<small class='form-text text-muted'>$comentario.</small>";
        }
        echo"</div></div>";
    }

    public function construtor() {
        session_start();
        if (!isset($_SESSION['nome'])) {
            header("location:../../index.php?r=9");
        }
        
        date_default_timezone_set('America/Sao_paulo');
    }

    public function construtor2() {
        session_start();
        date_default_timezone_set('America/Sao_paulo');
    }

    public function login($user, $senha, $link_destino) {

        
        $sql = "SELECT * FROM administrar WHERE (login ='" . $user . "' AND senha = '" . $senha . "')" ;
        $link = $this->conecta();

        $res = mysqli_query($link, $sql);
        $q = mysqli_affected_rows($link);
        if ($q > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                if (empty($row['foto'])) {
                    $img = 'default-avatar.png';
                } else {
                    $img = $row['foto'];
                }
                session_start();
                $_SESSION['nome'] = $row['nome_usuario'];                
                $_SESSION['login'] = $row['login'];
                $_SESSION['avatar'] = $img;
                $_SESSION['id'] = $row['id_usuario'];                
            }

            

            $sql = "update administrar set online='1' where(id='" . $_SESSION['id'] . "')";
            mysqli_query($link, $sql);
            $q = mysqli_affected_rows($link);

            echo"<script>window.location.href = '" . $link_destino . "';</script>";
            
            $_SESSION['r']=7;
        } else {

            ECHO "<font color='red'><b>SENHA</b> ou <b>LOGIN</B> incorreto!</font><br><br>";
        }
    }

    public function cadastrar1($campos_bd, $valores, $tabela) {

        //$campos_bd=['ext','teste'...]
        //$valores=[];$valores[]=['type'=>'teste','value'=>'322'];
        //$tabela='produtos'_Nome da Tabela que será inserido os dados
        //$link_return="./cadastro.php"_Lugar onde será redirencionado após executar função
        $i = 1;
        $values = "";
        foreach ($valores as $valor) {
            extract($valor);
            if ($type == 0) {//SE NÚMERO COMUM VALIDE
                if (isset($value)) {
                    if (is_numeric($value)) {
                        if ($i == 1) {
                            $values = "'" . $value . "'";
                        } else {
                            $values = $values . ",'" . $value . "'";
                        }
                    } else {

                        return $r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    return $r = "0.$i";
                    exit();
                }
//==============================================================================                
            } ELSEIF ($type == 1) {//SE NUMERO POSITIVO INTEIRO FAÇA
                if (!empty($value)) {
                    if (is_numeric($value)) {
                        if ($value > 0) {
                            if ($i == 1) {
                                $values = "'" . $value . "'";
                            } else {
                                $values = $values . ",'" . $value . "'";
                            }
                        } else {
                            return$r = "3.$i";
                            exit();
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return$r = "1.$i";
                        exit();
                    } else {
                        return$r = "0.$i";
                        exit();
                    }
                }
//==============================================================================
            } ELSEIF ($type == 2) {//SE NUMERO POSITIVO REAL FAÇA 
                if (!empty($value)) {
                    if (is_float($value)) {
                        if ($value > 0) {
                            if ($i == 1) {
                                $values = "'" . $value . "'";
                            } else {
                                $values = $values . ",'" . $value . "'";
                            }
                        } else {
                            return$r = "3.$i";
                            exit();
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return$r = "1.$i";
                        exit();
                    } else {
                        $r = "0.$i";
                        exit();
                    }
                }
//==============================================================================                
            } elseif ($type == 3) {//SE NUMERO POSITIVO OU NEGATIVO INTEIRO
                if (!empty($value)) {
                    if (is_integer($value)) {
                        if ($i == 1) {
                            $values = "'" . $value . "'";
                        } else {
                            $values = $values . ",'" . $value . "'";
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return$r = "1.$i";
                        exit();
                    } else {
                        return$r = "0.$i";
                        exit();
                    }
                }
//==============================================================================                
            } ELSEIF ($type == 4) {//SE NUMERO POSITIVO OU NEGATIVO REAL
                if (!empty($value)) {
                    if (is_float($value)) {
                        if ($i == 1) {
                            $values = "'" . $value . "'";
                        } else {
                            $values = $values . ",'" . $value . "'";
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return$r = "1.$i";
                        exit();
                    } else {
                        return$r = "0.$i";
                        exit();
                    }
                }
//==============================================================================
            } ELSEIF ($type == 5) {//SE EMAIL FAÇA
                if (!empty($value)) {
                    if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        if ($i == 1) {
                            $values = "'" . $value . "'";
                        } else {
                            $values = $values . ",'" . $value . "'";
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return$r = "1.$i";
                        exit();
                    } else {
                        return$r = "0.$i";
                        exit();
                    }
                }
//==============================================================================                
            } ELSEIF ($type == 6) {//SE NOME PROPRIO FAÇA
                if (!empty($value)) {
                    if (is_string($value)) {
                        if ($i == 1) {
                            $values = "'" . ucwords(strtolower(trim(utf8_decode($value)))) . "'";
                        } else {
                            $values = $values . ",'" . ucwords(strtolower(trim(utf8_decode($value)))) . "'";
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return$r = "1.$i";

                        exit();
                    } else {
                        return$r = "0.$i";
                        exit();
                    }
                }
//==============================================================================
            } ELSEIF ($type == 7) {//SE STRING SEM NUMERO FAÇA
                if (!empty($value)) {
                    if (is_string($value)) {
                        if ($i == 1) {
                            $values = "'" . ucfirst(strtolower(trim(utf8_decode($value)))) . "'";
                        } else {
                            $values = ucfirst(strtolower(trim(utf8_decode($value)))) . ",'" . $value . "'";
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return$r = "1.$i";
                        exit();
                    } else {

                        return$r = "0.$i";
                        exit();
                    }
                }
//================================================================================
            } ELSEIF ($type == 8) {//SE STRING COM NUMERO FAÇA
                if (!empty($value)) {
                    if (!is_numeric($value)) {
                        if ($i == 1) {
                            $values = "'" . ucfirst(strtolower(trim(utf8_decode($value)))) . "'";
                        } else {
                            $values = $values . ",'" . ucfirst(strtolower(trim(utf8_decode($value)))) . "'";
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return $r = "1.$i";
                        exit();
                    } else {
                        return$r = "0.$i";
                        exit();
                    }
                }
//=================================================================================
            } ELSEIF ($type == 9) {//SE SENHA FAÇA
                if ($i == 1) {
                    $values = md5(trim($value));
                } else {
                    $values = $values . ",'" . md5(trim($value)) . "'";
                }
//==============================================================================
            } ELSEIF ($type == 10) {//SE STRNG (MAIUSCULA) FAÇA
                if (!empty($value)) {
                    if (is_string($value)) {
                        if ($i == 1) {
                            $values = "'" . strtoupper(trim(utf8_decode($value))) . "'";
                        } else {
                            $values = $values . ",'" . strtoupper(trim(utf8_decode($value))) . "'";
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return$r = "1.$i";
                        exit();
                    } else {
                        return$r = "0.$i";
                        exit();
                    }
                }
//==============================================================================
            } ELSEif ($type == 11) {
                if ($i == 1) {
                            $values = "'" . $value . "'";
                        } else {
                            $values = $values . ",'" . $value . "'";
                        }
            }
            $i++;
        }
        $i = 0;
        $campos = "";
        foreach ($campos_bd as $c) {
            if ($i == 0) {
                $campos = $c;
            } else {
                $campos = $campos . ",$c";
            }
            $i++;
        }
        $sql = "insert into $tabela($campos) values($values)";
        //echo$sql."<br><br>";

        $conection = $this->conecta();
        mysqli_query($conection, $sql);
        $q = mysqli_affected_rows($conection);
        $sqlERRO = mysqli_errno($conection);
        $erroDetalhes= mysqli_error($conection);
        if ($q > 0) {
            $id = mysqli_insert_id($conection);
            return$r = "5.$id";
            exit();
        } else {
                
            if ($sqlERRO == 0) {
                $erroDetalhes= mysqli_error($conection);
                $tipo = 'warning';
                $mensagem = 'Nenhum dado foi altera';
                echo$this->notificacao2($tipo, $mensagem);
                return $r = "20.$i.$sqlERRO.$erroDetalhes";
            } else {
                return$r = "4.$i.$sqlERRO.$erroDetalhes";         
                        
            }



//            return$r="4.$i";                        
//                        exit();
        }
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    public function atualizar1($campos_bd, $valores, $tabela, $condicao) {


        $i = 0;
        $values = "";
        foreach ($valores as $valor) {
            extract($valor);
            if ($type == 0) {//SE NÚMERO COMUM VALIDE
                if (isset($value)) {
                    if (is_numeric($value)) {
                        if ($i == 0) {
                            $values = $campos_bd[$i] . " = '" . $value . "'";
                        } else {
                            $values .= ", " . $campos_bd[$i] . " = '" . $value . "'";
                        }
                    } else {

                        return $r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    return $r = "0.$i";
                    exit();
                }
//==============================================================================                
            } ELSEIF ($type == 1) {//SE NUMERO POSITIVO INTEIRO FAÇA
                if (!empty($value)) {
                    if (is_numeric($value)) {
                        if ($value > 0) {
                            if ($i == 0) {
                                $values = $campos_bd[$i] . " = '" . $value . "'";
                            } else {
                                $values .= ", " . $campos_bd[$i] . " = '" . $value . "'";
                            }
                        } else {
                            return$r = "3.$i";
                            exit();
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return$r = "1.$i";
                        exit();
                    } else {
                        return$r = "0.$i";
                        exit();
                    }
                }
//==============================================================================
            } ELSEIF ($type == 2) {//SE NUMERO POSITIVO REAL FAÇA 
                if (!empty($value)) {
                    if (is_float($value)) {
                        if ($value > 0) {
                            if ($i == 0) {
                                $values = $campos_bd[$i] . " = '" . $value . "'";
                            } else {
                                $values .= ", " . $campos_bd[$i] . " = '" . $value . "'";
                            }
                        } else {
                            return$r = "3.$i";
                            exit();
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return$r = "1.$i";
                        exit();
                    } else {
                        $r = "0.$i";
                        exit();
                    }
                }
//==============================================================================                
            } elseif ($type == 3) {//SE NUMERO POSITIVO OU NEGATIVO INTEIRO
                if (!empty($value)) {
                    if (is_integer($value)) {
                        if ($i == 0) {
                            $values = $campos_bd[$i] . " = '" . $value . "'";
                        } else {
                            $values .= ", " . $campos_bd[$i] . " = '" . $value . "'";
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return$r = "1.$i";
                        exit();
                    } else {
                        return$r = "0.$i";
                        exit();
                    }
                }
//==============================================================================                
            } ELSEIF ($type == 4) {//SE NUMERO POSITIVO OU NEGATIVO REAL
                if (!empty($value)) {
                    if (is_float($value)) {
                        if ($i == 0) {
                            $values = $campos_bd[$i] . " = '" . $value . "'";
                        } else {
                            $values .= ", " . $campos_bd[$i] . " = '" . $value . "'";
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return$r = "1.$i";
                        exit();
                    } else {
                        return$r = "0.$i";
                        exit();
                    }
                }
//==============================================================================
            } ELSEIF ($type == 5) {//SE EMAIL FAÇA
                if (!empty($value)) {
                    if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        if ($i == 0) {
                            $values = $campos_bd[$i] . " = '" . $value . "'";
                        } else {
                            $values .= ", " . $campos_bd[$i] . " = '" . $value . "'";
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return$r = "1.$i";
                        exit();
                    } else {
                        return$r = "0.$i";
                        exit();
                    }
                }
//==============================================================================                
            } ELSEIF ($type == 6) {//SE NOME PROPRIO FAÇA
                if (!empty($value)) {
                    if (is_string($value)) {
                        if ($i == 0) {
                            $values = $campos_bd[$i] . " = '" . utf8_decode($value) . "'";
                        } else {
                            $values .= ", " . $campos_bd[$i] . " = '" . utf8_decode($value) . "'";
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return$r = "1.$i";

                        exit();
                    } else {
                        return$r = "0.$i";
                        exit();
                    }
                }
//==============================================================================
            } ELSEIF ($type == 7) {//SE STRING SEM NUMERO FAÇA
                if (!empty($value)) {
                    if (is_string($value)) {
                        if ($i == 0) {
                            $values = $campos_bd[$i] . " = '" . utf8_decode($value) . "'";
                        } else {
                            $values .= ", " . $campos_bd[$i] . " = '" . utf8_decode($value) . "'";
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return$r = "1.$i";
                        exit();
                    } else {

                        return$r = "0.$i";
                        exit();
                    }
                }
//================================================================================
            } ELSEIF ($type == 8) {//SE STRING COM NUMERO FAÇA
                if (!empty($value)) {
                    if (!is_numeric($value)) {
                        if ($i == 0) {
                            $values = $campos_bd[$i] . " = '" . utf8_decode($value) . "'";
                        } else {
                            $values .= ", " . $campos_bd[$i] . " = '" . utf8_decode($value) . "'";
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return $r = "1.$i";
                        exit();
                    } else {
                        return$r = "0.$i";
                        exit();
                    }
                }
//=================================================================================
            } ELSEIF ($type == 9) {//SE SENHA FAÇA
                if ($i == 1) {
                    $values = md5(trim($value));
                } else {
                    $values = $values . ",'" . md5(trim($value)) . "'";
                }
//==============================================================================
            } ELSEIF ($type == 10) {//SE STRNG (MAIUSCULA) FAÇA
                if (!empty($value)) {
                    if (is_string($value)) {
                        if ($i == 0) {
                            $values = $campos_bd[$i] . " = '" . utf8_decode($value) . "'";
                        } else {
                            $values .= ", " . $campos_bd[$i] . " = '" . utf8_decode($value) . "'";
                        }
                    } else {
                        return$r = "2.$i";
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        return$r = "1.$i";
                        exit();
                    } else {
                        return$r = "0.$i";
                        exit();
                    }
                }
//==============================================================================
            } ELSEif ($type == 11) {
                if ($i == 0) {
                            $values = $campos_bd[$i] . " = '" . $value . "'";
                        } else {
                            $values .= ", " . $campos_bd[$i] . " = '" . $value . "'";
                        }
            }
            $i++;
        }
        if (!empty($condicao)) {
            $sql = "update $tabela set $values where  $condicao";
        } else {
            $sql = "update $tabela set $values";
        }

         //echo$sql."<br><br>";exit();

        $conection = $this->conecta();
        mysqli_query($conection, $sql);
        $sqlERRO = mysqli_errno($conection);
        $q = mysqli_affected_rows($conection);
        if ($q > 0) {
            $id = mysqli_insert_id($conection);
            return$r = "19.$id";
            exit();
        } else {
            if ($sqlERRO == 0) {
                $tipo = 'warning';
                $mensagem = 'Nenhum dado foi altera';
                //echo$this->notificacao2($tipo, $mensagem);
                return $r = "20.$i.$sqlERRO";
            } else {
                return$r = "4.$i.$sqlERRO";
                exit();
            }
        }
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function cadastrar($campos_bd, $valores, $tabela, $link_return) {

        //$campos_bd=['ext','teste'...]
        //$valores=[];$valores[]=['type'=>'teste','value'=>'322'];
        //$tabela='produtos'_Nome da Tabela que será inserido os dados
        //$link_return="./cadastro.php"_Lugar onde será redirencionado após executar função
        $i = 1;
        $values = "";
        foreach ($valores as $valor) {
            extract($valor);
            if ($type == 0) {//SE NÚMERO COMUM VALIDE
                if (isset($value)) {
                    if (is_numeric($value)) {
                        if ($i == 1) {
                            $values = "'" . $value . "'";
                        } else {
                            $values = $values . ",'" . $value . "'";
                        }
                    } else {
                        $erro = ['cod' => "2.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    $erro = ['cod' => "0.$i"];
                    header("location:" . $link_return . "?r=" . $erro['cod']);
                    exit();
                }
//==============================================================================                
            } ELSEIF ($type == 1) {//SE NUMERO POSITIVO INTEIRO FAÇA
                if (!empty($value)) {
                    if (is_numeric($value)) {
                        if ($value > 0) {
                            if ($i == 1) {
                                $values = "'" . $value . "'";
                            } else {
                                $values = $values . ",'" . $value . "'";
                            }
                        } else {
                            $erro = ['cod' => "3.$i"];
                            header("location:" . $link_return . "?r=" . $erro['cod']);
                            exit();
                        }
                    } else {
                        $erro = ['cod' => "2.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        $erro = ['cod' => "1.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    } else {
                        $erro = ['cod' => "0.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                }
//==============================================================================
            } ELSEIF ($type == 2) {//SE NUMERO POSITIVO REAL FAÇA 
                if (!empty($value)) {
                    if (is_float($value)) {
                        if ($value > 0) {
                            if ($i == 1) {
                                $values = "'" . $value . "'";
                            } else {
                                $values = $values . ",'" . $value . "'";
                            }
                        } else {
                            $erro = ['cod' => "3.$i"];
                            header("location:" . $link_return . "?r=" . $erro['cod']);
                            exit();
                        }
                    } else {
                        $erro = ['cod' => "2.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        $erro = ['cod' => "1.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    } else {
                        $erro = ['cod' => "0.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                }
//==============================================================================                
            } elseif ($type == 3) {//SE NUMERO POSITIVO OU NEGATIVO INTEIRO
                if (!empty($value)) {
                    if (is_integer($value)) {
                        if ($i == 1) {
                            $values = "'" . $value . "'";
                        } else {
                            $values = $values . ",'" . $value . "'";
                        }
                    } else {
                        $erro = ['cod' => "2.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        $erro = ['cod' => "1.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    } else {
                        $erro = ['cod' => "0.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                }
//==============================================================================                
            } ELSEIF ($type == 4) {//SE NUMERO POSITIVO OU NEGATIVO REAL
                if (!empty($value)) {
                    if (is_float($value)) {
                        if ($i == 1) {
                            $values = "'" . $value . "'";
                        } else {
                            $values = $values . ",'" . $value . "'";
                        }
                    } else {
                        $erro = ['cod' => "2.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        $erro = ['cod' => "1.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    } else {
                        $erro = ['cod' => "0.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                }
//==============================================================================
            } ELSEIF ($type == 5) {//SE EMAIL FAÇA
                if (!empty($value)) {
                    if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        if ($i == 1) {
                            $values = "'" . $value . "'";
                        } else {
                            $values = $values . ",'" . $value . "'";
                        }
                    } else {
                        $erro = ['cod' => "2.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        $erro = ['cod' => "1.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    } else {
                        $erro = ['cod' => "0.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                }
//==============================================================================                
            } ELSEIF ($type == 6) {//SE NOME PROPRIO FAÇA
                if (!empty($value)) {
                    if (is_string($value)) {
                        if ($i == 1) {
                            $values = "'" . ucwords(strtolower(trim($value))) . "'";
                        } else {
                            $values = $values . ",'" . ucwords(strtolower(trim($value))) . "'";
                        }
                    } else {
                        $erro = ['cod' => "2.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        $erro = ['cod' => "1.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    } else {
                        $erro = ['cod' => "0.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                }
//==============================================================================
            } ELSEIF ($type == 7) {//SE STRING SEM NUMERO FAÇA
                if (!empty($value)) {
                    if (is_string($value)) {
                        if ($i == 1) {
                            $values = "'" . ucfirst(strtolower(trim($value))) . "'";
                        } else {
                            $values = ucfirst(strtolower(trim($value))) . ",'" . $value . "'";
                        }
                    } else {
                        $erro = ['cod' => "2.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        $erro = ['cod' => "1.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    } else {
                        $erro = ['cod' => "0.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                }
//================================================================================
            } ELSEIF ($type == 8) {//SE STRING COM NUMERO FAÇA
                if (!empty($value)) {
                    if (!is_numeric($value)) {
                        if ($i == 1) {
                            $values = "'" . ucfirst(strtolower(trim($value))) . "'";
                        } else {
                            $values = $values . ",'" . ucfirst(strtolower(trim($value))) . "'";
                        }
                    } else {
                        $erro = ['cod' => "2.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        $erro = ['cod' => "1.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    } else {
                        $erro = ['cod' => "0.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                }
//=================================================================================
            } ELSEIF ($type == 9) {//SE SENHA FAÇA
                if ($i == 1) {
                    $values = md5(trim($value));
                } else {
                    $values = $values . ",'" . md5(trim($value)) . "'";
                }
//==============================================================================
            } ELSEIF ($type == 10) {//SE STRNG (MAIUSCULA) FAÇA
                if (!empty($value)) {
                    if (is_string($value)) {
                        if ($i == 1) {
                            $values = "'" . (strtoupper(trim($value))) . "'";
                        } else {
                            $values = $values . ",'" . (strtoupper(trim($value))) . "'";
                        }
                    } else {
                        $erro = ['cod' => "2.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                } else {//SE VAZIO FAÇA...
                    if (isset($value)) {
                        $erro = ['cod' => "1.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    } else {
                        $erro = ['cod' => "0.$i"];
                        header("location:" . $link_return . "?r=" . $erro['cod']);
                        exit();
                    }
                }
//==============================================================================
            } ELSEif ($type == 11) {
                
            }
            $i++;
        }
        $i = 0;
        $campos = "";
        foreach ($campos_bd as $c) {
            if ($i == 0) {
                $campos = $c;
            } else {
                $campos = $campos . ",$c";
            }
            $i++;
        }
        $sql = "insert into $tabela($campos) values($values)";
        //echo$sql;exit();

        $conection = $this->conecta();
        mysqli_query($conection, $sql);
        $q = mysqli_affected_rows($conection);
        if ($q > 0) {
            $id = mysqli_insert_id($conection);
            header("location:" . $link_return . "?r=5." . $id);
            exit();
        } else {


            $sqlERRO = mysqli_errno($conection);
            $r = "4.$i.$sqlERRO";
            $erro = ['cod' => "$r"];
            header("location:" . $link_return . "?r=" . $erro['cod']);
            exit();
        }
    }

    public function conecta() {

        $servidor = 'localhost';
        $user = 'root';
        $senha = '';
        $bd = 'escola';
        //$user = 'u295342508_cated';
        //$senha = 'bemvindo007';
        //$bd = 'u295342508_cated';
        $conexao = mysqli_connect($servidor, $user, $senha, $bd);
        if (empty($conexao)) {
            echo"<script>$(document).ready(function(){alert('Sistema fora de alcance!\n Por favor entre em contato com o suporte tecnico.');});</script>";
        }


        //echo$status = "conectado";
        return $conexao;
    }

    public function ajax_buscar($variaveis1, $resposta, $load, $page, $namefunction) {
        if (empty($load)) {
            $load = "carregando";
        }
        
        $variaveis2 = "";
       if(!empty($variaveis1) && $variaveis1!=null ){
           $i=0;
            foreach ($variaveis1 as $y) {
                if ($i == 0) {
                    $variaveis2 = $y . ":" . $y;
                    $variaveis3 = $y;
                } else {
                    $variaveis2 = $variaveis2 . "," . $y . ":" . $y;
                    $variaveis3 .= "," . $y;
                }
                $i++;
            }
       }else{
           $variaveis3='';
       }
        echo"<script>function $namefunction($variaveis3) {
               var page = '" . $page . "';
               $.ajax({
                   type: 'POST',
                   dataType:'html',
                   url:page,
                   beforeSend:function(){
                      $('#$load').show();
                   },";
                   if(!empty($variaveis1) && count($variaveis1)>0){echo"data:{" . $variaveis2 . "},\n";}
                   
                   echo"success:function(msg){
                  
                                            $('#$resposta').delay(2000);
                                            $('#$load').hide();
                   $('#$resposta').html(msg);
                       }
               });
           }</script>";
    }

    public function ajax_buscar2($variaveis1, $resposta, $resposta2,$load, $page, $namefunction,$tipoEnvio) {
        if (empty($resposta2)) {
            $resposta2 = "";
        }
        $i = 0;
        $t = count($variaveis1);
        $variaveis2 = "";
        foreach ($variaveis1 as $y) {
            if ($i == 0) {
                $variaveis2 = $y . ":" . $y;
                $variaveis3 = $y;
            } else {
                $variaveis2 = $variaveis2 . "," . $y . ":" . $y;
                $variaveis3 .= "," . $y;
            }
            $i++;
        }

        echo"<script>function $namefunction($variaveis3) {
               var page = '" . $page . "';
               $.ajax({
                   type: 'POST',
                   dataType:'$tipoEnvio',
                   cache:false,
                   url:page,
                   beforeSend:function(){
                      $('#$load').show();
                   },
                   data:{" . $variaveis2 . "},
                   success:function(msg){                   
                                           $resposta2
                           }
               });
           }</script>";
    }

    public function ajax_cadastrar($variaveis1, $resposta, $load, $page, $namefunction, $campos) {
        if (empty($load)) {
            $load = "carregando";
        }
        $i = 0;
        $t = count($variaveis1);
        $variaveis2 = "";
        foreach ($variaveis1 as $y) {
            if ($i == 0) {
                $variaveis2 = $y . ":" . $y;
                $variaveis3 = $y;
            } else {
                $variaveis2 = $variaveis2 . "," . $y . ":" . $y;
                $variaveis3 .= "," . $y;
            }
            $i++;
        }

        echo"<script>function $namefunction($variaveis3) {
               var page = '" . $page . "';
               $.ajax({
                   type: 'POST',
                   dataType:'html',
                   url:page,
                   beforeSend:function(){
                      $('#$load').show();
                   },
                   data:{" . $variaveis2 . "},
                   success:function(msg){
                  
                    $('#$resposta').delay(2000);
                    $('#$load').hide();
                    $('#$resposta').html(msg);";
        foreach ($campos as $c) {
            echo"$('#" . $c . "').val(null);";
        }
        echo"}
               });
           }</script>";
    }

    public function tiraReal($valor) {
        //$x= explode(".", $valor);
        //$t=ereg_replace("[^0-9]","" ,$x[0]).".".$x[1];
        $t = substr($valor, 3);
        return $t;
    }

    public function insertDescricao($tam, $label, $rows, $id, $name) {
        echo"<div class='col-lg-" . $tam . "'><div class='form-group'>
            <label>$label</label>
            <textarea class='form-control' name='" . $name . "' id='" . $id . "' rows='" . $rows . "'></textarea>
                               <div class='validation' id='valida_" . $id . "'></div>
	</div></div>";
    }

    public function diasdoMes($mes) {
        if ($mes == 1) {
            $r = 31;
        } elseif ($mes == 2) {
            $r = 28;
        } elseif ($mes == 3) {
            $r = 31;
        } elseif ($mes == 4) {
            $r = 30;
        } elseif ($mes == 5) {
            $r = 31;
        } elseif ($mes == 6) {
            $r = 30;
        } elseif ($mes == 7) {
            $r = 31;
        } elseif ($mes == 8) {
            $r = 31;
        } elseif ($mes == 9) {
            $r = 30;
        } elseif ($mes == 10) {
            $r = 31;
        } elseif ($mes == 11) {
            $r = 30;
        } elseif ($mes == 12) {
            $r = 31;
        }
        return$r;
    }

    public function nomeMês($mes) {
        $r = "#Erro!";
        if ($mes == 1) {
            $r = "Janeiro";
        } elseif ($mes == 2) {
            $r = "Fevereiro";
        } elseif ($mes == 3) {
            $r = "Março";
        } elseif ($mes == 4) {
            $r = "Abril";
        } elseif ($mes == 5) {
            $r = "Maio";
        } elseif ($mes == 6) {
            $r = "Junho";
        } elseif ($mes == 7) {
            $r = "Julho";
        } elseif ($mes == 8) {
            $r = "Agosto";
        } elseif ($mes == 9) {
            $r = "Setembro";
        } elseif ($mes == 10) {
            $r = "Outubro";
        } elseif ($mes == 11) {
            $r = "Novembro";
        } elseif ($mes == 12) {
            $r = "Dezembro";
        }
        return$r;
    }

    public function gmp_div_qr($n, $d) {
        $resto = $n % $d;
        $quociente = explode(".", ($x = $n / $d));
        return array($resto, $quociente[0]);
    }

    public function real($valor) {
        if ($valor < 0) {
            $valor = $valor * -1;
            $n = 1;
        } else {
            $n = 0;
        }
        $x = explode(".", $valor);
        if (strstr($valor, '.')) {
            if ($n == 0) {
                $prefixo = "R$ ";
            } else {
                $prefixo = "R$ -";
            }

            $sufixo = "";
            $x = explode(".", $valor);
            $y = strlen($x[1]);
            if ($y == 1) {
                $sufixo = "." . $x[1] . "0";
            }
        } else {

            if ($n == 0) {
                $prefixo = "R$ ";
            } else {
                $prefixo = "R$ -";
            }
            $sufixo = ".00";
        }
        $k = strlen($x[0]);
        $valor = $x[0];
        if ($k > 3) {
            $z = 1;
            $r = "";
            $c = $this->gmp_div_qr($k, 3);
            $p = $c[1];
            $e = $c[0];
            $w = 0;
            $i = 0;
            if ($e > 0) {
                $r = substr($valor, $i, $e) . ".";
                $i = $e;
            }
            for ($p; $p > 0; $p--) {

                if ($p == 1) {
                    $r = $r . substr($valor, $i, 3);
                } else {

                    $r = $r . substr($valor, $i, 3) . ".";
                }
                $i = $i + 3;
            }
            $i = $k - 1;
        } else {
            $r = $valor;
        }
        $resultado = $prefixo . $r . $sufixo;
        return $resultado;
    }

    public function convercaoData($tipo, $data) {//1 entra data do banco //// 2 data convencional
        if ($tipo == 1) {
            $x = explode("-", $data);
            $y = $x[2] . "/" . $x[1] . "/" . $x[0];
            return $y;
        } elseif ($tipo == 2) {
            $x = explode("/", $data);
            $y = $x[2] . "-" . $x[1] . "-" . $x[0];
            return $y;
        }
    }

    public function addZERO($valor) {
        if (strlen($valor) < 2) {
            if ($valor < 10) {
                $valor = "0" . $valor;
            }
        }

        return$valor;
    }

}
