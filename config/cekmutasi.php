<?php

/**
 *	Cekmutasi.co.id Confirguration
 *
 *	If you don't have an account, please register first
 *	in https://cekmutasi.co.id/app/register. The first
 *	100 user registered today will be rewarded with IDR
 *	25.000 trial balance.
 *
 **/

return [

	/**
	 *
	 *	Enter your API Key
	 *
	 *	To get your API Key, please go to:
	 *	https://cekmutasi.co.id/app/integration
	 *
	 **/

	'api_key'	=> env('CEKMUTASI_API_KEY', '4539cef9bbb029bd421e06bc310595d7622aa99823823'),

	/**
	 *
	 *	Enter your API Signature
	 *
	 *	To get your API Signature, please go to:
	 *	https://cekmutasi.co.id/app/integration
	 *
	 **/

	'api_signature'	=> env('CEKMUTASI_API_SIGNATURE', 'cXNZcmFp6b6P3Wro5Ip3KhHbFZZ6PHoV')

];
