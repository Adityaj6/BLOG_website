<?php 
require 'config/database.php';

if(isset($_POST['submit'])) {
    // get form data
    $title = filter_var($_POST['title'] ,FILTER_SANITIZE_FULL_SPECIAL_CHARS );
    $description = filter_var($_POST['description'] ,FILTER_SANITIZE_FULL_SPECIAL_CHARS );
    
     if(!$title){
         $_SESSION['add-category'] = "Enter Title";

     }elseif(!$description){
         $_SESSION['add-category'] = "Enter Description";

     }
      
     // redirect back to add category page with form data if there was invlaid input 
     if(isset($_SESSION['add-category'])){
       $_SESSION['add-category-data'] = $_POST;
       header('location: ' .ROOT_URL .'admin/add-category.php');
       die();

     }else{
         //insert category into database 
         $query = "INSERT INTO categories (title , description) VALUES ('$title' , '$description') ";
         $result = mysqli_query($connection , $query);
         if(mysqli_errno($connection)){
             $_SESSION['add-category'] = "couldn't add category";
             header('location' .ROOT_URL . 'admin/add-category.php');
             die();
         }else{
             $_SESSION['add-category-sucess'] = " $title category added successfully" ; 
             header('location' . ROOT_URL . 'manage-categories.php');
             die();
         }
     }

}
