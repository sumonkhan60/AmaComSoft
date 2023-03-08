<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\fileExists;

class Blog extends Model
{
    use HasFactory;

    private static $blog;
    private static $blogs;
    private static $image;
    private static $imageUrl;
    private static $imageName;
    private static $directory;
    private static $video;
    private static $videoUrl;
    private static $videoName;
    private static $videoDirectory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'blog-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    public static function getVideoUrl($request)
    {
        self::$video = $request->file('video');
        self::$videoName = self::$video->getClientOriginalName();
        self::$videoDirectory = 'blog-videos/';
        self::$video->move(self::$videoDirectory, self::$videoName);
        self::$videoUrl = self::$videoDirectory . self::$videoName;
        return self::$videoUrl;
    }

    public static function newBlog($request)
    {
        self::$blog = new Blog();
        self::$imageUrl = self::getImageUrl($request);
        self::$videoUrl = self::getVideoUrl($request);
        self::saveBasicBlogInfo(self::$blog, $request, self::$imageUrl, self::$videoUrl);
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function updateBlog($request, $id)
    {
        self::$blog = Blog::find($id);
        if($request->file('image') && $request->file('video'))
        {
            if(file_exists(self::$blog->image) && file_exists(self::$blog->video))
            {
                unlink(self::$blog->image);
                unlink(self::$blog->video);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$blog->image;
        }
        self::saveBasicBlogInfo(self::$blog, $request, self::$imageUrl, self::$videoUrl);
    }

    public static function saveBasicBlogInfo($blog, $request, $imageUrl, $videoUrl)
    {
        $blog->category_id = $request->category_id;
        $blog->title  = $request->title;
        $blog->image  = $imageUrl;
        $blog->video  = $videoUrl;
        $blog->content  = $request->content;
        $blog->save();
    }
}
