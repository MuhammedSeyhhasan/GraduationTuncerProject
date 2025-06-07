<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeklifRequest;

class TeklifController extends Controller
{
    
    
    
    
    public function store(Request $request){    
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'product' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        TeklifRequest::create($validated);

        return back()->with('success', 'Teşekkür ederiz! Teklif isteğiniz başarıyla gönderildi.');
    }


    public function showTeklifRequests()
    {
        $teklifler = TeklifRequest::orderBy('created_at', 'desc')->get();

        return view('admin.tekliflist', compact('teklifler'));
    }

    public function markAsRead($id)
    {
        $talep = TeklifRequest::findOrFail($id);
        $talep->update(['status' => 'Okundu']);
    
        return back()->with('success', 'Mesaj okundu olarak işaretlendi.');


        
    }
}
