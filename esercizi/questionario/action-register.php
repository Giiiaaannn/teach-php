
<?php
$password = "info2023";

if (isset($_GET['password']) && $_GET['password'] === $password) {
    if (isset($_GET['color'])) {
        $sfondo = $_GET['color'];
    } 
        
?>

    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            body {
                background-color: <?php echo htmlspecialchars($sfondo); ?>;
            }
        </style>
    </head>

    <body>
        <center>
            <?php
            $welcomeMessage = isset($_GET['nome']) ? "Benvenuto/a " . htmlspecialchars($_GET['nome']) : "Benvenuto";
            ?>
            <h1><?php echo $welcomeMessage; ?></h1>
        

        <div class="container">
            <h1>Risposte del Form</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Chiave</th>
                        <th>Valore</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($_GET as $k => $v) {
                        echo "<tr> <td> $k </td> <td> $v </td> </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
    </center>

    </html>

<?php
} else {
?>

    <html>
    <center>
    <body>
        <div class="container">
            <div class="errore">
                Password errata 
            </div>
        </div>
    </body>
    </center>

    </html>
    <style>
        .container
        {
            text-align: center;
            color: black;
            padding: 20px;
            border-radius: 20px;
            margin-top: 40px;
            background-color: lightsalmon;
            width: 200px;
        }
    </style>
<?php
}
?>
