<div>
<form action="/?calculate=Celsius" method="post">
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
                    echo $result;
                    $resultCel = $result;
                    $history = "$result celsius = $resultCel celsius\n";
                 file_put_contents($CalcHistory, $history, FILE_APPEND | LOCK_EX);
                    break;
                   case "Farhrenheit":
                    echo ($result * 9/5) + 32;
                    $resultFar = ($result * 9/5) + 32;
                    $history = "$result celsius = $resultFar fahrenheit\n";
                 file_put_contents($CalcHistory, $history, FILE_APPEND | LOCK_EX);
                    break;
                    case "Kelvin":
                    echo $result + 273.15;
                    $resultKel= $result + 273.15;
                    $history = "$result celsius = $resultKel kelvin\n";
                 file_put_contents($CalcHistory, $history, FILE_APPEND | LOCK_EX);
                    break;                 
               }
           }
        ?>
</div>