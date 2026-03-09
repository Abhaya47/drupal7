<div class="container">
    <div class="profile-container asset-view">
        <div class="profile-banner"></div>

        <div class="profile-header">
            <div class="profile-user-info">
                <?php
                // Updated to use asset_image instead of logo
                $image = isset($asset['asset_image']) ? $asset['asset_image'] : null;
                // Fallback to a placeholder if no image exists
                $image_url = $image ? file_create_url($image['uri']) : 'https://via.placeholder.com/80';
                ?>
                <img src="<?php print $image_url; ?>" alt="Asset Image" class="profile-avatar"/>
                <div>
                    <h4 class="profile-name"><?php print htmlspecialchars($asset['name']); ?></h4>
                    <p class="profile-subtitle"><?php print htmlspecialchars($asset['assigned_user']); ?></p>
                </div>
            </div>
            <div>
                <?php
                print l(t('Edit'), 'asset/edit/' . $asset['id'], array('attributes' => array('class' => array('btn', 'btn-edit'))));
                ?>
            </div>
        </div>

        <div class="profile-form">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label>Asset Name</label>
                    <input type="text" class="form-control"
                           value="<?php print htmlspecialchars($asset['name']); ?>"
                           placeholder="Asset Name" disabled>
                </div>
                <div class="col-sm-6 form-group">
                    <label>SSN</label>
                    <input type="text" class="form-control"
                           value="<?php print htmlspecialchars($asset['ssn']); ?>"
                           placeholder="SSN" disabled>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 form-group">
                    <label>Asset Type</label>
                    <input type="text" class="form-control"
                           value="<?php print htmlspecialchars($asset['asset_type']); ?>"
                           placeholder="Asset Type" disabled>
                </div>
                <div class="col-sm-6 form-group">
                    <label>Condition</label>
                    <input type="text" class="form-control"
                           value="<?php print htmlspecialchars($asset['asset_condition']); ?>"
                           placeholder="Asset Condition" disabled>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 form-group">
                    <label>Organization</label>
                    <input type="text" class="form-control"
                           value="<?php print htmlspecialchars($asset['asset_organization']); ?>"
                           placeholder="Organization" disabled>
                </div>
                <div class="col-sm-6 form-group">
                    <label>Assigned User</label>
                    <input type="text" class="form-control"
                           value="<?php print htmlspecialchars($asset['assigned_user']); ?>"
                           placeholder="Assigned User" disabled>
                </div>
            </div>
        </div>

    </div>
</div>