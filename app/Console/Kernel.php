<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define los comandos de Artisan que se deben registrar.
     *
     * @var array
     */
    protected $commands = [
        Commands\DispatchTestJobCommand::class,
    ];

    /**
     * Define el programa de tareas cron.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Aquí puedes programar tareas, por ejemplo:
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Registra los comandos para la aplicación.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
