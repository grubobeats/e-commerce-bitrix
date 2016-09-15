<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("test", "dfghdfghfghdfhfd");
$APPLICATION->SetPageProperty("title", "Title of the page");
$APPLICATION->SetPageProperty("keywords", "test keywords");
$APPLICATION->SetPageProperty("description", "test description");
$APPLICATION->SetTitle("test");
?>

<p>zogolovok - <?$APPLICATION->ShowTitle()?></p>
<p>zogolovok - <?$APPLICATION->ShowTitle(false)?></p>
<p>test - <?$APPLICATION->ShowProperty('test')?></p>
<p>title - <?$APPLICATION->ShowProperty('title')?></p>
<p>keywords - <?$APPLICATION->ShowProperty('keywords')?></p>
<p>description - <?$APPLICATION->ShowProperty('description')?></p>





<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
