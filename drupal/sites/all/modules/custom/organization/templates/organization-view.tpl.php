<div class="container">
    <div class="profile-container organization-view">
        <div class="profile-banner"></div>

        <div class="profile-header">
            <div class="profile-user-info">
                <?php
                $logo = $organization['logo'];
                // Fallback to a placeholder if no logo exists
                $logo_url = $logo ? file_create_url($logo['uri']) : 'https://via.placeholder.com/80';
                ?>
                <img src="<?php print $logo_url; ?>" alt="Organization Logo" class="profile-avatar"/>
                <div>
                    <h4 class="profile-name"><?php print check_plain($organization['name']); ?></h4>
                    <p class="profile-subtitle"><?php print check_plain($organization['manager_name']); ?></p>
                </div>
            </div>
            <div>
                <?php
                print l(t('Edit'), 'organization/edit/' . $organization['id'], array('attributes' => array('class' => array('btn', 'btn-edit')))
                );
                ?>
            </div>
        </div>

        <div class="profile-form">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label>Organization Name</label>
                    <input type="text" class="form-control"
                           value="<?php print check_plain($organization['name']); ?>"
                           placeholder="Organization Name" disabled>
                </div>
                <div class="col-sm-6 form-group">
                    <label>Manager Name</label>
                    <input type="text" class="form-control"
                           value="<?php print check_plain($organization['manager_name']); ?>"
                           placeholder="Manager Name" disabled>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control"
                           value="<?php print check_plain($organization['phone']); ?>" placeholder="Phone Number"
                           disabled>
                </div>
                <div class="col-sm-6 form-group">
                    <label>Status</label>
                    <select class="form-control" disabled>
                        <option value="1" <?php print ($organization['status'] == 1) ? 'selected' : ''; ?>>Active
                        </option>
                        <option value="0" <?php print ($organization['status'] == 0) ? 'selected' : ''; ?>>Inactive
                        </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 form-group">
                    <label>Address</label>
                    <input type="text" class="form-control"
                           value="<?php print check_plain($organization['address']); ?>"
                           placeholder="Full Address" disabled>
                </div>
            </div>
        </div>

    </div>
</div>