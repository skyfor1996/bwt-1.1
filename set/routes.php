<?php

return array(

    'site/worker/create' => 'siteWorker/create',
    'site/worker/update/([0-9]+)' => 'siteWorker/update/$1',
    'site/worker/delete/([0-9]+)' => 'siteWorker/delete/$1',
    'site/worker' => 'siteWorker/index',

   
    'index.php' => 'siteWorker/index', 
    '' => 'site_worker/index', 
);
