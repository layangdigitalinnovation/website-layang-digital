<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectInquiry;

class ProjectInquiryController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'whatsapp' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'business_type' => 'required|string|max:255',
            'message' => 'required|string',
            'budget' => 'nullable|string|max:50',
        ]);

        ProjectInquiry::create($validated);

        return redirect()->to(url()->previous() . '#contact')->with('success', 'Terima kasih! Pesan Anda telah kami terima. Tim kami akan segera menghubungi Anda melalui WhatsApp atau Email.');
    }
}
