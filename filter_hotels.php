<?php
/**
 * Template Name: filter_hotel
 */		
$hotel_data=file_get_contents("https://api.myjson.com/bins/tl0bp");
$hotel_data_arr=json_decode($hotel_data,true);
$object_to_array_data=object_to_array($hotel_data_arr);
 function objectToArray($d) {
        if (is_object($d)) {
            // Gets the properties of the given object
            // with get_object_vars function
            $d = get_object_vars($d);
        }		
        if (is_array($d)) {
            /*
            * Return array converted to object
            * Using __FUNCTION__ (Magic constant)
            * for recursive call
            */
            return array_map(__FUNCTION__, $d);
        }
        else {
            // Return array
            return $d;
        }
    }	
$i=0;
$j=0;
$bool=false;
$date_range=false;
foreach($object_to_array_data['hotels'] as $val){	
	if(isset($_GET['search_by']) && $_GET['search_by']!=''){	
		$check_exist_hotel_name= in_array($_GET['search_by'],$object_to_array_data['hotels'][$i]);
		if($check_exist_hotel_name==true){
			$bool=true;
			$filter_data_arr=$object_to_array_data['hotels'][$i];
		}
	}elseif(  (isset($_GET['from']) && $_GET['from']!='')  ){ //&& (isset($_GET['to']) && $_GET['to']!='' )
				foreach($object_to_array_data['hotels'][$i]['availability'] as $value){							
				$check_exist_availability_from= in_array($_GET['from'],$object_to_array_data['hotels'][$i]['availability'][$j]);
				//echo $i.','.$j.'<br>';
				$check_exist_availability_to= in_array($_GET['to'],$object_to_array_data['hotels'][$i]['availability'][$j]);
				if($check_exist_availability_from==true && $check_exist_availability_to==true){
					$date_range=true;
					$filter_data_arr=$object_to_array_data['hotels'][$i];
					
				}			
				$j++;
				if($j==3){$j=0;}
		}	
		
	}
$i++;
}
if($bool==true){
print_r($filter_data_arr);
}elseif($date_range==true){
print_r($filter_data_arr);
}else{
	echo 'No Result Found';
}
?>