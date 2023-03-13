<?php
    //week 2 task:
    /*Write a validation logic for a simple voting system. 
    Validations to check includes: 
        Check if voter is above 18 years Check if voter has PVC Check if voter’s ward is 020
     If all checks out, echo “Voter eligible to vote”. If any fails, echo why it failed.
    */

    //this function accepts voters age,a true or false value for voter_has_pvc and voters ward(numeric string)
    function validateVoter($voter_age, $voter_has_pvc, $voter_ward){
        //lets checks if all 3 validation conditions passed
        if ($voter_age >= 18 && $voter_has_pvc == true && $voter_ward == "020"){
            // all 3 conditions passed
            echo "VOTER ELIGIBLE TO VOTE! <br/><br/>"; // 
        }else{
            // validation above didn't pass so lets find which of them failed,
            // and display a corresponding message to the user.
            echo "OOPS!!! YOU'RE NOT ELIGIBLE TO VOTE! <br/>REASONS: <br/>";
            if($voter_age < 18 ){
                echo "You must be 18years and above! <br/>";
            }
            if($voter_has_pvc == false){
                echo "You don't have a PVC<br/>";
            }
            if ($voter_ward != "020"){
                echo "Only Ward 020 voters are eligible to vote here </b>";
            }
        }
    }
	
    //lets create 2 associative arrays to hold voter1 and voter2 details respectively
    $voter1 = array('age'=> 26,'has_pvc'=>true, 'ward'=>"020");
    $voter2 = array('age'=> 14,'has_pvc'=>false, 'ward'=>"010");

    //lets call our function & pass voter1 and voter2 details as arguments respectively.
    validateVoter($voter1['age'], $voter1['has_pvc'], $voter1['ward']);// eligible to vote
    validateVoter($voter2['age'], $voter2['has_pvc'], $voter2['ward']);// not eligible to vote

?>
