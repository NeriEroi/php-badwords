<?php
// PHP Badwords
// Creare una variabile con un paragrafo di testo a vostra scelta.

// Stampare a schermo il paragrafo e la sua lunghezza.

// Una parola da censurare viene passata dall'utente tramite parametro GET.

/* Stampare di nuovo il paragrafo e la sua lunghezza, 
dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare
*/


$paragraph = "Addio Re. Poiché tu vuoi apparir tale, la libertà è lungi di qui, e qui è il vero esilio.";
$paragraph_length = strlen($paragraph);
$_GET["censured_word"];
$paragraph_censured = str_replace($_GET, "***", $paragraph);
$paragraph_censured_length = strlen($paragraph_censured);

?>

<div>
    <h1>
        Frammento da Re Lear di W. Shakespeare (NON censurato)
    </h1>

    <p>
        Kent: <?php echo $paragraph ?>
    </p>

    <!-- lunghezza della stringa  -->
    <p>
       Length: <?php echo $paragraph_length ?>
    </p>
    <!-- / lunghezza della stringa  -->
</div>


 <!-- paragrafo con parola censurata -->
<div>
    <h1>
        Frammento da Re Lear di W. Shakespeare (censurato)
    </h1>

    <p>
        Kent: <?php echo $paragraph_censured ?>
    </p>

    <!-- lunghezza della stringa censurata -->
    <p>
        Length: <?php echo $paragraph_censured_length ?>
    </p>
    <!-- / lunghezza della stringa censurata -->
</div>
<!-- / paragrafo con parola censurata -->






