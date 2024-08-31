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

    public function requestingDocument(Request $request, $id){
        $fields = $request->validate([
            'documentType' => 'required|string|in:TOR,Diploma,Good Moral,Others',
            'otherDocument' => 'nullable|string|required_if:documentType,Others',
            'stateReason' => 'required|string|min:10',
        ]);
        $fields['status'] = 'pending';

        DocumentRequest::create([
            'student_id' => $id,
            'document_type' => $fields['documentType'],
            'other_document' => $fields['otherDocument'],
            'state_reason' => $fields['stateReason'],
            'status' => $fields['status'],
        ]);
    
        // Redirect or return response after saving
        return redirect()->back()->with('success', 'Document request submitted successfully!');
    }
}
