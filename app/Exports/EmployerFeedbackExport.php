<?php

namespace App\Exports;

use App\Models\EmployerFeedback;
use App\Models\Colleges; // Add the Colleges model
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployerFeedbackExport implements FromCollection, WithTitle, WithHeadings
{
    public function collection()
    {
        // Adjust the column name and include 'created_at'
        return EmployerFeedback::select([
            'employer_feedback.name',
            'employer_feedback.current_designation',
            'employer_feedback.current_organization',
            'employer_feedback.contact_no',
            'employer_feedback.email',
            'colleges.cd_name as college_name',  // Join to get the college name
            'employer_feedback.academic_year',
            'employer_feedback.q1',
            'employer_feedback.q2',
            'employer_feedback.q3',
            'employer_feedback.overall_rating',
            'employer_feedback.improve_syllabus',
            'employer_feedback.new_content_existing_syllabus',
            'employer_feedback.topics_to_delete',
            'employer_feedback.addition_of_new_course',
            'employer_feedback.any_emerging_trend',
            'employer_feedback.created_at'  // Include created_at field
        ])
        ->join('colleges', 'employer_feedback.cd_id', '=', 'colleges.cd_id')  // Join colleges table to get college name
        ->get();
    }

    public function headings(): array
    {
        return [
            'name',
            'current_designation',
            'current_organization',
            'contact_no',
            'email',
            'college_name',  // Include college_name here
            'academic_year',
            'q1',
            'q2',
            'q3',
            'overall_rating',
            'improve_syllabus',
            'new_content_existing_syllabus',
            'topics_to_delete',
            'addition_of_new_course',
            'any_emerging_trend',
            'created_at'  // Include created_at in the headings
        ];
    }

    public function title(): string
    {
        return 'Employer Feedback';
    }
}
