<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\Template;
use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Log;

class EmailController extends Controller
{
    public function showSendEmailForm()
    {
        $templates = Template::all();
        return view('emails.send', compact('templates'));
    }

    public function sendEmails(Request $request)
    {
        $leads = Lead::all();
        $template = Template::find($request->template_id);

        if (!$template) {
            return redirect()->back()->with('error', 'Template not found.');
        }

        if ($leads->isEmpty()) {
            return redirect()->back()->with('error', 'No leads found.');
        }

        foreach ($leads as $lead) {
            Log::info('Dispatching job for lead: ' . json_encode($lead));
            Log::info('Using template: ' . json_encode($template));
            SendEmailJob::dispatch($lead, $template);
        }

        return redirect()->back()->with('success', 'Emails are being sent!');
    }
}
