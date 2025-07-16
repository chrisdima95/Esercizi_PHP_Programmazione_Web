<?php

echo "<ul>";
echo "<li><strong>IP Client:</strong> " . $_SERVER['REMOTE_ADDR'] . "</li>";
echo "<li><strong>User-Agent:</strong> " . $_SERVER['HTTP_USER_AGENT'] . "</li>";
echo "<li><strong>File corrente:</strong> " . $_SERVER['PHP_SELF'] . "</li>";
echo "</ul>";
