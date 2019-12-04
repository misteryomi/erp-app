<?php

namespace App\Http\Controllers\Documents;

use Alexusmai\LaravelFileManager\Services\ACLService\ACLRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UsersACLRepository implements ACLRepository
{

    private $user;

    function __construct()
    {
        $this->user = \Auth::user();
    }

    /**
     * Get user ID
     *
     * @return mixed
     */
    public function getUserID()
    {
        return $this->user->id;
    }

    /**
     * Get ACL rules list for user
     *
     * @return array
     */
    public function getRules(): array
    {
        $username = $this->user->username;

        $canAdmin = $this->user->hasRole('super-admin');
        //Create user's folder if not exists
        $this->createUserDirectory($username);

        return [
            ['disk' => 'documents', 'path' => '/', 'access' => 1],                                  // main folder - read
            ['disk' => 'documents', 'path' => 'HR', 'access' => 1],                              // only read
            ['disk' => 'documents', 'path' => 'HR/*', 'access' => $canAdmin ? 2 : 1],                              // only read
            ['disk' => 'documents', 'path' => $username, 'access' => 1],        // only read
            ['disk' => 'documents', 'path' => $username .'/*', 'access' => 2],  // read and write
        ];
    }


    private function createUserDirectory($username) {
        $path = public_path('files/'.$username);

        if(!File::isDirectory($path)) {
            File::makeDirectory($path, 077, true, true);
        }
    }
}
