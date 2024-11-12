<?php
require('../framework.php');
$entries = csv_read('customers');
?>

<table>
    <?php if ($entries): ?>
        <?php foreach ($entries as $data) : ?>
            <tr>
                <?php foreach ($data as $cell) : ?>
                    <td><?= $cell ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <h1>[No data.]</h1>
    <?php endif; ?>
</table>