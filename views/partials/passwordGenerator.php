<?php
function random_string($length)
{
   $string = "";
   $chars = "abcdefghijklmanopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
   $size = strlen($chars);
   for ($i = 0; $i < $_GET['passwordLength']; $i++) {
       $string .= $chars[rand(0, $size - 1)];

   }
   return $string; 
}

$password = random_string($string)
?>
<section class="newsletter bg-dark text-light py-5">
        <div class="container">
            <h3>Generate your password HERE</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia possimus, explicabo amet quisquam laborum delectus quam iusto nemo consequuntur sint nulla quod sit aut animi molestiae corrupti atque? Eius, eveniet!
            </p>
            <form action="" method="get">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="mb-0">Lunghezza Password:</p>
                    <div>
                        <input type="number" min="8" max="50" required name="passwordLength" id="passwordLength" >
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
                <span><strong>La tua password è: <?= $password ?></strong></span>
            </div>

            </form>
        </div>
    </section>
</section>