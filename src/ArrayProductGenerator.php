<?php

    class ArrayProductGenerator
    {
 
  public $result;
 public function __construct($input_array) 
   {
        //condition to check if the values in the array contain any negative numbers.if so it returns an empty array
        if(min($input_array)<0)
        {
        return $this->result=[];  
        }
        else
        {
         $n=count($input_array);
		// Initialize memory  
   		 // to all arrays 
  		 $left = array(); 
    	 $right = array(); 
    	 $prod = array();
    	 // Left most element of  
   		 // left array is always 1 
   		 $left[0] = 1; 
    	 $right[$n - 1] = 1; 
    
    
    // Construct the left array 
    for ($i = 1; $i < $n; $i++) 
        $left[$i] = $input_array[$i - 1] *  $left[$i - 1]; 
  
    // Construct the right array 
    for ($j = $n - 2; $j >= 0; $j--) 
        $right[$j] = $input_array[$j + 1] *  $right[$j + 1]; 
  
    // Construct the product array  
    // using left[] and right[] 
    for ($i = 0; $i < $n; $i++) {
        $prod[$i] = $left[$i] *   $right[$i]; 
   			 }
        $this -> result = $prod;
    
			}//end of else
      }

        public function results(): ?array
        {
            return $this->result;
        }

    }//end of class
