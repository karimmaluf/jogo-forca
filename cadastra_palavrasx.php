<?php
    require_once('cls/words.class.php');
?>

<form name="fVolta" id="fVolta" action="cadastra_palavras.php" method="post">
    <input type="hidden" name="result" id="result" value="">
</form>

<?php 
    $word_to_insert = new words();
    $word_to_insert->word = strtoupper($_POST['word-to-insert']);
    $word_to_insert = $word_to_insert->insert_Word();

    echo "<script language='JavaScript'>";
    echo "document.forms['fVolta'].result.value = '".$word_to_insert."';";
    echo "document.forms['fVolta'].submit();";
    echo "</script>";
?>