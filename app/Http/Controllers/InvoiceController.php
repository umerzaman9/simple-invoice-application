<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function getAllInvoices()
    {
        // Logic to retrieve all invoices from the database
        $invoices = Invoice::with('customer')->orderBy('id', 'desc')->get();

        return response()->json([
            'invoices' => $invoices
        ], JsonResponse::HTTP_OK);
    }
}
