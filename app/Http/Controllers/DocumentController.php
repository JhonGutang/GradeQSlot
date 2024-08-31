<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\DocumentRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DocumentController extends Controller
{
    public function index(Request $request){
        $document_requests = DocumentRequest::with(['student', 'document'])
        ->paginate(8);
        // $document_requests = DocumentRequest::with(['student', 'document'])
        // ->where('status', 'pending')
        //     ->paginate(8);

        // $requests_history = DocumentRequest::with(['student', 'document'])
        // ->where('status', '!=', 'pending')
        //     ->paginate(8);

        return Inertia::render('admin/Requests', [
            'document_requests' => $document_requests,
            // 'request_history' => $requests_history,
        ]);
    }
}
