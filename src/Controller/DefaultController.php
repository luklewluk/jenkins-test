<?php

namespace App\Controller;

use App\Generator\NumberGenerator;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    /** @var NumberGenerator */
    private $numberGenerator;

    public function __construct(NumberGenerator $numberGenerator)
    {
        $this->numberGenerator = $numberGenerator;
    }

    /**
     * Generate example response
     *
     * @return Response
     */
    public function index()
    {
        $number = $this->numberGenerator->generate();

        return new Response(
            '<html><body>Lucky number: ' . $number . '</body></html>'
        );
    }
}
