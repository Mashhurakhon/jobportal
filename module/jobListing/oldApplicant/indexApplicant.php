<div>
    <form action="?action=profFilter" method="get">
        <input type="text" name="prof" placeholder="">
        <input type="submit" value="ПОИСК">
        <input type="hidden" name="action" value="profFilter">
    </form>
    <form action="?action=filter" method="get">
        <input type="submit" value="Filter">
        <input type="hidden" name="action" value="filter">
    </form>
    <form action="?action=allVacancies" method="get">
        <input type="submit" value="Показать все вакансии">
        <input type="hidden" name="action" value="allVacancies">
    </form>
    <?php
        if($_GET['action'] == "profFilter"){
            $prof = $_GET['text'];
    ?>
    <div>
        <?php 
            $query = "select * from employer as e left join professions as p on e.profession_id=p.id where p.profession like $prof;";
            $result = $mysqli->query($query);
            while ($row = $result->fetch_assoc()){
        ?>
        <div class="container" style="width: 80%; height: auto; border: 1px solid grey; border-radius: 10px; box-shadow: 5px 5px 5px grey; margin-top: 15px;">
            <table class="table">
                
                <tr> 
                    <td style="float: left; font-weight: bold; font-size: 1.2em;"><?=$row['prof_fullname'];?></td>
                    <td> </td>
                    <td class="date" style="float: right; font-size: 1em;"><?=$row['employerName'];?></td>
                
                </tr>
                <tr>
                    <td colspan=3 style="width: 200px; overflow: hidden;"><?=$row['info'];?></td>
                </tr>
                <tr>
                    <td class="time" style="float: left; font-size: 1.0em"><?=$row['payment'];?>сомони</td>
                    <td> </td>
                    <td class="time" style="float: right; font-size: 0.9em"><?=$row['addDate'];?></td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td class="time" style="float: right;">
                        <input type="button" value="Посмотреть" class="btn btn-default">
                    </td>
                </tr>
            </table>
        </div>
        <?php 
            } 
        ?>
    </div>
    <?php } ?>
</div>