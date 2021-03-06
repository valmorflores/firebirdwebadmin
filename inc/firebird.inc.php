<?php
// only used on th login panel while $s_charsets is empty
function get_preset_charsets($server_family = null, $server_version = null)
{
    $charsets = array('ASCII',
                      'BIG_5',
                      'CYRL',
                      'DOS437',
                      'DOS850',
                      'DOS852',
                      'DOS857',
                      'DOS860',
                      'DOS861',
                      'DOS863',
                      'DOS865',
                      'EUCJ_0208',
                      'GB_2312',
                      'ISO8859_1',
                      'KSC_5601',
                      'NEXT',
                      'NONE',
                      'OCTETS',
                      'SJIS_0208',
                      'UNICODE_FSS',
                      'WIN1250',
                      'WIN1251',
                      'WIN1252',
                      'WIN1253',
                      'WIN1254',  
                      'CP943C',
                      'DOS737',
                      'DOS775',
                      'DOS858',
                      'DOS862',
                      'DOS864',
                      'DOS866',
                      'DOS869',
                      'GB18030',
                      'GBK',
                      'WIN1255',
                      'WIN1256',
                      'WIN1257',
                      'ISO8859_2',
                      'ISO8859_3',
                      'ISO8859_4',
                      'ISO8859_5',
                      'ISO8859_6',
                      'ISO8859_7',
                      'ISO8859_8',
                      'ISO8859_9',
                      'ISO8859_13',
                      'KOI8R',
                      'KOI8U',
                      'TIS620',
                      'UTF8',
                      'WIN1258'
                    );
    asort($charsets);

    return $charsets;
}

$fieldtypes = array(7 => 'SMALLINT',
            8 => 'INTEGER',
            9 => 'QUAD',
           10 => 'FLOAT',
           11 => 'D_FLOAT',
           12 => 'DATE',
           13 => 'TIME',
           14 => 'CHAR',
           16 => 'INT64',
           27 => 'DOUBLE',
           35 => 'TIMESTAMP',
           37 => 'VARCHAR',
           40 => 'CSTRING',
          261 => 'BLOB', );

//
// return an array containing the datatypes supported by the server
//
function get_datatypes($server_family = null, $server_version = null)
{
    $datatypes = array(7 => 'SMALLINT',
                       8 => 'INTEGER',
                       10 => 'FLOAT',
                       27 => 'DOUBLE',
                       701 => 'DECIMAL',
                       702 => 'NUMERIC',
                       14 => 'CHARACTER',
                       37 => 'VARCHAR',
                       12 => 'DATE',
                       13 => 'TIME',
                       35 => 'TIMESTAMP',
                       261 => 'BLOB',
                       40 => 'CSTRING',
                       16 => 'BIGINT',
                       );

    return $datatypes;
}

$fk_actions = array(0 => 'NO ACTION',
                    1 => 'CASCADE',
                    2 => 'SET DEFAULT',
                    3 => 'SET NULL',
                    );

$pagesizes = array(4096, 8192, 16384);

$server_types = array('other',
                      'FB_2.1',
                      'FB_2.5',
                      'FB_3.0',
                      'FB_3.5',
                      'FB_4.0',
                      );

//
// return an array containing the servers reserved words
//
function get_reserved_words($server_family, $server_version)
{
    $reserved_words =
        array('ACTION', 'ACTIVE', 'ADD', 'ADMIN', 'AFTER', 'ALL', 'ALTER', 'AND', 'ANY',
              'AS', 'ASC', 'ASCENDING', 'AT', 'AUTO', 'AUTODLL', 'AVG', 'BASED', 'BASENAME',
              'BASE_NAME', 'BEFORE', 'BEGIN', 'BETWEEN', 'BLOB', 'BLOBEDIT', 'BUFFER', 'BY',
              'CACHE', 'CASCADE', 'CAST', 'CHAR', 'CHARACTER', 'CHARACTER_LENGTH',
              'CHAR_LENGTH', 'CHECK', 'CHECK_POINT_LEN', 'CHECK_POINT_LENGTH', 'COLLATE',
              'COLUMN', 'COMMIT', 'COMMITTED', 'COMPILETIME', 'COMPUTED', 'CLOSE',
              'CONDITIONAL', 'CONNECT', 'CONSTRAINT', 'CONTAINING', 'CONTINUE', 'COUNT',
              'CREATE', 'CSTRING', 'CURRENT', 'CURRENT_DATE', 'CURRENT_TIME',
              'CURRENT_TIMESTAMP', 'CURSOR', 'DATABASE', 'DATE', 'DAY', 'DB_KEY', 'DEBUG',
              'DEC', 'DECIMAL', 'DECLARE', 'DEFAULT', 'DELETE', 'DESC', 'DESCENDING',
              'DESCRIBE', 'DESCRIPTOR', 'DISCONNECT', 'DISPLAY', 'DISTINCT', 'DO', 'DOMAIN',
              'DOUBLE', 'DROP', 'ECHO', 'EDIT', 'ELSE', 'END', 'ENTRY_POINT', 'ESCAPE',
              'EVENT', 'EXCEPTION', 'EXECUTE', 'EXISTS', 'EXIT', 'EXTERN', 'EXTERNAL',
              'EXTRACT', 'FETCH', 'FILE', 'FILTER', 'FLOAT', 'FOR', 'FOREIGN', 'FOUND',
              'FREE_IT', 'FROM', 'FULL', 'FUNCTION', 'GDSCODE', 'GENERATOR', 'GEN_ID',
              'GLOBAL', 'GOTO', 'GRANT', 'GROUP', 'GROUP_COMMIT_WAIT',
              'GROUP_COMMIT_WAIT_TIME', 'HAVING', 'HELP', 'HOUR', 'IF', 'IMMEDIATE', 'IN',
              'INACTIVE', 'INDEX', 'INDICATOR', 'INIT', 'INNER', 'INPUT', 'INPUT_TYPE',
              'INSERT', 'INT', 'INTEGER', 'INTO', 'IS', 'ISOLATION', 'ISQL', 'JOIN', 'KEY',
              'LC_MESSAGES', 'LC_TYPE', 'LEFT', 'LENGTH', 'LEV', 'LEVEL', 'LIKE', 'LOGFILE',
              'LOG_BUFFER_SIZE', 'LOG_BUF_SIZE', 'LONG', 'MANUAL', 'MAX', 'MAXIMUM',
              'MAXIMUM_SEGMENT', 'MAX_SEGMENT', 'MERGE', 'MESSAGE', 'MIN', 'MINIMUM',
              'MINUTE', 'MODULE_NAME', 'MONTH', 'NAMES', 'NATIONAL', 'NATURAL', 'NCHAR',
              'NO', 'NOAUTO', 'NOT', 'NULL', 'NUMERIC', 'NUM_LOG_BUFS', 'NUM_LOG_BUFFERS',
              'OCTET_LENGTH', 'OF', 'ON', 'ONLY', 'OPEN', 'OPTION', 'OR', 'ORDER', 'OUTER',
              'OUTPUT', 'OUTPUT_TYPE', 'OVERFLOW', 'PAGE', 'PAGELENGTH', 'PAGES',
              'PAGE_SIZE', 'PARAMETER', 'PASSWORD', 'PLAN', 'POSITION', 'POST_EVENT',
              'PRECISION', 'PREPARE', 'PROCEDURE', 'PROTECTED', 'PRIMARY', 'PRIVILEGES',
              'PUBLIC', 'QUIT', 'RAW_PARTITIONS', 'RDB\$DB_KEY', 'READ', 'REAL',
              'RECORD-VERSION', 'REFERENCES', 'RELEASE', 'RESERV', 'RESERVING', 'RESTRICT',
              'RETAIN', 'RETURN', 'RETURNING_VALUES', 'RETURNS', 'REVOKE', 'RIGHT', 'ROLE',
              'ROLLBACK', 'RUNTIME', 'SCHEMA', 'SECOND', 'SEGMENT', 'SELECT', 'SET',
              'SHADOW', 'SHARED', 'SHELL', 'SHOW', 'SINGULAR', 'SIZE', 'SMALLINT',
              'SNAPSHOT', 'SOME', 'SORT', 'SQLCODE', 'SQLERROR', 'SQLWARNING', 'STABILITY',
              'STARTING', 'STARTS', 'STATEMENT', 'STATIC', 'STATISTICS', 'SUB_TYPE', 'SUM',
              'SUSPEND', 'TABLE', 'TERMINATOR', 'THEN', 'TIME', 'TIMESTAMP', 'TO',
              'TRANSACTION', 'TRANSLATE', 'TRANSLATION', 'TRIGGER', 'TRIM', 'TYPE',
              'UNCOMMITTED', 'UNION', 'UNIQUE', 'UPDATE', 'UPPER', 'USER', 'USING', 'VALUE',
              'VALUES', 'VARCHAR', 'VARIABLE', 'VARYING', 'VERSION', 'VIEW', 'WAIT',
              'WEEKDAY', 'WHEN', 'WHENEVER', 'WHERE', 'WHILE', 'WITH', 'WORK', 'WRITE',
              'YEAR', 'YEARDAY','BIGINT', 'CASE', 'CURRENT_CONNECTION', 'CURRENT_ROLE', 'CURRENT_USER', 'CURRENT_TRANSACTION',
              'RECREATE', 'ROW_COUNT', 'RELEASE', 'SAVEPOINT', 'ABS', 'BOOLEAN', 'BOTH', 'CHAR_LENGTH',
              'CHARCTER_LENGTH', 'FALSE', 'LEADING', 'OCTET_LENGTH', 'TRIM', 'TRAILING', 'TRUE', 'UNKNOWN',
               );

    return $reserved_words;
}

//
// return an array containing the valid dsql context variables
//
function get_context_variables($server_family, $server_version)
{
    $context_variables = array('USER', 'CURRENT_DATE', 'CURRENT_CONNECTION' , 'CURRENT_ROLE' , 'CURRENT_TIME' ,'CURRENT_TIMESTAMP','CURRENT_TRANSACTION','CURRENT_USER');

    return $context_variables;
}

//
// return an array containing the system tables names
//
function get_system_tables($server_family, $server_version)
{
    $system_tables =
        array('RDB$CHARACTER_SETS',
              'RDB$CHECK_CONSTRAINTS',
              'RDB$COLLATIONS',
              'RDB$DATABASE',
              'RDB$DEPENDENCIES',
              'RDB$EXCEPTIONS',
              'RDB$FIELD_DIMENSIONS',
              'RDB$FIELDS',
              'RDB$FILES',
              'RDB$FILTERS',
              'RDB$FORMATS',
              'RDB$FUNCTION_ARGUMENTS',
              'RDB$FUNCTIONS',
              'RDB$GENERATORS',
              'RDB$INDEX_SEGMENTS',
              'RDB$INDICES',
              'RDB$LOG_FILES',
              'RDB$PAGES',
              'RDB$PROCEDURE_PARAMETERS',
              'RDB$PROCEDURES',
              'RDB$REF_CONSTRAINTS',
              'RDB$RELATION_CONSTRAINTS',
              'RDB$RELATION_FIELDS',
              'RDB$RELATIONS',
              'RDB$ROLES',
              'RDB$SECURITY_CLASSES',
              'RDB$TRANSACTIONS',
              'RDB$TRIGGER_MESSAGES',
              'RDB$TRIGGERS',
              'RDB$TYPES',
              'RDB$USER_PRIVILEGES',
              'RDB$VIEW_RELATIONS', );

    return $system_tables;
}

// the RDB$OBJECT_TYPEs from the RDB$TYPES table
define('OT_RELATION', 0);
define('OT_VIEW', 1);
define('OT_TRIGGER', 2);
define('OT_COMPUTED_FIELD', 3);
define('OT_VALIDATION', 4);
define('OT_PROCEDURE', 5);
define('OT_EXPRESSION_INDEX', 6);
define('OT_EXCEPTION', 7);
define('OT_USER', 8);
define('OT_FIELD', 9);
define('OT_INDEX', 10);
define('OT_DEPENDENT_COUNT', 11);
define('OT_USER_GROUP', 12);
define('OT_ROLE', 13);
define('OT_GENERATOR', 14);
define('OT_UDF', 15);
define('OT_BLOB_FILTER', 16);
