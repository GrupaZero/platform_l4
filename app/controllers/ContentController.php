<?php

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
    protected $contentRepository;

//    public function __construct(DynamicRouter $router, ContentRepository $content)
//    {
//        parent::__construct();
//        $this->router            = $router;
//        $this->contentRepository = $content;
//    }

    /**
     * Dynamic router handles CMS content
     *
     * @return View
     */
    public function dynamicRouter()
    {
        echo 'Dynamic router! <br />';
        dd(App::getLocale());
//        if (!$this->getLang()) { // If no current language detected
//            App::abort(404);
//        }
//        return $this->router->handleRequest($this->getRequestedUrl(), $this->getLang(), $this);
    }
} 
