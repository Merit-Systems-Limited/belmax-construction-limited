<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = "services";

    public static function seed()
    {
        $services = [
            ['name' => 'Construction'],
            ['name' => 'Design'],
        ];

        foreach ($services as $key => $service) {
            if(self::where('name','LIKE',$service['name'])->count() === 0 ){
                self::create($service);
            }
        }
    }
}