<?php
const COURSE_NAME = "courseName";
const TEACHER_NAME = "teacherName";
const DESCRIPTION = "description";
const COURSE_TYPE = "courseType";
const CREDITS = "credits";

if ($_POST) {
    foreach ($_POST as $key => $value) {
        echo "<div>";
        echo $key . " => " . $value;
        echo "</div>";
    }
}
