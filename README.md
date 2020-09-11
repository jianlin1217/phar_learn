# phar_learn

# phar?
使用來將不同的php打包  ex．composer  phpbrew  都是phar

前置作業
檢查php.ini中是不是有將readonly設定成off  這樣才能運作phar

->無法運作phar  但已經將readonly設定成off 並且使用phpInfo查看
ERROR訊息：Fatal error: Uncaught UnexpectedValueException: creating archive "/Applications/MAMP/htdocs/phar_learn/test.phar" disabled by the php.ini setting phar.readonly in /Applications/MAMP/htdocs/phar_learn/demo.php:7
Stack trace:
#0 /Applications/MAMP/htdocs/phar_learn/demo.php(7): Phar->__construct('/Applications/M...', 256, 'test.phar')
#1 {main}
  thrown in /Applications/MAMP/htdocs/phar_learn/demo.php on line 7

指定檔案的路徑
buildFromDirectory( string $base_dir [, string $regex ])
參考 https://www.php.net/manual/en/phar.buildfromdirectory.php



compressFiles  打包格式  GZ  or BZ2