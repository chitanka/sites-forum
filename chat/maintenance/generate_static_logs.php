<?php
// Show all errors:
error_reporting(E_ALL);

define('IN_PHPBB', 1);

require_once dirname(__FILE__) . '/../lib/config.php';
require_once dirname(__FILE__) . '/generate_static_logs.inc';

class SeoConfig {
	private $cache_config;
	public function __construct($rootDir) {
		require_once "$rootDir/phpbb_seo/cache/phpbb_cache.php";
	}
	public function getForumName($forumId) {
		return isset($this->cache_config['forum'][$forumId]) ? $this->cache_config['forum'][$forumId] : 'main';
	}
}

$seoConfig = new SeoConfig(dirname(__FILE__) . '/../..');
$channels = array();
foreach ($config['limitChannelList'] as $channelId) {
	$channels[] = array(
		'id'   => $channelId,
		'name' => $seoConfig->getForumName($channelId),
	);
}

$generator = new StaticLogGenerator(getDb());
$generator->generateNewLogs($channels);

#$endDate = isset($argv[1]) ? $argv[1] : date('Y-m-d');
#$generator->generateFilesForPeriod(StaticLogGenerator::START_CHAT_DATE, $endDate);
