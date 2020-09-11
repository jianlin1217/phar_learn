<?php
    //githubDesktop
    $pharfile = ('pharbag.php');

    //到檔案的路徑
    $path = (''); 
    $phar = new phar($pharfile);
    //指定phar生成路徑及名稱
    $phar->setAlias('test.phar');
    //指定打包的形式 GZ   or   BZ2
    $phar->compressFiles(phar::GZ);
    //setStub  若不是在php檔案中使用  則會使用Stub為預設的使用
    $phar->setStub(file_get_contents('process.php'));


?>