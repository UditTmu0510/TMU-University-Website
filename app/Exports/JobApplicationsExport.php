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
        $query = Jobapplication::with(['college_name', 'department_name', 'designation_name']); 
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
            $jobapplication->college_name?->college_name ?? 'N/A', // Handle null safely
            $jobapplication->department_name?->department_name ?? 'N/A', // Handle null safely
            $jobapplication->designation_name?->designation_name ?? 'N/A', // Handle null safely
            $jobapplication->name ?? 'N/A',
            $jobapplication->mobile_no ?? 'N/A',
            $jobapplication->email ?? 'N/A',
            $jobapplication->pan ?? 'N/A',
            $jobapplication->aadhar ?? 'N/A',
            $jobapplication->religion ?? 'N/A',
            $jobapplication->marital_status ?? 'N/A',
            $jobapplication->dob ?? 'N/A',
            $jobapplication->category ?? 'N/A',
            $jobapplication->total_experience ?? 'N/A',
            $jobapplication->academic_experience ?? 'N/A',
            $jobapplication->industrial_experience ?? 'N/A',
            $jobapplication->current_salary ?? 'N/A',
            $jobapplication->expected_salary ?? 'N/A',
            $jobapplication->curent_comp_name ?? 'N/A',
            $jobapplication->current_comp_category ?? 'N/A',
            $jobapplication->current_comp_appointment ?? 'N/A',
            $jobapplication->current_comp_designation ?? 'N/A',
            $jobapplication->current_comp_date_of_joining ?? 'N/A',
            $jobapplication->currently_employed ?? 'N/A',
            $jobapplication->current_comp_date_of_leaving ?? 'N/A',
            $jobapplication->current_comp_date_of_leaving_reason ?? 'N/A',
            $resumeUrl,
            $jobapplication->present_address ?? 'N/A',
            $jobapplication->permanent_address ?? 'N/A',
            $jobapplication->created_at ?? 'N/A',
            $jobapplication->updated_at ?? 'N/A',
            $resumeUrl,
        ];
    }
    
    
}
