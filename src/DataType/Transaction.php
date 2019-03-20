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

/**
 * Ethereum data type Transaction.
 *
 * Generated by scripts/generate-complex-datatypes.php based on resources/ethjs-schema.json.
 */
class Transaction extends EthDataType {

	/**
	 * Value for 'hash'.
	 */
	public $hash;

	/**
	 * Value for 'nonce'.
	 */
	public $nonce;

	/**
	 * Value for 'blockHash'.
	 */
	public $blockHash;

	/**
	 * Value for 'blockNumber'.
	 */
	public $blockNumber;

	/**
	 * Value for 'transactionIndex'.
	 */
	public $transactionIndex;

	/**
	 * Value for 'from'.
	 */
	public $from;

	/**
	 * Value for 'to'.
	 */
	public $to;

	/**
	 * Value for 'value'.
	 */
	public $value;

	/**
	 * Value for 'gasPrice'.
	 */
	public $gasPrice;

	/**
	 * Value for 'gas'.
	 */
	public $gas;

	/**
	 * Value for 'input'.
	 */
	public $input;

	/**
	 * @param EthD32 $hash
	 * @param EthQ $nonce
	 * @param EthD32 $blockHash
	 * @param EthQ $blockNumber
	 * @param EthQ $transactionIndex
	 * @param EthD20 $from
	 * @param EthD20 $to
	 * @param EthQ $value
	 * @param EthQ $gasPrice
	 * @param EthQ $gas
	 * @param EthD $input
	 */
	public function __construct(EthD32 $hash = null, EthQ $nonce = null, EthD32 $blockHash = null, EthQ $blockNumber = null, EthQ $transactionIndex = null, EthD20 $from = null, EthD20 $to = null, EthQ $value = null, EthQ $gasPrice = null, EthQ $gas = null, EthD $input = null) {
		$this->hash = $hash;
		$this->nonce = $nonce;
		$this->blockHash = $blockHash;
		$this->blockNumber = $blockNumber;
		$this->transactionIndex = $transactionIndex;
		$this->from = $from;
		$this->to = $to;
		$this->value = $value;
		$this->gasPrice = $gasPrice;
		$this->gas = $gas;
		$this->input = $input;
	}

	/**
	 * Returns a name => type array.
	 */
	public static function getTypeArray() {
		return array(
			'hash' => 'EthD32',
			'nonce' => 'EthQ',
			'blockHash' => 'EthD32',
			'blockNumber' => 'EthQ',
			'transactionIndex' => 'EthQ',
			'from' => 'EthD20',
			'to' => 'EthD20',
			'value' => 'EthQ',
			'gasPrice' => 'EthQ',
			'gas' => 'EthQ',
			'input' => 'EthD',
		);
	}

	/**
	 * Returns array with values.
	 */
	public function toArray() {
		$return = [];
		(!is_null($this->hash)) ? $return['hash'] = $this->hash->hexVal() : NULL;
		(!is_null($this->nonce)) ? $return['nonce'] = $this->nonce->hexValUnpadded() : NULL;
		(!is_null($this->blockHash)) ? $return['blockHash'] = $this->blockHash->hexVal() : NULL;
		(!is_null($this->blockNumber)) ? $return['blockNumber'] = $this->blockNumber->hexValUnpadded() : NULL;
		(!is_null($this->transactionIndex)) ? $return['transactionIndex'] = $this->transactionIndex->hexValUnpadded() : NULL;
		(!is_null($this->from)) ? $return['from'] = $this->from->hexVal() : NULL;
		(!is_null($this->to)) ? $return['to'] = $this->to->hexVal() : NULL;
		(!is_null($this->value)) ? $return['value'] = $this->value->hexValUnpadded() : NULL;
		(!is_null($this->gasPrice)) ? $return['gasPrice'] = $this->gasPrice->hexValUnpadded() : NULL;
		(!is_null($this->gas)) ? $return['gas'] = $this->gas->hexValUnpadded() : NULL;
		(!is_null($this->input)) ? $return['input'] = $this->input->hexVal() : NULL;
		return $return;
	}
}
