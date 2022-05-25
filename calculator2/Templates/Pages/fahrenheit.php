<div>
<form action="/?calculate=Fahrenheit" method="post">
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
                    echo ($result - 32) * 5/9;
                    $resultCel = ($result - 32) * 5/9;
                    $history = "$result fahrenheit = $resultCel celsius\n";
                 file_put_contents($CalcHistory, $history, FILE_APPEND | LOCK_EX);
                    break;
                   case "Farhrenheit":
                    echo $result;
                    $resultFar = $result;
                    $history = "$result fahrenheit = $resultFar fahrenheit\n";
                 file_put_contents($CalcHistory, $history, FILE_APPEND | LOCK_EX);
                    break;
                    case "Kelvin":
                    echo $result + 457.87;
                    $resultKel= $result + 457.87;
                    $history = "$result fahrenheit = $resultKel kelvin\n";
                 file_put_contents($CalcHistory, $history, FILE_APPEND | LOCK_EX);
                    break;                 
               }
           }
        ?>
</div>