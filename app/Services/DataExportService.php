<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

class DataExportService
{
    public function exportData(Collection $collection, array $columnNames, $fileName)
    {
        return response()->streamDownload(function () use ($collection, $columnNames) {

            $csv = tap(fopen('php://output', 'wb'), function ($csv) use ($columnNames) {
                fputcsv($csv, $columnNames);
            });

            $collection->each(function ($data) use ($csv, $columnNames) {
                $row = array_intersect_key($data->toArray(), array_flip($columnNames));
                fputcsv($csv, $row);
            });

            return tap($csv, function ($csv) {
                fclose($csv);
            });
        }, $fileName.'.csv');
    }
}
