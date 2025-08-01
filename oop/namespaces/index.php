<?php

require_once __DIR__ . '/db/table.php';
require_once __DIR__ . '/html/table.php';

use \HTML\Table\Table;
use \DB\Table\Table as DbTable;

$table1 = new Table();

$table2 = new DbTable();
