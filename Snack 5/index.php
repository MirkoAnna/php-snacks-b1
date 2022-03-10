<?php
/*
Prendere un testo abbastanza lungo, contenente diverse frasi.
Prendere il testo e suddividerlo in tanti paragrafi ogni volta in cui si incontrerà un punto.
*/


$text = 'Introduzione a PHP.Ogni operazione eseguita sul Web coinvolge un client ed un server. Un client è un dispositivo (ad esempio un browser) che effettua una richiesta ad un server remoto. Il server remoto attraverso un linguaggio di scripting (come per esempio PHP) interpreta la richiesta del client ed invia una risposta (ad esempio una pagina HTML, un oggetto JSON o un XML) al client. A questo punto il client è in grado di interpretare, a sua volta, la risposta ricevuta e fornirla all’utente; nel caso del browser riceverà una pagina HTML che mostrerà all’utente.PHP è un linguaggio per lo scripting server-side, ovvero un linguaggio che risiede in un server in remoto e che in fase di esecuzione interpreta le informazioni ricevute da un client grazie al Web server, le elabora e restituisce un risultato al client che ha formulato la richiesta.';

$splitText = explode('.', $text);

// var_dump($splitText);

array_keys($splitText);
echo '<pre>'; print_r($splitText); echo '</pre>';

for ($i = 0; $i < count($splitText); $i++) {
    echo "<p> $splitText[$i] </p>";
}
?>