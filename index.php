<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $modello = "Samsung A12";
        $grado = "B";
        switch ($grado) {
            case "A":
                $risposta = "<h2>$modello perfetto, pari al nuovo.</h2>";
                break;
            case "B":
                $risposta = "<h2>$modello in ottime condizioni.</h2>";
                break;
            case "C":
                $risposta = "<h2>$modello con graffi e/o segni di usura.</h2>";
                break;
            default:
                $risposta = "<h2 style='color:red'>Errore: grado non riconosciuto</h2>";
                break;
        }
        echo $risposta;
    ?>
</body>
</html>