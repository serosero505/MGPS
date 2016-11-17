<?php

$j = 0;

foreach($results as $result){

  $records[$j] = array('email' => $result->EMAIL,
					   'label' => $result->$item,
					   'value' => $result->$item
                     );
 $j++;				   
}

echo json_encode($records);