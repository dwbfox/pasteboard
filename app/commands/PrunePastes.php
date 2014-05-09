    <?php

    use Illuminate\Console\Command;
    use Symfony\Component\Console\Input\InputOption;
    use Symfony\Component\Console\Input\InputArgument;

    class PrunePastes extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'paste:prune';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hard delete paste that are expired.';

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
    public function fire()
    {
       $paste = new Paste();
       $paste->where('expire', '<', date('Y-m-d h:i:s'));
       if ($this->argument('private')) {
            $this->info('Including private paste in the deletion process...');
            $paste->where('private', '=', 1);
       } else {
            $paste->where('private', '!=', 1);
       }
       $pastes = $paste->get();
       foreach ($pastes as $the_paste) {
            $this->info(sprintf('%s -- %s -- %s -- %s', $the_paste->id, $the_paste->token, $the_paste->expire, $the_paste->title));
            $the_paste->destroy($the_paste->id);
       }
    }


    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
    	return array(
    		array('private', InputArgument::OPTIONAL, 'Include private paste in the prune process.'),
    	);
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
    	return array(
    	);
    }

    }
