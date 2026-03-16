<?php if (!empty($rows)): ?>
    <div class="table-header-toolbar">
        <?php
        // Render the hidden form fields (ID, Build ID, Token)
        // These are required for the form to actually submit to Drupal.
        if (isset($filter_form['form_id'])) print render($filter_form['form_id']);
        if (isset($filter_form['form_build_id'])) print render($filter_form['form_build_id']);
        if (isset($filter_form['form_token'])) print render($filter_form['form_token']);
        ?>

        <form action="" method="get">
            <div class="toolbar-left">
                <div class="search-box">
                    <span class="search-icon">🔍</span>
                    <?php print render($filter_form['search']); ?>
                </div>
                <div class="filter-wrapper">
                    <?php print render($filter_form['status']); ?>
                </div>
                <div class="filter-submit">
                    <?php
                    print render($filter_form['submit']); ?>
                </div>
            </div>
        </form>

        <div class="toolbar-right">
            <?php print l(t('Add'), 'organization/add', array('attributes' => array('class' => array('btn', 'add-btn')))); ?>
        </div>
    </div>

    <div class="organization-table-wrapper">
        <table class="modern-organization-table">

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
                    <?php
                    $col_index = 0;
                    foreach ($row as $cell):
                        ?>
                        <td>
                            <?php if ($col_index == 5): // ACTIONS COLUMN ?>
                                <div class="action-dropdown">
                                    <button class="action-dropbtn">Actions &#9660;</button>
                                    <div class="action-dropdown-content">
                                        <?php foreach ($cell as $link): ?>
                                            <?php print l($link['title'], $link['href'], array('attributes' => isset($link['attributes']) ? $link['attributes'] : array())); ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                            <?php elseif ($col_index == 1): // NAME COLUMN ?>
                                <div class="org-name-cell">
                                    <div class="org-avatar"><?php print strtoupper(substr(trim(strip_tags($cell)), 0, 1)); ?></div>
                                    <span class="org-title"><?php print check_plain($cell); ?></span>
                                </div>

                            <?php elseif ($col_index == 2): // ADDRESS COLUMN (The new array) ?>
                                <?php if (is_array($cell)): ?>
                                    <?php foreach ($cell as $address_item): ?>
                                        <div class="-cell">
                                            <span class="text-standard">
                                                <?php print is_array($address_item) ? check_plain($address_item['value']) : check_plain($address_item); ?>
                                            </span>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <span class="text-standard"><?php print check_plain($cell); ?></span>
                                <?php endif; ?>

                            <?php elseif ($col_index == 3): // MANAGER COLUMN ?>
                                <div class="manager-cell">
                                    <span class="mgr-icon">👤</span> <?php print check_plain($cell); ?>
                                </div>

                            <?php else: // ANY OTHER COLUMN ?>
                                <span class="text-standard"><?php print check_plain($cell); ?></span>
                            <?php endif; ?>
                        </td>
                        <?php
                        $col_index++;
                    endforeach;
                    ?>
                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    </div>

<?php else: ?>
    <div class="table-header-toolbar">
        <?php
        // Render the hidden form fields (ID, Build ID, Token)
        // These are required for the form to actually submit to Drupal.
        if (isset($filter_form['form_id'])) print render($filter_form['form_id']);
        if (isset($filter_form['form_build_id'])) print render($filter_form['form_build_id']);
        if (isset($filter_form['form_token'])) print render($filter_form['form_token']);
        ?>

        <form action="" method="get">
            <div class="toolbar-left">
                <div class="search-box">
                    <span class="search-icon">🔍</span>
                    <?php print render($filter_form['search']); ?>
                </div>
                <div class="filter-wrapper">
                    <?php print render($filter_form['status']); ?>
                </div>
                <div class="filter-submit">
                    <?php
                    print render($filter_form['submit']); ?>
                </div>
            </div>
        </form>

        <div class="toolbar-right">
            <?php print l(t('Add'), 'organization/add', array('attributes' => array('class' => array('btn', 'add-btn')))); ?>
        </div>
    </div>

    <div class="modern-table-container">
        <table class="modern-organization-table">

            <thead>
            <tr>
                <?php foreach ($header as $head): ?>
                    <th><?php print $head; ?></th>
                <?php endforeach; ?>
            </tr>
            </thead>
        </table>
        <p class="empty-message"><?php print $empty; ?></p>
    </div>
<?php endif; ?>