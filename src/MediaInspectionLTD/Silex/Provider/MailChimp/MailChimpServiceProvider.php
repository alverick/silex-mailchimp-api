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

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class MailChimpServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['mailchimp'] = function ($app) {
            return new \DrewM\MailChimp\MailChimp($app['mailchimp.api_key']);
        };
    }
}
