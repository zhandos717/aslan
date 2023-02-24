<?php

$data = [
    [1, 1, '1 com'],
    [2, 1, '2 com'],
    [3, 2, '3 com'],
    [4, 1, '4 com'],
    [5, 2, '5 com'],
    [6, 3, '6 com'],
    [7, 7, '7 com']
];

$res = [];


foreach($data as $i) {
  if ($i[0] == $i[1]){
      $i[1] = 0;
  }
  
  $res[$i[1]][] = [$i[0],$i[2]];
}

function generate($arr, $root = 0) {
    $html .= "<ul>\n";
    foreach($arr[$root] as $i) {
        $html .= "<li>\n";
        $html .= $i[1];
        if (isset($arr[$i[0]]))
        {
           $html .= generate($arr, $i[0]);
        }
        $html .= "</li>\n";
    }
    $html .=  "</ul>\n";
    
  return $html;
}


?>


<!DOCTYPE html>
<html>
<body>
<?= generate($res);?>
</body>
</html>
