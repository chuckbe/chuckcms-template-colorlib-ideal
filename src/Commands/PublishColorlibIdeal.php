<?php

namespace Chuckbe\ChuckcmsTemplateColorlibIdeal\Commands;

use Chuckbe\ChuckcmsTemplateColorlibIdeal\seeds\ChuckcmsTemplateColorlibIdealTableSeeder;
use Illuminate\Console\Command;

class PublishColorlibIdeal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chuckcms-template-colorlib-ideal:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command publishes the Colorlib Ideal template for ChuckCMS.';

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
        $seeder = new ChuckcmsTemplateColorlibIdealTableSeeder();
        $seeder->run();
        
        $this->info('Just a moment... ChuckCMS is generating your template.');

        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('....  IDEAL  ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('....   NOW   ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info(' ');
        $this->info('ChuckCMS Template Colorlib Ideal published successfully');
        $this->info(' ');
        

        
    }
}
