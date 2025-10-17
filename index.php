<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Mini Instagram</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>



<?php
// ZANOŘENÍ: autoři mají své příspěvky (posts)
$authors = [
        [
                "username" => "ondra_dev",
                "profile_pic" => "https://i.pravatar.cc/50?img=1",
                "posts" => [
                        [
                                "image" => "https://picsum.photos/600/400?random=1",
                                "likes" => 128,
                                "caption" => "Dneska chill coding session ☕💻",
                                "time" => "2 hours ago",
                                "comments" => [
                                        ["username" => "code_master", "text" => "Nice setup bro! 🔥"]
                                ]
                        ],
                        [
                                "image" => "https://picsum.photos/600/400?random=4",
                                "likes" => 321,
                                "caption" => "Nový projekt brzy venku 🚀",
                                "time" => "6 hours ago",
                                "comments" => [
                                        ["username" => "frontend_guy", "text" => "Nemůžu se dočkat 🔥🔥"]
                                ]
                        ]
                ]
        ],
        [
                "username" => "nature_vibec",
                "profile_pic" => "https://i.pravatar.cc/50?img=2",
                "posts" => [
                        [
                                "image" => "https://picsum.photos/600/400?random=2",
                                "likes" => 542,
                                "caption" => "Pohled, který nikdy neomrzí 🌲🌄",
                                "time" => "5 hours ago",
                                "comments" => [
                                        ["username" => "nature_lover", "text" => "Nice view 🔥"]
                                ]
                        ]
                ]
        ],
        [
                "username" => "gym_grind",
                "profile_pic" => "https://i.pravatar.cc/50?img=3",
                "posts" => [
                        [
                                "image" => "https://picsum.photos/600/400?random=3",
                                "likes" => 512,
                                "caption" => "No pain, no gain 💪🔥",
                                "time" => "1 day ago",
                                "comments" => [
                                        ["username" => "fitness_trainer", "text" => "Respect! 🔥💪"]
                                ]
                        ]
                ]
        ]
];

// VÝPIS všech autorů a jejich postů
foreach ($authors as $author) {
    foreach ($author['posts'] as $post) {
        echo "
        <div class='post'>
            <div class='post-header'>
                <div class='header-left'>
                    <img src='{$author['profile_pic']}' alt='profile'>
                    <span class='username'>{$author['username']}</span>
                </div>
                <div class='header-right'>
                    <span class='dots'>⋯</span>
                </div>
            </div>

            <div class='post-image'>
                <img src='{$post['image']}' alt='post image'>
            </div>

            <div class='post-actions'>
                <div class='actions-left'>
                    <i class='fa-regular fa-heart'></i>
                    <i class='fa-regular fa-comment'></i>
                    <i class='fa-regular fa-paper-plane'></i>
                </div>
                <div class='actions-right'>
                    <i class='fa-regular fa-bookmark'></i>
                </div>
            </div>

            <div class='post-footer'>
                <p><strong>{$post['likes']} likes</strong></p>
                <p><strong>{$author['username']}</strong> {$post['caption']}</p>";

        // Vypíše všechny komentáře
        echo "<div class='comments'>";
        foreach ($post['comments'] as $comment) {
            echo "<p><strong>{$comment['username']}</strong> {$comment['text']}</p>";
        }
        echo "</div>";

        echo "<p class='time'>{$post['time']}</p>
            </div>
        </div>
        ";
    }
}
?>

</body>
</html>