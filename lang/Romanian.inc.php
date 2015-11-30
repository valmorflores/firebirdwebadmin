<?php
// Purpose        Language strings definitions
// Author         Lutz Brueckner <irie@gmx.de>
// Copyright      (c) 2000-2006 by Lutz Brueckner,
//                published under the terms of the GNU General Public Licence v.2,
//                see file LICENCE for details

//Initial authors
// Dutch          			Michael van Canneyt <Michael.VanCanneyt@Wisa.be
// Japanese       			Shue Miula <shue@xdip.com>
// Polish         			Matthias Hryniszak <matthias@hryniszak.de>
// Hungarian      			Zoltán Miklovicz <zmiklovicz@vivamail.hu>
// Spanish        			Jose Pichardo <joel_pichardo@yahoo.com>
// Russian        			Andrej Surkov <sura@mail.ru>
// Portuguese, Brazilian	Paulo Vaz <paulo@multi-informatica.com.br>

// strings used for the tabfolder menu
$menu_strings = array('Database' => 'Baza de date',
                      'Tables' => 'Tabele',
                      'Accessories' => 'Accesorii',
                      'SQL' => 'SQL',
                      'Data' => 'Date',
                      'Users' => 'Utilizatori',
                      'Admin' => 'Administrare',
                      );

// strings used as panel titles
$ptitle_strings = array('info' => 'Info',
                        'db_login' => 'Conectare la baza de date',
                        'db_create' => 'Creare bază de date',
                        'db_delete' => 'Şterge baza de date',
                        'db_systable' => 'Tabelele de sistem',
                        'db_meta' => 'Metadate',
                        'tb_show' => 'View Tables',
                        'tb_create' => 'Create New Table',
                        'tb_modify' => 'Modify Table',
                        'tb_delete' => 'Delete Table',
                        'acc_index' => 'Indexes',
                        'acc_gen' => 'Generators',
                        'acc_trigger' => 'Triggers',
                        'acc_proc' => 'Stored Procedures',
                        'acc_domain' => 'Domains',
                        'acc_view' => 'Views',
                        'acc_udf' => 'User Defined Functions',
                        'acc_exc' => 'Exceptions',
                        'sql_enter' => 'Enter Command or Script',
                        'sql_output' => 'Show Output',
                        'tb_watch' => 'Watch Table',
                        'dt_enter' => 'Enter Data',
                        'dt_export' => 'Export Data',
                        'dt_import' => 'CSV Import',
                        'usr_user' => 'Users',
                        'usr_role' => 'Roles',
                        'usr_grant' => 'Grants',
                        'usr_cust' => 'Setări',
                        'adm_server' => 'Server Statistics',
                        'adm_dbstat' => 'Database Statistics',
                        'adm_gfix' => 'Database Maintenance',
                        'adm_backup' => 'Backup',
                        'adm_restore' => 'Restore',
                        'Open' => 'open',
                        'Close' => 'close',
                        'Up' => 'up',
                        'Top' => 'top',
                        'Bottom' => 'bottom',
                        'Down' => 'down',
                        );

// strings to inscribe buttons
$button_strings = array('Login' => 'Autentificare',
                        'Logout' => 'Deconectare',
                        'Create' => 'Create',
                        'Delete' => 'Delete',
                        'Select' => 'Select',
                        'Save' => 'Save',
                        'Reset' => 'Reset',
                        'Cancel' => 'Cancel',
                        'Add' => 'Add',
                        'Modify' => 'Modify',
                        'Ready' => 'Ready',
                        'Yes' => 'Yes',
                        'No' => 'No',
                        'DoQuery' => 'Perform Query',
                        'QueryPlan' => 'Query Plan',
                        'Go' => 'Go',
                        'DisplAll' => 'Display All',
                        'Insert' => 'Insert',
                        'Export' => 'Export',
                        'Import' => 'Import',
                        'Remove' => 'Remove',
                        'Drop' => 'Drop',
                        'Set' => 'Set',
                        'Clear' => 'Clear',
                        'SweepNow' => 'Sweep Now',
                        'Execute' => 'Execute',
                        'Backup' => 'Backup',
                        'Restore' => 'Restore',
                        'Reload' => 'Reload',
                        'OpenAll' => 'Open All',
                        'CloseAll' => 'Close All',
                        'Defaults' => 'Set Defaults',
                        'Load' => 'Load',
                        'Unmark' => 'Unmark',
                        );

// strings on the database page
$db_strings = array('Database' => 'Database',
                    'Host' => 'Host',
                    'Username' => 'Username',
                    'Password' => 'Password',
                    'Role' => 'Role',
                    'Cache' => 'Cache',
                    'Charset' => 'Character Set',
                    'Dialect' => 'Dialect',
                    'Server' => 'Server',
                    'NewDB' => 'New Database',
                    'PageSize' => 'Page Size',
                    'DelDB' => 'Delete Database',
                    'SysTables' => 'System Tables',
                    'SysData' => 'System Data',
                    'FField' => 'Filter Field',
                    'FValue' => 'Filter Value',
                    'Refresh' => 'Refresh',
                    'Seconds' => 'Seconds',
                    );

// strings on the table page
$tb_strings = array('Name' => 'Name',
                    'Type' => 'Type',
                    'Length' => 'Length',
                    'Prec' => 'Precision',
                    'PrecShort' => 'Prec',
                    'Scale' => 'Scale',
                    'Charset' => 'Char Set',
                    'Collate' => 'Collate',
                    'Collation' => 'Collation',
                    'NotNull' => 'Not Null',
                    'Unique' => 'Unique',
                    'Computed' => 'Computed',
                    'Default' => 'Default',
                    'Primary' => 'Primary',
                    'Foreign' => 'Foreign',
                    'TbName' => 'Table Name',
                    'Fields' => 'Fields',
                    'DefColumn' => 'Definitions for Column',
                    'SelTbMod' => 'Select table to modify',
                    'DefNewCol' => 'Definitions for New Column',
                    'NewColPos' => 'New Column Position',
                    'SelColDel' => 'Select column to delete',
                    'SelColMod' => 'Select column to modify',
                    'AddCol' => 'Add column',
                    'SelTbDel' => 'Select table to delete',
                    'Datatype' => 'Datatype',
                    'Size' => 'Size',
                    'Subtype' => 'Subtype',
                    'SegSiShort' => 'SegSize',
                    'Domain' => 'Domain',
                    'CompBy' => 'Computed by',
                    'Table' => 'table',
                    'Column' => 'column',
                    'Source' => 'Source',
                    'Check' => 'Check',
                    'Yes' => 'Yes',
                    'DispCounts' => 'record counts',
                    'DispCNames' => 'constraint names',
                    'DispDef' => 'default values',
                    'DispComp' => 'computed values',
                    'DispComm' => 'comments',
                    'DropPK' => 'Drop Primary Key',
                    'DropFK' => 'Drop Foreign Key',
                    'DropUq' => 'Drop Unique Constraint',
                    'FKName' => 'Foreign Key Name',
                    'OnUpdate' => 'On Update',
                    'OnDelete' => 'On Delete',
                    'Table1' => 'Table',
                    'Column1' => 'Column',
                    );

// strings on the accessories page
$acc_strings = array('CreateIdx' => 'Create New Index',
                     'ModIdx' => 'Modify Index %s',
                     'Name' => 'Name',
                     'Active' => 'Active',
                     'Unique' => 'Unique',
                     'Sort' => 'Sort',
                     'Table' => 'Table',
                     'Columns' => 'Columns',
                     'SelIdxMod' => 'Select index to modify',
                     'SelIdxDel' => 'Select index to delete',
                     'ColExpl' => 'Column(s), comma seperated',
                     'Value' => 'Value',
                     'SetValue' => 'Set Value',
                     'DropGen' => 'Drop Generator',
                     'CreateGen' => 'Create New Generator',
                     'StartVal' => 'Startvalue',
                     'CreateTrig' => 'Create new trigger',
                     'SelTrigMod' => 'Select trigger to modify',
                     'SelTrigDel' => 'Select trigger to delete',
                     'Type' => 'Type',
                     'Pos' => 'Pos',
                     'Phase' => 'Phase',
                     'Position' => 'Position',
                     'Status' => 'Status',
                     'Source' => 'Source',
                     'ModTrig' => 'Modify Trigger %s',
                     'CreateDom' => 'Create New Domain',
                     'SelDomDel' => 'Select domain to delete',
                     'SelDomMod' => 'Select domain to modify',
                     'Size' => 'Size',
                     'Charset' => 'Charset',
                     'Collate' => 'Collate',
                     'PrecShort' => 'Prec',
                     'Scale' => 'Scale',
                     'Subtype' => 'Subtype',
                     'SegSiShort' => 'Segsize',
                     'ModDomain' => 'Modify Domain %s',
                     'Generator' => 'generator',
                     'Index' => 'index',
                     'Trigger' => 'trigger',
                     'Domain' => 'domain',
                     'CreateProc' => 'Create New Procedure',
                     'ModProc' => 'Modify Procedure %s',
                     'SelProcMod' => 'Select procedure to modify',
                     'SelProcDel' => 'Select procedure to delete',
                     'SP' => 'stored procedure',
                     'Param' => 'Parameters',
                     'Return' => 'Return',
                     'CreateView' => 'Create New View',
                     'SelViewDel' => 'Select view to delete',
                     'SelViewMod' => 'Select view to modify',
                     'CheckOpt' => 'with check option',
                     'ModView' => 'Modify View %s',
                     'Yes' => 'Yes',
                     'No' => 'No',
                     'Module' => 'Module',
                     'EPoint' => 'Entrypoint',
                     'IParams' => 'Input Parameters',
                     'Returns' => 'Returns',
                     'UDF' => 'user defined function',
                     'SelUdfDel' => 'Select function to delete',
                     'Exception' => 'Exception',
                     'Message' => 'Message',
                     'SelExcDel' => 'Select exception to delete',
                     'CreateExc' => 'Create new exception',
                     'SelExcMod' => 'Select exception to modify',
                     'ModExc' => 'Modify exception %s',
                     );

// strings on the sql page incl. the watch table panel
$sql_strings = array('DisplBuf' => 'displaying result from buffer',
                     'SelTable' => 'Select Table',
                     'Config' => 'Config',
                     'Column' => 'Column',
                     'Show' => 'Show',
                     'Sort' => 'Sort',
                     'BlobLink' => 'Blob as Link',
                     'BlobType' => 'Blob Type',
                     'Rows' => 'Rows',
                     'Start' => 'Start',
                     'Dir' => 'Direction',
                     'ELinks' => 'Edit Links',
                     'DLinks' => 'Delete Links',
                     'Asc' => 'Ascending',
                     'Desc' => 'Descending',
                     'Restrict' => 'Condition to restrict the result, e.g. FIELDNAME>=1000',
                     'Prev' => 'Prev',
                     'Next' => 'Next',
                     'End' => 'End',
                     'Total' => 'total',
                     'Edit' => 'edit',
                     'Delete' => 'delete',
                     'Yes' => 'Yes',
                     'No' => 'No',
                     'TBInline' => 'Text Blobs Inline',
                     'TBChars' => 'Text Blob Characters',
                     );

// strings on the data page
$dt_strings = array('SelTable' => 'Select Table',
                    'Table' => 'Table',
                    'EditFrom' => '%1$sEdit from table %2$s',
                    'FileName' => 'File Name',
                    'EntName' => 'Enter Name',
                    'FileForm' => 'File Format',
                    'ConvEmpty' => 'on import convert empty values to NULL',
                    'CsvForm1' => 'all values are enclosed by quotation marks (") and separated by commas',
                    'CsvForm2' => 'quotation marks within values are doubled',
                    'CsvForm3' => 'data sets are separated by newlines (0x0a)',
                    'ColConf' => 'Configuration for Column %1$s',
                    'ColFKLook' => 'Column for foreign key lookup',
                    'FKLookup' => 'foreign key lookup',
                    'IARow' => 'insert another row',
                    'INRow' => 'insert as a new row',
                    'Drop' => 'drop',
                    'ExpOptCsv' => 'CSV-Data',
                    'ExpOptExt' => 'External Table',
                    'ExpOptSql' => 'SQL',
                    'ExpFmTbl' => 'Table',
                    'ExpFmDb' => 'Database',
                    'ExpFmQry' => 'Query',
                    'ExpTgFile' => 'File',
                    'ExpTgScr' => 'Screen',
                    'GenOpts' => 'General Options',
                    'ReplNull' => 'replace <i>NULL</i> values by',
                    'DFormat' => 'date format',
                    'TFormat' => 'time format',
                    'CsvOpts' => 'CSV-Options',
                    'FTerm' => 'fields terminated by',
                    'FEncl' => 'fields enclosed by',
                    'FTEncl' => 'field types to enclose',
                    'All' => 'all',
                    'NonNum' => 'non numeric',
                    'FEsc' => 'escape character',
                    'LTerm' => 'lines terminated by',
                    'FNamesF' => 'field names at first row',
                    'SqlOpts' => 'SQL-Options',
                    'SqlCNames' => 'include column names',
                    'SqlQNames' => 'quote column names',
                    'SqlCField' => 'include computed fields',
                    'SqlInfo' => 'add export info',
                    'SqlLE' => 'line ending',
                    'SqlTTab' => 'target table name',
                    'ExtOpts' => 'External table options',
                    'PhpOpts' => 'PHP source options',
                    );

// strings on the user page
$usr_strings = array('CreateUsr' => 'Create New User',
                     'ModUser' => 'Modify User %s',
                     'UName' => 'Username',
                     'FName' => 'Firstname',
                     'MName' => 'Middlename',
                     'LName' => 'Lastname',
                     'UserID' => 'User ID',
                     'GroupID' => 'Group ID',
                     'SysdbaPW' => 'SYSDBA password',
                     'Required' => 'required for create, modify and delete',
                     'USelMod' => 'Select user to modify',
                     'USelDel' => 'Select user to delete',
                     'Password' => 'Password',
                     'RepeatPW' => 'Password Again',
                     'Name' => 'Name',
                     'Owner' => 'Owner',
                     'Members' => 'Members',
                     'Role' => 'Role',
                     'User' => 'User',
                     'CreateRole' => 'Create new role',
                     'RoleSelDel' => 'Select role to delete',
                     'RoleAdd' => 'Add to role',
                     'RoleRem' => 'Remove from role',
                     'ColSet' => 'Color Settings',
                     'CBg' => 'Background',
                     'CPanel' => 'Panel Frame',
                     'CArea' => 'Panel Background',
                     'CHeadline' => 'Headline Background',
                     'CMenubrd' => 'Menuborder',
                     'CIfBorder' => 'Iframe Border',
                     'CIfBg' => 'Iframe Background',
                     'CLink' => 'Links',
                     'CHover' => 'Links while Mouseover',
                     'CSelRow' => 'Selected Rows',
                     'CSelInput' => 'Selected Input Fields',
                     'CFirstRow' => 'Odd Table Rows',
                     'CSecRow' => 'Even Table Rows',
                     'Appearance' => 'Appearance',
                     'Language' => 'Language',
                     'Fontsize' => 'Fontsize in Points',
                     'TACols' => 'Textarea Columns',
                     'TARows' => 'Textarea Rows',
                     'IFHeight' => 'Iframe Height in Pixel',
                     'Attitude' => 'Attitude',
                     'AskDel' => 'Confirm deletion of objects and data',
                     'Yes' => 'Yes',
                     'No' => 'No',
                    );

// strings on the admin page
$adm_strings = array('SysdbaPW' => 'SYSDBA password',
                     'Required' => 'required if you are not the database owner',
                     'Sweeping' => 'Sweeping',
                     'SetInterv' => 'Set sweep threshold (number transactions)',
                     'DBDialect' => 'DB Dialect',
                     'Buffers' => 'Cache Buffers',
                     'AccessMode' => 'Access Mode',
                     'WriteMode' => 'Write Mode',
                     'ReadWrite' => 'read/write',
                     'ReadOnly' => 'read only',
                     'Sync' => 'synchronous',
                     'Async' => 'asynchronous',
                     'UseSpace' => 'Use Space',
                     'SmallFull' => 'full',
                     'Reserve' => 'reserve',
                     'DataRepair' => 'Data Repair',
                     'Validate' => 'Validate',
                     'Full' => 'Full',
                     'Mend' => 'Mend',
                     'NoUpdate' => 'No Update',
                     'IgnoreChk' => 'Ignore Checksum Errors',
                     'Transact' => 'Transactions',
                     'Shutdown' => 'Shutdown',
                     'Commit' => 'Commit',
                     'Rollback' => 'Rollback',
                     'TwoPhase' => 'Two Phase Recovery',
                     'AllLimbo' => 'all limbo transactions',
                     'NoConns' => 'No New Connections',
                     'NoTrans' => 'No New Transactions',
                     'Force' => 'Force',
                     'ForSeconds' => 'for/after %s seconds',
                     'Reconnect' => 'Reconnect FirebirdWebAdmin after the shutdown',
                     'Rescind' => 'Rescind Shutdown',
                     'BTarget' => 'Backup Target',
                     'FDName' => 'File or device name',
                     'Options' => 'Options',
                     'BConvert' => 'Convert external files as internal tables',
                     'BNoGC' => 'Do not garbage collect during backup',
                     'BIgnoreCS' => 'Ignore Checksums during backup',
                     'BIgnoreLT' => 'Ignore limbo transactions during backup',
                     'BTransport' => 'Backup in non transportable format',
                     'BMDOnly' => 'Backup only metadata',
                     'BMDOStyle' => 'Metadata in old-style format',
                     'RSource' => 'Restore Source',
                     'RTarget' => 'Restore Target',
                     'TargetDB' => 'Target database',
                     'NewFile' => 'Restore to new file',
                     'RestFile' => 'Replace existing file',
                     'PageSize' => 'Page Size',
                     'UseAll' => 'Restore Database with 100% fill ratio on every data page',
                     'OneAtTime' => 'Restore one table at a time',
                     'IdxInact' => 'Indexes inactive upon restore',
                     'NoValidity' => 'Delete validity constraints from restored metadata',
                     'KillShad' => 'Do not create previously defined shadow files',
                     'ConnAfter' => 'Connect FirebirdWebAdmin to the restored database',
                     'Verbose' => 'Verbose',
                     'Analyze' => 'Analyze',
                     );

// strings for the info-panel
$info_strings = array('Connected' => 'Connected to database',
                      'ExtResult' => 'Result from extern command',
                      'FBError' => 'Firebird Error',
                      'ExtError' => 'Error from extern command',
                      'Error' => 'Error',
                      'Warning' => 'Warning',
                      'Message' => 'Message',
                      'ComCall' => 'Command call',
                      'Debug' => 'Debug output',
                      'PHPError' => 'PHP Error',
                      'SuccessLogin' => 'You have been successfully logged in!',
                      );

$MESSAGES = array('SP_CREATE_INFO' => 'FirebirdWebAdmin has created a stored procedure "'.SP_LIMIT_NAME.'" which is used by the Watch Table function '
                                            ."and saved this inside of your database.<br>\n"
                                            .'If several people are using FirebirdWebAdmin at the same time, please change the value '
                                            ."for WATCHTABLE_METHOD in the file inc/configuration.inc.php.<br>\n",
                  'EDIT_ADD_PRIMARY' => "If editing is enabled the primary key fields must be selected for showing in the watch table configuration.<br>\n"
                                            .'The program has auto-selected the necessary primary index fields.',
                  'CSV_IMPORT_COUNT' => "%1\$d rows imported to table %2\$s<br>\n",
                  'CONFIRM_TABLE_DELETE' => 'Do you really want to delete the table %s?',
                  'CONFIRM_COLUMN_DELETE' => 'Do you really want to delete the column %1$s from table %2$s?',
                  'CONFIRM_DB_DELETE' => 'Do you really want to delete the database %s?',
                  'CONFIRM_TRIGGER_DELETE' => 'Do you really want to delete the trigger %s?',
                  'CONFIRM_DOMAIN_DELETE' => 'Do you really want to delete the domain %s?',
                  'CONFIRM_INDEX_DELETE' => 'Do you really want to delete the index %s?',
                  'CONFIRM_GEN_DELETE' => 'Do you really want to delete the generator %s?',
                  'CONFIRM_USER_DELETE' => 'Do you really want to delete the user %s?',
                  'CONFIRM_ROW_DELETE' => 'Do you really want to delete from table %s %s?',
                  'CONFIRM_SP_DELETE' => 'Do you really want to delete the stored procedure %s?',
                  'CONFIRM_VIEW_DELETE' => 'Do you really want to delete the view %s?',
                  'CONFIRM_UDF_DELETE' => 'Do you really want to delete the function %s?',
                  'CONFIRM_EXC_DELETE' => 'Do you really want to delete the exception %s?',
                  'NO_VIEW_SUPPORT' => "Editing and deleting from views is not supported up to now.<br>\n",
                  'CREATE_DB_SUCCESS' => "Database %s is successfully created.\n",
                  'HAVE_DEPENDENCIES' => 'You have to delete the following objects before you can delete the %1$s %2$s: %3$s',
                  'COOKIES_NEEDED' => 'You have to enable cookies in your browser settings if you want to use the customizing feature!',
                  );

$WARNINGS = array('CAN_NOT_EXPORT_BLOBS' => "The blob fields in the table you have selected are omitted.<br>\n"
                                            ."Only the csv export of text blobs is supported.<br>\n",
                  'CAN_NOT_IMPORT_BLOBS' => "The blob fields in the table you have selected are omitted.<br>\n"
                                            ."Only the csv import of text blobs is supported.<br>\n",
                  'SELECT_TABLE_FIRST' => "Please select a table first<br>\n",
                  'SELECT_FILE_FIRST' => "Please select an import-file first<br>\n",
                  'CAN_NOT_ALTER_DOMAINS' => "Altering domain based columns is not supported by Firebird.<br>\n"
                                            ."Instead change the domain definition on the Accessories page.<br>\n",
                  'CAN_NOT_EDIT_TABLE' => "Editing of the selected table is not possible.<br>\n"
                                            ."Only tables with a primary key index are editable.<br>\n",
                  'CAN_NOT_DEL_TABLE' => "Deleting from the selected table is not possible.<br>\n"
                                            ."Only from tables with a primary key index rows can deleted.<br>\n",
                  'DEL_NO_PERMISSON' => "You don't have permission for delete/write access to table %s<br>\n",
                  'EDIT_NO_PERMISSON' => "You don't have permission for update/write access to table %s<br>\n",
                  'CAN_NOT_ACCESS_DIR' => "The webserver failed to access the directory %s<br>\n",
                  'NAME_IS_KEYWORD' => "%s is a reserved Firebird keyword<br>\n",
                  'NAMES_ARE_KEYWORDS' => "%s are reserved Firebird keywords<br>\n",
                  'NEED_SYSDBA_PW' => "SYSDBA's password is required to create, modify or delete users.<br>\n",
                  'PW_REQUIRED' => "The password is required<br>\n",
                  'UN_REQUIRED' => "The username is required<br>\n",
                  'PW_WRONG_REPEAT' => "The password confirmation was incorrect.<br>\n",
                  'BAD_ISQLPATH' => "The isql binary is not present in %s!<br>\n"
                                            ."Please check the value for BINPATH in inc/configuration.inc.php.<br>\n",
                  'BAD_TMPPATH' => "Your configured TMPPATH directory '%s' didn't exist or is not writeable for the webserver process!<br>\n"
                                            ."Please check the value for TMPPATH in inc/configuration.inc.php.<br>\n",
                  );

$ERRORS = array('CREATE_DB_FAILED' => 'Creating of the database <b>%s</b> failed!',
                  'NO_DB_SELECTED' => 'Select a database name first!<br>',
                  'WRONG_DB_SUFFIX' => 'The database name must end with <b>%s</b>',
                  'DB_NOT_ALLOWED' => 'Accessing <b>%s</b> is not allowed.<br>'
                                             .'(check $ALLOWED_FILES and $ALLOWED_DIRS in inc/configuration.php)',
                  'NO_IBASE_MODULE' => '<b>Your php installation misses the interbase support!</b><br>'
                                            .'Recompile php and configure --with-interbase[=DIR]<br>'
                                            .'or edit your php.ini to load interbase.so respectively interbase.dll.',
                  'DISABLED_CMD' => 'Sql-statements containing "%s" are forbidden by the configuration!',
                  'BAD_BINPATH' => "Unable to find the command <b>%s</b> !\n"
                                            ."Please check the value for BINPATH in inc/configuration.inc.php.\n",
                  );

// charset encoding  for html output
$charset = 'UTF-8';
