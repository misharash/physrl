<h3>Добро пожаловать, <?php echo $_COOKIE["admin"]; ?>!</h3>
Чего желаете делать на сайте?
<ul>
<li><a href="manage-news.php">Управлять новостями</a></li>
<li>Быстрый редактор таблиц. Выберите ресурс:
<form method=get action=fast-table-editor.php>
<select name=t>
<option value='dz'>ДЗ</option>
<option value='routine'>Расписание</option>
<option value='summer'>Летнее задание</option>
<option value='pract'>Практика</option>
<option value='teachers'>Учителя</option>
</select> <input type=submit value=Далее />
</form>
</li>
<li><a href="load-table.php">Расширенное редактирование таблиц</a></li>
<li>Онлайн-редактор страниц. Выберите ресурс:
<form method=get action=code-editor.php>
<select name=t>
<option value="index">Новости</option>
<option value="dz">Домашнее задание</option>
<option value="routine">Расписание уроков</option>
<option value="phys">Мы - ФИЗИКИ</option>
<option value="lyc">Мы - лицеисты</option>
<option value="teachers">Наши учителя</option>
<option value="students">Наш класс</option>
<option value="lib">Электронная библиотека</option>
<option value="photo">Архив фотографий</option>
<option value="summer">Задание на лето</option>
<option value="pract">Учебная практика</option>
<option value="olymp">Олимпиадные задания</option>
<option value="archive">Архив</option>
</select> <input type=submit value=Далее />
</form>
</li>
<li><a href="backup-ch-cont.php">Управление бэкапами (возвращение к старой версии)</a></li>
<li height=30px><a href="panel.php">Главная админки</a></li>
<li height=30px><a href="../update.php">Ручное обновление сайта</a></li>
<li height=30px><a href="../../">Переход на сайт</a></li>
<li height=30px><a href="logout.php">Выйти из учетной записи админа</a></li>
</ul>