<?php

class Teacher
{
    private JobType $jobType;

    public function __construct(private string $firstName, private string $lastName, private string $staffCode, JobType $jobType, array $daysWorking)
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

    public function csvToTeachers(string $filename): array
    {
        $file = fopen($filename, 'r');
        // read the lines of csv into an array
        $lines = fgetcsv($file);

        $teachers = [];

        while ($line = fgetcsv($file)) {
            $firstName = $line[0];
            $lastName = $line[1];
            $staffCode = $line[2];
            $jobType = $line[3];
            $daysWorking = $this->calculateDaysWorking($line[4], $line[5], $line[6], $line[7], $line[8]);
            $teachers[] = new Teacher($firstName, $lastName, $staffCode, $jobType, $daysWorking);
        }

        return $teachers;
    }
}