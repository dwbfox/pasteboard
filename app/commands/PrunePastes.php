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
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Command line utility to prune
     * hard delete expired pastes out
     * of the database.
     */
    public function fire()
    {
        $private = (empty($this->argument('private'))) ? 0 : 1;
        $pastes = DB::table('pastes')
            ->where('expire', '<', new DateTime('today'))
            ->where('private', '=', $private)
            ->delete();
            var_dump($pastes);
        if (empty($pastes)) {
            $this->info('No pastes were found.');
            return;
        }
        $this->info('Done.');
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
