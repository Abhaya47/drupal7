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
                        <td>
                            <?php if (is_array($cell)): ?>
                                <div class="action-dropdown">
                                    <button class="action-dropbtn">Actions &#9660;</button>
                                    <div class="action-dropdown-content">
                                        <?php foreach ($cell as $key => $link): ?>
                                            <?php
                                            $class = isset($link['attributes']['class']) ? implode(' ', $link['attributes']['class']) : '';
                                            $data_id = isset($link['attributes']['data-org-id']) ? ' data-org-id="' . $link['attributes']['data-org-id'] . '"' : '';
                                            ?>
                                            <?php print l($link['title'], $link['href'], array('attributes' => isset($link['attributes']) ? $link['attributes'] : array())); ?><?php endforeach; ?>
                                    </div>
                                </div>
                            <?php else: ?>
                                <?php print $cell; ?>
                            <?php endif; ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>
    </div>

<?php else: ?>
    <div class="organization-table-wrapper">
        <table class="organization-table">
            <thead>
            <tr>
                <?php foreach ($header as $head): ?>
                    <th><?php print $head; ?></th>
                <?php endforeach; ?>
            </tr>
            </thead>
        </table>
    </div>
    <p><?php print $empty; ?></p>
<?php endif; ?>