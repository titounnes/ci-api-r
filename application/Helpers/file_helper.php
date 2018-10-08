<?php
 
if ( ! function_exists('reading'))
{
    function reading(string $dir, int $id):string
    {
        $path = DATA . $dir . $id .'.dat';
        
        if(! file_exists( $path )){
            return false;
        }
        
        try {
            $h = fopen($path, 'r');
            flock($h, LOCK_EX);
            $content =  fread($h, filesize($path));
            flock($h, LOCK_UN);
            fclose($h);
            return gzuncompress($content);
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }
}

if ( ! function_exists('writing'))
{
    function writing(string $dir, int $id, string $data)
    {
        $path = DATA . $dir . $id .'.dat';

        if(!file_exists( DATA . $dir )){
            mkdir(DATA . $dir, 0755);
        }

        if(!file_exists(DATA . $dir . $id. '_images/')){
            mkdir(DATA . $dir . $id. '_images/', 0755);
        }

        $h = fopen($path,'w');
        flock($h, LOCK_EX);
        fwrite($h, gzcompress($data));
        flock($h, LOCK_UN);
        fclose($h);
        return true;
    }
}
