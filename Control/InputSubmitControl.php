<?php


namespace FormModel\Control;


class InputSubmitControl extends InputControl
{
    public function __construct()
    {
        parent::__construct();
        $this->addHtmlAttribute("type", "submit");
    }
}