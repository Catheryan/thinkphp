<?php 
	namespace Models\Model;
	use Think\Model;
	/**
	* 对应的数据表User
	*/
	class UserModel extends Model
	{
		//protected $tablePrefix ='jike_';
		//protected $tableName ='member';
		/*
		* 表的完整名称，包括表的前缀
		*/
		//protected $trueTableName ='jike_AdminUser';
		protected $fileds = array(
			'id',
			'username',
			'email',
			'age',
			'_pk'=>'id'，
			'_type'=> array(
				'id' =>'int' ,
				'username'=>'varchar',
				'email'=>'varchar',
				'age'=>'int',
			 	)
			);
	}
 ?>