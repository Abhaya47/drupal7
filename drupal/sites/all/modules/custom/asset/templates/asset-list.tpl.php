<?php if (!empty($rows)): ?>
    <form id="<?php print $filter_form['#id']; ?>" action="<?php print $filter_form['#action']; ?>"
          method="<?php print $filter_form['#method']; ?>" accept-charset="UTF-8">
        <div class="modern-table-container">
            <!--        <div>-->
            <!--            --><?php //print render($filter_form['changethis']); ?>
            <!--            --><?php //print render($filter_form['replace_textfield']); ?>
            <!---->
            <!--        </div>-->
            <div class="table-header-toolbar">
                <div class="toolbar-left">
                    <div class="filter-wrapper">
                        <?php print render($filter_form['status']); ?>
                    </div>
                </div>

                <div class="toolbar-right">
                    <?php print l(t('Add'), 'asset/add', array('attributes' => array('class' => array('btn', 'add-btn')))); ?>
                </div>
            </div>

            <div class="element-invisible">
                <?php print drupal_render_children($filter_form); ?>
            </div>
        </div>


        <div class="asset-table-wrapper">
            <table class="modern-asset-table">

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
                                <?php if (is_array($cell)): ?>
                                    <div class="action-dropdown">
                                        <button class="action-dropbtn">Actions &#9660;</button>
                                        <div class="action-dropdown-content">
                                            <?php foreach ($cell as $key => $link): ?>
                                                <?php
                                                $class = isset($link['attributes']['class']) ? implode(' ', $link['attributes']['class']) : '';
                                                $data_id = isset($link['attributes']['data-asset-id']) ? ' data-asset-id="' . $link['attributes']['data-asset-id'] . '"' : '';
                                                ?>
                                                <?php print l($link['title'], $link['href'], array('attributes' => isset($link['attributes']) ? $link['attributes'] : array())); ?><?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php else: ?>

                                    <?php if ($col_index == 1): // Asset Name Column ?>
                                        <div class="asset-name-cell">
                                            <div class="asset-avatar"><?php print strtoupper(substr(trim(strip_tags($cell)), 0, 1)); ?></div>
                                            <span class="asset-title"><?php print check_plain($cell); ?></span>
                                        </div>

                                    <?php else: ?>
                                        <span class="text-standard"><?php print check_plain($cell); ?></span>
                                    <?php endif; ?>

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
    </form>


<?php else: ?>
    <form id="<?php print $filter_form['#id']; ?>" action="<?php print $filter_form['#action']; ?>"
          method="<?php print $filter_form['#method']; ?>" accept-charset="UTF-8">
        <div class="modern-table-container">
            <!--        <div>-->
            <!--            --><?php //print render($filter_form['changethis']); ?>
            <!--            --><?php //print render($filter_form['replace_textfield']); ?>
            <!---->
            <!--        </div>-->
            <div class="table-header-toolbar">
                <div class="toolbar-left">
                    <div class="search-box">
                        <span class="search-icon">🔍</span>
                        <?php print render($filter_form['search']); ?>
                    </div>
                    <div class="filter-wrapper">
                        <?php print render($filter_form['status']); ?>
                    </div>
                </div>

                <div class="toolbar-right">
                    <?php print l(t('Add'), 'asset/add', array('attributes' => array('class' => array('btn', 'add-btn')))); ?>
                </div>
            </div>

            <div class="element-invisible">
                <?php print drupal_render_children($filter_form); ?>
            </div>
        </div>
    </form>
<?php endif; ?>