<?php
session_start();
require_once 'Instagram.php';

/**
 * Configuration params, make sure to write exactly the ones
 * instagram provide you at http://instagr.am/developer/
 */
$config = array(
        'client_id' => 'dc3f4dabb20a47489f343d2f77ec71f0',
        'client_secret' => 'ec515a9cd4174f94a2d3a8194148bfec',
        'grant_type' => 'authorization_code',
        'redirect_uri' => 'http://spareroomhollywood.dev'
     );



// Instantiate the API handler object
$instagram = new Instagram($config);
// $instagram->openAuthorizationUrl();
$accessToken = $instagram->getAccessToken();
$_SESSION['InstagramAccessToken'] = '33d1b17b9b8c469d9f162b3352cc8696';

/*
$accessToken = $instagram->getAccessToken();
$_SESSION['InstagramAccessToken'] = $accessToken;

$instagram->setAccessToken($_SESSION['InstagramAccessToken']);
*/
$popular = $instagram->getPopularMedia();
/*
// After getting the response, let's iterate the payload
$response = json_decode($popular, true);

echo '<pre>';
print_r($response);
echo '</pre>';
    foreach ($response['data'] as $data) {
        $link = $data['link'];
        $id = $data['id'];
        $caption = $data['caption']['text'];
        $author = $data['caption']['from']['username'];
        $thumbnail = $data['images']['thumbnail']['url'];
    ?>
    <div class="photo">
        <a href="pic.php?id=<?= $id ?>"><span></span><img src="<?= $thumbnail ?>" title="<?= htmlentities($caption) ?>" alt="<?= htmlentities($caption) ?>" /></a>
    </div>
    <?php
   }
?>
*/

echo '<pre>';
print_r($popular);
echo '</pre>';


die();