<div>
<form action="/?calculate=Kelvin" method="post">
            <input type="number" name="num" placeholder="Value">
            <select name="operator"> 
                <option>Celsius</option>
                <option>Farhrenheit</option>
                <option>Kelvin</option>
            </select>
            <br>
            <button type="submit" name="submit" value="submit">Calculate</button>
        </form>
        <p>The answer is: </p>
        <?php
           if(isset($_POST['submit'])) {
               $result = $_POST['num'];
               $operator = $_POST['operator'];
               $CalcHistory = 'CalcHistory.txt';
               switch($operator){
                   case "Celsius":
                    echo $result - 273.15;
                    $resultCel = $result - 273.15;
                    $history = "$result kelvin = $resultCel Celsius\n";
                 file_put_contents($CalcHistory, $history, FILE_APPEND | LOCK_EX);
                    break;
                   case "Farhrenheit":
                    echo $result - 457.87;
                    $resultFar = $result - 457.87;
                    $history = "$result kelvin = $resultFar fahrenheit\n";
                 file_put_contents($CalcHistory, $history, FILE_APPEND | LOCK_EX);
                    break;
                    case "Kelvin":
                    echo $result;
                    $resultKel= $result;
                    $history = "$result kelvin = $resultKel kelvin\n";
                 file_put_contents($CalcHistory, $history, FILE_APPEND | LOCK_EX);
                    break;                 
               }
           }
        ?>
</div>