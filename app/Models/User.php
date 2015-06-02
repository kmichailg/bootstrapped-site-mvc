<?php
	class User {
		private $userID;
		private $userPassword;

		/* 
		 * @return User's ID as a string.
		 */
		public function getUserID() {
			return $this->userID;
		}

		/* 
		 * @return User's password as a string.
		 */
		public function getUserPassword() {
			return $this->userPassword;
		}

		/* 
		 * @param $userID
		 */
		public function setUserID($userID) {
			$this->userID = $userID;
		}

		/* 
		 * @param $password
		 */
		public function setUserPassword($password) {
			$this->userPassword = $pasword;
		}
		
	}