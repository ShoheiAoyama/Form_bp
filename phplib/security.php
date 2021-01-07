<?php
//クロスサイトスクリプティング（XSS）対策
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
