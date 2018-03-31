<?php
const COURSE_NAME = "courseName";
const TEACHER_NAME = "teacherName";
const DESCRIPTION = "description";
const COURSE_TYPE = "courseType";
const CREDITS = "credits";

require "../ElectivesDbHelper.php";

$dbHelper = new ElectivesDbHelper();

if ($_POST) {
    $dbHelper->addElective($_POST[COURSE_NAME], $_POST[DESCRIPTION], $_POST[TEACHER_NAME]);
    $dbHelper->addCreatedAtColumn();
}