<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2022 Louis Chmn <louis@chmn.me>
 *
 * @author Louis Chmn <louis@chmn.me>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\Files_Versions\Db;

use JsonSerializable;

use OCP\AppFramework\Db\Entity;

/**
 * @method string getFileId()
 * @method string getTimestamp()
 * @method string getName()
 * @method void setName(string $name)
 * @method string getAuthor()
 * @method void setAuthor(string $name)
 */
class Version extends Entity implements JsonSerializable {
	protected int $fileId;
	protected int $timestamp;
	protected string $name;
	protected string $author;

	public function __construct() {
		$this->addType('id','integer');
		$this->addType('file_id','integer');
		$this->addType('timestamp','integer');
		$this->addType('name','string');
		$this->addType('author','string');
	}

	public function jsonSerialize() {
		return [
			'id' => $this->id,
			'file_id' => $this->fileId,
			'timestamp' => $this->timestamp,
			'name' => $this->name,
			'author' => $this->author
		];
	}
}