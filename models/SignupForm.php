<?php
     
     namespace app\models;
      
     use Yii;
     use yii\base\Model;
      
     /**
      * Signup form
      */
     class SignupForm extends Model
     {
        const ROLE_GUARDIAN = 1;
        const ROLE_DOCTOR = 0;
      
         public $username;
         public $firstname;
         public $lastname;
         public $phone;
         public $email;
         public $password;
         public $role;
      
         /**
          * @inheritdoc
          */
         public function rules()
         {
             return [
                 ['role', 'default', 'value' => 20],
                 ['role', 'in', 'range' => [self::ROLE_GUARDIAN, self::ROLE_DOCTOR]],
                 ['username', 'trim'],
                 ['username', 'required'],
                 ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
                 ['username', 'string', 'min' => 2, 'max' => 255],
                 ['firstname', 'trim'],
                 ['firstname', 'required'],
                 ['lastname', 'trim'],
                 ['lastname', 'required'],
                 ['phone', 'required'],
                 ['email', 'trim'],
                 ['email', 'required'],
                 ['email', 'email'],
                 ['email', 'string', 'max' => 255],
                 ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
                 ['password', 'required'],
                 ['password', 'string', 'min' => 6],
             ];
         }
      
         /**
          * Signs user up.
          *
          * @return User|null the saved model or null if saving fails
          */
         public function signup()
         {
      
             if (!$this->validate()) {
                 return null;
             }
           
             $user = new User();
             $user->username = $this->username;
             $user->firstname = $this->firstname;
             $user->lastname = $this->lastname;
             $user->phone = $this->phone;
             $user->email = $this->email;
             $user->role = $this->role;
             $user->setPassword($this->password);
             $user->generateAuthKey();
             $user->generatePasswordResetToken();
             return $user->save() ? $user : null;
         }

          /**
     * @param integer $intVal
     * @return null|string
     */
        public static function decodeUserRole($intVal){
            $stringVal = null;
            switch ($intVal) {
                case self::ROLE_GUARDIAN:
                    $stringVal = 'Patient';
                    break;
                case self::ROLE_DOCTOR:
                    $stringVal = 'Doctor';
                    break;
            }
    
            return $stringVal;
        }
      
     }