<?php
namespace App\Ross\Bus;


use App\Ross\Contracts\Bus\BusContract;

class Bus implements BusContract
{
    public function byBus()
    {
        return 'This is byBus';
    }
}