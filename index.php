<?php
include __DIR__ . '/views/layout/head.php';
?>

<body>
    <?php
    include __DIR__ . '/views/partials/header.php';
    include_once __DIR__. '/helpers/action.php'
    ?>
    <main>
    <section class="newsletter bg-success text-light py-5">
        <div class="container">
            <h3>Generate your password HERE</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia possimus, explicabo amet quisquam laborum delectus quam iusto nemo consequuntur sint nulla quod sit aut animi molestiae corrupti atque? Eius, eveniet!
            </p>
            <form action="" method="get">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="mb-0">Lunghezza Password:</p>
                    <div>
                        <input type="number" min="8" max="50" required name="passwordLength" >
                        <label for="passwordLength"></label>
                    </div>
                </div>
                <div class="d-flex justify-content-between my-3">
                    <p>Consenti ripetizioni di uno o più caratteri:</p>
                    <div class="d-flex flex-column text-start">
                        <div class="mb-3">
                            <input type="radio" id="repetition" name="repetition">
                            <label for="Si">Si</label><br>
                            <input type="radio" id="repetition" name="repetition">
                            <label for="No">No</label><br><br>                    
                            <input type="checkbox" id="Letters" name="Letters">
                            <label for="letters"> Lettere</label><br>
                            <input type="checkbox" id="Numbers" name="Numbers">
                            <label for="numbers">Numeri</label><br>
                            <input type="checkbox" id="Simbols" name="Simbols">
                            <label for="simbols"> Simboli</label><br>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>   
                </div>
                <div class="d-flex justify-content-center">
                <span class="p-5 bg-dark"><strong></strong></strong></strong>La tua password è: <?= $password ?></strong></span>
            </div>

            </form>
        </div>
    </section>
</section>
    </main>
    <?php
    include __DIR__ . '/views/layout/footer.php';
    ?>