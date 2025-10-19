<?php
/**	op-unit-layout:/ci/Layout/Template.php
 *
 * @created    2025-06-05
 * @version    1.0
 * @package    op-unit-layout
 * @author     Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/**	namespace
 *
 */
namespace OP;

/* @var $ci UNIT\CI\CI_Config */

//	Template
$method = 'Template';
$arg1   = 'foo';
$arg2   = 'bar';
$args   = ['ci.phtml',['arg1'=>$arg1, 'arg2'=>$arg2]];
$result = "{$arg1}, {$arg2}";
$ci->Set($method, $result, $args);
