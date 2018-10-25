<?php
class Address
{

    public $street_add1;
    public $street_add2;


    public $postal_code;

    public $city_name;

    /*Display address as HTML
		@return String
    */
    function tampilkan(){
    	$output = '';

    	// exectue 
    	$output .= $this->street_add1;
    		if ($this->street_add2) {
    			$output .= "<br>" . $this->street_add2;
    		}
    	return $output;
    }
}