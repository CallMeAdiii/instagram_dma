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
// Asociativní pole příspěvků, Zde jsem si vypsal všechny věci které se budou zobrazovat
$posts = [

    [
        "username" => "ondra_dev",
        "profile_pic" => "https://i.pravatar.cc/50?img=1", // profilovka
        "image" => "https://picsum.photos/600/400?random=1",
        "likes" => 128,
        "caption" => "Dneska chill coding session ☕💻",
        "time" => "2 Hours ago",
        "comments" => [
            "username" => "code_master",
            "text" => "Nice setup bro! 🔥"
        ]
    ],


    [
        "username" => "nature_vibec",
        "profile_pic" => "https://i.pravatar.cc/50?img=2",
        "image" => "https://picsum.photos/600/400?random=2",
        "likes" => 542,
        "caption" => "Pohled, který nikdy neomrzí  🌲🌄",
        "time" => "5 Hours ago",
        "comments" => [
            "username" => "nature_lover",
            "text" => "Nice view 🔥"
        ]
    ],
    [
        "username" => "gym_grind",
        "profile_pic" => "https://i.pravatar.cc/50?img=3",
        "image" => "https://picsum.photos/600/400?random=3",
        "likes" => 512,
        "caption" => "No pain, no gain 💪🔥",
        "time" => "1 day ago",
        "comments" => [
            "username" => "fitness_trainer",
            "text" => "Respect! 🔥💪"
        ]
    ],

    ];
// Výpis všech příspěvků pomocí foreach
foreach ($posts as $post) {
    echo "
    <div class='post'>
        <div class='post-header'> 
        <div class='header-left'> <!-- Levá strana vrchu postu kde bude profilovka a jméno -->
            <img src='{$post['profile_pic']}' alt='profile'>
            <span class='username'>{$post['username']}</span>
        </div>
        <div class='header-right'> <!-- Pravá strana kde budou jen tečky pro zobrazení více -->
            <span class='dots'>⋯</span>
        </div>
        
    </div>
        <div class='post-image'> <!-- Zde bude obrázek -->
            <img src='{$post['image']}' alt='post image'>
        </div>
        <div  class='post-actions'> <!-- Tady jsou takové ty ikony pro lajky comenty a sdílení -->
            <div class='actions-left'>  <!-- Zase je to rozdělené na left a right -->
                <i class='fa-regular fa-heart'></i>
                <i class='fa-regular fa-comment'></i>
                <i class='fa-regular fa-paper-plane'></i>
            </div>
            <div class='actions-right'> <!-- Zde budou ikony které chci aby byly na druhé straně -->
                <i class='fa-regular fa-bookmark'></i>
            </div>
        </div>
        
        
        
        <div class='post-footer'>
            <p><strong>{$post['likes']} likes</strong></p>
            <p><strong>{$post['username']}</strong> {$post['caption']}</p>
             <div class='comments'>
                <p><strong>{$post['comments']['username']}</strong> {$post['comments']['text']}</p>
            </div>
            <p class='time'>{$post['time']}</p>
            
        </div>
    </div>
    ";
}
?>

</body>
</html>