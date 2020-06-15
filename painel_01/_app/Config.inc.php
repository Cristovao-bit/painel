<?php
define('HOME', 'http://localhost/cole%C3%A7oes/painel/painel_01');
define('THEMES', 'book');
define('INCLUDE_PATH', HOME . DIRECTORY_SEPARATOR . 'book');
define('REQUIRE_PATH', 'book');

define('WS_SUCCESS', 'trigger-success');
define('WS_INFO', 'trigger-info');
define('WS_ALERT', 'trigger-alert');
define('WS_ERROR', 'trigger-error');

function WSErro($ErrMsg, $ErrNo, $ErrDie = null) {
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));

    echo "<p class=\"trigger {$CssClass}\">{$ErrMsg}</p>";

    if ($ErrDie):
        die;
    endif;
}