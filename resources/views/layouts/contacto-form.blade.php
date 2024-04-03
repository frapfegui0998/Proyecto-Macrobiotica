<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
            background-color: rgba(242, 242, 242, 0.9);
        }

        input[type=submit] {
            background-color: #337ab7;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container-form {
            border-radius: 5px;
            background-color: rgba(242, 242, 242, 0.8);
            padding: 80px;
            margin-top: 60px;

        }
    </style>
</head>

<body>
    <div class="container-form">
        <h2>Contáctanos</h2>
        <form action="#">
            <div class="form-group">
                <label for="fname">Nombre</label>
                <input type="text" id="fname" name="firstname" placeholder="Tu nombre..">
            </div>
            <div class="form-group">
                <label for="lname">Apellidos</label>
                <input type="text" id="lname" name="lastname" placeholder="Tus apellidos..">
            </div>
            <div class="form-group">
                <label for="subject">Mensaje</label>
                <textarea id="subject" name="subject" placeholder="Escribe algo.." style="height:200px"></textarea>
            </div>
            <button onclick="smtp()" type="" class="btn btn-default">Enviar</button>
        </form>
        <script>
            function smtp() {
                alert("Mensaje enviado con éxito!");
                document.getElementById("fname").values = "";
            }
        </script>
    </div>

</body>

</html>
