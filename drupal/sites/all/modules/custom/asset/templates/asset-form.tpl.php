<div class="header">
    ADD ASSET
</div>
<div class="asset-page">


    <div class="asset-form-wrapper">
        <h2><?php print t('Asset Details'); ?></h2>

        <form<?php print drupal_attributes($form['#attributes']); ?>>

            <div class="form-row">
                <div class="form-field">
                    <?php print render($form['name']); ?>
                </div>

                <div class="form-field">
                    <?php print render($form['ssn']); ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-field">
                    <?php print render($form['asset_type']); ?>
                </div>

                <div class="form-field">
                    <?php print render($form['asset_condition']); ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-field">
                    <?php print render($form['asset_organization']); ?>
                </div>
                <div class="form-field">
                    <?php print render($form['assigned_user']); ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-field">
                    <?php print render($form['asset_image']); ?>
                </div>
            </div>

            <div class="form-actions">
                <?php print render($form['submit']); ?>
            </div>

            <?php print drupal_render_children($form); ?>

        </form>
    </div>

</div>