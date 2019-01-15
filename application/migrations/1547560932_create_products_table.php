<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_categories_table extends CI_Migration
{
	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
	}

	public function up()
	{
		$fields = [
			'product_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => TRUE,
			],
			'nicename' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'default' => '',
				'unique' => TRUE,
			],
			'stock' => [
				'type' => 'INT',
				'constraint' => 11,
				'default' => '0',
			],
			'published' => [
				'type' => 'INT',
				'constraint' => 10,
				'null' => TRUE,
			],
		];
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('product_id', TRUE);
		$this->dbforge->add_key('nicename');
		$this->dbforge->add_table('products', TRUE);
	}

	public function down()
	{
		$this->dbforge->drop_table('products', TRUE);
	}
}
