<?php

/**
 * Main entity
 */
class TestRecord extends \Illuminate\Database\Eloquent\Model
{
	public function getNotesAttribute(?string $value): ?array
	{
		if (empty($value)) {
			return [];
		}

		$result = json_decode($value);
		if (json_last_error() == JSON_ERROR_NONE) {
			// is JSON
			return $result;
		} else {
			return [$value];
		}
	}

	public function setNotesAttribute(?array $value): ?string
	{
		$this->attributes['notes'] = json_encode($value);
	}
}