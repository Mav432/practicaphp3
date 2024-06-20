<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de datos</title>

    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #8ebedf;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

    </style>
</head>
<body>
    <form action="welcome.php" method="POST">
        Name: <input type="text" name="name" pattern="[A-Za-z,Á|É|Í|Ó|Ú|á|é|í|ó|ú|Ü|ü|Ñ|ñ ]{2,30}" required ><br><br>
        E-mail: <input type="email" name="email"><br><br>
        Edad: <input type="text" id="Edad" name="edad" pattern="[0-9]{1,2}" required ><br><br>
        <input type="submit" name="enviar">
    </form>
</body>
</html> 