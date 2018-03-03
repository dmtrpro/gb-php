<?php require_once TEMPLATE_DIR . '/parts/_head.php' ?>

<style>
    .error-template {padding: 40px 15px;text-align: center;}
    .error-actions {margin-top:15px;margin-bottom:15px;}
    .error-actions .btn { margin-right:10px; }
</style>

<?php $code = (string) $code ?: '404'; ?>
<?php $message = $message ?: 'Not Found'; ?>
<?php $description = $description ?: 'Sorry, an error has occured, Requested page not found!'; ?>

<main role="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-template">
                    <h1>
                        Oops!</h1>
                    <h2>
                        <?= $code; ?> <?= $message; ?></h2>
                    <div class="error-details">
                        <?= $description; ?>
                    </div>
                    <div class="error-actions">
                        <a href="/" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                            На главную </a><a href="mailto:admin@mailnotexist.local" class="btn btn-secondary btn-lg"><span class="glyphicon glyphicon-envelope"></span> Написать админу </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once TEMPLATE_DIR . '/parts/_footer.php' ?>