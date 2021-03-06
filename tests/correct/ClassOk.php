<?php

declare(strict_types=1);

namespace Proton\Test;

use Proton\Http\Request;

final class ClassOk
{
    use MyTrait;

    /**
     * Foo.
     * @var array
     */
    protected $foo = [];

    public function __construct(array $config)
    {
        $this->foo = $config + [
            'foo' => 'bar',
        ];
    }

    public function ping(Request $request)
    {
        return $request->query->get('test');
    }

    public function foo(string $a, string $b)
    {
        $a = $a . 'test';

        if (
            $a === 'a'
            || $b === 'b'
        ) {
            return $a;
        }

        return false;
    }
}
