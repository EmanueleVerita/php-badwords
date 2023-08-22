







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>


    <div>
        <form action="paragraph.php" method="GET">

            <div>
                <label for="paragraph">

                    Paragrafo

                </label>

                <div>

                    <textarea name="paragraph" id="paragraph" cols="30" rows="10" placeholder="Scrivi un paragrafo.....">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis possimus at, repellendus similique eos consectetur quas itaque libero quos quod.</textarea>

                </div>
            </div>

            <div>
                <label for="badWord">
                    Scrivi la parola da censurare
                </label>

                <div>

                    <input type="text" name="badWord" id="badWord" placeholder="Scrivi una parola da censurare...." value="Lorem">

                </div>
            </div>
            
            <button type="submit">
                INVIIA
            </button>
        </form>

    </div>

</body>
</html>