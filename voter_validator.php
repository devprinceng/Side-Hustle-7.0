<?php
    //week 2 task:
    /*Write a validation logic for a simple voting system. 
    Validations to check includes: 
        Check if voter is above 18 years Check if voter has PVC Check if voter’s ward is 020
     If all checks out, echo “Voter eligible to vote”. If any fails, echo why it failed.
    */

    //this function accepts voters age,a true or false value for voter_has_pvc and voters ward(numeric string)
    function validateVoter($voter_age, $voter_has_pvc, $voter_ward){
        //check if all 3 validation conditions passed
        if ($voter_age >= 18 && $voter_has_pvc && $voter_ward == "020"){
            // all 3 conditions passed
            echo "<br>VOTER ELIGIBLE TO VOTE! <br/><br/>";
        }else{
            // validation above didn't pass so lets find which of them failed,
            // and display a corresponding message to the user.
            echo "<br>OOPS!!! YOU'RE NOT ELIGIBLE TO VOTE! <br/>REASONS: <br/>";
            if($voter_age < 18 ){
                echo "You must be 18years and above! <br/>";
            }
            if(!$voter_has_pvc){ //voter has no pvc
                echo "You don't have a PVC <br/>";
            }
            if ($voter_ward != "020"){
                echo "Only Ward 020 voters are eligible to vote here <br/>";
            }
        }
    }
	
    //lets create 2 associative arrays to hold voter1, voter2 & voter3 details respectively
    $voter1 = array('age'=> 26,'has_pvc'=>true, 'ward'=>"020");
    $voter2 = array('age'=> 14,'has_pvc'=>true, 'ward'=>"010");
    $voter3 = array('age'=> 18,'has_pvc'=>false, 'ward'=>"");
    $voter4 = array('age'=> 21,'has_pvc'=>true, 'ward'=>"020");

    //lets call our function & pass voter1,voter2, voter3 $ voter4 details as arguments respectively.
    validateVoter($voter1['age'], $voter1['has_pvc'], $voter1['ward']);// eligible to vote
    validateVoter($voter2['age'], $voter2['has_pvc'], $voter2['ward']);// not eligible to vote
    validateVoter($voter3['age'], $voter3['has_pvc'], $voter3['ward']);// not eligible to vote
    validateVoter($voter4['age'], $voter4['has_pvc'], $voter4['ward']);// eligible to vote

?>

