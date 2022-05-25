<html>
    <head>

    </head>
    <body>
        <div class="header">
            <h1>Calculator</h1>
        </div>
        <div class="header">
            Select the temperature you want to convert:
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="/">Celsius</a>
                </li>
                <li>
                    <a href="/?calculate=Fahrenheit">Fahrenheit</a>
                </li>
                <li>
                    <a href="/?calculate=Kelvin">Kelvin</a>
                </li>
                <li>
                    <a href="/?calculate=History">History</a>
                </li>
            </ul>
        </div>

        <div>
        <?php
         if($calculate === 'Fahrenheit'):
            include("Templates/Pages/fahrenheit.php");
        elseif($calculate === 'Kelvin'):
            include("Templates/Pages/kelvin.php");
        elseif($calculate === 'History'):
            include("Templates/Pages/history.php");
        else:
        include("Templates/Pages/celsius.php");
        endif;
        ?>
        </div>
    </body>
</html>