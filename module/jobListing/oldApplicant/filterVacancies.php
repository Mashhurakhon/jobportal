<?php
// require_once('../../config/db.php');
?>

<form method="get">
    <h3>Вакансии</h3> 
    <div>
        <label for="prof">Специальность</label>
        <select name="profession" id="prof">
            <?php
                $query = "Select * from professions;";
                $res = $mysqli->query($query);
                while ($row = $res->fetch_assoc()){
            ?>
                <option name="prof<?=$row['id'];?>"><?=$row['profession'];?></option>
            <?php } ?>
        </select>
    </div>
    <div>
    <label for="region">Местонахождение</label>
        <select name="region" id="region">
            <?php
                $query = "Select * from regions;";
                $res = $mysqli->query($query);
                while ($row = $res->fetch_assoc()){
            ?>
                <option name="region<?=$row['id'];?>"><?=$row['region'];?></option>
            <?php } ?>
        </select>
    </div>
    <div>
    <label for="paymentFrom">Оплата от</label>
        <input type="number" name="paymentFrom" id="paymentFrom" placeholder="сомони">
    </div>
    <div> 
    <label for="paymentTo">Оплата до</label>
        <input type="number" name="paymentTo" id="paymentTo" placeholder="сомони">
    </div>
    <div> 
    <label for="seniority">Стаж</label>
        <input type="number" name="seniority" id="seniority" placeholder="стаж">
    </div>
    <div>
    <label for="schedule">График работы</label>
        <select name="schedule" id="schedule">
            <option name="5/2">5/2</option>
            <option name="2/2">2/2</option>
            <option name="6/1">6/1</option>
            <option name="flexible">гибкий</option>
            <option name="shift">сменный</option>
            <option name="remote">на дому</option>
            <option name="another">другое</option>
        </select>
    </div>
    <div>
    <label for="status">Тип учреждения</label>
        <select name="status" id="status">
            <option name="all_inst">все</option>
            <option name="national_inst">государственные учреждения</option>
            <option name="commercial_inst">Частные учреждения</option>
            <option name="commercial_inst">Межгосударственые учреждения</option>
        </select>
    </div>
    <div>
    <label for="date">Дата публикации</label>
        <select name="date_range" id="date">
            <option name="all_time" selected>за все время</option>
            <option name="3days">за последние 3 дня</option>
            <option name="7days">за последние 7днeй</option>
            <option name="month">за последний месяц</option>
            <option name="year">за последний год</option>
        </select>
    </div>
    <div>
        <input type="submit" value="Click" name="open">
    </div>
</form>

