<?php
error_reporting(E_ALL);
date_default_timezone_set('Asia/Kolkata');
$site_url = "http://localhost/allprograminghelp/";
class SiteConfig{
    const SITE_URL = "http://localhost/allprograminghelp/";

    const UPLOAD_IMG_PATH = "uploads/";

    const UseSMTPProtocol = true;
    const SMTPAuth = true;
    const SMTPSecure = 'tls';
 
    const SMTPDebug = 0;

    const SMTPHost = 'smtp.gmail.com';
    const SMTPPort = 587;
    const SMTPUserName = 'mail.ct27@gmail.com';
    const SMTPPassword = 'alpine$$';
    const SiteEmailFrom = 'lovekesh.calinfo7@gmail.com';
    const SiteNameFrom = 'All Programming Help';
    
	const SiteAdminEmail = 'lovekesh.calinfo7@gmail.com';
    const SiteAdminEmailSecond = 'manojphp7@gmail.com';
    const SiteAdminName = 'Dave';
}

?>