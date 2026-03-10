<div class="custom-dashboard-wrapper">
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
            <p><?php print t('Real-time status of all registered organizations.'); ?></p>
        </div>
    </div>
</div>