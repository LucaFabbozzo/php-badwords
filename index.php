
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
<!-- 
Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->

<div class="container py-5">
    <form action="./atterraggio.php" method="GET">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Parola da censurare</label>
        <input type="text" name="badword" class="form-control" id="exampleFormControlInput1" placeholder="Scrivi Parola">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Testo</label>
        <textarea class="form-control" name="paragraph" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <button class="btn btn-primary" type="submit">Invia</button>
        </div>
    </form>
</div>




</body>
</html>

