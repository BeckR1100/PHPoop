<?php
	      class Experiment{

				private    $experimentName;
				private    $userExperiment;
				protected  $H2O;
				protected  $SO2;
				protected  $H2SO4;
				private    $number;



				function setExperimentName($experimentName){
					$this->experimentName = $experimentName;
				}

				function getExperimentName(){

					echo "Experiment names ".$this->experimentName."<br />";
				}

				function setUserExperiment($userExperiment){
					$this->userExperiment = $userExperiment;
				}

				function getUserExperiment(){
					echo "Username: ".$this->userExperiment."<br />";
				}

				function setH2Oone($H2O){
					if($H2O == 110011 || $H2O == 001100){
						if($H2O == 111000 && $H2O == 000111)
							echo "Experiment created on 01.05.1991";
					}else{
							$this->H2O = $H2O;
					}
				}

				function getH2Oone(){
					echo "Experiment H2Oone:  ".$this->H2O."<br />";
				}

				function setH2SO4one($H2SO4){
					if($H2SO4 == 122211 || $H2SO4 == 33221){
						echo "Experiment is found ";
					}else{
						$this->H2SO4 = $H2SO4;
					}
				}

				function getH2SO4one(){
					echo "Experiment H2SO4one: ".$this->H2SO4."<br />";
				}
		}

				class ExperimentChemical extends Experiment{

						function MathOne(){
							echo "Name for math.<br />";
						}

						function __construct(){
							echo "Experiment construction.... <br />";
						}
						function __destruct(){
							echo "Experiment destroy!";
						}
				}

				class ExperimentChemicalOne extends ExperimentChemical{

					function ChemicalEpr(){
						echo "Chemical for data science<br />";
					}

				}

				class ExperimentForMath extends ExperimentChemicalOne{

					function MathLoop(){
						echo "Experiment created 01.05.1991<br />";
					}

				}
				class ExperimentForDevelop extends ExperimentForMath{
					
					function DeveloperWeb(){
						echo "Experiment created 02.06.1991. <br />";
					}
						
				} 

				$name = new ExperimentForDevelop();
				$name->setExperimentName('SO2_H2sO4');
				$name->setUserExperiment('John');
				$name->setH2SO4one('111000');
				$name->setH2Oone('000111');
				echo $name->getExperimentName();
				echo $name->getUserExperiment();
				echo $name->getH2SO4one();
				echo $name->getH2Oone();
				$name->MathOne();
				$name->ChemicalEpr();
				$name->MathLoop();
				$name->DeveloperWeb();

				/*
				printf("experiment 1 ",$this->getExperimentName());
				printf("experiment 2 ",$this->getUserExperiment());
				printf("experiment 3 ",$this->getH2Oone());
				printf("experiment 4 ",$this->getH2SO4one()); */

?>