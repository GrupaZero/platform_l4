<?php
use Gzero\Core\DynamicRouter;
use Gzero\Entity\Lang;

/**
 * This file is part of the GZERO CMS package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Class ContentController
 *
 * @author     Adrian Skierniewski <adrian.skierniewski@gmail.com>
 * @copyright  Copyright (c) 2014, Adrian Skierniewski
 */
class ContentController extends BaseController {

    protected $router;

    public function __construct(DynamicRouter $router)
    {
        parent::__construct();
        $this->router = $router;
        $this->viewShareHelpers();
    }

    /**
     * Dynamic router handles CMS content
     *
     * @return View
     */
    public function dynamicRouter()
    {
        if (!$this->getLang()) { // If no current language detected
            App::abort(404);
        }
        return $this->router->handleRequest($this->getRequestedUrl(), $this->getLang());
    }

    /** @TODO We need better way to use helper functions */
    protected function viewShareHelpers()
    {
        View::share(
            'getTranslation',
            function ($translations, $langCode) {
                return $translations->filter(
                    function ($translation) use ($langCode) {
                        return $translation->langCode == $langCode;
                    }
                )->first();
            }
        );

    }
} 
