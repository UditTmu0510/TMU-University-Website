<?php

namespace App\Exports;

use App\Models\AlumniFeedback;
use App\Models\Colleges; // Add the Colleges model
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AlumniFeedbackExport implements FromCollection, WithTitle, WithHeadings
{
    public function collection()
    {
        // Adjust the column name and include 'created_at'
        return AlumniFeedback::select([
            'alumni_feedback.name',
            'alumni_feedback.current_organization',
            'alumni_feedback.current_designation',
            'colleges.cd_name as college_name',  // Join to get the college name
            'alumni_feedback.prog_studied_in_tmu',
            'alumni_feedback.prog_passout_year',
            'alumni_feedback.cd_enroll_no',
            'alumni_feedback.email',
            'alumni_feedback.contact_no',
            'alumni_feedback.academic_year',
            
            'alumni_feedback.syllabus_modification',
            'alumni_feedback.suggestions',
            'alumni_feedback.q1',
            'alumni_feedback.q2',
            'alumni_feedback.q3',
            'alumni_feedback.q4',
            'alumni_feedback.q5',
            'alumni_feedback.q6',
            'alumni_feedback.q7',
            'alumni_feedback.q8',
            'alumni_feedback.q9',
            'alumni_feedback.q10',
            'alumni_feedback.created_at'  // Include created_at field
        ])
        ->join('colleges', 'alumni_feedback.cd_id', '=', 'colleges.cd_id')  // Join colleges table to get college name
        ->get();
    }

    public function headings(): array
    {
        return [
            'name',
            'current_organization',
            'current_designation',
            'college_name',  // Include college_name here
            'prog_studied_in_tmu',
            'prog_passout_year',
            'cd_enroll_no',
            'email',
            'contact_no',
            'academic_year',
            'overall_rating',
            'syllabus_modification',
            'suggestions',
            'q1',
            'q2',
            'q3',
            'q4',
            'q5',
            'q6',
            'q7',
            'q8',
            'q9',
            'q10',
            'created_at'  // Include created_at in the headings
        ];
    }

    public function title(): string
    {
        return 'Alumni Feedback';
    }
}
