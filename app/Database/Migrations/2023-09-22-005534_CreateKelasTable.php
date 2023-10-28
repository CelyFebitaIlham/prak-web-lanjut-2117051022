<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKelasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type'  => 'INT',
                'constraint'  => 5,
                'unsigned'  => true, 
                'auto_increment'  => true,
            ],

            
            'nama_kelas' => [
                'type'  => 'VARCHAR',
                'constraint'  => 10, 
            ],

            'created_at' => [
                'type'  => 'DATETIME',
                'null'  => true,
            ],

            'updated_at' => [
                'type'  => 'DATETIME',
                'null'  => true,
            ],

            'deleted_at' => [
                'type'  => 'DATETIME',
                'null'  => true,
            ],

        ]);

        $this->forge->addKey('id', true, true); #kasitau pk nya apa
        $this->forge->createTable('kelas'); #create table #true= jika tabelnya tidak ada
       


    }

    public function down()
    {
        $this->forge->dropTable('kelas', true);
    }
}
