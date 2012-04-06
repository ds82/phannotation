<?php
/*
	Copyright (C) 2011 Dennis Sänger <mail@dennis.io>

	Licensed under the Apache License, Version 2.0 (the "License");
	you may not use this file except in compliance with the License.
	You may obtain a copy of the License at

	        http://www.apache.org/licenses/LICENSE-2.0

	Unless required by applicable law or agreed to in writing, software
	distributed under the License is distributed on an "AS IS" BASIS,
	WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	See the License for the specific language governing permissions and
	limitations under the License.
*/
namespace phannotation;

use \ReflectionMethod;

class PhannotationMethod {

	private $method;
	private $raw = array();

	public function __construct(ReflectionMethod $method) {
		$this->method = $method;

		$doc = $this->method->getDocComment();

		//print_r($this->method->getParameters());


		$matches = array();
		preg_match_all('/@([a-zA-Z]+)(?:\((.*)\))?/', $doc, $matches);

		$keys = $matches[1];
		$values = $matches[2];
		foreach($keys AS $i => $v) {
			$this->raw[$v] = json_decode($values[$i]);
		}
	}

	public function annotations() {
		return $this->raw;
	}

	public function annotation($annotation) {
		return $this->raw[$annotation];
	}

	public function has($annotation) {
		return array_key_exists($annotation, $this->raw);
	}

	public function name() {
		return $this->method->getName();
	}

}