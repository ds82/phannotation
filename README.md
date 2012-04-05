# Phannotation #

An annotation library for PHP

# Features #

## Class Annotations ##

not implemented yet

## Method Annotations ##

Phannotation currently supports four kinds of annotations:

* Annotations without value:

```php
	/**
	 * @without
	 */
```

* Simple value annotations:

```php
	/**
 	* @simple("someValue")
	 */
```

* Array annotations:

```php
	/**
	 * @array(["value1", "value2"])
	 */
```

* Complex annotations:

```php
	/**
	 * @complex({"key1":"value1","key2":"value2"})
	 */
```