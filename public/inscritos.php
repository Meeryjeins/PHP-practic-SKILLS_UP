<?php
require "../module/require/confing.php";
htmlspecialchars($_SERVER['PHP_SELF']);
$_SERVER['REQUEST_METHOD'] == null;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Noticias</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilo tabla.css">
</head>

<body>
    <?php if ($SERVER['REQUEST_METHOD'] === 'GET') : ?>
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>"method="POST">
    <button type="submit" name="botontabla">ENVIAR</button>
</form>
<?php else : ?>
    <?php echo "<div class='wrapper'>";
    // require __DIR__ . '/inc/post.php';
    $sql = "SELECT * FROM new_reg";
    $stmt = $conn->prepare($sql);
    $stmt -> execute();
    if ($result = $stmt->setFetchMode(PDO::FETCH_ASSOC)){
        echo "<table>
            <thead>
            <tr>
                <th>Nombre</th>
                <th>E-mail</th>
                <th>Teléfono</th>
                <th>Domicilio</th>
                <th>Ciudad</th>
                <th>Provincia</th>
                <th>Código Postal</th>
                <th>Noticias</th>
                <th>Formato</th>
                <th>Comentarios</th>
            </tr>
            </thead>";
            
    
    foreach(($rows = $stmt->fetchAll()) as $row){
    
    echo "<tr>
            <td>".$row["fullname"]."</td>
            <td>".$row["email"]."</td>
            <td>".$row["phone"]."</td>
            <td>".$row["address"]."</td>
            <td>".$row["city"]."</td>
            <td>".$row["state"]."</td>
            <td>".$row["zipcode"]."</td>
            <td>".$row["newslatters"]."</td>
            <td>".$row["format_news"]."</td>
            <td>".$row["comment"]."</td>
            </tr>";
    }
    echo "</tr>
    </table>";
    } else {
    echo"<p> 0 results, no found data.</p></br>";
}
$conn = null;
?>
<?php endif ?>

        </div>
    </main>
</body>
</html>