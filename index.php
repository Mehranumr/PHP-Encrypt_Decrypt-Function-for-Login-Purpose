<?php

/**
 * Encrypt_Decrypt Function
 *
 *
 * PHP version 5*
 *
 * LICENSE: This source file is subject to version 5 of the PHP license
 * If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to mehranumr@gmail.com so i can mail you a copy immediately.
 *
 * @category   Security
 * @package    Encrypt_Decrypt Function
 * @author     Original Author <mehranumr@gmail.com>
 * @copyright  2017-mehranumr
 * @since      File available since Release 0.1
 * @deprecated File deprecated in Release 0.2
 */
 
include("functions.php");

///printing encrypted output
$name="Mehran";
echo "<h2>Orignal String</h2>";
echo $name;


$output= encrypt_decrypt('encrypt', $name);
echo "<h2>Printing encrypted output</h2>";
echo $output;

///Getting Orignal Data from encrypted string
$output2= encrypt_decrypt('decrypt', $output);
echo "<h2>Getting Orignal Data from encrypted string</h2>";
echo $output2;
?>