<?php
require_once dirname(__FILE__) . '/generate_static_logs.inc';

#$endDate = isset($argv[1]) ? $argv[1] : date('Y-m-d');
#generateFilesForPeriod(START_CHAT_DATE, $endDate);

generateNewLogs();
