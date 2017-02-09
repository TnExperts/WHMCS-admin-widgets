<?php
// created by hostingwalk.com & amservers.nl
add_hook('AdminHomeWidgets', 1, function() {
    return new HelloWorldWidget();
});

/**   *RBL Wachter Widget.   */
class HelloWorldWidget extends \WHMCS\Module\AbstractWidget
{
    protected $title = 'RBLWatcher.com';
    protected $description = '';
    protected $weight = 150;
    protected $columns = 1;
    protected $cache = false;
    protected $cacheExpiry = 120;
    protected $requiredPermission = '';

    public function getData()
    {
        return array();
    }

    public function generateOutput($data)
    {
$username="abuse@hostingwalk.com";
$password="7a2b9ccc-4b69-49de-8e85-7efe964b9924";
$url="https://rblwatcher.com/api/v1/ip/blacklisted";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);

return '<div class="widget-content-padded">'.$output.'</div>';

    }
}
