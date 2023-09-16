<?php

echo '<input type="number" id="numberOfWeeks" name="numberOfWeeks" placeholder="Enter number of weeks">';

function main()
{
    $numberOfWeeks = $_POST['numberOfWeeks'];
    $teachers = Teacher::csvToTeachers('teacherData.csv');
    $timetable = Timetable::generateTimetable($teachers, $numberOfWeeks);
}

/*
#![forbid(unsafe_code)]

use std::error::Error;

use teacher::Teacher;
use crate::user_input::input;

mod teacher;
mod user_input;

enum Month {
    January,
    February,
    March,
    April,
    May,
    June,
    July,
    August,
    September,
    October,
    November,
    December,
}

struct Date {
    day: i32,
    month: Month,
    year: i32,
}

// 13-Sep-2023     staff_code1     staff_code2
// 14-Sep-2023     staff_code3     staff_code4
// 15-Sep-2023     staff_code5     staff_code6
// 16-Sep-2023     staff_code7     staff_code8

// 19-Sep-2023     staff_code9     staff_code10
// etc...

// list of dates to avoid - teacher training days, bank holidays, mondays

// each person only once per half term (once per timetable) if possible

 fn generate_timetable(teachers: &[Teacher], number_of_weeks: i32, starting_date: Date) -> Vec<Vec<String>> {
    let mut timetable: Vec<Vec<String>> = Vec::new();
    let number_of_days: i32 = number_of_weeks * 5;

    // make list of teachers then remove them in pairs when adding to timetable

    // make an empty grid where each row is a week and each column is a day
    (0..number_of_days).for_each(|_| {
        // TODO: needs sorting!
        timetable.push(vec![
            starting_date.to_string(),
            staff_code1,
            staff_code2
        ]);
        // timetable.push((1..4).map(|_| String::from("")).collect());
    });
}
*/