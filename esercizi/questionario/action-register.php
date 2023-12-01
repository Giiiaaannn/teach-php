<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">

    <?php
        $welcomeMessage = isset($_GET['nome']) ? "Benvenuto " . htmlspecialchars($_GET['nome']) : "Benvenuto";
        ?>

        <h1><?php echo $welcomeMessage; ?></h1>

        <h1>Risposte del Form</h1>

        <table class="table">
            
            <tbody>

                <?php
                foreach ($_GET as $k => $v) {
                    //$v = $v ?: "NULL";
                    echo "<tr> <td> $k </td> <td> $v </td> </tr>";
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>