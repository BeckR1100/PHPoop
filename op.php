<?php
		class Drone{

     	public   $machine;
     	public   $elisa;
     	private  $user;

     	function setMachineID($machine){

               if($machine == 1100 && $machine == 0011){
     		        $this->machine = $machine;
             }
     	}
     	function getMachineID(){
     		 echo "Drone machine ".$this->machine."<br />";
     	}
     	function setUserID($user){

               if($user == 'MN221' || $user == 'CF221'){
     		        $this->user = $user;
               }else{

                    echo "Username is not valid <br />";
               }    
     	}
     	function getUserID(){
     		return $this->user;
     	}
     	function setElisa($elisa){
     		$this->elisa = $elisa;
     	}
     	function getElisa(){
     		return $this->elisa;
     	}
     }

     class DroneOne extends Drone{

               function __construct(){

                    echo "Drone construction <br />";
               }

               function __destruct(){

                    echo "Drone software destry.<br />";
               }

               function DroneHardwareOne(){

                    echo "Drone hardware:  ";
               }

     }

     class DroneTwo extends DroneOne{

               function DroneSoftware(){

                    echo "Drone software: ";
               }
     }

	     $object1 = new DroneOne();
      	$object1->setMachineID("22121");
	     $object1->setElisa("black");
	     $object1->setUserID("John");
	     $object2 = clone $object1;
	     $object2->setMachineID("33221");
	     $object2->setElisa("blue");
	     $object2->setUserID("Marko");

         /* $object3 = new DroneOne();
          $object3->DroneSoftware();
          $object3->DroneHardwareOne(); */
          

          printf("Drone Username: %s <br />", $object1->getUserID());
	     printf("Drone ID: %d <br />", $object1->getMachineID());
	     printf("Drone Color: %s <br />", $object1->getElisa());
	     printf("Drone Username: %s <br />", $object2->getUserID());
	     printf("Drone ID: %d <br />", $object2->getMachineID());
	     printf("Drone Color: %s <br />", $object2->getElisa());  
?>
