<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
    <?php
    if (isset($_POST["submit"])) {
        if (!empty($_POST["first-number"]) && !empty(["first-number"])) {
            $firstNumber = $_POST["first-number"];
            $secondNumber = $_POST["second-number"];
            $submit = $_POST["submit"];
            $result = "";
            switch ($submit) {
                case "Add":
                    $result = $firstNumber + $secondNumber;
                    break;
                case "Subtract":
                    $result = $firstNumber - $secondNumber;
                    break;
                case "Multiply":
                    $result = $firstNumber * $secondNumber;
                    break;
                case "Divide":
                    $result = round($firstNumber / $secondNumber, 2);
                    break;
                case "Modulo":
                    $result = $firstNumber % $secondNumber;
                    break;
                default:
                    $result = "error";
                    break;
            }
        } else {
            echo "Er is iets fout gegaan!" . PHP_EOL;
        }
    }
    ?>
        <h1>Calculator</h1>
        <form method="post" class="form">
            <div>
                <input type="number" name="first-number" min=".00" step=".00" required>
                <label for="firstnumber" class="label">First Number</label>
            </div>
            <div>
                <input type="number" name="second-number" min=".00" step=".00 required>
                <label for=" second-number" class="label">Second Number</label>
            </div>
            <div>
                <input type="submit" name="submit" value="Add">
                <input type="submit" name="submit" value="Subtract">
                <input type="submit" name="submit" value="Multiply">
                <input type="submit" name="submit" value="Divide">
                <input type="submit" name="submit" value="Modulo">
            </div>
        </form>
        <h2>
            Uitkomst: <?php if (isset($result)) {
                            echo $result;
                        } ?>
        </h2>
</body>

</html>