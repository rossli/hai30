<?php

namespace App\Console\Commands;

use App\Article;
use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:send {user=1 : The ID of the user} {--queue= : Whether the job should be queued}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send drip e-mails to a user';
    protected $article;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct( Article $article )
    {
        parent::__construct();
        $this->article = $article;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $userId  = $this->argument( 'user' );
        $options = $this->option();
        //$name    = $this->ask( 'What is your name?' );
        //$name = $this->anticipate('What is your name?', ['Taylor', 'Dayle']);
        $name = $this->choice('What is your name?', ['Taylor', 'Dayle'], false);
        if ( $this->confirm( 'Do you wish to continue? [y|N]' ) )
        {
            dd( $this->article->findOrFail( $userId ));
        }
    }
}
