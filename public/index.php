<?php
declare(strict_types=1);

require '../vendor/autoload.php';

interface NotifierInterface {
    public function notify();
}

class EmailNotifier implements NotifierInterface {
    public function notify()
    {
        echo "Notify users\n";
    }
}

class SMSNotifer implements NotifierInterface {
    public function notify()
    {
        echo "Notify users by SMS\n";
    }
}

class Post {
    public function __construct(
        public string $title,
        public SMSNotifer $notifier
        ) {}

    public function publish() {
        echo "Publishing post";
        $this->notifier->notify();
    }
}

$newPost = new Post("Learning depency injecyion", new SMSNotifer);
$newPost->publish();