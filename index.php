<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA</title>
</head>
<body>
    <h1>CALCULADORA</h1>
    <form action="" method="post"> 
        <label for="numero1">Digite Um Número:</label>
        <input type="number" id="numero1" name="numero1"><br><br><br>
        <label for="operacao">Escolha A Operação:</label>
        <select id="operacao" name="operacao">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br><br>
        <label for="numero2">Digite Outro Número:</label>
        <input type="number" id="numero2" name="numero2"><br><br><br>
        <input type="submit" value="ENVIAR"><br><br><br>
        <?php include "calculo.php";?>
        </form>
</body>
</html>