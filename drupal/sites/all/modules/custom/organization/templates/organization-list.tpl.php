<!--not being used bt if you did you would uncomment the code in organization_theme-->

<?php if (!empty($rows)): ?>

    <div class="organization-table-wrapper">
        <table class="organization-table">

            <thead>
            <tr>
                <?php foreach ($header as $head): ?>
                    <th><?php print $head; ?></th>
                <?php endforeach; ?>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($rows as $row): ?>
                <tr>
                    <?php foreach ($row as $cell): ?>
                        <td><?php print $cell; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>
    </div>

<?php else: ?>
    <p><?php print $empty; ?></p>
<?php endif; ?>