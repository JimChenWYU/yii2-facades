<?php

namespace jimchen\facade;

use yii\base\BootstrapInterface;
use yii\base\Component;
use yii\web\ErrorHandler;

class FacadeAlias extends Component implements BootstrapInterface
{
	/**
	 * @var string[]
	 */
	private $_coreAliases = [
		'Auth' => 'jimchen\facade\Auth',
		'Cache' => 'jimchen\facade\Cache',
		'Db' => 'jimchen\facade\Db',
		'Errorhandler' => 'jimchen\facade\Error',
		'Formatter' => 'jimchen\facade\Formatter',
		'I18n' => 'jimchen\facade\I18n',
		'Log' => 'jimchen\facade\Log',
		'Mailer' => 'jimchen\facade\Mailer',
		'Redis' => 'jimchen\facade\Redis',
		'Request' => 'jimchen\facade\Request',
		'Response' => 'jimchen\facade\Response',
		'Security' => 'jimchen\facade\Security',
		'Session' => 'jimchen\facade\Session',
		'Url' => 'jimchen\facade\Url',
		'User' => 'jimchen\facade\User',
		'View' => 'jimchen\facade\View',
	];

	public function getAliases()
	{
		return $this->_coreAliases;
	}

	public function bootstrap($app)
	{
		foreach ($this->getAliases() as $alias => $original) {
			class_alias($original, $alias);
		}
	}
}
