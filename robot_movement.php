<?php

$path="LMLMLMLMM";
$starting_point="1 2 N";
$final_destination= robot_movement($path,$starting_point);
echo $final_destination;

function robot_movement($path,$starting_point){
 
	 $starting_point=explode(" ",$starting_point);
	 $x = $starting_point[0];
	 $y = $starting_point[1];
	 $current_direction=$starting_point[2];
 
	$path_len=strlen($path);
	for ($i = 0; $i < $path_len; $i++){
	
		// Find current move	
		$move = $path[$i];
	
		 // If move is left or right, then change direction
		if ($move == 'R'){
				if($current_direction=='N'){
					$current_direction='E';
				}
				else if($current_direction=='E'){
					$current_direction='S';
				}
				else if($current_direction=='S'){
					$current_direction='W';
				}
				else if($current_direction=='W'){
					$current_direction='N';
				}
			
			}
		else if ($move == 'L'){
				if($current_direction=='N'){
					$current_direction='W';
				}
				else if($current_direction=='E'){
					$current_direction='N';
				}
				else if($current_direction=='S'){
					$current_direction='E';
				}
				else if($current_direction=='W'){
					$current_direction='S';
				}
		}
        else // If move is M, then change x or y according to current direction
        {
			if($current_direction=='N'){
					$y++;
			}
			else if($current_direction=='S'){
				$y--;
			}
			else if($current_direction=='E'){
				$x++;
			}
			else if($current_direction=='W'){
				$x--;
			}
        }
		
	}
 
 return $x.' '.$y.' '.$current_direction;
}

?>
