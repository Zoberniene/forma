<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <title>Forma</title>
    </head>
    <body>
        <ul>
        <?php
        if(isset($_POST['send'])){ //tikrinama, ar mygtukas buvo paspaustas
            foreach($_POST as $key => $item) {
                $item = htmlspecialchars($item);
                if ($key != 'send'){
                    echo "<li>$key: $item</li>";
                }
            }
        }
        ?>
        </ul>
        <div class="container">
            <h2 class="my-3">Duomenų informacija</h2>
            <form method="post">
                <div class="form-group row">
                    <label class="col-2 col-form-label">El. pašto adresas:<span class="text-danger">*</span></label>
                    <div class="col-10">
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Slaptažodis:<span class="text-danger">*</span></label>
                    <div class="col-10">
                        <input type="password" class="form-control" name="password" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Pakartoti slaptažodį:<span class="text-danger">*</span></label>
                    <div class="col-10">
                        <input type="password" class="form-control" required>
                    </div>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="checkbox" id="gridCheck1" name="agree">
                    <label class="form-check-label" for="gridCheck1">
                        Sutinku su <u><a href="url">taisyklėmis</a></u>
                    </label>
                </div>

                <h2 class="my-3">Pasitikrinkite sąskaitos adresą</h2>

                <div class="form-group row">
                    <label class="col-2 col-form-label">Lytis<span class="text-danger">*</span></label>
                    <select class="custom-select col-10" name="gender">
                        <option name="moteris">Moteris</option>
                        <option name="vyras">Vyras</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Vardas:<span class="text-danger">*</span></label>
                    <div class="col-10">
                        <input type="text" class="form-control" name="firstName" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Pavardė:<span class="text-danger">*</span></label>
                    <div class="col-10">
                        <input type="text" class="form-control" name="lastName" required>
                    </div>
                </div>
                <div class="form-row">
                    <label class="col-2 col-form-label">Gatvė, namo(buto) nr.:<span class="text-danger">*</span></label>
                    <div class="form-row">
                        <div class="col-7">
                            <input type="text" class="form-control" name="street" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="number" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row align-items-center">
                    <label class="col-2 col-form-label">Pašto kodas:<span class="text-danger">*</span></label>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="postIndex" required>
                        </div>
                        <div class="col">
                            <u><a href="url">Pašto kodo paieška</a></u>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row align-items-center">
                    <label class="col-2 col-form-label">Miestas:<span class="text-danger">*</span></label>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="city" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Šalis:<span class="text-danger">*</span></label>
                    <select class="custom-select col-10" name="country" required>
                        <option name="-">-</option>
                        <option name="Lithuania">Lietuva</option>
                        <option name="Latvia">Latvija</option>
                        <option name="Estonia">Estija</option>
                        <option name="Poland">Lenkija</option>
                        <option name="Germany">Vokietija</option>
                        <option name="France">Prancūzija</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Telefonas:<span class="text-danger">*</span></label>
                    <div class="col-10">
                        <input type="number" class="form-control" name="phone" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Papildoma informacija: <span class="text-muted">(Pavyzdžiui vartelių/durų kodas)</span></label>
                    <textarea name="message" class="form-control col-10" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <p class="text-muted mx-auto">Prašome užpildyti visus pažymėtus laukus<span class="text-danger">*</span></p>

                <button type="submit" class="btn btn-secondary mx-auto" name="send">Registruotis</button>

            </form>
        </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>