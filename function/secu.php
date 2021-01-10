<?php
//パスワードを記録したファイルの場所
echo __FILE__;
// /Users/developer/projects/Form_bp/secu.php
//パスワード
echo '<br>';
echo(password_hash('password123', PASSWORD_BCRYPT));
//$2y$10$5dJKMssFkA2yaQLaVqMD6uiuD5lUWGOknqVYSvDhvePdZFEL9UpZm