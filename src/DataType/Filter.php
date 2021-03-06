<?php
/**
 * @file
 * This is a file generated by scripts/generate-complex-datatypes.php.
 *
 * DO NOT EDIT THIS FILE.
 *
 * @ingroup generated
 * @ingroup dataTypesComplex
 */
namespace Ethereum\DataType;

use Ethereum\Ethereum;

/**
 * Ethereum data type Filter.
 *
 * Generated by scripts/generate-complex-datatypes.php based on resources/ethjs-schema.json.
 */
class Filter extends EthDataType {

	/**
	 * Value for 'fromBlock'.
	 */
	public $fromBlock;

	/**
	 * Value for 'toBlock'.
	 */
	public $toBlock;

	/**
	 * Value for 'address'.
	 */
	public $address;

	/**
	 * Value for 'topics'.
	 */
	public $topics;

	/**
	 * @param EthBlockParam $fromBlock
	 * @param EthBlockParam $toBlock
	 * @param EthBytes $address
	 * @param array $topics Array of EthD
	 */
	public function __construct(EthBlockParam $fromBlock = null, EthBlockParam $toBlock = null, EthBytes $address = null, array $topics = null) {
		$this->fromBlock = $fromBlock;
		$this->toBlock = $toBlock;
		$this->address = $address;
		$this->topics = $topics;
	}

	/**
	 * Returns a name => type array.
	 */
	public static function getTypeArray() {
		return array(
			'fromBlock' => 'EthBlockParam',
			'toBlock' => 'EthBlockParam',
			'address' => 'EthBytes',
			'topics' => '[EthD]',
		);
	}

	/**
	 * Returns array with values.
	 */
	public function toArray() {
		$return = [];
		(!is_null($this->fromBlock)) ? $return['fromBlock'] = $this->fromBlock->hexVal() : NULL;
		(!is_null($this->toBlock)) ? $return['toBlock'] = $this->toBlock->hexVal() : NULL;
		(!is_null($this->address)) ? $return['address'] = $this->address->hexVal() : NULL;
		(!is_null($this->topics)) ? $return['topics'] = Ethereum::valueArray($this->topics, 'EthD') : array();
		return $return;
	}
}
