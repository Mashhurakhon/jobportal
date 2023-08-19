<div>
    <form action="addtodb.php" method="get">
        <h2> Вход </h2>
        <div class="input-container">
            <input type="text" name="txtname" placeholder="Введите свое имя" required>
        </div>
        <div class="input-container">
            <input type="email" name="email" placeholder="Эл.почта" required>
        </div>
        <div class="input-container">
            <input type="password" name="password" placeholder="Пароль" required>
        </div>
        <div class="input-container">
            <input type="password" name="repeatPass" placeholder="Повторите пароль" required>
        </div>
        <div>
            <select name="category">
                <option name="applicant">Соискатель</option>
                <option name="employer">Работодатель</option>
                <option name="otherPerson">Заинтересованное лицо</option>
            </select>
        </div>
        <input type="button" name="send" value="SUBMIT">
    </form>
</div>