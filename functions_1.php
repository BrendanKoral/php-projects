<?php
	// Create an array and push on the names
    // of your closest family and friends
    $friends = array(); 
    array_push($friends, "Brandon"); 
    array_push($friends, "Kasia");
    array_push($friends, "Wes");
    array_push($friends, "Trent");
    array_push($friends, "Matt");
    array_push($friends, "Mandy");
    array_push($friends, "Chrissy");
    
    $total = count($friends); 
    
    $sorted = sort($friends); 
    
    $random = rand(0,$total); 
    
    $thirsty = $friends[$random]; 
    
    $upper = strtoupper($thirsty); 
    
    echo $upper; 
    
	// Sort the list

	// Randomly select a winner!

	// Print the winner's name in ALL CAPS
	?>