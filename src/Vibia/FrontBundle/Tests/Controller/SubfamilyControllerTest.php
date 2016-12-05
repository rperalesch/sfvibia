<?php

namespace Vibia\FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SubfamilyControllerTest extends WebTestCase
{
    public function testListsubfamily()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/lang/catalog/subfamily');
    }

}
