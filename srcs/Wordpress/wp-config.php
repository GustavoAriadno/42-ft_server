<?php
    // ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
    /** O nome do banco de dados do WordPress */
    define('DB_NAME', 'wordpress');
    /** Usuário do banco de dados MySQL */
    define('DB_USER', 'root');
    /** Senha do banco de dados MySQL */
    define('DB_PASSWORD', '');
    /** Nome do host do MySQL */
    define('DB_HOST', 'localhost');
    /** Charset do banco de dados a ser usado na criação das tabelas. */
    define('DB_CHARSET', 'utf8mb4');
    /** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
    define('DB_COLLATE', '');
    
    /**#@+
    * Chaves únicas de autenticação e salts.*/
    define('AUTH_KEY',         'Xv|k+p+K?~-^2kjvycmB<~sr3T_#WpFFrchM[PN0?R=bd8fBPoj Ea<I_t|-./]S');
    define('SECURE_AUTH_KEY',  'DesXrz]PmyeW:A~-@$0bv,O)]`Y+~qX7+]1Kt3x[|v7Pzgu@C-?J7sqgIJB:/<i1');
    define('LOGGED_IN_KEY',    '22Mm6~sh~Q~lDAL0QPe(0-[ilkV+ T C;WL2yFb|:b|Ki3+{I%tV+1xU>}:ch[|=');
    define('NONCE_KEY',        'P.siJ;RS-&sT1t|lP6/_g%I;W|@hXO@nCEvtB|}ganK2nMNJO+x_MQCm1kOTByIW');
    define('AUTH_SALT',        'p=--EE~!1-.+TJ~k^-NLV{9-+E{mREw3NY)zYcACx8ad^P3qe?s-9l:K}3r8!g|:');
    define('SECURE_AUTH_SALT', 'e?cA(K=`#f^)S%?8?l)1HB4Mrrdh.HbK|-?R)kKGVCm6}:8=]+2iv 2D0}2fG*TU');
    define('LOGGED_IN_SALT',   '^pX`lm|qaf-~hvbHll}`%1`;1@s+[~R4L SX*+s<kZCvHV<fe>/||?3]iw|0ayY|');
    define('NONCE_SALT',       'dw6Rr..sDa-Nm*7:^*t@v--]ppFzfv4ZA#lX@r+MM>SDR$kd$(f[ewQ&fJl3VV +');
    /**#@-*/
    $table_prefix  = 'wp_ftserver';
 
    define('WP_DEBUG', false);

    if ( !defined('ABSPATH') )
       define('ABSPATH', __DIR__ . '/');

       require_once(ABSPATH . 'wp-settings.php');