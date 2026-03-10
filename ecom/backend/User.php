<?php

namespace Texas\Backend;

/**
 *
 */
class User{
    private $user;
    public function __construct(){
		$this->user = [];
    }
	
	
	/**
	 * @param $id
	 * @return string[]
	 */
	public function get_user($id):array{
        $this->user = [
            'name' => "Bimarsha Ghimire",
            'semester' => 'fifth',
            'email' => 'bimarsh@example.com'
        ];
		
		return $this->user;
    }
	
	public static function get_all(): string
	{
		$users = [
			[
				'name' => "Bimarsha Ghimire",
				'semester' => 'fifth',
				'email' => 'bimarsh@example.com'
			],
			[
				'name' => "Sadikshya Katuwal",
				'semester' => 'fifth',
				'email' => 'sadikshya@example.com'
			]
		];
		
		return json_encode($users);
	}

}
$user = new User();

//$id = 1;
//$a = User::get_all();
//$b = $user->get_user($id);
