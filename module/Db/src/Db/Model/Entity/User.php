<?php
namespace Db\Model\Entity;

use DateTime;
use Zend\Form\Annotation;
use ZnZend\Db\AbstractEntity;

/**
 * @Annotation\Name("User")
 * @Annotation\Type("ZnZend\Form\Form")
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ArraySerializable")
 */
class User extends AbstractEntity
{
    /**
     * @Annotation\Exclude()
     * @var string
     */
    protected $_singularNoun = 'user';

    /**
     * @Annotation\Exclude()
     * @var string
     */
    protected $_pluralNoun = 'users';

    /**
     * @Annotation\Exclude()
     * @var array
     */
    protected static $_mapGettersColumns = array(
        'getId' => 'user_id',
        'getName' => 'display_name',
        'isHidden' => null,
        'isDeleted' => null,
        'getUsername' => 'username',
        'getEmail' => 'email',
        'getPassword' => 'password',
        'getState' => 'state'
    );

    /**
     * @Annotation\Exclude()
     */
    protected $user_id = null;

    /**
     * @Annotation\Name("username")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"placeholder":"Username", "maxlength":255})
     * @Annotation\Options({"label":"Username"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $username = null;

    /**
     * @Annotation\Name("email")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"placeholder":"Email", "maxlength":255})
     * @Annotation\Options({"label":"Email"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $email = null;

    /**
     * @Annotation\Name("display_name")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"placeholder":"Name", "maxlength":50})
     * @Annotation\Options({"label":"Name"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $display_name = null;

    /**
     * @Annotation\Name("password")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"placeholder":"Password", "maxlength":128})
     * @Annotation\Options({"label":"Password"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $password = null;

    /**
     * @Annotation\Name("state")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"placeholder":"State"})
     * @Annotation\Options({"label":"State"})
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"Digits"})
     */
    protected $state = 0;

    /**
     * Set id
     *
     * @param null|int $value
     * @return User
     */
    public function setId($value)
    {
        return $this->set($value, 'int');
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->get();
    }

    /**
     * Set username
     *
     * @param null|string $value
     * @return User
     */
    public function setUsername($value)
    {
        return $this->set($value);
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->get();
    }

    /**
     * Set email
     *
     * @param null|string $value
     * @return User
     */
    public function setEmail($value)
    {
        return $this->set($value);
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->get();
    }

    /**
     * Set name
     *
     * @param null|string $value
     * @return User
     */
    public function setName($value)
    {
        return $this->set($value);
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->get();
    }

    /**
     * Set password
     *
     * @param null|string $value
     * @return User
     */
    public function setPassword($value)
    {
        return $this->set($value);
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->get();
    }

    /**
     * Set state
     *
     * @param null|int $value
     * @return User
     */
    public function setState($value)
    {
        return $this->set($value, 'int');
    }

    /**
     * Get state
     *
     * @return int
     */
    public function getState()
    {
        return $this->get();
    }
}
