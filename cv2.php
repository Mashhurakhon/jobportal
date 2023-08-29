<?php
       session_start();

       if (isset($_POST['firstname']) && !empty($_POST['firstname']) && isset($_POST['lastname']) && !empty($_POST['lastname']) && isset($_POST['surname']) && !empty($_POST['surname'])){
        $_SESSION['firstname'] = $_POST['firstname'];
        $_SESSION['lastname'] = $_POST['lastname'];
        $_SESSION['surname'] = $_POST['surname'];
    }
    if(isset($_POST['age']) && !empty($_POST['age'])) $_SESSION['age']=$_POST['age'];
    
    if(isset($_POST['address']) && !empty($_POST['address']) && isset($_POST['city']) && !empty($_POST['city'])){
        $_SESSION['city']=$_POST['city'];
        $_SESSION['address']=$_POST['address'];
    }
    if(isset($_POST['number']) && !empty($_POST['number'])){
        $_SESSION['number']=$_POST['number'];
    }
    if(isset($_POST['prof']) && !empty($_POST['prof'])){
        $_SESSION['prof']=$_POST['prof'];
    }
    if(isset($_POST['educa']) && !empty($_POST['educa'])){
        $_SESSION['educa']=$_POST['educa'];
    }
    if(isset($_POST['seniority']) && !empty($_POST['seniority']) && isset($_POST['gender']) && !empty($_POST['gender'])){
        $_SESSION['seniority']=$_POST['seniority'];
        $_SESSION['gender']=$_POST['gender'];
    }
    if(isset($_POST['info']) && !empty($_POST['info'])){
        $_SESSION['info']=$_POST['info'];
    }
    $r="";
        if(!isset($_SESSION['firstname']) && empty($_SESSION['firstname']) && !isset($_SESSION['lastname']) && empty($_SESSION['lastname']) && !isset($_SESSION['surname']) && empty($_SESSION['surname'])){
           $r='<div class="input-container">
                <input type="name" name="firstname" required>   
                <label>Имя:</label>
            </div><br>
            <div class="input-container">
                <input type="text" name="surname" required> 
                <label>Фамилия:</label>  
            </div><br>
            <div class="input-container">
                <input type="text" name="lastname" required>   
                <label>Отчество:</label>
            </div>';
        }
           else if(!isset($_SESSION['age']) && empty($_SESSION['age'])){
           $r='<h3>Ваш возраст:</h3>
            <div class="input-container">
                <input type="number" name="age" required>   
            </div>';   
    }
        else if (!isset($_SESSION['address']) && empty($_SESSION['address'])) {
          $r='<h3>Ваш адрес:</h3>
            <div class="input-container">       
                <input type="text" name="city" required>
                <label>Город:</label>
            </div>
            <div class="input-container">       
                <input type="text" name="address" required>
                <label>Точный адрес (проспект,улица,номер):</label>
            </div>';
        }
        else if (!isset($_SESSION['number']) && empty($_SESSION['number'])) {
         $r='<h3>Ваш номер:</h3>
            <div class="input-container">
                <input type="text" name="number" required>    
            </div>';
    }
    else if (!isset($_SESSION['prof']) && empty($_SESSION['prof'])) {
    $r='<h3>Ваша профессия</h3>
            <div class="input-container">
                <input type="text" name="prof" required>       
            </div>';
    }
    else if (!isset($_SESSION['educa']) && empty($_SESSION['educa'])) {
    $r='<div class="Boxx">
                <label>Образование:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select class="select-css" name="educa">
                    <option name="applicant">Основное общее</option>
                    <option name="employer">Среднее общее</option>
                    <option name="otherPerson">Высшее</option>
                </select>
            </div>';
    }
     else if (!isset($_SESSION['seniority']) && empty($_SESSION['seniority'])){
    $r='<h3> Ваш стаж работы</h3>
            <div class="input-container">
                <input type="text" name="seniority" required>
                <label>(лет)</label>        
            </div>
            <div class="Boxx">
                <label>Пол:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select class="select-css" name="gender" required>
                    <option name="applicant">Мужчина</option>
                    <option name="employer">Женщина</option>
                </select>
            </div>';

}
    else if (!isset($_SESSION['info']) && empty($_SESSION['info'])){
       $r='<h3>Дополнительная информация</h3>
            <div class="input-container">
                <input type="text" name="info" required>
                <label>Описание</label>     
            </div>';
    }
    else{ header("Location: 3.php");}

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
    <div class="box">
        <form action="2.php" method='POST'>
            <?php
            echo $r;
        ?>
        <button style="float: right; margin-right: 50px; margin-left: 150px;" class = 'btn' type="submit">Дальше</button>
        </form>
    </div>
</body>
</html>