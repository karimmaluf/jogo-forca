<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
    
    require_once('cls/words.class.php');

    $word = new words();
    $selected = $word->raffle_Word();
    $selected = trim($selected);

    $selected_array_word = str_split($selected);

    //print_r($selected_array_word);

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
            
            <h3 style="text-align:left; font-weight:bold">Desafio Webgoal - Jogo da Forca</h3>
            
            <form class="typed-words" id="user-word">
                <div style="margin-left:20px;">              
                    <label>INFORME UMA LETRA : </label>
                    <input type="text" id="user-typed" onkeyup="return check_typed_word();" maxlenght="1" />
                    <input type="hidden" id="parts" value="head,p-body,right-foot,left-foot,right-arm,left-arm">
                    <input type="hidden" id="completed-word" value="0">
                    <input type="hidden" id="selected-word" value="<?= $selected; ?>">
                </div>

                <div class="game-word">                    
                    <label>PALAVRA : </label>
                    <? foreach ($selected_array_word as $key => $letter) { ?>
                        <input type="text" id="letter_<?=$key?>" readonly="readonly" />
                    <? } ?>
                </div>

                <div class="game-letters">                    
                    <label>LETRAS DIGITADAS : </label>
                    <input type="text" id="typed-letters" style="width:200px;" readonly="readonly" />             
                </div>
            </form>
            
            <div class="game-draw">
                <div class="game-images"></div>
                <div class="head"></div>
                <div class="p-body"></div>
                <div class="right-foot"></div>
                <div class="left-foot"></div>
                <div class="right-arm"></div>
                <div class="left-arm"></div>
            </div>     
    </div>

</body>
</html>   