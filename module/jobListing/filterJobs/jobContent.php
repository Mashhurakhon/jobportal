<?php
    if(isset($_GET['profession']) && !empty($_GET['profession']))
    {
        $prof = htmlspecialchars($_GET['profession']);
    }
    if(isset($_GET['region']) && !empty($_GET['region']))
    {
        $region = htmlspecialchars($_GET['region']);
    }

    require_once("sortJobs.php");

    $result = $mysqli->query($jobNumQuery);
    // var_dump( $result);
    $num = $result->fetch_assoc();
?>
<!-- Count of Job list Start -->
<div class="row">
    <div class="col-lg-12">
        <div class="count-job mb-35">
            <span>Найдено вакансий: <?=$num['num'];?></span>
            <!-- Select job items start -->
            <div>
                <span>Сортировка</span>
                <div style="float: right">
                    <select name="select">
                        <option value="new">новые</a></option>
                        <option value="old">старые</a></option>
                        <option value="payment">высокооплачиваемые</a></option>
                    </select>
                </div>
            </div>
            <!--  Select job items End-->
        </div>
    </div>
</div>
<!-- single-job-content -->
<?php  
    $res = $mysqli->query($query);
    while ($row = $res->fetch_assoc()){   
?>
<div class="single-job-items mb-30">
    <div class="job-items">
        <div class="company-img">
            <a href="#"><img src="assets/img/icon/job-list1.png" alt=""></a>
        </div>
        <div class="job-tittle job-tittle2">
            <a href="#">
                <h4><?=$row['prof_fullname'];?></h4>
            </a>
            <ul>
                <li><?=$row['employerName'];?></li>
                <li><i class="fas fa-map-marker-alt"></i><?=$row['locality'];?></li>
                <li><?=$row['payment'];?>сомонӣ</li>
            </ul>
        </div>
    </div>
    <div class="items-link items-link2 f-right">
        <a href="job_details.html">Посмотреть</a>
        <span><?=$row['addDate'];?></span>
    </div>
</div>
<?php } ?>