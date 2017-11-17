<?php


use Phinx\Migration\AbstractMigration;

class TestRecordsMigration extends AbstractMigration
{
    public function up()
    {
		$this->execute("CREATE TABLE test_records (
						  order_id int(11) NOT NULL AUTO_INCREMENT,
						  sku varchar(50) NOT NULL,
						  description varchar(200) DEFAULT NULL,
						  notes text,
						  PRIMARY KEY (order_id)
						) ENGINE=InnoDB DEFAULT CHARSET=utf8;
						");

		for ($i = 1; $i <= 20; $i++)
		{
			$this->execute("INSERT INTO test_records (sku, description) VALUES ('Record_".$i."', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');");
		}
    }

	public function down()
	{
		$this->execute("DROP TABLE test_records;");
	}
}
