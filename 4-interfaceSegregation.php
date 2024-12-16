<?php

interface jobsMethods{
	  
    public function workFulltime();
     
    public function getSalary();
     
   }
   
interface adminOfCompany{
     
    public function makeDecision();
   
   }
   
class Developer implements jobsMethods{
    public function workFulltime(){
         
         echo "developer code the project";
         
       }
    public function getSalary(){
         echo "developer get salary 3000 $";
       }
         
   }
   
class Security implements jobsMethods{
     
    public function workFulltime(){
         
         echo "Cybersecurity secure the project";
         
       }
    public function getSalary(){
         echo "developer get salary 3100 $";
       }
   }
   
class Adminstrtor implements jobsMethods, adminOfCompany{
    public function workFulltime(){
         
         echo "am boss work full time";
         
       }
    public function getSalary(){
         echo "boss get salary 4000 $";
       }
         
    public function makeDecision(){
         echo "am boss responsable of make decistion of my company";
       }
   }
$employer = new Adminstrtor();
$employer->makeDecision();  



?>