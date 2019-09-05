<?php
	class Post{

		public function Post($val,$funct){
			if(isset($_POST['btn'])){
				$btn=$_POST['btn'];
				if($btn==$val){
					$funct();
					echo "holaaaa";
				}
			}
		}
	}
?>