<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>

    <?php
      $link=mysqli_connect("localhost", "root", "root","ciceroni" )or die("Errore di connessione!");
      if((isset($_POST["invia_dati_turista"]))){
      $nome=$_POST['nome'];
      $cognome=$_POST['cognome'];
      $telefono=$_POST['telefono'];
      $mail=$_POST['mail'];
      $passwordget=$_POST['password'];
      $password2=$_POST['password2'];
      $lingua=$_POST['lingua'];

      if($nome==""||$cognome==""||$passwordget==""||$password2==""||$mail==""||$telefono==""){
        echo "<div class='alert alert-danger' role='alert'>
          <a href='formRegistrazioneTurista.html' class='alert-link'>Non tutti i campi sono stati compilati! Click per riprovare</a>
        </div>";
      }elseif($passwordget!=$password2){
        echo "<div class='alert alert-danger' role='alert'>
          <a href='formRegistrazioneTurista.html' class='alert-link'>Le password non corrispondono! Click per riprovare</a>
        </div>";
      }else {
        $password = sha1(md5(sha1($passwordget)));
        $query="INSERT into turista(nome, cognome,telefono, mail, password,lingua)values('$nome', '$cognome','$telefono','$mail','$password','$lingua')";
        $result=mysqli_query($link, $query)or die("Errore di registrazione!");
        if($result){
          echo "<div class='alert alert-success' role='alert'>
            <a href='turista.php' class='alert-link'>Registrazione effettuata con successo! Click per entrare</a>
          </div>";
        }
      }
    mysqli_close($link);
  }
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
