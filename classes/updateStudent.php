<?php
require_once 'Student.php';
require_once 'StudentDAO.php';
$id = $_POST['id'];
$name = $_POST['name'];
$score = $_POST['score'];
$group = $_POST['group'];
$updatedStudent = new Student($id, $name, $score, $group);
$studentDAO = new StudentDAO('../data/Student.csv');
$studentDAO->updateStudent($updatedStudent);

header('Location: ../index.php');
