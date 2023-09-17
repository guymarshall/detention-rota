<?php

echo '<input type="number" id="numberOfWeeks" name="numberOfWeeks" placeholder="Enter number of weeks">';

function main()
{
    $numberOfWeeks = $_POST['numberOfWeeks'];
    $teachers = Teacher::csvToTeachers('teacherData.csv');
    $timetable = DetentionRota::generateRota($teachers, $numberOfWeeks);
}