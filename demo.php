<?php
$exts = array(
        '*',
    );
$dir = __DIR__;
$file = 'test.phar';
$phar = new Phar(__DIR__ . '/' . $file, FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME, $file);
$phar->startBuffering();
foreach ($exts as $ext) {
$phar->buildFromDirectory($dir, '/\.' . $ext . '$/');
}
$phar->delete('build.php');
$phar->setStub($phar->createDefaultStub('index.php'));
$phar->stopBuffering();
echo phpinfo();
echo "打包完成".PHP_EOL;