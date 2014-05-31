<?php

/**
 * This file is part of the GZERO CMS package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Class BaseController
 *
 * @author     Adrian Skierniewski <adrian.skierniewski@gmail.com>
 * @copyright  Copyright (c) 2014, Adrian Skierniewski
 */
class BaseController extends Controller {

    private $lang;
    private $langs;

    public function __construct()
    {
//        $langRepository = App::make('Gzero\Repositories\Lang\LangRepository');
//        $this->lang     = $langRepository->getCurrent();
//        $this->langs    = $langRepository->getAll();
//        $this->viewShareLangs();
        $this->beforeFilter('block.build');
    }

    /**
     * Get current lang
     *
     * @return mixed
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Get All langs
     *
     * @return mixed
     */
    public function getLangs()
    {
        return $this->langs;
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

    protected function getRequestedUrl()
    {
        if (Config::get('gzero.multilang.enabled') and !Config::get('gzero.multilang.subdomain')) {
            $segments = Request::segments();
            array_shift($segments);
            return implode('/', $segments);
        }
        return ltrim(Request::getRequestUri(), '/');
    }

//    protected function viewShareLangs()
//    {
//        View::share('lang', $this->getLang());
//        View::share('langs', $this->getLangs());
//    }

}
