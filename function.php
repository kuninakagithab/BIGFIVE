<?php
//攻撃を防ぐ
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>