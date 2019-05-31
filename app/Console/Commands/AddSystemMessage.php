<?php

namespace App\Console\Commands;

use App\Events\SystemMessageSent;
use App\SystemMessage;
use Illuminate\Console\Command;

class AddSystemMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'message:add {--type=error} {--content=Out of memory error while reading file. Some of the data from the file could not be loaded. }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $type = trim($this->option('type'));
        $content = trim($this->option('content'));
        if(empty($content)) {
            $this->error("please set message content");
            return;
        }
        $message = new SystemMessage();
        $message->type = $type;
        $message->content = $content;
        $message->save();
        event(new SystemMessageSent($message));
    }
}
