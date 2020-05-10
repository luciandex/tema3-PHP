<?php 

function checkSort(array $arr) :string
{
    $initial = $arr;
    $sorted = $arr;
    sort($sorted);
    if ($initial == $sorted) return "Array is sorted! Array = ".implode(", ",$arr).PHP_EOL."<br>";
    else return "Array isn't sorted! Array = ".implode(", ",$arr).PHP_EOL."<br>";
}


echo "SORTARE 1".PHP_EOL."<br>";

$vector = array(1,2,8,3,5);

echo checkSort($vector);

//echo "Array before sorting: ".implode(", ",$vector).PHP_EOL."<br>";

function sorting(array $arr):array
{
  if (count($arr) < 2) {return $arr;}
    for($i = 0; $i <=  count($arr) - 2; $i++)
    {
        for($j = $i+1; $j <= count($arr)-1; $j++)
        {
            if($arr[$i] > $arr[$j])
            {
                $sorted = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $sorted;
            }
        }
    }
     return $arr;
}

echo checkSort(sorting($vector));

echo "<hr>";

echo "SORTARE 2".PHP_EOL."<br>";

$qvector = array(5,14,1,12,11,0,9,8,7,6);

echo checkSort($qvector);

function quick(array $arr) : array
 {
	if(count($arr) < 2) return $arr;
	
	$low = $hi = array();
	$key = key($arr);
	$pin = array_shift($arr);
	
	foreach($arr as $val)
	{
		if($val <= $pin) 
		{
		$low[] = $val;
		}
		else 
		{
		$hi[] = $val;
		}
	}
	return array_merge(quick($low),array($key=>$pin),quick($hi));
}
 
echo checkSort(quick($qvector));

