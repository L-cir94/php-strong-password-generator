<?php
if (!empty($_GET['email'])) {
    /*     var_dump('check email'); */
    //leggo il get
    $email = $_GET['email'];
    /*     var_dump($email); */
    //controllo se la stringa contiene la stringa e la chiocciola
    if (str_contains($email, '@') && str_contains($email, '.')) {
        /*  var_dump('ok'); */
        $alert = [
            'status' => 'success',
            'message' => 'you are in the list!'
        ];
    } else {
        /* var_dump('there is no @ or . please check'); */
        $alert = [
            'status' => 'danger',
            'message' => 'danger something went wrong'
        ];
    }
} ?>
<?php
include __DIR__ . '/views/layout/head.php';
?>

<body>
    <?php
    include __DIR__ . '/views/partials/header.php';
    ?>
    <main>
        <?php
        include __DIR__ . '/views/partials/jumbutron.php';
        ?>
        <?php
        include __DIR__ . '/views/partials/company.php';
        ?>
                <?php
        include __DIR__ . '/views/partials/password_generator.php';
        ?>
    </main>
    <?php
    include __DIR__ . '/views/layout/footer.php';
    ?>