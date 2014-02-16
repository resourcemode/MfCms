<?php
namespace Db\Model\Entity;

use DateTime;
use Zend\Form\Annotation;
use ZnZend\Db\AbstractEntity;

/**
 * @Annotation\Name("Post")
 * @Annotation\Type("ZnZend\Form\Form")
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ArraySerializable")
 */
class Post extends AbstractEntity
{
    /**
     * @Annotation\Exclude()
     * @var string
     */
    protected $_singularNoun = 'post';

    /**
     * @Annotation\Exclude()
     * @var string
     */
    protected $_pluralNoun = 'posts';

    /**
     * @Annotation\Exclude()
     * @var array
     */
    protected static $_mapGettersColumns = array(
        'getId' => 'post_id',
        'getName' => 'post_name',
        'isHidden' => '',
        'isDeleted' => 'post_isdeleted'
    );

    /**
     * @Annotation\Exclude()
     */
    protected $post_id = null;

    /**
     * @Annotation\Name("post_name")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"placeholder":"Name", "maxlength":254})
     * @Annotation\Options({"label":"Name"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $post_name = null;

    /**
     * @Annotation\Name("post_isdeleted")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"placeholder":"Deleted"})
     * @Annotation\Options({"label":"Deleted"})
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"Digits"})
     */
    protected $post_isdeleted = 0;

    /**
     * Set id
     *
     * @param null|int $value
     * @return Post
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
     * Set name
     *
     * @param null|string $value
     * @return Post
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
     * Set deleted
     *
     * @param null|int $value
     * @return Post
     */
    public function setDeleted($value)
    {
        return $this->set($value, 'int');
    }

    /**
     * Get deleted
     *
     * @return int
     */
    public function isDeleted()
    {
        return $this->get();
    }
}
