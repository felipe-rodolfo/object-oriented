<?php
declare(strict_types=1);

require '../vendor/autoload.php';

trait StringToSlug {
    public function stringToSlug($string) 
    {
        $string = strtolower($string);
        $string = preg_replace('/[^a-zA-Z0-9\-]/', '', $string);
        $string = preg_replace('/\s+/', '-', $string);
        return $string;
    }
}

class Post {
    use StringToSlug;
    private string $title;
    public function setString(string $string)
    {
        $this->title = $this->stringToSlug($string);
    }

    public function getString()
    {
        return $this->title;
    }
}

$post = new Post();
$post->setString("Amazing title post");
echo $post->getString();