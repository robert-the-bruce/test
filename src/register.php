<?php

if (isset($_POST['register'])) {


    try {

        $query = 'INSERT into person(per_email, per_fname, per_secname, per_lname)
                    VALUES(:per_email, :per_fname, :per_secname ,:per_lname);';

        $statement = $con->prepare($query);

        $param = [
            'per_email' => $_POST['email'],
            'per_fname' => $_POST['firstname1'],
            'per_secname' => $_POST['firstname2'],
            'per_lname' => $_POST['lastname']
        ];

        $statement->execute($param);

    } catch (exception $e) {
        echo $e->getMessage();
    }

} else {

    ?>

    <form method="POST">
        <div class="row">
            <div class="six columns">
                <label for="EmailInput">Deine email</label>
                <input class="u-full-width" name="email" type="email" placeholder="test@mailbox.com" id="EmailInput" required>
            </div>
        </div>
        <div class="row">
            <div class="six columns">
                <label for="firstname1">Vorname 1</label>
                <input class="u-full-width" name="firstname1" type="text" placeholder="Vorname" id="firstname1" required>
            </div>
            <div class="six columns">
                <label for="firstname2">Vorname 2</label>
                <input class="u-full-width" name="firstname2" type="text" placeholder="Vorname" id="firstname2">
            </div>
        </div>
        <div class="row">
            <div class="six columns">
                <label for="lastname">Nachname</label>
                <input class="u-full-width" name="lastname" type="text" placeholder="Nachname" id="lastname" required>
            </div>
        </div>
        <label class="example-send-yourself-copy">
            <input type="checkbox" name="check" required>
            <span class="label-body">Ich habe die Teilnahmebedingungen gelesen und erkläre mich damit einverstanden.</span>
        </label>
        <input class="button-primary" name="register" type="submit" value="Registrieren">
    </form>


<?php


}