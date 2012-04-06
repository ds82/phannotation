# Phannotation #

An annotation library for PHP.
For an example how to use the library look at the phpunit-test [PhannotationTest.php](https://github.com/ds82/phannotation/blob/master/test/phannotation/PhannotationTest.php).

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