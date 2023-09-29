<?php

echo '<input type="number" id="numberOfWeeks" name="numberOfWeeks" placeholder="Enter number of weeks">';

function main()
{
    $numberOfWeeks = $_POST['numberOfWeeks'];
    $teachers = Teacher::csvToTeachers('teacherData.csv');
    $startingDate = DateTime::createFromFormat('Y-m-d', '2023-10-01');
    $timetable = DetentionRota::generateTimetable($teachers, $numberOfWeeks, $startingDate);
}