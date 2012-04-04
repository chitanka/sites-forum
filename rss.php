<?php
header('Location: /feed.php' . (empty($_SERVER['QUERY_STRING']) ? '' : "?$_SERVER[QUERY_STRING]"));
