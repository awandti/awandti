<?php
    $absendermail = "mareike@kugelwohl.de";
    $absendername = "Hebamme Mareike Wandt";
    $pregnantname = "{$_POST['name']}";
    $pregnantmail = "{$_POST['mail']}";

    mail($absendermail,
        "Kontakaufnahme von $pregnantname",
        "Daten der Erstaufnahme:\nVor- und Zuname: $pregnantname\nAdresse: {$_POST['address']} {$_POST['zip']} {$_POST['place']}\n
        Telefon: {$_POST['phone']}\nEmail: {$_POST['mail']}\nET: {$_POST['et']}\nText: {$_POST['message']}",
        "FROM: $pregnantname <$pregnantmail>");
        

    mail($$pregnantmail,
        "Bestätigung der Kontakaufnahme mit $absendername",
        "Hallo $pregnantname,\n ich habe Deine Mail erhalten und werde mich schnellstmöglich bei Dir melden. Die folgenden Daten sind bei mir eingegangen:\n\n
        Vor- und Zuname: $pregnantname\nAdresse: {$_POST['address']} {$_POST['zip']} {$_POST['place']}\nTelefon: {$_POST['phone']}\nEmail: {$_POST['mail']}\nET: {$_POST['et']}\nText: {$_POST['message']}",
        "FROM: $absendername <$absendermail>");

    header("Location: ../index.html");
?>