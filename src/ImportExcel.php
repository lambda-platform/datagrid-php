<?php
namespace Lambda\Datagrid;

use Guzzle\Http\Message\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class ImportExcel
{
    public function import(Request $request)
    {
       return response()->json(['status' => false, 'msg' =>'Алдаа гарсан байна']);;
    }
}
