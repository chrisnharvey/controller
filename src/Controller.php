<?php

namespace Encore\Controller;

use Encore\View\View;

abstract class Controller
{
    protected $view;

    public function setupView()
    {
        if ( ! isset($this->view)) return;

        $view = $this->container['view']->make($this->view)
            ->setController($this);

        $this->view = $view;
    }
}