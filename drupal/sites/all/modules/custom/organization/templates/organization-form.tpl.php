<div class="header">
    <?php if (!empty($form['id']['#default_value'])): ?>
        EDIT ORGANIZATION
    <?php else: ?>
        ADD ORGANIZATION
    <?php endif; ?>
</div>
<div class="organization-page">


    <div class="organization-form-wrapper">
        <h2><?php print t('Organization Details'); ?></h2>

        <form<?php print drupal_attributes($form['#attributes']); ?>>

            <div class="form-row">
                <div class="form-field">
                    <?php print render($form['name']); ?>
                </div>

                <div class="form-field">
                    <?php print render($form['user']); ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-field">
                    <?php print render($form['status']); ?>
                </div>

                <div class="form-field">
                    <?php print render($form['phone']); ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-field full">
                    <?php print render($form['address']); ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-field">
                    <?php print render($form['logo']); ?>
                </div>
            </div>

            <div class="form-actions">
                <?php print render($form['submit']); ?>
            </div>

            <?php print drupal_render_children($form); ?>

        </form>
    </div>

</div>