<?php
namespace Db\Model;

use Zend\Db\Sql\Predicate;
use Zend\Db\Sql\Where;
use ZnZend\Db\AbstractMapper;
use Db\Model\Entity\Post;

class PostTable extends AbstractMapper
{
    protected $table = 'post';
    protected $primaryKey = 'post_id';
    protected $resultSetClass = '\Db\Model\Entity\Post';
    protected $activeRowState = array('post_isdeleted' => 0);
    protected $deletedRowState = array('post_isdeleted' => 1);	
	
    /**
     * Overrides parent method

     * @see ZnZend\Model\AbstractTable getBaseSelect()
     * @return Select
     */
    public function getBaseSelect()
    {
        $select = parent::getBaseSelect();
        $select->join( 
                     'postcat',
                     'postcat.postcat_id = post.post_postcat',
                     array('category' => 'postcat_name'),
                     $select::JOIN_LEFT
                )
                ->order(array('post_id DESC'));
				
        return $select;
    }
    
    /**
     * fetchPublished (will fetch all published data)
     *
     * @return null|paginator object
    */ 
    public function fetchPublished()
    {
        $select = $this->getBaseSelect();
        $select->where(array('post_ispublished' => 1, 'post_isdeleted' => 0));
        return $this->getResultSet($select, true);
    }
	
}
