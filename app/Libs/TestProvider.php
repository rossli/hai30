<?php
namespace App\Libs;

use App\User;

class TestProvider
{
    public function test($id)
    {

        $testuser = User::findOrFail($id);
        return $testuser;
    }
}


