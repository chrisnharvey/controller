<?php

namespace Encore\Controller;

use Encore\View\View;
use Encore\Container\ContainerAwareTrait;
use Encore\Container\ContainerAwareInterface;

abstract class Controller implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    protected $view;

    public function setupView()
    {
        if ( ! isset($this->view)) return;

        $view = $this->container['view']->make($this->view)
            ->setController($this);

        $this->view = $view;
    }
}