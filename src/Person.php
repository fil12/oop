<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 29.11.18
 * Time: 19:48
 */



class Person
{
    const MAX_POSIBLE_AGE = 50;

    private static $maxAge=0;

    /**
     * @var $usernme
     */
    private $username;

    /**
     * @var $email
     */
    private $email;

    /**
     * @var $age
     */
    private $age;



    public static function getOldest()
    {
        return self::$maxAge;
    }

    /**
     * Person constructor.
     * @param $username
     * @param $email
     * @param $age
     */
    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return \sprintf('%s (%s), age: %s', $this->username, $this->email, $this->age);
    }

    /**
     * @param $username
     */
    public function setUsername($username){
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getUsername(){
        return $this->username;
    }
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
       return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        if ($age > self::MAX_POSIBLE_AGE){
            throw new PersonAgeValidationException('we can`t enter you, you`re old');
            echo "Can`t create persons with this age";
            return ;
        }
        $this->age = $age;

        if($age > self::MAX_POSIBLE_AGE){
            self::$maxAge =$age;
        }
    }



}