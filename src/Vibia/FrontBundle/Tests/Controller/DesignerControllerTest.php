<?php

namespace Vibia\FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DesignerControllerTest extends WebTestCase
{
    public function testListdesigner()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/lang/catalog/designer');
    }

}
