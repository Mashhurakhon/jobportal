<!-- Job List Area Start -->
<div class="job-listing-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <!-- Left content -->
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="row">
                    <div class="col-12">
                            <div class="small-section-tittle2 mb-45">
                            <div class="ion"> <svg 
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="20px" height="12px">
                            <path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
                                d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                            </svg>
                            </div>
                            <h4>Фильтры</h4>
                        </div>
                    </div>
                </div>
                <!-- Job Category Listing start -->
                <form action="job_listing.php" method="get">
                    <div class="job-category-listing mb-50">
                        <!-- single one -->
                        <div class="single-listing">
                            <div class="small-section-tittle2">
                                    <h4>Специальность</h4>
                            </div>
                            <!-- Select job items start -->
                            <div class="select-job-items2">
                                <select name="prof">
                                    <?php 
                                        if(isset($_GET['profession']) && !empty($_GET['profession']))
                                        {
                                            $profession = htmlspecialchars($_GET['profession']);
                                        }
                                        $jobQuery = "select * from professions;";
                                        $jobRes = $mysqli->query($jobQuery);
                                        while($job=$jobRes->fetch_assoc()){
                                            if($job['profession'] == $profession){
                                    ?>
                                        <option value="<?=$job['id'];?>" selected><?=$job['profession'];?></option>                                   
                                    <?php } else{ ?>
                                        <option value="<?=$job['id'];?>"><?=$job['profession'];?></option>
                                    <?php } }?>
                                </select>
                            </div>
                            <!--  Select job items End-->
                            <!-- select-Categories start -->
                            <div class="select-Categories pt-80 pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Статус учреждения</h4>
                                </div>
                                <label class="container">все
                                    <input type="radio" name="jobStatus" value="все" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">государственное
                                    <input type="radio" name="jobStatus" value="государственное">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">частное
                                    <input type="radio" name="jobStatus" value="частное">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">межгосударственное
                                    <input type="radio" name="jobStatus" value="межгосударственное">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- select-Categories End -->
                        </div>
                        <!-- single two -->
                        <div class="single-listing">
                            <div class="small-section-tittle2">
                                    <h4>Местонахождение</h4>
                            </div>
                            <!-- Select job items start -->
                            <div class="select-job-items2">
                                <select name="locality">
                                    <?php
                                        if(isset($_GET['region']) && !empty($_GET['region']))
                                        {
                                            $reg = htmlspecialchars($_GET['region']);
                                        }
                                        $regionQuery = "Select * from regions;";
                                        $regionRes = $mysqli->query($regionQuery);
                                        while($region = $regionRes->fetch_assoc()){
                                            if($region['locality'] == $reg){
                                    ?>
                                        <option value="<?=$region['id'];?>" selected><?=$region['locality'];?></option>
                                    <?php } else{ ?>
                                        <option value="<?=$region['id'];?>"><?=$region['locality'];?></option>
                                    <?php } } ?>
                                </select>
                            </div>
                            <!--  Select job items End-->
                            <pre> 
                                
                            </pre>
                            <div class="single-listing">
                                <div class="small-section-tittle2">
                                        <h4>Требуюмый опыт</h4>
                                </div>
                                <input type="number" name="experience">
                            </div>
                            <!-- select-Categories start -->
                            <div class="select-Categories pt-80 pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Образование</h4>
                                </div>
                                <label class="container">неполное среднее
                                    <input type="radio" name="education" value="неполное среднее">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">среднее
                                    <input type="radio" name="education" value="среднее">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">высшее
                                    <input type="radio" name="education" value="высшее" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">техническое
                                    <input type="radio" name="education" value="техническое">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- select-Categories End -->
                        </div>
                        <!-- single two -->
                        <div class="single-listing">
                            <div class="small-section-tittle2">
                                    <h4>График работы</h4>
                            </div>
                            <!-- Select job items start -->
                            <div class="select-job-items2">
                                <select name="schedule">
                                    <option value="без разницы">без разницы</option>
                                    <option value="5/2">5</option>
                                    <option value="2/2">2/2</option>
                                    <option value="сменный">сменный</option>
                                    <option value="гибкий">гибкий</option>
                                    <option value="на дому">на дому</option>
                                    <option value="другое">другое</option>
                                </select>
                            </div>
                            <!--  Select job items End-->
                            <!-- select-Categories start -->
                            <div class="select-Categories pt-80 pb-50">
                                <div class="small-section-tittle2">
                                    <h4> Тип занятости</h4>
                                </div>
                                <label class="container">полное
                                    <input type="checkbox" name="occupation" value="полное" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">частичное
                                    <input type="checkbox" name="occupation" value="частичное">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">2 года
                                    <input type="checkbox" name="occupation">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">3 года
                                    <input type="checkbox" name="occupation">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">5 лет и больше
                                    <input type="checkbox" name="occupation">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- select-Categories End -->
                        </div>
                        <!-- single three -->
                        <div class="single-listing">                
                            <div class="single-listing">
                                <div class="small-section-tittle2">
                                    <h4>Оплата от:</h4>
                                </div>
                                <input type="number" name="paymentFrom">
                            </div>
                            <div class="single-listing">
                                <div class="small-section-tittle2">
                                    <h4>Оплата до:</h4>
                                </div>
                                <input type="number" name="paymentTo">
                            </div>                        
                        </div>  <pre>
                        </pre>
                        <div class="single-listing">                
                            <div class="single-listing">
                                <input type="submit" value="Поиск" class="btn">
                                <input type="hidden" name="action" value="jobFilter">
                            </div>                       
                        </div>
                    </div>                
                </form>
                <!-- Job Category Listing End -->
            </div>