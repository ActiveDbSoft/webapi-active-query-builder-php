<?php 

require_once '../autoload.php';

use \WebApiActiveQueryBuilder\ApiClient;
use \WebApiActiveQueryBuilder\ActiveQueryBuilderApi;
use \WebApiActiveQueryBuilder\Transform;
use \WebApiActiveQueryBuilder\Totals;
use \WebApiActiveQueryBuilder\Sorting;
use \WebApiActiveQueryBuilder\Condition;
use \WebApiActiveQueryBuilder\ConditionGroup;
use \WebApiActiveQueryBuilder\HiddenColumn;
use \WebApiActiveQueryBuilder\Pagination;
use \WebApiActiveQueryBuilder\SqlQuery;

class ApiClientTests extends PHPUnit_Framework_TestCase
{
	private $api;
    private $transform;
    private $guid = "b3207f4f-b1f4-4dc2-979b-7724ed2d0221";
    private $sql = "select customer_id, first_name, last_name, create_date from customer";
	 
    protected function setUp()
    {
    	$this->api = new ActiveQueryBuilderApi();
		
        $this->transform = new Transform();
		$this->transform->setGuid($this->guid);
 		$this->transform->setSql($this->sql);
	}
 
    protected function tearDown()
    {
        $this->api = NULL;
        $this->transform = NULL;
    }
 
	public function testAvg()
	{
		$avg = new Totals();
		$avg->setField('first_name');
		$avg->setAggregate('avg');
		
		$this->transform->setTotals(array($avg));
		$result = $this->api->transformSqlPost($this->transform);
		
		$correct = "Select Avg(q.first_name) as first_nameavg From (Select customer.customer_id customer_id, customer.first_name first_name, customer.last_name last_name, customer.create_date create_date From customer) q";

        $this->assertEquals(strtolower($correct), strtolower($result->getTotals()));
	}
	
	public function testCount()
	{
		$count = new Totals();
		$count->setField('first_name');
		$count->setAggregate('count');
		
		$this->transform->setTotals(array($count));
		$result = $this->api->transformSqlPost($this->transform);
		
		$correct = "Select Count(q.first_name) as first_namecount From (Select customer.customer_id customer_id, customer.first_name first_name, customer.last_name last_name, customer.create_date create_date From customer) q";		
        $this->assertEquals(strtolower($correct), strtolower($result->getTotals()));
	}
	
	public function testMax()
	{
		$max = new Totals();
		$max->setField('first_name');
		$max->setAggregate('max');
		
		$this->transform->setTotals(array($max));
		$result = $this->api->transformSqlPost($this->transform);
		
		$correct = "Select Max(q.first_name) as first_namemax From (Select customer.customer_id customer_id, customer.first_name first_name, customer.last_name last_name, customer.create_date create_date From customer) q";

        $this->assertEquals(strtolower($correct), strtolower($result->getTotals()));
	}
	
	public function testMin()
	{
		$min = new Totals();
		$min->setField('first_name');
		$min->setAggregate('min');
		
		$this->transform->setTotals(array($min));
		$result = $this->api->transformSqlPost($this->transform);
		
		$correct = "Select Min(q.first_name) as first_namemin From (Select customer.customer_id customer_id, customer.first_name first_name, customer.last_name last_name, customer.create_date create_date From customer) q";

        $this->assertEquals(strtolower($correct), strtolower($result->getTotals()));
	}
	
	public function testSum()
	{
		$sum = new Totals();
		$sum->setField('first_name');
		$sum->setAggregate('sum');
		
		$this->transform->setTotals(array($sum));
		$result = $this->api->transformSqlPost($this->transform);
		
		$correct = "Select Sum(q.first_name) as first_namesum From (Select customer.customer_id customer_id, customer.first_name first_name, customer.last_name last_name, customer.create_date create_date From customer) q";

        $this->assertEquals(strtolower($correct), strtolower($result->getTotals()));
	} 
	
	public function testPage()
	{
		$page = new Pagination();
        $page->setSkip(2);
        $page->setTake(3);
		
		$this->transform->setPagination($page);
		$result = $this->api->transformSqlPost($this->transform);
		
		$correct = "select customer.customer_id, customer.first_name, customer.last_name, customer.create_date from customer limit 3 offset 2";

        $this->assertEquals(strtolower($correct), strtolower($result->getSql()));
	}
	
	public function testOrderBy()
	{
		$order = new Sorting();
		$order->setField('customer_id');
		$order->setOrder('asc');
		
		$this->transform->setSortings(array($order));
		$result = $this->api->transformSqlPost($this->transform);
		
		$correct = "Select customer.customer_id, customer.first_name, customer.last_name, customer.create_date From customer order by customer.customer_id";

        $this->assertEquals(strtolower($correct), strtolower($result->getSql()));
	}

	public function testOrderByDesc()
	{
		$order = new Sorting();
		$order->setField('customer_id');
		$order->setOrder('desc');
		
		$this->transform->setSortings(array($order));
		$result = $this->api->transformSqlPost($this->transform);
		
		$correct = "Select customer.customer_id, customer.first_name, customer.last_name, customer.create_date From customer order by customer.customer_id desc";

        $this->assertEquals(strtolower($correct), strtolower($result->getSql()));
	}	
	
	public function testHide()
    {
		$order = new HiddenColumn();
		$order->setField('first_name');
		
		$this->transform->setHiddenColumns(array($order));
		$result = $this->api->transformSqlPost($this->transform);
		
		$correct = "select q.customer_id, q.last_name, q.create_date from (select customer.customer_id customer_id, customer.first_name first_name, customer.last_name last_name, customer.create_date create_date from customer) q";

        $this->assertEquals(strtolower($correct), strtolower($result->getSql()));
	}
	
	public function testFilterContains()
    {
    	$filter = new ConditionGroup();

		$condition = new Condition();
		$condition->setField('first_name');
		$condition->setConditionOperator('Contains');
		$condition->setValues(array('Orlando'));

		$filter->setConditions(array($condition));
		
		$this->transform->setFilter($filter);
		$result = $this->api->transformSqlPost($this->transform);
		
		$correct = "select customer.customer_id, customer.first_name, customer.last_name, customer.create_date from customer where customer.first_name like '%Orlando%'";

        $this->assertEquals(strtolower($correct), strtolower($result->getSql()));
	}

	public function testFilterIsLess()
    {
    	$filter = new ConditionGroup();

		$condition = new Condition();
		$condition->setField('customer_id');
		$condition->setConditionOperator('Less');
		$condition->setValues(array(5));

		$filter->setConditions(array($condition));
		
		$this->transform->setFilter($filter);
		$result = $this->api->transformSqlPost($this->transform);
		
		$correct = "select customer.customer_id, customer.first_name, customer.last_name, customer.create_date from customer where customer.customer_id < 5";

        $this->assertEquals(strtolower($correct), strtolower($result->getSql()));
	}
	
	public function testFilterBetween()
    {
    	$filter = new ConditionGroup();

		$condition = new Condition();
		$condition->setField('customer_id');
		$condition->setConditionOperator('Between');
		$condition->setValues(array(1, 5));
		
		$filter->setConditions(array($condition));

		$this->transform->setFilter($filter);
		$result = $this->api->transformSqlPost($this->transform);
		
		$correct = "select customer.customer_id, customer.first_name, customer.last_name, customer.create_date from customer where customer.customer_id between 1 and 5";

        $this->assertEquals(strtolower($correct), strtolower($result->getSql()));
	}

	public function testConditionGroup()
    {
    	$filter = new ConditionGroup();

    	$conditionGroup = new ConditionGroup();
    	$conditionGroup->setJunctionType('And');

		$condition1 = new Condition();
		$condition1->setField('customer_id');
		$condition1->setConditionOperator('IsNull');
		
		$condition2 = new Condition();
		$condition2->setField('customer_id');
		$condition2->setConditionOperator('IsNotNull');

		$conditionGroup->setConditions(array($condition1, $condition2));

		$filter->setConditionGroups(array($conditionGroup));

		$this->transform->setFilter($filter);
		$result = $this->api->transformSqlPost($this->transform);
		
		$correct = "select customer.customer_id, customer.first_name, customer.last_name, customer.create_date from customer where (customer.customer_id is null) and (customer.customer_id is not null)";

        $this->assertEquals(strtolower($correct), strtolower($result->getSql()));
	}

	public function testIncorrectField() {
		$count = new Totals();
		$count->setField('id1');
		$count->setAggregate('avg');
		
		$this->transform->setHiddenColumns(array($count));
		$result = $this->api->transformSqlPost($this->transform);
		
        $this->assertEquals(strtolower("QueryTransformer does't contain id1"), strtolower($result->getError()));
	}

	public function testGetFields() {
		$query = new SqlQuery();
		$query->setGuid($this->guid);
		$query->setText($this->sql);
		$fields = $this->api->getQueryColumnsPost($query);	

		$this->assertEquals(count($fields), 4);
		$this->assertEquals("customer_id", strtolower($fields[0]->getName()));
		$this->assertEquals("smallint", $fields[0]->getDataType());	
		$this->assertEquals("create_date", strtolower($fields[3]->getName()));
		$this->assertEquals("datetime", $fields[3]->getDataType());		
	}
}
	
?>
