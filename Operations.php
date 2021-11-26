<html>
<body>
<?php
class Arithmetic
{
    public $a;
    public $b;
   public static function sum($a,$b)
    {
        $add = $a + $b;
        echo 'sum is :' . $add;
    }
    function subtract($a,$b=6)
    {
            $minus=$a-$b;
            echo 'subtraction is : ' .$minus;
    }
    function multiplication($a,$b)
    {
        $multiply=$a*$b;
        echo 'multiplication is :' .$multiply;

    }
    function division($a,$b)
    {
        $division=$a/$b;
        echo 'quoient is :' .$division;
        echo '<br>';
        echo 'remainder is :' .$a%$b;

    }
    function stringFuntions()
    {
        echo strlen("Hello world!");
        echo '<br>';
        echo str_word_count("Hello world!");
        echo '<br>';
        echo strrev("Hello world!");
        echo '<br>';
        echo strpos("Hello world!", "world"); // Search for a text within string;
        echo '<br>';
        echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
        echo '<br>';
        echo '<br>';
    }
    function dateFuntions()
    {
        $date=date_create("2013-03-15");
        date_add($date,date_interval_create_from_date_string("40 days"));
        echo date_format($date,"Y-m-d");
        echo '<br>';
        echo "date: " .date("y/m/d"). "<br>";
        echo "date: " .date("d-m-y"). "<br>";
        //echo(date("M-d-Y",mktime(0,0,0,2,12,98))."<br />");
echo '<br>';
        echo date("d/F/Y").'<br>';
        echo date("j/M/y").'<br>';
        echo date("s/m/Y").'<br>';
        echo date("d/F/Y/I").'<br>';
        echo date("z").'<br>';
        echo date("w").'<br>';
        echo date("t").'<br>';
        echo date("L").'<br>';


    }
    function add_five(&$value)
    {
        $value += 5;
    }

}
echo 'Calling of Funtions....';
echo '<br>';
echo '<br>';

$object=new Arithmetic();
Arithmetic::sum(4,79);
echo '<br>';

$object->subtract(4);
echo '<br>';

$object->multiplication(2,3);
echo '<br>';

$object->division(12,4);
echo '<br>';

$object->stringFuntions();
echo '<br>';

$num = 2;
$object->add_five($num);
echo $num;
echo '<br>';
echo "date funtioons calling <br>";
$object->dateFuntions();
?>
</body>
</html>
