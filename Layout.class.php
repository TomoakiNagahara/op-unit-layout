<?php
/**	op-unit-layout:/Layout.class.php
 *
 * @created    2017-05-09  Separated file.
 * @updated    2019-02-23  Separated from the NewWorld.
 * @moved      2019-11-21  Change to trait from class.
 * @moved      2024-09-04  Return to class from trait.
 * @package    op-unit-layout
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/**	Declare strict
 *
 */
declare(strict_types=1);

/**	namespace
 *
 * @created   2018-04-13
 */
namespace OP\UNIT;

/**	Used class.
 *
 */
use OP\OP_CORE;
use OP\OP_CI;
use OP\IF_LAYOUT;
use OP\Config;
use function OP\RootPath;
use function OP\Template;
use function OP\CompressPath;

/**	Layout
 *
 * @created    2017-02-14  Independent from NewWorld.
 * @moved      2019-11-21  Separate to UNIT_LAYOUT trait.
 * @moved      2024-09-04  Returned to class from trait.
 * @updated    2024-09-04  Implemented IF_LAYOUT
 * @version    1.0
 * @package    op-unit-layout
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All right reserved.
 */
class Layout implements IF_LAYOUT
{
	/**	trait.
	 *
	 */
	use OP_CORE;
	use OP_CI;

	/**	Automatically.
	 *
	 * @created    2024-09-04
	 */
	static function Auto()
	{
		//	...
		$config = Config::Get('layout');

		//	...
		if( empty($config['execute']) or 'text/html' !== OP()->MIME() ){
			OP()->Content();
			return;
		}

		//	...
		$path = _ROOT_ASSET_ . '/layout/';

		//	...
		if(!file_exists( $path ) ){
			throw new \Exception("Layout directory has not been exists: $path");
		};

		//	...
		if(!file_exists( $path = $path.$config['name'] ) ){
			throw new \Exception("Layout has not been exists: $path");
		}

		//	...
		if(!file_exists( $path = $path.'/index.php' ) ){
			throw new \Exception("Layout controller has not been exists: $path");
		};

		//	...
		Template(CompressPath($path));
	}

	/**	Get/Set Layout name.
	 *
	 * @created   2022-09-30
	 * @moved     2024-09-04  Return to class from trait.
	 * @return    string
	 */
	static function Name()
	{
		return Config::Get('layout')['name'] ?? null;
	}
}
