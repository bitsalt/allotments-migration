<?php


namespace App\Traits;


trait ExceptionLogging
{

    public function logError($class, $function, $data)
    {
        $fh = fopen('rolloverExceptions', 'a+');
        $time = date('Y-m-d H:i:s');
        fwrite($fh, "$time Exception thrown in {$class}->{$function}()\n");
        fwrite($fh, serialize($data) . "\n");
        fclose($fh);
    }
}
