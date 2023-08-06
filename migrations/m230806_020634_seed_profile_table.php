<?php

use yii\db\Migration;

/**
 * Class m230806_020634_seed_profile_table
 */
class m230806_020634_seed_profile_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insertProfile();
    }

    public function insertProfile()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            $this->insert('profile', [
                'name' => $faker->name(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'address' => $faker->address()
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230806_020634_seed_profile_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230806_020634_seed_profile_table cannot be reverted.\n";

        return false;
    }
    */
}
