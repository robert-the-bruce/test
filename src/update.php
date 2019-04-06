<?php

if (isset($_POST['change'])) {

    try {



        $query = 'update person 
                    set per_fname = :firstname1, per_secname = :firstname2, per_lname = :lastname, per_email = :email
                    where per_id = :id;';

        $params = [
          'firstname1' => $_POST['firstname1'],
          'firstname2' => $_POST['firstname2'],
          'lastname' => $_POST['lastname'],
          'email' => $_POST['email'],
          'id' => $_POST['id']
        ];

        getStatement($con, $query, $params);

        echo 'Datensätze geändert!';

    } catch (exception $e) {
        echo $e->getMessage();
    }



} elseif(isset($_POST['select'])) {

    try {

        $id = $_POST['person_id'];

        $query = 'select  per_fname,
                          per_secname,
                          per_lname,
                          per_email    
                from person where per_id = ?;';

        $param = [$id];

        $stmt = getStatement($con, $query, $param);

        $result = $stmt->fetchAll();

        $result[0]['per_email'] !== '' ? $result[0]['per_email'] : $result[0]['per_email'] = 'email eintragen';

        ?>

        <form method="POST">
            <div class="container">
                <div class="row">
                    <div class="ten columns">
                        <h4>Persönliche Daten kontrollieren und ändern:</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="six columns">
                        <label for="EmailInput">Deine email</label>
                        <input class="u-full-width" name="email" type="email" value="<?php echo $result[0]['per_email'] ?>"
                               id="EmailInput" required>
                    </div>
                </div>
                <div class="row">
                    <div class="six columns">
                        <label for="firstname1">Vorname 1</label>
                        <input class="u-full-width" name="firstname1" type="text" value="<?php echo $result[0]['per_fname'] ?>" id="firstname1"
                               required>
                    </div>
                    <div class="six columns">
                        <label for="firstname2">Vorname 2</label>
                        <input class="u-full-width" name="firstname2" type="text" value="<?php echo $result[0]['per_secname'] ?>" id="firstname2">
                    </div>
                </div>
                <div class="row">
                    <div class="six columns">
                        <label for="lastname">Nachname</label>
                        <input class="u-full-width" name="lastname" type="text" value="<?php echo $result[0]['per_lname'] ?>" id="lastname"
                               required>
                    </div>
                </div>
                <label class="example-send-yourself-copy">
                    <input type="checkbox" name="check" required>
                    <span class="label-body">Ich habe die Daten  überprüft.</span>
                </label>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input class="button-primary" name="change" type="submit" value="Ändern">
            </div>
        </form>


        <?php

    } catch (exception $e) {

        echo $e->getMessage();
    }

} else {

    try {

    $table = 'person';

    // hole mir alle Personen
    $query = 'select per_id, concat_ws(" ", per_fname, per_secname, per_lname) from ' .$table;

    //prepare statement um SQL-Injections zu verhindern
    $statement = $con->prepare($query);

    $statement->execute();

    } catch (exception $e) {
        echo $e->getMessage();
    }

    ?>
    <form method="POST">
        <div class="container">
            <div class="row">
                <h4>Personendaten änder</h4>
                <p>Hier können sie die Personendaten ändern!</p>
            </div>
            <div class="row">
                <label for="person_id">Personen</label>
                <select name="person_id" id="person_id">
                    <?php while ($row = $statement->fetch(PDO::FETCH_NUM)):?>
                        <option value="<?php echo $row[0]?>"><?php echo $row[1]?></option>
                    <?php endwhile;?>
                </select>
                <input type="submit" name="select" value="Auswahl">
            </div>
        </div>
    </form>

<?php

}
