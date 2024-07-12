<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Models\Lead;
use App\Models\Template;
use Exception;
use Illuminate\Support\Facades\Log;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $lead;
    protected $template;

    /**
     * Create a new job instance.
     *
     * @param \App\Models\Lead $lead
     * @param \App\Models\Template $template
    */

    public function __construct(Lead $lead, Template $template)
    {
        $this->lead = $lead;
        $this->template = $template;
    }

    /**
     * Execute the job.
     *
     * @return void
    */

    public function handle()
    {
        try {
            Log::info('Sending email to: ' . $this->lead->email);
            Log::info('Using template content: ' . $this->template->content);

            if (!empty($this->template->content) && !empty($this->lead->email)) {
                Mail::raw($this->template->content, function ($message) {
                    $message->to($this->lead->email)
                            ->subject($this->template->name);
                });
            } else {
                Log::error('Missing template content or lead email.');
            }
        } catch (Exception $e) {
            Log::error('Failed to send email to ' . $this->lead->email . ': ' . $e->getMessage());
            throw $e;
        }
    }

}
