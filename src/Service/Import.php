<?php
namespace Litvin\Redirectmap\Service;

class Import
{
    private $definition;

    public function __construct($definition)
    {
        $this->definition = (new $definition()) ;
    }

    public function show($list)
    {
        return view('redirect::import', compact('list'));
    }
}