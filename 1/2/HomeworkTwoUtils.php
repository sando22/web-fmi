<?php

class HomeworkTwoUtils
{
    const KEY_TITLE = "title";
    const KEY_LECTURER = "lecturer";
    const KEY_DESCRIPTION = "description";

    static function showPage($data, $pageId)
    {
        return "<h1>" . $data[$pageId][self::KEY_TITLE] . "</h1>"
            . "<h2>" . $data[$pageId][self::KEY_LECTURER] . "</h2>"
            . "<p>" . $data[$pageId][self::KEY_DESCRIPTION] . "</p>";
    }

    static function showNav($data, $pageId)
    {
        $result = "<nav>";

        foreach ($data as $course => $courseData) {
            $result .= "<a href=\"?page=" . $course . "\"";
            if ($course == $pageId) {
                $result .= " class=\"selected\"";
            }
            $result .= "> " . $courseData[self::KEY_TITLE] . " </a>";
        }

        $result .= "</nav>";
        return $result;
    }
}