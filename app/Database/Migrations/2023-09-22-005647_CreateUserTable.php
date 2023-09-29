<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type'  => 'INT',
                'constraint'  => 11,
                'unsigned'  => true, #true, biangan positif
                'auto_increment'  => true,
            ],

            
            'nama' => [
                'type'  => 'VARCHAR',
                'constraint'  => '255', 
            ],

            'npm' => [
                'type'  => 'VARCHAR',
                'constraint'  => '10', 
            ],

            'id_kelas' => [ #menampung foreign key
                'type'  => 'INT',
                'constraint'  => 5,
                'unsigned'  => true, #true, biangan positif
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

        $this->forge->addForeignKey('id_kelas', 'kelas', 'id');
        #mau nambahin FK harus sbelum create teble
        $this->forge->createTable('user'); #create table #true= jika tabelnya tidak ada
    }

    public function down()
    {
        $this->forge->dropTable('user', true);
    }
}
