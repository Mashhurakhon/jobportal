<?php
    $action = $_GET['action'];

    if ($action == "allVacancies"){
        $jobNumQuery = "SELECT count(*) as num from employer as e left join professions as p on e.profession_id=p.id left join regions as r on r.id=e.region_id;";

        $query = "SELECT * from employer as e left join professions as p on e.profession_id=p.id
                    left join regions as r on e.region_id=r.id order by (cast(e.addDate as datetime) + cast(e.timestamp as time)) desc;";
    
    }
    
    else if($action == "jobFilter"){
        if(isset($_GET['prof']) && !empty($_GET['prof'])){
            $profession = htmlspecialchars($_GET['prof']);
            echo $profession;
        }
        if(isset($_GET['jobStatus']) && !empty($_GET['jobStatus'])){
            $status = htmlspecialchars($_GET['jobStatus']);
            echo $status;
        }
        if(isset($_GET['locality']) && !empty($_GET['locality'])){
            $locality = htmlspecialchars($_GET['locality']);
            echo $locality;
        }
        if(isset($_GET['experience']) && !empty($_GET['experience'])){
            $experience = htmlspecialchars($_GET['experience']);
            echo $experience;
        }
        if(isset($_GET['education']) && !empty($_GET['education'])){
            $education = htmlspecialchars($_GET['education']);
            echo $education;
        }
        if(isset($_GET['schedule']) && !empty($_GET['schedule'])){
            $schedule = htmlspecialchars($_GET['schedule']);
            echo $scedule;
        }
        if(isset($_GET['occupation']) && !empty($_GET['occupation'])){
            $occupation = htmlspecialchars($_GET['occupation']);
            echo $occupation;
        }
        if(isset($_GET['paymentFrom']) && !empty($_GET['paymentFrom'])){
            $paymentFrom = htmlspecialchars($_GET['paymentFrom']);
            echo $paymentFrom;
        }
        if(isset($_GET['paymentTo']) && !empty($_GET['paymentTo'])){
            $paymentTo = htmlspecialchars($_GET['paymentTo']);
            echo $paymentTo;
        }
        
        $jobNumQuery = "SELECT count(*) as num from employer as e left join professions as p on e.profession_id=p.id left join regions as r on r.id=e.region_id
                        where p.id=$prof and 'status'='$status' and r.id=$locality and e.experience='$experience'
                        and e.education='$education'  and e.occupation_type='$occupation'
                        and e.payment>=$paymentFrom and e.payment<=$paymentTo;";

        $query = "SELECT * from employer as e left join professions as p on e.profession_id=p.id
                    left join regions as r on e.region_id=r.id where p.id=$prof and 'status'='$status' 
                    and r.id=$locality and e.experience='$experience' and e.education='$education' 
                     and e.occupation_type='$occupation' and e.payment>=$paymentFrom 
                    and e.payment<=$paymentTo order by (cast(e.addDate as datetime) + cast(e.timestamp as time)) desc;";
/*
        $jobNumQuery = "SELECT count(*) as num from employer as e left join professions as p on e.profession_id=p.id left join regions as r on r.id=e.region_id;";

        $query = "SELECT * from employer as e left join professions as p on e.profession_id=p.id
                    left join regions as r on e.region_id=r.id order by (cast(e.addDate as datetime) + cast(e.timestamp as time)) desc;";
*/

    }

    else{
        $jobNumQuery = "SELECT count(*) as num from employer as e left join professions as p on e.profession_id=p.id left join regions as r on r.id=e.region_id
                    where p.profession like '$prof' and r.locality like '$region';";

        $query = "SELECT * from employer as e left join professions as p on e.profession_id=p.id left join regions as r on e.region_id=r.id 
                    where p.profession like '$prof' and r.locality like '$region' order by (cast(e.addDate as datetime) + cast(e.timestamp as time)) desc;";
    }
   
?>