<?php
/**	op-unit-layout:/ci/Layout/Execute.php
 *
 * @created    2025-07-05
 * @version    1.0
 * @package    op-unit-layout
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/**	namespace
 *
 */
namespace OP;

/* @var $ci UNIT\CI\CI_Config */

//	...
$method = 'Execute';

//	Check config value.
$args   =  null;
$result =  OP()->Config('Layout')['execute'] ?? null;
$ci->Set($method, $result, $args);

//	Set true
$args   =  true;
$result =  true;
$ci->Set($method, $result, $args);

//	Set false
$args   =  false;
$result =  false;
$ci->Set($method, $result, $args);

//	Set null
$args   =  null;
$result =  false;
$ci->Set($method, $result, $args);

//	Set string
$args   = '1';
$result =  true;
$ci->Set($method, $result, $args);

//	Set string
$args   = '0';
$result =  false;
$ci->Set($method, $result, $args);

//	Set string
$args   = 'hoge';
$result =  true;
$ci->Set($method, $result, $args);

//	Set string
$args   = '0hoge';
$result =  true;
$ci->Set($method, $result, $args);
