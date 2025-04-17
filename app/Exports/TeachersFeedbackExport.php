<?php

namespace App\Exports;

use App\Models\TeachersFeedback;
use App\Models\Colleges; // Add the Colleges model
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TeachersFeedbackExport implements FromCollection, WithTitle, WithHeadings
{
    public function collection()
    {
        // Join teachers_feedback with colleges table to get the college name
        return TeachersFeedback::select([
            'teachers_feedback.faculty_name',
            'teachers_feedback.designation',
            'teachers_feedback.employee_code',
            'colleges.cd_name as college_name',  // Join to get college name
            'teachers_feedback.academic_year',
            'teachers_feedback.q1',
            'teachers_feedback.q2',
            'teachers_feedback.q3',
            'teachers_feedback.q4',
            'teachers_feedback.q5',
            'teachers_feedback.q6',
            'teachers_feedback.q7',
            'teachers_feedback.q8',
            'teachers_feedback.q9',
            'teachers_feedback.overall_rating',
            'teachers_feedback.topics_beyond_syllabus',
            'teachers_feedback.topics_to_delete',
            'teachers_feedback.suggestions',
            'teachers_feedback.created_at'
        ])
        ->join('colleges', 'teachers_feedback.cd_id', '=', 'colleges.cd_id')  // Perform the join
        ->get();
    }

    public function headings(): array
    {
        return [
            'faculty_name',
            'designation',
            'employee_code',
            'college_name', // Use college_name here
            'academic_year',
            'q1',
            'q2',
            'q3',
            'q4',
            'q5',
            'q6',
            'q7',
            'q8',
            'q9',
            'overall_rating',
            'topics_beyond_syllabus',
            'topics_to_delete',
            'suggestions',
            'created_at'
        ];
    }

    public function title(): string
    {
        return 'Teachers Feedback';
    }
}
