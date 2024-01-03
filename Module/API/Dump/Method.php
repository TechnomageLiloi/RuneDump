<?php

namespace Liloi\Rune\Dump\API\Dump;

use Liloi\API\Response;
use Liloi\API\Method as SuperMethod;

class Method extends SuperMethod
{
    public function execute(array $parameters): Response
    {
        $response = new Response();
        // @todo: BUGFIX: absent 'render' method; use 'trait' when writing.
        $response->set('render', static::render(__DIR__ . '/Template.tpl', [

        ]));
        return $response;
    }
}