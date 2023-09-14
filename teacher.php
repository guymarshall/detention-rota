<?php

class Teacher
{
    private JobType $jobType;

    public function __construct(private string $firstName, private string $lastName, private string $staffCode, array $daysWorking, JobType $jobType)
    {

    }

    private function calculateDaysWorking(array $workingDays): array
    {
        $dayNames = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        $daysWorking = array_map(function ($day) use ($dayNames) {
            return $dayNames[$day];
        }, $workingDays);

        return $daysWorking;
    }
}

/*
pub fn csv_to_teachers(filename: &str) -> Result<Vec<Teacher>, Box<dyn Error>> {
    let file: File = File::open(filename)?;
    let mut reader: Reader<File> = Reader::from_reader(file);
    let mut teachers: Vec<Teacher> = Vec::new();

    const DAY_NAMES: [&'static str; 5] = [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
    ];

    for result in reader.deserialize() {
        let (first_name, last_name, staff_code, working_days): (String, String, String, Vec<i32>) = match result {
            Ok(record) => record,
            Err(err) => return Err(Box::new(err)),
        };

        let days_working: Vec<String> = calculate_days_working(&working_days[0..5], &DAY_NAMES);

        let teacher: Teacher = Teacher::new(first_name, last_name, staff_code, days_working);
        teachers.push(teacher);
    }

    Ok(teachers)
}
*/