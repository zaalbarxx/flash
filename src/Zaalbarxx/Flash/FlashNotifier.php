<?php

namespace Zaalbarxx\Flash;
class FlashNotifier{
    /**
     * @var Illuminate\Session\SessionManager
     */
    private $session;
    /**
     * @var array
     */
    private $messages = [];
	public function __construct(SessionStore $session){
		$this->session = $session;
	}
	/**
	 * adds flash message to container
	 * @param string $message message content
	 * @param string $type    type[success,danger,warning,info]
	 */
	public function add($message,$type){
		$this->messages[] = ['level' => $type, 'message' => $message];
		$this->session->flash('flashMessages',$this->messages);
	}

	public function __call($name,$args){
		$message = $args[0];
		if(strpos($name,'add')!==false){
			$type = strtolower(substr($name,3));
			switch($type){
				case 'error':
					$this->add($message,'danger');
				break;
				default:
					$this->add($message,$type);
				break;
			}
		}
	}
}