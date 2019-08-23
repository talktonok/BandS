<?php 
	
class formValidator{
	public $message;
	public function validateName($name){
		$isValid=false;

		if (!preg_match("%^[A-Za-z0-9\ \.\-\'\_']{3,50}$%", $name)) {
			$this->message[]='Inavlid Name';

			$isValid=false;

		}elseif ($name=="") {
			$isValid=false;
			$this->message[]='Name cannot be empty';
		}elseif(is_numeric($name)){
			$this->message[]='Name cannot be Numbers';
			$isValid=false;
		}else{
			$isValid=true;
		}
		return $isValid;
	}

	public function validateFullName($name){
		$isValid=false;

		if (!preg_match("%^[A-Za-z \.\-\'\_']{3,50}$%", $name)) {
			$this->message[]='Inavlid Name';

			$isValid=false;

		}elseif ($name=="") {
			$isValid=false;
			$this->message[]='Name cannot be empty';
		}elseif(is_numeric($name)){
			$this->message[]='Name cannot be Numbers';
			$isValid=false;
		}else{
			$isValid=true;
		}
		return $isValid;
	}
	public function validateCategory($category){
		$isValid=false;
		
		$k=0;
		
		if ($category=="") {
			$isValid=false;
			$this->message[]='Category cannot be empty';
		}else{

		$cat=all_categories();
		while ($result=mysqli_fetch_assoc($cat)) {
			if ($result['category_id']==$category) {
				$k++;
			}
		}

		
		if ($k==1) {
	 				$isValid=true;
	 			}else{
	 				$this->message[]='Inavlid Category';
	 			}

}
	 	return $isValid;
	 }
	 public function validateAddCategory($category){
		$isValid=false;
		
		$k=0;
		
		if (!preg_match("%^[A-Za-z \.\-\'\_']{3,50}$%", $category)) {
				$isValid=false;
				$this->message[]='Inavlid Category';
		}elseif ($category=="") {
			$isValid=false;
			$this->message[]='Category cannot be empty';
		}elseif (is_numeric($category)) {
			$isValid=false;
			$this->message[]='Category cannot be Numbers';
		}else{

		$cat=all_categories();
		while ($result=mysqli_fetch_assoc($cat)) {
			if ($result['category_name']==ucfirst($category)) {
				$k++;
			}
		}

		
		if ($k>=1) {
	 				$this->message[]='Category Taken';
	 			}else{
	 				$isValid=true;
	 			}
}
	 	return $isValid;
	 }



	public function validatePrice($value){
	 	$isValid=false;
	 	if($value==""){
	 		$this->message[]='Price cannot be empty';
	 		$isValid=false;
	 	}elseif (!preg_match( '/^(?:0|[1-9]\d*)(?:\.\d{2})?$/', trim($value))) {
	 		$this->message[]='Price Must be a number';
	 		$isValid=false;
	 	}else{
	 		$isValid=true;
	 	}
		return $isValid;
	}
	public function validateLocation($value){
	 	$isValid=false;
	 	if($value==""){
	 		$this->message[]='Addres cannot be empty';
	 		$isValid=false;
	 	}elseif (count($value)>5) {
	 		$this->message[]='Invalid Address';
	 		$isValid=false;
	 	}else{
	 		$isValid=true;
	 	}
		return $isValid;
	}

	public function validateNumber($value){
		$isValid=false;
	 	if($value==""){
	 		$this->message[]='Contact Number cannot be empty';
	 		$isValid=false;
	 	}elseif(!preg_match('%^[0-9]{11}$%',trim($value))) {
	 		$this->message[]='Inavlid Phone Number';
	 		$isValid=false;
	 	}else{
	 		$isValid=true;
	 	}
		return $isValid;
	}

	public function validateDescription($value){
		$isValid=false;
	 	if($value==""){
	 		$this->message[]='Description Cannot be empty';
	 		$isValid=false;
	 	}elseif (is_numeric($value)) {
	 		$this->message[]='Description cannot be only numbers';
	 		$isValid=false;
	 	}else{
	 		$isValid=true;
	 	}
		return $isValid;
	}
	public function validateEmail($email){
		$isValid=false;
		
		$k=0;
		
		if (!preg_match('%^[A-Za-z0-9._-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$%', $email)) {
			$isValid=false;
			$this->message[]='Invalid Email';
		}elseif ($email=="") {
			$isValid=false;
			$this->message[]='Email cannot be empty';
		}else{

		$cat=all_lanlords();
		while ($result=mysqli_fetch_assoc($cat)) {
			if ($result['email']==$email) {
				$k++;
			}
		}

		
		if ($k>=1) {
	 				$this->message[]='Email Already taken';
	 			}else{
	 				$isValid=true;
	 			}
		 			}

	 	return $isValid;
	 }


	public function validateCondition($value){
		$isValid=false;
		$condition=array('New','London_Used','Fairly_Used','Second_Hand');
		
	 	if($value==""){
	 		$this->message[]='Condition Cannot be empty';
	 		$isValid=false;
	 	}else{
	 		if (in_array($value, $condition)) {
	 			$isValid=true;
	 		}else{
	 			$this->message[]='Invalid Condition';
	 		}
	 	}

		return $isValid;
	}
	public function validateAdminCategory($value){
		$isValid=false;
		$condition=array('Main','Member');
		
	 	if($value==""){
	 		$this->message[]='Category Cannot be empty';
	 		$isValid=false;
	 	}else{
	 		if (in_array($value, $condition)) {
	 			$isValid=true;
	 		}else{
	 			$this->message[]='Invalid Category';
	 		}
	 	}

		return $isValid;
	}

	public function validateImage($type,$size){
		$isValid=false;
		 	
		 $valid_formats = array("image/JPG","image/JPEG","image/jpeg","image/jpg","image/png", "image/bmp");

		if (!(in_array($type,$valid_formats))){
			$this->message[]="Invalid Image Pictures Only";
		}elseif ($size>2048000){
			$this->message[]="Image greater than 1mb";
		}else{
			$isValid=true;
		}


		return $isValid;

	}
	public function confirmPassword($value,$pass){
		
		$isValid=false;
		if ($value===$pass) {
			$isValid=true;
		}else{
			$this->message[]="Password not thesame with confirmed password";
		}

		return $isValid;
	}
	public function validateTerms($value){
		
		$isValid=false;
		if ($value=="1") {
			$isValid=true;
		}else{
			$this->message[]="Please check terms and condition";
		}

		return $isValid;
	}

	public function getMessage(){
		return $this->message;
	}
	public function setMessage($value){
	$this->message=$value;
	}


}