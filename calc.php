<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <style>
        body {
            background-color: #fff;
        }

        .container {
            height: 350px;
            width: 600px;
            background-color: white;
            border-radius: 20px;
            margin:5% auto;

        }

        .calculator_body {
            height: 60%;
            width: 100%;

        }

        .cal-left {
            height: 100%;
            width: 50%;
            float: left;
        }

        .cal-right {
            height: 100%;
            width: 50%;
            float: left;
        }

        .cal-heading {
            color: #28C4B6;
            font-size: 30px;
            font-weight: bolder;
            border-left: 2px solid #28C4B6;
            margin: 100px 30px;
        }

        .main-cal {
            margin: 100px 30px;
        }

        input {
            width: 100%;
            height: 60px;
            background-color: #3E3E3E;
            color: #fff;
            border-bottom: 1px solid black;
            margin-top: 10px;
            border: 0px solid #fff;
            border-bottom: 1px solid #fff;
            border-radius: 20px;
        }

        input::placeholder {
            font-style: italic;
            font-size: 1em;
            color: mintcream;
            padding:30px;       
         }

        select {
            width: 100%;
            height: 30px;
            margin-top: 10px;
            border-radius: 10px;
        }

        button{
            margin: 40px;
        }

        
    </style>

   
    <div class="container">
        <div class="calculator_body">
            <div class="cal-left">
                <h3 class="cal-heading"> &nbsp;&nbsp;PHP <br /> &nbsp;&nbsp;CALCULATOR</h3>
            </div>
            <div class="cal-right">
                <form class="main-cal" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="number" required name="numb1" placeholder="primeiro numero" /><br>
                    <input type="number" required name="numb2" placeholder="segundo numero" /><br>

                <select name="operator" id="" class="cal-type">
                        <option>SOMAR</option>
                        <option>SUBTRAIR</option>
                        <option>MULTIPLICAR</option>
                        <option>DIVIDIR</option>
                        <option>POTENCIA</option>
                    </select><br>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-lg btn-block"> CALCULAR</button>
                </form>
            </div>
        </div>

        RESUTADO: <br>
        <?php

        if (isset($_POST['submit'])) {
            $result1 = $_POST['numb1'];
            $result2 = $_POST['numb2'];
            $operator = $_POST['operator'];
            switch ($operator) {
                case 'ESCOLHAS':
                    echo "SELECIONE UM OPERADOR";
                    break;
                case 'SOMAR':
                    echo $result1 + $result2;
                    break;
                case 'SUBTRAIR':
                    echo $result1 - $result2;
                    break;
                case 'MULTIPLICAR':
                    echo $result1 * $result2;
                    break;
                case 'DIVIDIR':
                    echo $result1 / $result2;
                    break;
                case 'POTENCIA':
                    echo $result1 ** $result2;
                    break;
            }
        }


        ?>



</body>

</html>
