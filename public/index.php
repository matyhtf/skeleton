<?php
define('DEBUG', 'on');
define('WEBROOT', 'http://local.framework.com');

require __DIR__ . '/../vendor/autoload.php';
$app = SPF\App::getInstance(__DIR__ . '/../apps');
if (get_cfg_var('env.name') == 'dev') {
    $app->config->setPath($app->app_path . '/apps/configs/dev/');
}
$app->handle();
