<?php
/*
    Copyright 2020 Tamas Bolner

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
*/

namespace Program;

use Example\Application;
use MonetDB\MonetException;

mb_internal_encoding("UTF-8");
mb_regex_encoding("UTF-8");
ini_set('display_errors', '1');
error_reporting(E_ALL);

require((__DIR__)."/../vendor/autoload.php");

try {
    $app = new Application();
    $app->Run($_GET);
} catch(MonetException $ex) {
    echo "\n{$ex->getMessage()}\n";
}
