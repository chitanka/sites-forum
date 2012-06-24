<?php
// Show all errors:
error_reporting(E_ALL);

require_once dirname(__FILE__) . '/generate_static_logs.inc';

$generator = new StaticLogGenerator(getDb());
$generator->generateNewLogs();

#$endDate = isset($argv[1]) ? $argv[1] : date('Y-m-d');
#$generator->generateFilesForPeriod(StaticLogGenerator::START_CHAT_DATE, $endDate);
