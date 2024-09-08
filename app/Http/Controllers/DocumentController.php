<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\DocumentRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DocumentController extends Controller
{
    public function getDocumentRequests(Request $request){
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

    public function getDocuments(){
        $documents=Document::all();
        return Inertia::render('client/Inquire', [
            'documents' => $documents,
        ]);
    }

    public function requestingDocument(Request $request, $id){
        $validatedFields = $request->validate([
            'documentType' => 'required|integer|exists:documents,id',
            'otherDocument' => 'nullable|string|required_if:documentType,3',
            'stateReason' => 'required|string|max:255',
        ]);

        $fields = [
            'student_id' => $id,
            'document_id' => $validatedFields['documentType'],
            'specify_other_document' => $validatedFields['otherDocument'],
            'request_reason' => $validatedFields['stateReason'],
            'status' => 'pending',
        ];
        

        $documentRequest = DocumentRequest::create($fields);
        // return response()->json([
        //     'message' => 'Document request submitted successfully!',
        //     'data' => $documentRequest
        // ], 201); // 201 status code indicates that a resource was successfully created
    
    }
}
