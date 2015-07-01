<?php

/*
 * Mailchimp Silex service provider
 *
 * (c) MI-LA01 <mi-la01@mediainspection.hk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MediaInspectionLTD\Silex\Provider\MailChimp;

use Silex\Application
  , Silex\ServiceProviderInterface
  , \MediaInspectionLTD\Client\MailChimp
;

class MailChimpServiceProvider implements ServiceProviderInterface
{
	public function register( Application $app )
	{
		$app[ 'mailchimp' ] = $app-> share( function () use ( $app ) {
			return new MailChimp( $app[ 'mailchimp.api_key' ], $app[ 'mailchimp.verify_ssl' ]);
		});
	}

	public function boot
	( Application $app ) {}
}
