<html>
<body>
<form action ="" method="post">

    CALCULATOR <br><br>

    Input First Number:<br>
    <input type="text" name="num1" value=""><br><br>

    Input Second Number:<br>
    <input type="text" name="num2" value=""><br><br>
    <input type="submit" name="a" value="+"></button>
    <input type="submit" name="s" value="-"> </button>
    <input type="submit" name="m" value="*"> </button>
    <input type="submit" name="d" value="/"> </button>

</form>
<?php

if(isset($_POST['a']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $add = $num1+$num2;
        echo "Sum: ", $add;
    }

if(isset($_POST['s']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $s = $num1-$num2;
        echo "Difference: ", $s;
    }

if(isset($_POST['m']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $m = $num1*$num2;
        echo "Product: ", $m;
    }

if(isset($_POST['d']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $d = $num1/$num2;
    echo "Quotient: ", $d;
}
?> 

</body>
</html>
//pull request
