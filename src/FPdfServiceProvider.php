<?php

namespace BuiltByEleven\FPdf;

use BuiltByEleven\FPdf\FPDF;
use Illuminate\Support\ServiceProvider;

class FPdfServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind('FPdf', function() {
			return new FPDF();
		});
	}
}
