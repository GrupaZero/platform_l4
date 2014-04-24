<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase {

    /**
     * Creates the application.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernelInterface
     */
    public function createApplication()
    {
        $unitTesting = TRUE;

        $testEnvironment = 'testing';

        $app = require __DIR__ . '/../../bootstrap/start.php';
        \App::setLocale('en'); // We're setting default locale on test env
        $app['config']['gzero.multilang.detected'] = TRUE;
        return $app;
    }

}
