# Requisição POST para o curso de Lógica de Programação com desenvolvimento WEB.

Códigos para criar uma requisição post utilizando HTM e PHP :elephant:.

produto.php
```
<?php
$array = $_POST;
echo "<h1>{$array["valor1"]} X {$array["valor2"]} = ".intval($array["valor1"])*intval($array["valor2"])."</h1>";
```

index.html
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <form action="produto.php" method="post">
        <label>Valor1</label>
        <input type="text" id="valor1" name="valor1"><br>
        <label>Valor2</label>
        <input type="text" id="valor2" name="valor2"><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
```

Instrutor: Dhiego Balthazar
