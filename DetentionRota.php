<?php

// 13-Sep-2023     staff_code1     staff_code2
// 14-Sep-2023     staff_code3     staff_code4
// 15-Sep-2023     staff_code5     staff_code6
// 16-Sep-2023     staff_code7     staff_code8

// 19-Sep-2023     staff_code9     staff_code10
// etc...

// list of dates to avoid - teacher training days, bank holidays, mondays

// each person only once per half term (once per timetable) if possible

function generateTimetable(array $teachers, int $numberOfWeeks, DateTime $startingDate): array
{
    $timetable = [];
    $number_of_days = $numberOfWeeks * 5;

    // make list of teachers then remove them in pairs when adding to timetable

    // make an empty grid where each row is a week and each column is a day
    for ($i = 0; $i < $number_of_days; $i++) {
        // TODO: needs sorting!
        $timetable[] = [
            $startingDate->format('Y-m-d H:i:s'),
            $staffCode1,
            $staffCode2
        ];
        // timetable.push((1..4).map(|_| String::from("")).collect());
    }
}