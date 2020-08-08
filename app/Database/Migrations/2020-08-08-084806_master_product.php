<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MasterProduct extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id_product'           => [
                'type'              => 'INT',
                'constraint'        => 4,
                'unsigned'          => FALSE,
                'auto_increment'    => TRUE
            ],
            'nama_barang'         => [
                'type'              => 'VARCHAR',
				'constraint'        => '50',
				'null'				=> TRUE,
            ],
            'harga_beli'       => [
                'type'              => 'INT',
                'constraint'        => 10,
				'default'           => 0,
				'null'				=> TRUE,
			],
			'harga_jual'       => [
                'type'              => 'INT',
                'constraint'        => 10,
				'default'           => 0,
				'null'				=> TRUE,
			],
			'stock_product'       => [
                'type'              => 'INT',
                'constraint'        => 4,
				'default'           => 0,
				'null'				=> TRUE,
			],
			'src_image'       => [
                'type'              => 'VARCHAR',
                'constraint'        => 100,
				'null'				=> TRUE,
			],
			'created_at'	=> [
				'type'		=> 'DATETIME',
				
			],
			'updated_at'	=> [
				'type'		=> 'DATETIME',
				
			]
        ]);
        $this->forge->addKey('id_product', TRUE);
        $this->forge->createTable('Master_Product');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('Master_Product');
	}
}
