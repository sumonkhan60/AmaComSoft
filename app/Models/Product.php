<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $product;
    private static $products;
    private static $image;
    private static $imageUrl;
    private static $imageName;
    private static $directory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'product-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    public static function newProduct($request)
    {
        self::$product = new Product();
        self::$imageUrl = self::getImageUrl($request);
        self::saveBasicProductInfo(self::$product, $request, self::$imageUrl);
    }

    public static function updateProduct($request, $id)
    {
        self::$product = Product::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$product->image;
        }
        self::saveBasicProductInfo(self::$product, $request, self::$imageUrl);
    }

    public static function saveBasicProductInfo($product, $request, $imageUrl)
    {
        $product->name = $request->name;
        $product->price  = $request->price;
        $product->image  = $imageUrl;
        $product->details  = $request->details;
        $product->url  = $request->url;
        $product->save();
    }
}
