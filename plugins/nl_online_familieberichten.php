<?php
namespace Fisharebest\Webtrees;

/**
 * webtrees: online genealogy
 * Copyright (C) 2015 webtrees development team
 * Copyright (C) 2015 JustCarmen
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

class nl_online_familieberichten_plugin extends research_base_plugin {

	static function getPluginName() {
		return 'NL | Online Familieberichten';
	}

	static function createLink($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		return $link = 'http://www.online-familieberichten.nl/zoeken.asp?sortpers=naam&voornaam=' . $givn . '&tussenvoegsel=' . $prefix . '&achternaam=' . $surn . '&command=zoekformres';
	}

	static function encode_plus() {
		return true;
	}

}