<?php
declare(strict_types=1);

require '../vendor/autoload.php';

class Notifier {
    public function notify() {
        echo "Notify users";
    }
}
class Post {
    public function __construct(
        public string $title,
        public Notifier $notifier
        ) {}

    public function publish() {
        echo "Publishing post";
        $this->notifier->notify();
    }
}

$newPost = new Post("Learning depency injecyion", new Notifier);
$newPost->publish();