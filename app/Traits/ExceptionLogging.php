<?php


namespace App\Traits;


trait ExceptionLogging
{

    public function logError($class, $function, $data)
    {
        $fh = fopen('rolloverExceptions', 'a+');
        fwrite($fh, "Exception thrown in {$class}->{$function}()\n");
        fwrite($fh, serialize($data) . "\n");
        fclose($fh);
    }
}
