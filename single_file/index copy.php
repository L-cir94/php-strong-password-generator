<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link defer href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>fundamentals live-mail</title>
</head>

<body>

    <header class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <h1>live-mail</h1>
            </div>
        </div>
    </header>

    <main>
        <div class="jumbotron p-5 bg-black text-white">
            <h1 class="display-3">Amazing Website</h1>
            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium nulla harum tenetur sequi fugiat odio perferendis et aspernatur possimus, unde, voluptates mollitia similique, voluptatum perspiciatis laboriosam maxime molestias? Vel, deleniti!</p>
            <hr class="my-2">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Clicca qui</a>
        </div>
        <section class="company py-5">
            <div class="container">
                <h3>Company</h3>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, eaque similique. Architecto accusamus hic soluta voluptate adipisci placeat non eligendi vitae, ex, exercitationem voluptatum cumque tempora neque beatae nobis ipsa.</p>
                <img src="https://picsum.photos/400/200" alt="">
            </div>
        </section>
        <section class="newsletter bg-dark text-light py-5">
            <div class="container">
                <h3>Get in touch</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia possimus, explicabo amet quisquam laborum delectus quam iusto nemo consequuntur sint nulla quod sit aut animi molestiae corrupti atque? Eius, eveniet!
                </p>
                <?php if (!empty($_GET['email'])) : ?>
                    <div class="alert alert-<?= $alert['status']; ?>" role="alert">
                        <strong><?= $alert['message']; ?></strong>
                    </div>
                <?php endif; ?>
                <form action="../confirmation.php" method="get">
                    <div class="mb-3">
                        <input class="form-control" type="text" name="email" id="email" placeholder="Scrivi la tua email qui">
                        <button class="mt-1" type="submit">invia qui</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>