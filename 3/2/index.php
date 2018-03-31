<!DOCTYPE html>
<html>
<body>
<title>Homework 3</title>

<h1>Добавяне на избираема дисциплина + SQL</h1>
<?php
const COURSE_NAME = "courseName";
const TEACHER_NAME = "teacherName";
const DESCRIPTION = "description";
const COURSE_TYPE = "courseType";
const CREDITS = "credits";

require "../ElectivesDbHelper.php";

$dbHelper = new ElectivesDbHelper();

$titleValue = "";
$descriptionValue = "";
$lecturerValue = "";
$submitValue = "Добави";
$idValue = "";

if ($_GET) {
    $idValue = $_GET["id"];
    if ($courseDetails = $dbHelper->getCourseDetailsById($idValue)) {
        $titleValue = $courseDetails[0];
        $descriptionValue = $courseDetails[1];
        $lecturerValue = $courseDetails[2];
        $submitValue = "Обнови";

    }
} else if ($_POST) {
    if (!$dbHelper->updateCourseDetailsById(
        $_POST["id"],
        $_POST[COURSE_NAME],
        $_POST[DESCRIPTION],
        $_POST[TEACHER_NAME]
    )) {
        $dbHelper->addElective($_POST[COURSE_NAME], $_POST[DESCRIPTION], $_POST[TEACHER_NAME]);
        $dbHelper->addCreatedAtColumn();
    }
}
?>

<form action="index.php" method="post">
    <p>
        <label>
            Име на предмета:
            <input type="text" value="<?php echo $titleValue ?>" maxlength="150" required
                   name="<?php echo COURSE_NAME ?>"/>
        </label>
    </p>

    <p>
        <label>
            Преподавател:
            <input type="text" value="<?php echo $lecturerValue ?>" maxlength="200" required
                   name="<?php echo TEACHER_NAME ?>"/>
        </label>
    </p>

    <p>
        <label>
            Описание:
            <input type="text" value="<?php echo $descriptionValue ?>" minlength="10" required
                   name="<?php echo DESCRIPTION ?>"/>
        </label>
    </p>

    <input type="hidden" name="id" value="<?php echo $idValue ?>"/>

    <p>
        <input type="submit" value="<?php echo $submitValue ?>">
    </p>
</form>
</body>
</html>