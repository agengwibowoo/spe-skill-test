
<?php
class SpeSkillTest
{
  function narcissistic(int $num)
  {
    $numLen = strlen((string)$num);
    $numArr  = array_map('intval', str_split($num));
    $result = 0;
    foreach ($numArr as $n) {
      $result += pow($n, $numLen);
    }
    return $result === $num;
  }

  function parityOutlier(array $arr)
  {
    $odd = [];
    $even = [];
    if (count($arr) >= 3) {
      foreach ($arr as $n){
        if ($n % 2 === 0){
          array_push($even, $n);
        } else {
          array_push($odd, $n);
        }
      }
    }
    if (count($odd === 1)){
      return $odd[0];
    } elseif (count($even === 1)){
      return $even[0];
    } else {
      return false;
    }
  }
}
?>