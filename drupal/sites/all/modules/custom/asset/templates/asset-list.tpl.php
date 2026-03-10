<?php if (!empty($rows)): ?>
    <div class="modern-table-container">
        <div class="table-header-toolbar">
            <div class="toolbar-left">
                <div class="search-box">
                    <span class="search-icon">🔍</span>
                    <input type="text" id="table-search" placeholder="Search assets..." onkeyup="filterTable()">
                </div>

                <!--                <div class="filter-wrapper">-->
                <!--                    <select id="status-filter" onchange="filterStatus()">-->
                <!--                        <option value="all">All Status</option>-->
                <!--                        <option value="active">Active</option>-->
                <!--                        <option value="inactive">Inactive</option>-->
                <!--                    </select>-->
                <!--                </div>-->
            </div>

            <div class="toolbar-right">
                <?php print l(t('Add'), 'asset/add', array('attributes' => array('class' => array('btn', 'add-btn')))); ?>
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
                                            <span class="asset-title"><?php print $cell; ?></span>
                                        </div>

                                    <?php else: ?>
                                        <span class="text-standard"><?php print $cell; ?></span>
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
    </div>

<?php else: ?>
    <div class="modern-table-container">
    <div class="table-header-toolbar">
        <div class="toolbar-left">
            <div class="search-box">
                <span class="search-icon">🔍</span>
                <input type="text" id="table-search" placeholder="Search assets..." onkeyup="filterTable()">
            </div>

            <div class="toolbar-right">
                <?php print l(t('Add'), 'asset/add', array('attributes' => array('class' => array('btn', 'add-btn')))); ?>
                <!--                <a href="asset/add" class="add-btn">+ Add Asset</a>-->
            </div>
        </div>
        <div>
            <p class="empty-message"><?php print $empty; ?></p>
        </div>
    </div>
<?php endif; ?>