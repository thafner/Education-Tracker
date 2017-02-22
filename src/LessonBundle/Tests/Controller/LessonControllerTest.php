<?php

namespace LessonBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LessonControllerTest extends WebTestCase
{
    public function testListlesson()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'lessons');
    }

}
