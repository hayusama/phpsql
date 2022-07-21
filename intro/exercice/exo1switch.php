Transformer le 1 er switch du cours comme le switch hack


<?php
switch (true) {

    case ($score == 1):

        $message = "e";

        break;

    case ($score >=2 and $score <= 3):

        $message = "d";

        break;

    case ($score >=4 and $score <=5):

        $message = "c";

        break;

    case ($score >=6 and $score <=7 ) :

        $message = "b";

        break;

    case ($score >= 8 and $score <= 9):

        $message = "a";

        break;

    case ($score == 10 ):

        $message = "+a";

        break;

    default :

    $message = "Vous avez triché";

}



echo $message;