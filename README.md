# phar_learn

# phar?
使用來將不同的php打包  ex．composer  phpbrew  都是phar

前置作業
檢查php.ini中是不是有將readonly設定成off  這樣才能運作phar

指定檔案的路徑
buildFromDirectory( string $base_dir [, string $regex ])
參考 https://www.php.net/manual/en/phar.buildfromdirectory.php

compressFiles  打包格式  GZ  or BZ2