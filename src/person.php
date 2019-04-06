<?php


try {

    $query = 'select  per_id as ID,
                      per_fname as "Vorname",
                      per_secname as "",  
                      per_lname as "Nachname",
                      per_email as "Email"
                from person';

    $stmt = $con->prepare($query);

    $stmt->execute();

} catch (exception $e) {
    echo $e->getMessage();
}

$meta = [];
?>

<div class="container">
    <div class="row">
        <div class="eleven columns">
            <table class="u-full-width">
                <thead>
                <tr>
                    <?php for ($i = 0; $i < $stmt->columnCount(); $i++):
                        $meta[$i] = $stmt->getColumnMeta($i);?>
                        <th><?php echo $meta[$i]['name']?></th>
                    <?php endfor; ?>
                </tr>
                </thead>
                <tbody>
                <?php while ($rows = $stmt->fetch(PDO::FETCH_NUM)): ?>
                <tr>
                <?php foreach ($rows as $row):?>
                    <td><?php echo $row ?></td>
                <?php endforeach; ?>
                </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
