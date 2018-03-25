<!DOCTYPE html>
<html>
<body>
<title>Homework 2</title>

<h1>Добавяне на избираема дисциплина</h1>

<?php require "form_processor.php" ?>
<form action="form_processor.php" method="post">
    <p>
        <label>
            Име на предмета:
            <input type="text" maxlength="150" required name="<?php echo COURSE_NAME ?>"/>
        </label>
    </p>

    <p>
        <label>
            Преподавател:
            <input type="text" maxlength="200" required name="<?php echo TEACHER_NAME ?>"/>
        </label>
    </p>

    <p>
        <label>
            Описание:
            <input type="text" minlength="10" required name="<?php echo DESCRIPTION ?>"/>
        </label>
    </p>

    <fieldset>
        <legend>Група</legend>
        <div>
            <label>
                Математика
                <input type="radio" value="М" name="<?php echo COURSE_TYPE ?>"/>
            </label>
        </div>
        <div><label>
                Приложна математика
                <input type="radio" value="ПМ" name="<?php echo COURSE_TYPE ?>"/>
            </label>
        </div>
        <div><label>
                Основи на компютърните науки
                <input type="radio" value="ОКН" name="<?php echo COURSE_TYPE ?>"/>
            </label>
        </div>
        <div><label>
                Ядро на компютърните науки
                <input type="radio" value="ЯКН" name="<?php echo COURSE_TYPE ?>"/>
            </label>
        </div>
    </fieldset>

    <p>
        <label>
            Кредити:
            <input type="number" min="1" max="7" name="<?php echo CREDITS ?>"/>
        </label>
    </p>

    <p>
        <input type="submit" value="Добави">
    </p>
</form>
</body>
</html>