<?php
#include("app/serveradm/xhprof.php");
echo 1;
define('ROOT_DIR',realpath(dirname(__FILE__)));
echo 2;
require(ROOT_DIR.'/app/base/kernel.php');
echo 3;
kernel::boot();
echo 4;
if(defined("STRESS_TESTING")){
    b2c_forStressTest::logSqlAmount();
}
