<?php

class ExampleTest extends TestCase {

    /**
     * A basic functional test example.
     *
     * @test
     * @return void
     */
    public function is_homepage_working()
    {
        $crawler = $this->client->request('GET', $this->baseUrl . App::getLocale());

        $this->assertTrue($this->client->getResponse()->isOk());
    }

}
