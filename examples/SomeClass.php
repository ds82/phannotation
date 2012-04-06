<?php
namespace examples;

/**
 * @some value
*/
class SomeClass {

	/**
	 * @single("value")
	 * @array(["v1","v2"])
	 * @multiple({"int":1,"string":"foo"})
	 * @without
	 */
	public function method1() {
		// do something
	}

	/**
	 * @SomeString("parameter1")
	 * @SomeOtherString("parameter2")
	 */
	public function method2($parameter1, $parameter2) {
		
	}

}

?>