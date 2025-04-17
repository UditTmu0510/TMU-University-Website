<?php

namespace App\Exports;

use App\Models\ExpertFeedback;
use App\Models\Colleges; // Add the Colleges model
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExpertFeedbackExport implements FromCollection, WithTitle, WithHeadings
{
    public function collection()
    {
        // Adjust the column name and include 'created_at'
        return ExpertFeedback::select([
            'expert_feedback.name',
            'expert_feedback.current_designation',
            'expert_feedback.current_organization',
            'expert_feedback.contact_no',
            'expert_feedback.email',
            'colleges.cd_name as college_name',  // Join to get the college name
            'expert_feedback.academic_year',
            'expert_feedback.q1',
            'expert_feedback.q2',
            'expert_feedback.q3',
            'expert_feedback.q4',
            'expert_feedback.q5',
            'expert_feedback.q6',
            'expert_feedback.q7',
            'expert_feedback.q8',
            'expert_feedback.q9',
            'expert_feedback.q10',
            'expert_feedback.overall_rating',
            'expert_feedback.improve_syllabus',
            'expert_feedback.new_content_existing_syllabus',
            'expert_feedback.topics_to_delete',
            'expert_feedback.addition_of_new_course',
            'expert_feedback.any_emerging_trend',
            'expert_feedback.created_at'  // Include created_at field
        ])
        ->join('colleges', 'expert_feedback.cd_id', '=', 'colleges.cd_id')  // Join colleges table to get college name
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
            'q4',
            'q5',
            'q6',
            'q7',
            'q8',
            'q9',
            'q10',
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
        return 'Expert Feedback';
    }
}
