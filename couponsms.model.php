<?php

class couponsmsModel extends couponsms
{
	private static $config = NULL;

	function getConfig()
	{
		if (self::$config === NULL)
		{
			$oModuleModel = getModel('module');
			$config = $oModuleModel->getModuleConfig('couponsms');

			self::$config = $config;
		}
		return self::$config;
	}

	function getCouponConfig($couponsms_srl)
	{
		$args = new stdClass();
		$args->couponsms_srl = $couponsms_srl;

		$output = executeQuery('couponsms.getCouponConfig', $args);

		return $output;
	}

	function getCouponUser($couponuser_srl)
	{
		$args = new stdClass();
		$args->couponuser_srl = $couponuser_srl;
		$output = executeQuery('couponsms.getCouponUser', $args);

		return $output;
	}

	function getCouponList()
	{
		$output = executeQueryArray('couponsms.getCouponList');

		return $output;
	}

	function getCouponLogList()
	{
		$output = executeQueryArray('couponsms.getCouponLogList');

		return $output;
	}
}