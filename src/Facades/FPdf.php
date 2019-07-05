<?php

namespace BuiltByEleven\FPdf\Facades;

use Illuminate\Support\Facades\Facade;

class FPdf extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'FPdf';
	}
}