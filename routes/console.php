<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
|ConsoleRoutes
|--------------------------------------------------------------------------
|
|ThisfileiswhereyoumaydefineallofyourClosurebasedconsole
|commands.EachClosureisboundtoacommandinstanceallowinga
|simpleapproachtointeractingwitheachcommand'sIOmethods.
|
*/

Artisan::command('inspire',function(){
$this->comment(Inspiring::quote());
})->purpose('Displayaninspiringquote');
