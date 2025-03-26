<?php

namespace App\Exports;

use App\Models\Jobapplication;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class JobApplicationsExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $query = NaacPdfs::with(['college_name', 'department_name', 'designation_name']); 
        return $query->get();
    }

    public function headings(): array
    {
        return [
            'Application Id',
            'College',
            'Department',
            'Designation',
            'Applicant Name',
            'Mobile Number',
            'Email',
            'Pan',
            'Aadhar',
            'Religion',
            'Marital Status',
            'DOB',
            'Category (SC/ST/OBC/GEN)',
            'Total Experince',
            'Academic Experience',
            'Industrial Experince',
            'Current Salary',
            'Expected Salary',
            "Current Company Name",
            "Current Employment Category(Teaching/Non-Teaching)",
            "Current Employment Type (Regular/Contracual)",
            "Current Designation",
            "Current Company Date of Joining",
            "Currently Employed",
            "Current Company Date of Leaving",
            "Current Company Reason for Leaving",
            "Applicant Resume Path",
            "Present Address",
            "Permanent Address",
            'created_at',
            'updated_at',
            "Application Path",
        ];
    }

    public function map($jobapplication): array
    {
        $appUrl = rtrim(config('app.url'));
        $resumeUrl = "{$appUrl}/jobapplication/data/{$jobapplication->id}/generate-pdf";
        return [
            $jobapplication->application_id,
            $jobapplication->college_name->college_name,
            $jobapplication->department_name->department_name,
            $jobapplication->designation_name->designation_name,
            $jobapplication->name,
            $jobapplication->mobile_no,
            $jobapplication->email,
            $jobapplication->pan,
            $jobapplication->aadhar,
            $jobapplication->religion,
            $jobapplication->marital_status,
            $jobapplication->dob,
            $jobapplication->category,
            $jobapplication->total_experience,
            $jobapplication->academic_experience,
            $jobapplication->industrial_experience,
            $jobapplication->current_salary,
            $jobapplication->expected_salary,
            $jobapplication->curent_comp_name,
            $jobapplication->current_comp_category,
            $jobapplication->current_comp_appointment,
            $jobapplication->current_comp_designation,
            $jobapplication->current_comp_date_of_joining,
            $jobapplication->currently_employed,
            $jobapplication->current_comp_date_of_leaving,
            $jobapplication->current_comp_date_of_leaving_reason,
            $jobapplication->applicant_resume_path,
            $jobapplication->present_address,
            $jobapplication->permanent_address,
            $jobapplication->created_at,
            $jobapplication->updated_at,
            $resumeUrl,

        ];
    }
    
    
}
