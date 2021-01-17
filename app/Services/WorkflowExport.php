<?php
namespace App\Services;


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class WorkflowExport {

    function __construct()
    {

    }

    public function exportSample() {

        $inputFileName =storage_path('app/templates/template_1.xlsx');

        /** Load $inputFileName to a Spreadsheet Object  **/
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
//        $sheet = $spreadsheet->getActiveSheet();
//        $sheet->setCellValue('A1', 'Hello World !');

        $writer = new Xlsx($spreadsheet);
        $writer->save(storage_path('app/public/helloworld.xlsx'));
        dd(2);
    }


}
