<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $title;
    public $excerpt;
    public $date;
    public $body;

    public $slug;
    public $author;
    /**
     * The constructor.
     */
    public function __construct($title, $excerpt, $date, $body ,$slug, $author)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
        $this->author = $author;
    }

    public static function all()
    {
        return collect(File:: files(resource_path("posts")))
        ->map(fn($file)=>YamlFrontMatter:: parseFile($file))
        ->map (fn($document)=>new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug,
            $document->author,
        ))
        ->sortby('date');
    }

    public static function find($slug)
    {
        if (!File::exists($path = resource_path("posts/{$slug}.html"))){
            throw new ModelNotFoundException();
        }

        return Cache::remember("posts.{$slug}", 1200, fn () => file_get_contents($path));
    }
}
