<?php

/**
 * Main entity model
 */
class TestRecord extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'test_records';

	/**
	 * Convert notes from JSON in database into array
	 *
	 * @param string $value
	 * @return array
	 */
	public function getNotesAttribute(string $value): array
	{
		$result = json_decode($value);
		if (json_last_error() === JSON_ERROR_NONE)
		{
			// is JSON
			return $result;
		}
		else
		{
			// not JSON
			return [$value];
		}
	}

	/**
	 * Convert notes to JSON to put into database
	 *
	 * @param array $value
	 */
	public function setNotesAttribute(array $value): void
	{
		$this->attributes['notes'] = json_encode($value);
	}
}