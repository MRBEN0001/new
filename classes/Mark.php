<?php

include_once("DatabaseConnection.php");

class Mark extends DatabaseConnection
{
    public function save($course, $student, $testScore, $examScore)
    {
        $sql = 'INSERT INTO marks(course, student, test_score, exam_score) VALUES(?,?,?,?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$course, $student, $testScore, $examScore]);
        echo "Mark Saved";
    }

    public function fetchMarks($course)
    {
        $sql = 'SELECT * FROM marks WHERE course=?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$course]);
        $marks = $stmt->fetchAll();
        return $marks;
    }
}
