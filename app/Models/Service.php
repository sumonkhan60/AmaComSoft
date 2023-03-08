<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    private static $service;
    private static $services;
    private static $image;
    private static $imageUrl;
    private static $imageName;
    private static $directory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'service-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    public static function newService($request)
    {
        self::$service = new Service();
        self::$imageUrl = self::getImageUrl($request);
        self::saveBasicServiceInfo(self::$service, $request, self::$imageUrl);
    }

    public static function updateService($request, $id)
    {
        self::$service = Service::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$service->image))
            {
                unlink(self::$service->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$service->image;
        }
        self::saveBasicServiceInfo(self::$service, $request, self::$imageUrl);
    }

    public static function saveBasicServiceInfo($service, $request, $imageUrl)
    {
        $service->name = $request->name;
        $service->image  = $imageUrl;
        $service->description  = $request->description;
        $service->save();
    }

}
