<?php
use Atrauzzi\LaravelDoctrine\Support\Facades\Doctrine;

/**
 * This file is part of the GZERO CMS package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Class HomeController
 *
 * @author     Adrian Skierniewski <adrian.skierniewski@gmail.com>
 * @copyright  Copyright (c) 2014, Adrian Skierniewski
 */
class HomeController extends BaseController {

    protected $pageRepository;

//    public function __construct(ContentRepository $content)
//    {
//        parent::__construct();
//        $this->pageRepository = $content;
//    }

    public function showWelcome()
    {
        echo 'Home';
        $repo   = Doctrine::getRepository('Gzero\Entity\Block');
        $blocks = $repo->getAllActive(new \Gzero\Entity\Lang('pl', 'pl_PL'));
        foreach ($blocks as $block) {
            var_dump($block);
        }
//        Theme::init('default');
//        $pages = $this->pageRepository->onlyPublic()->get(1);
//        $this->pageRepository->loadThumb($pages);
//        return View::make('home', array('news' => $pages));
    }

}
