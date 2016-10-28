<?php

class couponsms extends ModuleObject
{
	function moduleInstall()
	{
		return new Object();
	}

	function checkUpdate()
	{
		return false;
	}

	function moduleUpdate()
	{
		return new Object();
	}
}
