<?php 

function getData($string, $callback){
	if(is_callable($string)){
		call_user_func($string);
		echo "Possible";
	}else{
		echo "Not possible<br>";
	}


	if(is_callable($callback)){
		$data = 'Jhon Doe';
		call_user_func($callback,$data);
		// echo "Possible"; 
	}else{
		echo "Not possible";
	}
}
getData('Hello', function($data){
	echo "I am " .$data;
});
// where 'Hello' is not a function but other one is a function.

?>