<?php
/**	op-unit-layout:/ci/Layout/Name.php
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

//	Name
$method = 'Name';
$args   =  null;
$result =  OP()->Config('Layout')['name'] ?? null;
$ci->Set($method, $result, $args);
