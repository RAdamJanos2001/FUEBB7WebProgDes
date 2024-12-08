<?php
    $name=$_POST['lastName']." ".$_POST['firstName'];
    $email=$_POST['email'];
    $subject=$_POST['favorite'];
    $message=$_POST['message'];
    $mailhead="Tőle: ".$name."<".$subject.">"."\r\n";
    $recipient="radamjanos@gmail.com";
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        die("Kérjük, tölts ki minden mezőt!");
    }else{
        if (mail($recipient, $subject, $message, $mailhead)) {
            echo'
                <!DOCTYPE html>
                <html lang="hu">
                <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                <title>Visszajelzés</title>
                </head>
                <body>
                    <div class="container text-primary text-center py-5">
                        <p class="mb-4 fs-4 pt-5">Amennyiben nyertél, hamarosan felvesszük veled a kapcsolatot!</p>
                        <p class="mb-4 fs-4">Lépj vissza az oldalra: <a class="text-dark" href="/giveaway.html">Űrlap</a></p>
                    </div> 
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

                </body>
                </html>
            ';
        }else{
            die("Valami Hiba Történt!");
        }
    }
?>