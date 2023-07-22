<!DOCTYPE html>
<html>
<head>
    <title>Live Streaming Video</title>
</head>
<body>
    <h1>Live Streaming Video</h1>

    <?php
    // Specify the video file path
    $videoFilePath = "ani.mp4";

    // Get the video file size
    $videoFileSize = filesize($videoFilePath);

    // Set the appropriate content headers
    header("Content-Type: video/mp4");
    header("Content-Length: ".$videoFileSize);

    // Read and output the video file
    readfile($videoFilePath);
    ?>
</body>
</html>
