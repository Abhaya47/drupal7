<div class="container" style="margin-top: 20%" ;>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <?php print render($page['content']); ?>
                </div>
            </div>

            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Don't have an account? &nbsp;<a href="/user/register" class="me-2">Create Account</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/user/password" class="ms-2">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
