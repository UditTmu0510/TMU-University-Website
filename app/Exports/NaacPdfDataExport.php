<?php

namespace App\Exports;

use App\Models\AppModelsNaacPdfs;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class NaacPdfDataExport implements FromCollection, WithHeadings, WithMapping
{
 
    public function collection()
    {
        
        $query = NaacPdfs::with(['criterion_name', 'key_indicator_name', 'metric_name'])
            ->where('pdf_status', 'Y'); 
    
     
        $criterionIds = [];
    
        if (Auth::user()->can('Criterion-I-Coordinator')) {
            $criterionIds[] = 8;
        }
        if (Auth::user()->can('Criterion-II-Coordinator')) {
            $criterionIds[] = 9;
        }
        if (Auth::user()->can('Criterion-III-Coordinator')) {
            $criterionIds[] = 10;
        }
        if (Auth::user()->can('Criterion-IV-Coordinator')) {
            $criterionIds[] = 11;
        }
        if (Auth::user()->can('Criterion-V-Coordinator')) {
            $criterionIds[] = 12;
        }
        if (Auth::user()->can('Criterion-VI-Coordinator')) {
            $criterionIds[] = 13;
        }
        if (Auth::user()->can('Criterion-VII-Coordinator')) {
            $criterionIds[] = 14;
        }
    
        
        if (!empty($criterionIds)) {
            $query->whereIn('criterion_id', $criterionIds);
        }

        return $query->get();
    }
    

    public function headings(): array{

        return [
            'PDF ID',
            'Criterion Name',
            'Key Indicator Name',
            'Metric Name',
            'PDF Description',
            'File Path',
            'Status'

        ];

    }


    public function map($naacPdf): array{
        return[
            $naacPdf->pdf_id,
            $naacPdf->criterion_name->criterion_name ?? 'N/A',  
            $naacPdf->key_indicator_name->key_indicator_name ?? 'N/A',
            $naacPdf->metric_name->metric_name ?? 'N/A',
            $naacPdf->pdf_description,
            $naacPdf->file_path,
            $naacPdf->pdf_status,

        ];

    }
}
