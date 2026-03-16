<div class="custom-dashboard-wrapper">
    <div class="dashboard-grid">

        <div class="dashboard-chart-card">
            <h2 class="chart-title"><?php print t('Organization Overview'); ?></h2>

            <div class="chart-content">
                <?php if (!empty($chart_org)): ?>
                    <?php print render($chart_org); ?>
                <?php else: ?>
                    <div class="messages status warning">
                        <?php print t('No organization data available.'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="chart-footer">
                <p><?php print t('Status of all registered organizations.'); ?></p>
            </div>
        </div>

        <div class="dashboard-chart-card">
            <h2 class="chart-title"><?php print t('Asset Condition'); ?></h2>

            <div class="chart-content">
                <?php if (!empty($chart_assets)): ?>
                    <?php print render($chart_assets); ?>
                <?php else: ?>
                    <div class="messages status warning">
                        <?php print t('No asset data available.'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="chart-footer">
                <p><?php print t('Asset Condition'); ?></p>
            </div>
        </div>

    </div>
</div>