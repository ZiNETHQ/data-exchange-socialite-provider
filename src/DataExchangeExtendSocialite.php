<?php

namespace ZiNETHQ\DataExchangeSocialiteProvider;

use SocialiteProviders\Manager\SocialiteWasCalled;

class DataExchangeExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('data-exchange', __NAMESPACE__.'\Provider');
    }
}
