<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (isset($_REQUEST['backurl']) &&  strlen($_REQUEST['backurl']) > 0 )
    LocalRedirect($backurl);

$APPLICATION->SetTitle("Authorization");
?>
<p>You are registered and successfully authorised.</p>
<p><a href="<?SITE_DIR?>">Go to main page</a></p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>