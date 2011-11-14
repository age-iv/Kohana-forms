<?php

return array(

	/*
	 * The Authentication library to use
	 * Make sure that the library supports:
	 * 1) A get_user method that returns FALSE when no user is logged in
	 *	  and a user object that implements Acl_Role_Interface when a user is logged in
	 * 2) A static instance method to instantiate a Authentication object
	 *
	 * array(CLASS_NAME,array $arguments)
	 */
	'lib' => array(
		'class'  => 'A1', // (or AUTH)
		'params' => array('a1')
	),

	'exception' => FALSE,

	/*
	 * The ACL Roles (String IDs are fine, use of ACL_Role_Interface objects also possible)
	 * Use: ROLE => PARENT(S) (make sure parent is defined as role itself before you use it as a parent)
	 */
	'roles' => array
	(
		'user'  => 'guest',
		'admin' => 'user'
	),

	/*
	 * The name of the guest role 
	 * Used when no user is logged in.
	 */
	'guest_role' => 'guest',

	/*
	 * The ACL Resources (String IDs are fine, use of ACL_Resource_Interface objects also possible)
	 * Use: ROLE => PARENT (make sure parent is defined as resource itself before you use it as a parent)
	 */
	'resources' => array
	(
		'welcome' => NULL,
		'auth' => NULL,
		'user' => NULL
	),

	/*
	 * The ACL Rules (Again, string IDs are fine, use of ACL_Role/Resource_Interface objects also possible)
	 * Split in allow rules and deny rules, one sub-array per rule:
	     array( ROLES, RESOURCES, PRIVILEGES, ASSERTION)
	 *
	 * Assertions are defined as follows :
			array(CLASS_NAME,$argument) // (only assertion objects that support (at most) 1 argument are supported
			                            //  if you need to give your assertion object several arguments, use an array)
	 */
	'rules' => array
	(
		'allow' => array
		(

			// guest can read blog
			'guest1' => array(
				'role'      => 'guest',
				'resource'  => 'news',
				'privilege' => 'read'
			),
			
							
			// users can add blogs
			'user1' => array(
				'role'      => 'user',
				'resource'  => 'user',
				'privilege' => array('read','delete')
//				'privilege' => array('edit','delete'),
//				'assertion' => array('Acl_Assert_Argument',array('id'=>'user_id'))
			),
			
			'user2' => array(
				'role'      => 'user',
				'resource'  => 'news',
				'privilege' => 'add'
//				'privilege' => array('edit','delete'),
//				'assertion' => array('Acl_Assert_Argument',array('id'=>'user_id'))
			),
			

			// administrators can delete everything 
			'admin1' => array(
				'role'      => 'admin',
				'resource'  => array('welcome','user','auth','config'),
				'privilege' => 'edit'
			),
			
			'admin2' => array(
				'role'      => 'admin',
				'resource'  => array('register','news'),
				'privilege' => array('edit','delete')
			),
		),

		'deny' => array
		(
			// no deny rules in this example
			'guest1' => array(
				'role'      => 'guest',
				'resource'  => 'user',
				'privilege' => NULL
			),
			
			'user1' => array(
				'role'      => 'user',
				'resource'  => 'register',
				'privilege' => NULL
			),
		)
	)
);