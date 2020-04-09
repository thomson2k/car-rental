<!DOCTYPE html>
   <head>
      <meta charset="utf-8">
      <title>Kontakt- Wypożyczalnia aut</title>
      <link rel="shortcut icon" href="images/favicon.svg"/>
      <link href="css/inline-list.css" rel="stylesheet">
      <link href="css/contact.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <header>
         <?php
            require 'navbar.php';
            ?>
      </header>
      <?php
         require './db.php';

         if(!$db) {
            echo "BŁAD";
         } else {
            if(isset($_POST['new']) && $_POST['new']==1) {
               $cars = $_REQUEST['cars'];
               $pickup = $_REQUEST['pickup'];
               $dropoff = $_REQUEST['dropoff'];
               $imie = $_REQUEST['imie'];
               $nazwisko = $_REQUEST['nazwisko'];
               $phone = $_REQUEST['phone'];
               $email = $_REQUEST['email'];
               $location = $_REQUEST['location'];
               $ubezpieczenie = $_REQUEST['ubezpieczenie'];


            $ins_query = "INSERT INTO `wypozyczenia`(
               `ID_Wypozyczenia`,
               `ID_samochodu`,
               `Data_wyp`,
               `Data_odd`,
               `Imie`,
               `Nazwisko`,
               `Nr_tel`,
               `Email`,
               `Lokalizacja`,
               `ubezpieczenie`
            )
            VALUES
            (
               '',
              '$cars',
              '$pickup',
              '$dropoff',
              '$imie',
              '$nazwisko',
              '$phone',
              '$email',
              '$location',
              '$ubezpieczenie'
            );";
            $result = mysqli_query($db,$ins_query);
            if(!$result) {
               die(mysqli_error($db));
            } else {
               ?> <script>alert("Pomyślnie zarezerwowano"); </script>
               <?php
            }
         }
         }

         ?>
      <div class="contact-section">
         <div class="form">
            <form  method="post" class="contact-form">
                <h1>Wynajmij auto</h1>
               <input type="hidden" name="new" value="1" />
                  <div>
                     <p class="floating-label">Podaj swoje imię</p>
                     <input name="imie" placeholder="Imię" required>
                  </div>
                  <div>
                     <p>Podaj swoje nazwisko</p>
                     <input name="nazwisko" placeholder="Nazwisko" required>
                  </div>
                  <div>
                     <p>E-mail:</p>
                     <input name="email" type="email" placeholder="Email" required>
                  </div>
                  <div>
                     <p>Telefon:</p>
                     <input name="phone" type="tel"  placeholder="Telefon" required>
                  </div>
                  <div>
                     <p>Kiedy chcesz odebrać auto?</p>
                     <input type="date" id="pickup" name="pickup" required>
                  </div>
                  <div>
                     <p>Kiedy chcesz oddać auto?</p>
                     <input type="date" id="dropoff" name="dropoff" required>
                  </div>
                  <div>
                     <p>Wybierz auto</p>
                     <select id="cars" name="cars" required>
                     <?php
                        $db = mysqli_connect('localhost','root','','car_rental');
                        $sel_cars = "SELECT Marka, Model,ID_Samochodu FROM samochody ORDER BY ID_samochodu DESC;";
                        $result = mysqli_query($db,$sel_cars) or die(mysqli_error($db));
                        while ($row = mysqli_fetch_array($result)){
                            echo "<option value=".$row['ID_Samochodu'].">".$row['Marka'] ." ".$row['Model'] . "</option>";
                        }
                        ?>
                     </select>
                  </div>
                  <div>
                     <p>Gdzie chcesz odebrać auto?</p>
                     <select name="location" multiple size="3" required>
                        <option selected>Kraków</option>
                        <option>Wrocław</option>
                        <option>Poznań</option>
                     </select>
                  </div>
                  <div id="ct-ub">
                     <p><strong>Dodatki</strong></p>
                     <p> ubezpieczenie<input type="checkbox" name="ubezpieczenie" value="1"></p>
                     <input type="hidden" name="ubezpieczenie" value="0">
                    <br>
                  </div>
                  <div><input type="submit" value="Wyślij formularz"></div>

            </form>
         </div>
      </div>
   </body>
</html>