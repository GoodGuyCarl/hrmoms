<?php

namespace App\Jobs;

use App\Models\Datasheet;
use App\Models\DatasheetApproval;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateDatasheetJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $datasheetApproval;
    public function __construct(DatasheetApproval $datasheetApproval)
    {
        $this->datasheetApproval = $datasheetApproval;
    }

    public function handle(): void
    {
        if($this->datasheetApproval->approved) {
            Datasheet::create($this->datasheetApproval->toArray());
        }
    }
}
