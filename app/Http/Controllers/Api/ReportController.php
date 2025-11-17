<?php

namespace App\Http\Controllers\Api;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController 
{
    public function store(Request $rq){
        $rq->validate(['report' => 'required']);

        $data = Report::created(['report'=> $rq['report']]);

        
        return response()->json([
            'status' => 'success',
            'message' => 'Criado denúncia com sucesso.',
            'data' => $data
        ], 200);
    }
}
