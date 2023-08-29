<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css" />
    <title>Untitled</title>
</head>
<body>
	<br>
    <div class="box">
        <form action="job_details.html" method='POST'>
           <div class="input-container">
                <input type="name" name="firstname"  value="<?=$_SESSION['firstname']?>" required>   
                <label>Имя:</label>
            </div>
            <div class="input-container">
                <input type="text" name="surname" value="<?=$_SESSION['surname']?>" required> 
                <label>Фамилия:</label>  
            </div>
            <div class="input-container">
                <input type="name" name="firstname"  value="<?=$_SESSION['firstname']?>" required>   
                <label>Имя:</label>
            </div>
            <div class="input-container">
                <input type="text" name="surname" value="<?=$_SESSION['surname']?>" required> 
                <label>Фамилия:</label>  
            </div>
            <div class="input-container">
                <input type="name" name="firstname"  value="<?=$_SESSION['firstname']?>" required>   
                <label>Имя:</label>
            </div>
            <div class="input-container">
                <input type="text" name="surname" value="<?=$_SESSION['surname']?>" required> 
                <label>Фамилия:</label>  
            </div>
            <div class="input-container">
                <input type="text" name="lastname" value="<?=$_SESSION['lastname']?>" required>   
                <label>Отчество:</label>
            </div>
            <div class="input-container">
                <input type="number" name="age" value="<?=$_SESSION['age']?>" required>
                <label>Возраст:</label>   
            </div>
            <div class="input-container">       
                <input type="text" name="city" value="<?=$_SESSION['city']?>" required>
                <label>Город:</label>
            </div>
            <div class="input-container">       
                <input type="text" name="address" value="<?=$_SESSION['address']?>" required>
                <label>Точный адрес (проспект,улица,номер):</label>
            </div>
            <div class="input-container">
                <input type="text" name="number" value="<?=$_SESSION['number']?>" required>    
                <label>Номер телефона:</label>
            </div>
            <div class="input-container">
                <input type="text" name="prof" value="<?=$_SESSION['prof']?>" required>
                <label>Профессия</label>        
            </div>
            <div class="Boxx">
                <label>Образование:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select class="select-css" name="educa" value="<?=$_SESSION['educa']?>">
                    <option name="applicant">Основное общее</option>
                    <option name="employer">Среднее общее</option>
                    <option name="otherPerson">Высшее</option>
                </select>
            </div>
            <br>
            <div class="input-container">
                <input type="text" name="seniority" value="<?=$_SESSION['seniority']?>" required>
                <label>Стаж работы</label>        
            </div>
            <div class="Boxx">
                <label>Пол:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select class="select-css" name="gender" value="<?=$_SESSION['gender']?>" required>
                    <option name="applicant">Мужчина</option>
                    <option name="employer">Женщина</option>
                </select>
            </div>
            <br>
            <div class="input-container">
                <input type="text" name="info" value="<?=$_SESSION['info']?>" required>
                <label>Описание</label>     
            </div>
            <button style="float: right; margin-right: 50px; margin-left: 150px;" class = 'btn' type="submit">Опубликовать</button> 
        </form>
    </div>
</body>
</html>