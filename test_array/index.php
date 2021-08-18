<?php
    // Create during 18-array filtering

    Class Post {

        public $title;

        public $author;

        public $published;

        public function __construct ($title, $author, $published) {
            $this->title = $title;
            $this->author = $author;
            $this->published = $published;
        }

    }

    $posts = [
        new Post('My First Post', 'JW', true),
        new Post('My Second Post', 'JKR', true),
        new Post('My Third Post', 'AH', true),
        new Post('My Fourth Post', 'AR', false),
    ];

    var_dump($posts);

    $unpublishedPost = array_filter($posts, function ($post) {
        return !$post->published;
    });

    var_dump($unpublishedPost);

    $publishedPost = array_filter($posts, function ($post) {
        return $post->published;
    });
    
    var_dump($publishedPost);

    // Use map with wrapper or collection class
    $modified = array_map(function ($post) {
        if ($post->published) {
            return [
                'Title' => $post->title,
            ];
        };
    } ,$posts);
    
    var_dump($modified);

    $titles = array_column($posts, 'title');

    var_dump($titles);

    $authors = array_column($posts, 'author');

    var_dump($authors);

    // array_column(what array want to be filtered, what will be value, (optional) what will be key)
    $modifiedPosts = array_column($posts, 'title', 'author');

    var_dump($modifiedPosts);