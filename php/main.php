<?php
if (isset($apiData["rapid"]) && $apiData["rapid"] && false) {
    header("HTTP/1.1 301 Moved Permanently");
    header('Location: ' . $apiData["redirect_to"]);
    exit();
}
?>

<!DOCTYPE html>
<html lang="<?= $siteINFO -> langSite ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REDCAT Link</title>
    <link rel="stylesheet" href="css/style.css?v=<?= time() ?>">
</head>
<body class="<?php
        if (isset($apiData["status"]) && $apiData["status"] === "ready") {
            echo 'bgRedirect'; } else { echo 'bgError';
        }
    ?>">

<div class="box">
    <div class="logo">
        <a target="_blank" href="<?= $siteJSON["creator"] ?>">
            <div><img src="<?= $siteINFO -> redcatPath ?>img/logo/logo1.svg" alt="REDCAT logo"></div>
            <div class="link">
                Link BETA
            </div>
        </a>
    </div>
    <?php buildBox($apiData, $langJSON); ?>
    <div>
        <a target="_blank" href="<?= $siteJSON["creator"] ?>">Powered by<br><b>REDCAT</b></a>
    </div>
</div>
    
</body>
<script>
    const redirectURL = "<?php if (isset($siteINFO -> outURL)) {echo $siteINFO -> outURL;}?>";
    const redirectStatus = "<?= $siteINFO->status ?>";
</script>
<script src="<?= $siteINFO->mainPath ?>js/main.js?v=<?= time() ?>"></script>
</html>