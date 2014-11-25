<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase {

    protected $baseUrl;

    /**
     * Creates the application.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernelInterface
     */
    public function createApplication()
    {
        $unitTesting = true;

        $testEnvironment = 'testing';

        $app = require __DIR__ . '/../../bootstrap/start.php';
        \App::setLocale('en'); // We're setting default locale on test env
        $app['config']['gzero.multilang.detected'] = true;
        $this->baseUrl                             = 'http://' . $app['config']['gzero.domain'] . '/';
        Artisan::call('migrate', ['--package' => 'gzero/cms']);
        return $app;
    }

}
