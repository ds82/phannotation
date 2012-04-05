# Phannotation #

An annotation library for PHP

# Features #

## Class Annotations ##

not implemented yet

## Method Annotations ##

Phannotation currently supports four kinds of annotations:

* Annotations without value:

	/**
	 * @without
	 */

* Simple value annotations:

	/**
 	* @simple("someValue")
	 */

* Array annotations:

	/**
	 * @array(["value1", "value2"])
	 */

* Complex annotations:

	/**
	 * @complex({"key1":"value1","key2":"value2"})
	 */