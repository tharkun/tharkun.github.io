<?php

function readDirectory($dir, $depth = 0)
{
    if ($handle = opendir($dir))
    {
        while (false !== ($entry = readdir($handle)))
        {
            if ($entry == "." || $entry == "..")
            {
                continue;
            }

            if ($depth)
            {
                echo str_pad('', ($depth-1)*2, ' ');
                echo '* ';
            }

            if (is_dir($dir.'/'.$entry))
            {
                echo "Dir : $entry\n";
                readDirectory($dir.'/'.$entry, $depth+1);
            }
            else
            {
                echo "File : $entry\n";
            }

        }
        closedir($handle);
    }
}

readDirectory('../../');

echo str_pad('', 50, '*'), "\n";
echo str_pad('', 50, '*'), "\n";

function recursiveDirectoryIterator($directory, $depth = 0)
{
    $iterator = new \DirectoryIterator( $directory );

    foreach ( $iterator as $info )
    {
        if ($info->isDot())
        {
            continue;
        }

        if ($depth)
        {
            echo str_pad('', ($depth-1)*2, ' ');
            echo '* ';
        }

        if ($info->isDir())
        {
            echo "Dir : $info\n";

            recursiveDirectoryIterator(
                $directory.DIRECTORY_SEPARATOR.$info->__toString(),
                $depth + 1
            );
        }
        else
        {
            echo "File : $info\n";
        }
    }
}

recursiveDirectoryIterator('../../');
