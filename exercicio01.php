<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>switch</title>
</head>
<body>
    <div>
        <form action="action01.php" method="get">
            <label for="num">Numero: </label>
            <input type="number" name="num" id="num" required> <br>
            <fieldset>
                <legend>Operação</legend>
                <label for="dobro">Dobro</label>
                <input type="radio" name="oper" id="dobro" value="1" checked>
                <!-- value = valor usado em case no switch ser o mesmo nome -->
                
                <label for="raiz">Raiz Quadrada</label>
                <input type="radio" name="oper" id="raiz" value="2">

                <label for="cubo">Ao Cubo</label>
                <input type="radio" name="oper" id="cubo" value="3">
            </fieldset>
            
            <input type="submit" value="calcular">
        </form>
    </div>
    
</body>
</html>