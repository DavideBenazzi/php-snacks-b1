<!-- DESCRIZIONE:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <title>php-snacks-b1</title>
</head>
<body>
    <h1 class="mb30">
        Per eseguire l'accesso digitare nell'url in formato query (? e &), name, mail e age.
    </h1>
    <!-- PHP -->
    <h2>
        <?php       
        // CHECK VALIDITY NAME
            if ( ( strlen( trim($_GET['name']) ) < 4 ) || ( strpos($_GET['name'] , ' ') ) ) {
                echo ("Accesso negato, inserire un 'name' valido.");
            }
            // CHECK MAIL
            else if ( (! strpos($_GET['mail'] , '@') ) || (! strpos($_GET['mail'] , '.') ) ) {
                echo ("Accesso negato, inserire una 'mail' valida.");
            }
            // CHECK AGE (FROM 0 TO 120)
            else if ( (! ctype_digit($_GET['age']) ) || (! ( ( $_GET['age'] < 120) && ( $_GET['age'] > 0) ) ) ) {
                echo ("Accesso negato, inserire una 'age' valida.");
            }       
            else {
                echo ("Accesso riuscito.");
            };
        ?>
    </h2>
</body>
</html>