<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="build/mediaelementplayer.css">

 
</head>

<body>


        <br>



            <div class="media-wrapper" style="width: 200px"><div style="background-color:#EEEEEE; padding: 5px;" id="anabot_play_text"></div>
                <audio id="anabot_play" class="anabot_play" preload="none" controls style="max-width:100%;">
                    <source src="music/001.mp3" type="audio/mp3">
                </audio>

            </div>
            <br>



    <script src="build/mediaelement-and-player.js"></script>
    <script src="build/ajax.js"></script>
    <script src="build/lang/ru.js"></script>

    <script src="demo.js"></script>
</body>
</html>

<script>
play_next('stop');
</script>