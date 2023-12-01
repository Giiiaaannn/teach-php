<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <div class="container">
  <center>
    <h1> Compila il seguente formulario :</h1>

    <form action="./action-register.php">
    
      <label for="nome">nome:</label><br>
      <input type="text" id="nome" name="nome" required><br>

      <label for="cognome">cognome:</label><br>
      <input type="text" id="cognome" name="cognome" required><br>

      <label for="password">password:</label><br>
      <input type="password" id="password" name="password" required><br>

      <label for="età">età:</label><br>
      <input type="number" id="età" name="età" required><br>

      <label for="sport preferito">sport preferito:</label><br>
      <input type="text" id="sport preferito" name="sport preferito" required><br>

      <label for="colore sfondo">Seleziona colore di sfondo:</label><br>
      <input type="color" id="color" name="color" required><br><br>

    
      <input type="submit" />
</center>

    </form>
  </div>

</body>

</html>
<style>
  body
  {
    background-image: url('https://i.pinimg.com/564x/39/c6/04/39c6044ea44834612dbf0e82925c6f3b.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      color: black;
      background-color: rgba(255, 255, 255, 0.7); 
  }
  input[type="submit"]:hover
  {
    background-color: lightgreen;
  }
  
</style>