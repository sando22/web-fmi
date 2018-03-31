<?php


class ElectivesDbHelper
{
    private const DB_NAME = "homework_3";

    private $conn;
    private $insertElective;
    private $addColumn;
    private $checkForCreatedAtColumn;
    private $getRowById;
    private $updateRowById;

    /**
     * ElectivesDbHelper constructor.
     */
    public function __construct()
    {
        $this->conn = new PDO('mysql:host=localhost;dbname=' . self::DB_NAME, 'root');
        $this->insertElective =
            $this->conn->prepare(
                "INSERT INTO electives (title, description, lecturer) VALUES (:t, :d, :l)"
            );
        $this->addColumn =
            $this->conn->prepare(
                "ALTER TABLE `electives` ADD `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `lecturer`"
            );
        $this->checkForCreatedAtColumn =
            $this->conn->prepare(
                "select created_at from electives"
            );
        $this->updateRowById =
            $this->conn->prepare(
                "UPDATE `electives` SET `title` = :t, `description` = :d, `lecturer` = :l WHERE `electives`.`id` = :id"
            );
        $this->getRowById =
            $this->conn->prepare(
                "select title, description, lecturer from electives where id = :id"
            );
    }

    function addElective($title, $description, $lecturer)
    {
        $this->insertElective->execute(array(
            ':t' => $title,
            ':d' => $description,
            ':l' => $lecturer
        ));
    }

    function addCreatedAtColumn()
    {
        if (!$this->checkForCreatedAtColumn->execute()) {
            $this->addColumn->execute();
        }
    }

    function getCourseDetailsById($id)
    {
        $this->getRowById->execute(array(':id' => $id));
        return $this->getRowById->fetch();
    }

    function updateCourseDetailsById($id, $title, $description, $lecturer)
    {
        $this->updateRowById->execute(array(
            ':id' => $id,
            ':t' => $title,
            ':d' => $description,
            ':l' => $lecturer
        ));

        return $this->getCourseDetailsById($id);
    }
}