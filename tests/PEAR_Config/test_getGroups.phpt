--TEST--
PEAR_Config->getGroups()
--SKIPIF--
<?php
if (!getenv('PHP_PEAR_RUNTESTS')) {
    echo 'skip';
}
?>
--FILE--
<?php
error_reporting(E_ALL);
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'setup.php.inc';
$config = new PEAR_Config($temp_path . DIRECTORY_SEPARATOR . 'pear.ini', $temp_path .
    DIRECTORY_SEPARATOR . 'nofile');
$phpunit->assertEquals(array (
  0 => 'Internet Access',
  1 => 'File Locations',
  2 => 'File Locations (Advanced)',
  3 => 'Maintainers',
  4 => 'Advanced',
), $config->getGroups(), 'groups');
echo 'tests done';
?>
--EXPECT--
tests done
