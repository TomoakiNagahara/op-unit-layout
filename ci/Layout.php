<?php
/** op-unit-layout:/ci/Layout.php
 *
 * @created    2024-09-04
 * @version    1.0
 * @package    op-unit-layout
 * @author     Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/** Declare strict
 *
 */
declare(strict_types=1);

/** namespace
 *
 */
namespace OP;

/* @var $ci \OP\UNIT\CI\CI_Config */
$ci = OP::Unit('CI')::Config();

//	Template
$path   = OP()->MetaPath('asset:/unit/layout/template/ci.txt');
$method = 'Template';
$args   = ['ci.txt'];
$result = "Notice: This file is not located in the template directory. ({$path})";
$ci->Set($method, $result, $args);

//	Name
$method = 'Name';
$args   =  null;
$result =  OP()->Config('Layout')['name'] ?? null;
$ci->Set($method, $result, $args);

//	...
return $ci->Get();
