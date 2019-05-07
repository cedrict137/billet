<?php
require_once 'model/MainModel.php';

/////////////////////
/// MESSAGE MODEL ///
/////////////////////
class MessageModel extends MainModel{

	///////////////////////
	/// SEND A MESSAGE  ///
	///////////////////////
	public function sendOneMessage(){
		global $safePost;

		if (!empty($safePost['user_name']) && !empty($safePost['message']) && !empty($safePost['email'])){
				$values = array(
		    		'user_name' => $safePost['user_name'],
					'message' => $safePost['message'],
					'state' => $safePost['state'],
					'email' => $safePost['email']
				);

			$sqlfuncs = array(
    			'date_creation' => 'NOW()',
			);

	$this->pInsertFunc("INSERT INTO", "message", $values, $sqlfuncs);
				echo '<script>alert("Le message a bien été envoyé.")</script>';
		}
	}

	// SHOW UNREAD MESSAGE ON ADMIN PAGE
	public function getNewMessages(){
		$sql = 'SELECT user_name, message, email, id, state, date_creation FROM message WHERE state = 0 ORDER BY id DESC';
		$data = $this->db->query($sql);
		return $data->fetchAll();
	}

	// SHOW UNREAD MESSAGE ON ADMIN PAGE
	public function getOldMessages(){
		$sql = 'SELECT user_name, message, email, id, state, date_creation FROM message WHERE state = 1 ORDER BY id DESC';
		$data = $this->db->query($sql);
		return $data->fetchAll();
	}

	// DELETE MESSAGE BY ID
	public function deleteOneMessage($id){
		$sql = "DELETE FROM `message` WHERE id=" . $id;
		$data = $this->db->query($sql);
		return $data;
	}

	// REPORT COMMENT BY ID
	public function archiveOneMessage($id){
		global $safePost;
		$sql = "UPDATE `message` SET state= :state WHERE id=" . $id;
		$resultat = $this->db->prepare($sql);
		$resultat->execute(['state' => $safePost['state']]);
	}
}

