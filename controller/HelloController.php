<?php
   
   class HelloController extends Controller {
   		public $layout = "NULL";
		
		//membuat controller dengan menampilkan string
		// cukup dipanggil dengan index.php?r=Hello
		function actionIndex(){
			echo "<title>hey broh</title>";
			echo "i'm just a newbie";
		}
		
		//1. membuat controller dengan memanfaatkan view untuk menampilkan string
		//2. membuat view dengan nama Tampil.php
		function actionTampil(){
			$this->render('Tampil');
		}
		
		
       
   }
     
   
?>