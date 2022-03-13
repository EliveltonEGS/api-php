<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableUsers extends AbstractMigration {

    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void {
        $table = $this->table("tb_users");
        $table->addColumn("user_id", "string", ["null" => false, "length" => 128])
                ->addColumn("first_name", "string", ["null" => false, "length" => 50])
                ->addColumn("last_name", "string", ["null" => false, "length" => 50])
                ->addColumn("mail", "string", ["null" => false, "length" => 50])
                ->addColumn("pwd", "string", ["null" => false, "length" => 32])
                ->addColumn("confirm_pwd", "string", ["null" => false, "length" => 32])
                ->addColumn("created_at", "timestamp", ["null" => false])      
                ->create();
    }

}
