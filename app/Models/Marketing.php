<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    use HasFactory;

    private static $marketing;
    private static $image;
    private static $imageUrl;
    private static $imageName;
    private static $directory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'marketing-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    public static function newMarketing($request)
    {
        self::$marketing = new Marketing();
        self::$imageUrl = self::getImageUrl($request);
        self::saveBasicMarketingInfo(self::$marketing, $request, self::$imageUrl);
    }

    public static function updateMarketing($request, $id)
    {
        self::$marketing = Marketing::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$marketing->image))
            {
                unlink(self::$marketing->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$marketing->image;
        }
        self::saveBasicMarketingInfo(self::$marketing, $request, self::$imageUrl);
    }

    public static function saveBasicMarketingInfo($marketing, $request, $imageUrl)
    {
        $marketing->name = $request->name;
        $marketing->price  = $request->price;
        $marketing->image  = $imageUrl;
        $marketing->details  = $request->details;
        $marketing->save();
    }
}
