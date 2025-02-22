<?php

if (!function_exists('logFileAction')) {
    function logFileAction($action, $filePath, $criterionId, $keyIndicatorId, $metricId, $pdf_id, $performedBy) {
        // Set the timezone to Asia/Kolkata
        date_default_timezone_set('Asia/Kolkata');

        // Get the current date and time in the specified format
        $currentDate = date('d-m-Y'); // Day-Month-Year
        $currentTime = date('H:i:s'); // Hour:Minute:Second

        // Insert the log into the database
        DB::table('naac_file_logs')->insert([
            'action' => $action,
            'file_path' => $filePath,
            'criterion_id' => $criterionId,
            'key_indicator_id' => $keyIndicatorId,
            'metric_id' => $metricId,
            'pdf_id' => $pdf_id,
            'performed_by' => $performedBy,
            'performed_at_date' => $currentDate,
            'performed_at_time' => $currentTime
        ]);
    }
}

