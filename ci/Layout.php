<?php
/**	op-unit-layout:/ci/Layout.php
 *
 * @created    2024-09-04
 * @version    1.0
 * @package    op-unit-layout
 * @author     Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/**	namespace
 *
 */
namespace OP;

/* @var $ci \OP\UNIT\CI\CI_Config */
$ci = OP::Unit('CI')::Config();

//	...
foreach( glob('Layout/*.php') as $file_path ){
	require_once($file_path);
}

//	...
return $ci->Get();
