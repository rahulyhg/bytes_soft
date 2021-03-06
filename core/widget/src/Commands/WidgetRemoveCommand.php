<?php

namespace Botble\Widget\Commands;

use Botble\Widget\Repositories\Interfaces\WidgetInterface;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem as File;
use League\Flysystem\Adapter\Local as LocalAdapter;
use League\Flysystem\Filesystem as Flysystem;
use League\Flysystem\MountManager;
use Symfony\Component\Console\Input\InputArgument;

class WidgetRemoveCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'widget:remove';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove a widget';

    /**
     * @var File
     */
    protected $files;

    /**
     * @var WidgetInterface
     */
    protected $widgetRepository;

    /**
     * Create a new command instance.
     *
     * @param \Illuminate\Filesystem\Filesystem $files
     * @param WidgetInterface $widgetRepository
     * @author @author Sang Nguyen
     */
    public function __construct(File $files, WidgetInterface $widgetRepository)
    {
        $this->files = $files;
        $this->widgetRepository = $widgetRepository;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return boolean
     * @author Sang Nguyen
     */
    public function handle()
    {
        if (!$this->files->isDirectory($this->getPath())) {
            $this->error('Widget "' . $this->getWidget() . '" is not existed.');
            return false;
        }

        try {
            $this->files->deleteDirectory($this->getPath());
            $this->widgetRepository->deleteBy([
                'widget_id' => studly_case($this->getWidget()) . 'Widget',
                'theme' => setting('theme'),
            ]);

            $this->info('Widget "' . $this->getWidget() . '" has been deleted.');
        } catch (Exception $exception) {
            $this->info($exception->getMessage());
        }

        return true;
    }

    /**
     * Get the destination view path.
     *
     * @return string
     * @author Sang Nguyen
     */
    protected function getPath()
    {
        return public_path(config('core.theme.general.themeDir')) . DIRECTORY_SEPARATOR . setting('theme') . '/widgets/' . $this->getWidget();
    }

    /**
     * Get the theme name.
     *
     * @return string
     * @author Sang Nguyen
     */
    protected function getWidget()
    {
        return strtolower($this->argument('name'));
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     * @author Sang Nguyen
     */
    protected function getArguments()
    {
        return [
            [
                'name',
                InputArgument::REQUIRED,
                'Name of the theme to generate.',
            ],
        ];
    }
}
