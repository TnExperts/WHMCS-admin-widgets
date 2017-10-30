<?php

add_hook('AdminHomeWidgets', 1, function() {
    return new Webhostingtalk-widget();
});

/**
 * Webhostingtalk Widget.
 */
class WebhostingtalkWidget extends \WHMCS\Module\AbstractWidget
{
    protected $title = 'Webhostingtalk.nl RSS';
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
        return <<<EOF
<div class="widget-content-padded">
    Here comes RSS..
</div>
EOF;
    }
}
