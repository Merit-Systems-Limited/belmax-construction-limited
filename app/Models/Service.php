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
            ['name' => 'Site Construction'],
            ['name' => 'Interior Design'],
            ['name' => 'Architectural Designs'],
        ];

        foreach ($services as $key => $service) {
            if (self::where('name', 'LIKE', $service['name'])->count() === 0) {
                self::create($service);
            }
        }
    }
}