<?php 
function content_filter($str)
{  
  $checks = ['<','>','"','[',']','?','%','\''];
  if (false !== $pos = multi_strpos($str, $checks))
  {
   return false;
  }else{
    return true;
  }  
}  

function multi_strpos($string, $check, $getResults = false)
{
  $result = array();
  $checks = (array) $check;

  foreach ($check as $s)
  {
    $pos = strpos($string, $s);

    if ($pos !== false)
    {
      if ($getResults)
      {
        $result[$s] = $pos;
      }
      else
      {
        return $pos;          
      }
    }
  }

  return empty($result) ? false : $result;
}
?>