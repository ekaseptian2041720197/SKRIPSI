<?php

namespaceTests;

useIlluminate\Contracts\Console\Kernel;

traitCreatesApplication
{
/**
*Createstheapplication.
*
*@return\Illuminate\Foundation\Application
*/
publicfunctioncreateApplication()
{
$app=require__DIR__.'/../bootstrap/app.php';

$app->make(Kernel::class)->bootstrap();

return$app;
}
}
