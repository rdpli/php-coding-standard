<?php


namespace Test;

use Something\Foo;

use Something\bar;

abstract final class Test {

	private $unused_field;

    const TEST = 'NOTOK';

    use MyTrait, MyTrait2;

    public function __construct()
    {
        echo `test`;


        print_r([
            1
          ]);

        $this->test = new class() {
        };
    }

    private function unused() {
        $fooBar = 1;
    	$foo_bar = '1';;

    	IF($foo_bar == '1') {
    		return true;
    		return true;
    	}
    }
}