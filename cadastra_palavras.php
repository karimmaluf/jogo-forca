<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
    
    require_once('cls/words.class.php');

    $word = new words();
    $inserted_words = $word->read_Words();

   if ($_POST['result'] == "1") {
        echo "<script language='JavaScript'>";
        echo "alert('PALAVRA CADASTRADA COM SUCESSO!!!')";
        echo "</script>";
   }
    
?>


<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
    
    <title>Desafio Webgoal</title>

    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/forms.css">

    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/utils.js"></script>
          
</head>
<body>

    <div class="game-board">
            
            <h3 style="text-align:left; font-weight:bold">Desafio Webgoal - Cadastro de Palavras</h3>
            
            <form class="typed-words" id="user-word" action="cadastra_palavrasx.php"  method="post">
                <div style="margin-left:20px;">              
                    <label>INSERIR PALAVRA : </label>
                    <input type="text" id="word-to-insert" name="word-to-insert" style="width:150px" maxlenght="15" />
                </div>

                <div class="game-inserted-words">                    
                    <label>PALAVRAS CADASTRADAS : </label>
                    <? foreach ($inserted_words as $value) {
                         echo $value;
                    } ?>
                </div>

                <div class="insertButton">
                    <input type="submit" value="INSERIR" style="width: 100px" />
                </div>
            </form>
   
    </div>

</body>
</html>   