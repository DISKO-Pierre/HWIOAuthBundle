<?php

/*
 * This file is part of the HWIOAuthBundle package.
 *
 * (c) Hardware.Info <opensource@hardware.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HWI\Bundle\OAuthBundle\Tests\OAuth\ResourceOwner;

use HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\LinkedinResourceOwner;

class LinkedinResourceOwnerTest extends GenericOAuth2ResourceOwnerTest
{
    protected $resourceOwnerClass = LinkedinResourceOwner::class;
    protected $userResponse = <<<json
{
    "id": "1",
    "formattedName": "bar"
}
json;
    protected $paths = array(
        'identifier' => 'id',
        'nickname' => 'formattedName',
        'firstname' => 'firstName',
        'lastname' => 'lastName',
        'realname' => 'formattedName',
        'email' => 'emailAddress',
        'profilepicture' => 'pictureUrl',
    );
    protected $csrf = true;

    protected $expectedUrls = array(
        'authorization_url' => 'http://user.auth/?test=2&response_type=code&client_id=clientid&state=random&redirect_uri=http%3A%2F%2Fredirect.to%2F',
    );
}
