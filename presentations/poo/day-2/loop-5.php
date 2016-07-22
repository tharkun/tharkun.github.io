<?php

//Une API vous retourne un tableau de users sous la forme d’un tableau avec les clés id, username, name, firstname. Écrivez une fonction permettant de retourner les données d’un user à partir de son username.

/**
 * @return array
 */
function getUsers()
{
    return array(
        array(
            'id' => 1,
            'username' => 'jpoulain',
            'firstname' => 'jeremy',
            'lastname' => 'poulain',
        ),
        array(
            'id' => 45,
            'username' => 'jclancy',
            'firstname' => 'jonathan',
            'lastname' => 'clancy',
        ),
    );
}

function findByUsername($username)
{
    $users = getUsers();
    foreach ($users as $user)
    {
        if ($username === $user['username'])
        {
            return $user;
        }
    }

    throw new \Exception('');
}

function findByUsername2($username)
{
    $users = getUsers();
    foreach ($users as $user)
    {
        if ($username != $user['username'])
        {
            continue;
        }

        return $user;
    }

    throw new \Exception('');
}

function findByUsername3($username)
{
    $result = null;

    $users = getUsers();
    foreach ($users as $user)
    {
        if ($username == $user['username'])
        {
            $result = $user;
            break 1;
        }
    }

    return $result;
}

$user = findByUsername( $argv[1] );

print_r($user);
