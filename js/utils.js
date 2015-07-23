function check_typed_word() {
            
    var selected_word = document.getElementById("selected-word").value;
    var typed_letter = document.getElementById("user-typed").value;
    var typed_letter = typed_letter.toUpperCase();
    var correct_letter = false;
    var completed_word = document.getElementById("completed-word").value;
    var all_letters_typed = document.getElementById("typed-letters").value;
    var parts = document.getElementById("parts").value;

    selected_word = selected_word.split("");
    parts = parts.split(",");

    for(i = 0; i < selected_word.length; i++) {

        if (selected_word[i] == typed_letter) {
            var field = 'letter_'+i;
            document.getElementById(field).value = typed_letter;
            document.getElementById("user-typed").value = "";
            correct_letter = true;

            document.getElementById("completed-word").value = ++completed_word;

            if ( selected_word.length == completed_word ) {
                alert("PARABENS!!! VOCE VENCEU!!!");
                location.reload();
            } 
        }
    }

    if (!correct_letter) {
        $('.'+parts.shift()).show();
        document.getElementById("parts").value = parts;
        document.getElementById("user-typed").value = "";

        if (parts.length == 0) {
            alert("NAO FOI DESSA VEZ!!! TENTE NOVAMENTE!!!");
            location.reload();
        }
    }

    all_letters_typed += typed_letter + ' | ';
    document.getElementById("typed-letters").value = all_letters_typed;
}