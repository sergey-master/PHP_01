<!-- Програма для вирішення квадратних рівнянь -->
<html>
<head> <title>Quadratic equation</title> </head>
<body>

<?php
    $a=isset($_POST['A'])?$_POST['A']*1:0;                      // Коефіцієнт A
    $b=isset($_POST['B'])?$_POST['B']*1:0;                      // Коефіцієнт B
    $c=isset($_POST['C'])?$_POST['C']*1:0;                      // Коефіцієнт C
    $x1=Quad ($a, $b, $c) [0];                                  // Перше рішення
    $x2=Quad ($a, $b, $c) [1];                                  // Друге рішення

    function Quad ($a, $b, $c) {
        $d=$b*$b-4*$a*$c;                                       // Дискримінант
        if ($a==0 or $d<0) return array (" ", " ");             // Рівняння має два рішення
        if ($d==0) return array (-$b/2/$a, " ");                // Рівняння має одне рішення
        return array ((-$b+sqrt($d))/2/$a, (-$b-sqrt($d))/2/$a);
    }
?>

<form action="equation.php" method="POST">  <!-- Форма для відображення вхідних даних та результатів -->
    <table>
        <tr>
            <td colspan='2'>
                A*X^2+B*X+C=0
            </td>
        </tr>
        <tr>
            <td style="width:50px">                         <!-- Коефіцієнт A -->
                Input A:
            </td>
            <td>
                <input type='text' name="A"
                       value='<?php echo $a ?>' >
            </td>
        </tr>
        <tr>
            <td style="width:50px">                         <!-- Коефіцієнт B -->
                Input B:
            </td>
            <td>
                <input type='text' name="B"
                       value='<?php echo $b ?>' >
            </td>
        </tr>
        <tr>
            <td style="width:50px">                         <!-- Коефіцієнт C -->
                Input C:
            </td>
            <td>
                <input type='text' name="C"
                       value='<?php echo $c ?>' >
            </td>
        </tr>
        <tr>
            <td colspan='2'>                                <!-- Кнопка "Розрахувати" -->
                <input type='submit' value='Calculate'>
            </td>
        </tr>
        <tr>
            <td style="width:50px">                         <!-- Перше рішення -->
                X1=
            </td>
            <td>
                <input value='<?php echo $x1 ?>' >
            </td>
        </tr>
        <tr>
            <td style="width:50px">                         <!-- Друге рішення -->
                X2=
            </td>
            <td>
                <input value='<?php echo $x2 ?>' >
            </td>
        </tr>
    </table>
</form>
</body>
</html>

<!-- Special for GeekHub -->
<!-- Дякую, що переглянули цей код =) -->